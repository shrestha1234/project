<?php

namespace Lost\Http\Controllers\Web;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Lost\Http\Requests;
use Lost\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Lost\User;

class LoginController extends Controller
{

    public function Login(FormBuilder $formBuilder,Request $request)
    {
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $form = $formBuilder->create('Lost\Forms\LoginForm', [
            'method' => 'post',
            'url' => route('login')
        ]);
        if ($request->getMethod() == 'POST') {
            //print_r($request);die();
            $response = $client->request('POST', 'login',
                [
                    'form_params' => [
                        'email' => $request->email,
                        'password' => $request->password,

                    ]
                ]);
            $userApi=\GuzzleHttp\json_decode($response->getBody()->getContents())->user;
            //print_r($userApi);die();
            $user=new User();
            $user->id=$userApi->id;
            $user->username=$userApi->username;
            $user->password=$userApi->password;
            $user->user_typeid=$userApi->user_typeid;
            Auth::login($user);
            /*print_r(Auth::user());die();*/
            //   return redirect()->route('manager.dash');
            return $this->UserCheck();

        // print_r($response->getBody()->getContents());die();
        }
        /*$client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET', 'found_item');
        $data = $response->getBody()->getContents();
        $found_items = \GuzzleHttp\json_decode($data);*/

        /*return view('login', ['form' => $form,'foundItems'=>$found_items]);//home view return garxa*/


        $response1 = $client->request('GET', 'lost_item');
        $data1 = $response1->getBody()->getContents();
        $lost_items = \GuzzleHttp\json_decode($data1);

        return view('login', compact('lost_items','form'));
    }


    /**
     * @param FormBuilder $formBuilder
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Register(FormBuilder $formBuilder, Request $request)
    {
        try {
            $client = new Client(['base_uri' => config('app.REST_API')]);
            $response = $client->request('GET', 'country');/*country apiroute ma janxa*/  //$response ma database bata data ayoo
            $data = $response->getBody()->getContents();
            $countries = \GuzzleHttp\json_decode($data);   /*$countries in array country data*/


            $response = $client->request('GET', 'state');
            $data = $response->getBody()->getContents();
            $states = \GuzzleHttp\json_decode($data);

            $response = $client->request('GET', 'zone');
            $data = $response->getBody()->getContents();
            $zones = \GuzzleHttp\json_decode($data);

            $response = $client->request('GET', 'district');
            $data = $response->getBody()->getContents();
            $districts = \GuzzleHttp\json_decode($data);

            $form = $formBuilder->create('Lost\Forms\RegisterForm', [
                'method' => 'post',
                'url' => route('register')
            ], ['countries' => $countries, 'states' => $states, 'zones' => $zones, 'districts' => $districts]);
            //print_r($request->getMethod());die();
            if ($request->getMethod() == 'POST') {
                //print_r($request);die();
                $client->request('POST', 'register',
                    [
                        'form_params' => [
                            'first_name' => $request->First_Name,
                            'last_name' => $request->Last_Name,
                            'email' => $request->Email,
                            'password' => $request->Password,
                            'phone_no' => $request->Phone_No,
                            'locality' => $request->Locality,
                            'user_typeid' => $request->User_Type,
                            'country' => $request->Country,
                            'state' => $request->State,
                            'zone' => $request->Zone,
                            'district' => $request->District,

                        ]
                    ]);
                return redirect('/')->with('status','User Successfully Created!');
            }
            return view('register', ['form' => $form]);
        }
        catch(\Exception $e)
        {
            print_r($e->getMessage());die();
        }

    }

    public function SearchLost(FormBuilder $formBuilder, Request $request)
    {
        $searchlost=null;

            $client = new Client(['base_uri' => config('app.REST_API')]);

        $response = $client->request('GET', 'item_type');
            /*print_r();die();*/
        $data = $response->getBody()->getContents();
        $itemtypes = \GuzzleHttp\json_decode($data);
      //  print_r($itemtypes);die();
        $form = $formBuilder->create('Lost\Forms\searchlost', [
            'method' => 'post',
            'url' => route('searchlost')
        ],['itemtypes' => $itemtypes]);

        if ($request->getMethod() == 'POST')
        {

            $response1=$client->request('POST', 'searchlost',
                [
                    'form_params' => [
                        'keyword' => $request->Keyword,
                        'category' => $request->Category,

                    ]
                ]);
            $data1 = $response1->getBody()->getContents();
            $searchlost = \GuzzleHttp\json_decode($data1);

        }

    return view('searchlost', ['form' => $form,'searchlost'=>$searchlost]);

    }

    public function SearchFound(FormBuilder $formBuilder,Request $request)
    {
        $searchfound =null;
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET', 'item_type');
        /*print_r();die();*/
        $data = $response->getBody()->getContents();
        $itemtypes = \GuzzleHttp\json_decode($data);
        $form = $formBuilder->create('Lost\Forms\searchfound', [
            'method' => 'post',
            'url' => route('searchfound')
        ],['itemtypes' => $itemtypes]);
        if ($request->getMethod() == 'POST')
        {

            $response1=$client->request('POST', 'searchfound',
                [
                    'form_params' => [
                        'keyword' => $request->Keyword,
                        'category' => $request->Category,
                    ]
                ]);
            $data1 = $response1->getBody()->getContents();
            $searchfound = \GuzzleHttp\json_decode($data1);
        }
        return view('searchfound', ['form' => $form,'searchfound'=>$searchfound]);
    }

    public function ReportLost(FormBuilder $formBuilder,Request $request)
    {
        //try {
        $client = new Client(['base_uri' => config('app.REST_API')]);

        $response = $client->request('GET', 'item_type');//api bata tanyo

        $data = $response->getBody()->getContents();//json object ko content leko
        /*print_r($data);die();*/
        $itemtypes = \GuzzleHttp\json_decode($data);//bujne language ma decode gareko
        /* print_r($itemtypes);die();*/
        $form = $formBuilder->create('Lost\Forms\lostitem', [
            'method' => 'post',
            'url' => route('lostitem'),
            'files' => 'true'
        ], ['itemtypes' => $itemtypes]);
        /*print_r($request->Date);die();*/
        if ($request->getMethod() == 'POST') {
            try {
                $pathToFile=public_path('/image');
                $image='null';
                $uploadfile=$pathToFile.basename($_FILES['Image']['name']);

                $image = time().'.'.$request->Image->getClientOriginalExtension();
                $request->Image->move($pathToFile,$image);

                $userid = Auth::user()->id;//login garne ko userid pathauxa

                $data=$client->request('POST', 'lostitem',
                    [
                        'form_params' => [
                            'description' => $request->Description,
                            'itemtypeid' => $request->Category,
                            'date' => $request->Date,
                            'userid' => $userid,
                            'title' => $request->Title,
                            'model' => $request->Model,
                            'address' => $request->Address,
                            'sl' => $request->Specific_Location,
                            'place' => $request->lost_place,
                            'image' => $image
                        ]
                    ]);

            } catch (\Exception $e) {
                print_r($e->getMessage());
                die();
            }
            return redirect('/dashboard')->with('status','Lost item successfully posted');
        }
        return view('lostitem', ['form' => $form]);
    }

    public function ReportFound(FormBuilder $formBuilder,Request $request)
    {

            $client = new Client(['base_uri' => config('app.REST_API')]);

            $response = $client->request('GET', 'item_type');//api bata tanyo

            $data = $response->getBody()->getContents();//json object ko content leko
            /*print_r($data);die();*/
            $itemtypes = \GuzzleHttp\json_decode($data);//bujne language ma decode gareko
            /* print_r($itemtypes);die();*/
            $form = $formBuilder->create('Lost\Forms\founditem', [
                'method' => 'post',
                'url' => route('founditem')
            ], ['itemtypes' => $itemtypes]);
            /*print_r($request->Date);die();*/
            if ($request->getMethod() == 'POST') {
                //print_r($request);die();
                try {
                    $pathToFile=public_path('/image');
                    $image='null';
                    $uploadfile=$pathToFile.basename($_FILES['Image']['name']);

                    $image = time().'.'.$request->Image->getClientOriginalExtension();
                    $request->Image->move($pathToFile,$image);

                    $userid = Auth::user()->id;//login garne ko userid pathauxa

                    $data=$client->request('POST', 'founditem',

                    [
                        'form_params' => [
                            'description' => $request->Description,
                            'image' => $image,
                            'item_type_id' => $request->Category,
                            'date' => $request->Date,
                            'userid' => $userid,
                            'title' => $request->Title,
                            'model' => $request->Model,
                            'address' => $request->Address,
                            'sl' => $request->Specific_Location,
                            'place' => $request->found_place,
                        ]
                    ]);
                } catch (\Exception $e) {
                    print_r($e->getMessage());
                    die();
                }
                return redirect('/dashboard')->with('status','found item successfully posted');
            }
        return view('founditem', ['form' => $form]);
    }

    public function Contact (FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('Lost\Forms\contactform', [
            'method' => 'post',
            'url' => route('contact')
        ]);
        return view('contact', ['form' => $form]);
    }
    public function Message(FormBuilder $formBuilder)
    {
        $loginform = $formBuilder->create('Lost\Forms\LoginForm', [
            'method' => 'post',
            'url' => route('login')
        ]);
        $form = $formBuilder->create('Lost\Forms\contactform', [
            'method' => 'post',
            'url' => route('message')
        ]);
        return view('message', ['form' => $form,'loginform'=>$loginform]);

    }
    public function alllost()
    {

        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response1 = $client->request('GET', 'alllost');
        $data1 = $response1->getBody()->getContents();
        $lostpost1 = \GuzzleHttp\json_decode($data1);

        return view('alllostposts', compact('lostpost1','form'));

    }
    public function allfound()
    {

        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response1 = $client->request('GET', 'allfound');
        $data1 = $response1->getBody()->getContents();
        $foundpost1 = \GuzzleHttp\json_decode($data1);

        return view('allfoundposts', compact('foundpost1','form'));

    }

    public function lostdetailview(Request $request)
    {

        $item_id = $request->id;
        /*print_r($item_id);die();*/
        $client = new Client(['base_uri' => config('app.REST_API')]);
        if ($request->getMethod() == 'GET') {
//            print_r("if contdition vitra");die();
            $response1 = $client->request('GET', 'lostdetailview/'.$item_id);
            $data1 = $response1->getBody()->getContents();
            $lostdetail = \GuzzleHttp\json_decode($data1);
            return view('lostdetail', compact('lostdetail'));


        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function founddetailview(Request $request)
    {

        $item_id = $request->id;
        $client = new Client(['base_uri' => config('app.REST_API')]);
        if ($request->getMethod() == 'GET') {
            $response1 = $client->request('GET', 'founddetailview/'.$item_id);
            $data1 = $response1->getBody()->getContents();
            $founddetail = \GuzzleHttp\json_decode($data1);
            return view('founddetail', compact('founddetail'));


        }
    }


    private function UserCheck()
    {
        if(Auth::check())
        {

            $user=Auth::user();
            if($user->user_typeid==1)
            {
                return redirect()->route('dashboard');
            }
        }
    }
}

