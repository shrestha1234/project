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
        return view('login', ['form' => $form]);
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
            $response = $client->request('GET', 'country');
            $data = $response->getBody()->getContents();
            $countries = \GuzzleHttp\json_decode($data);


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

    public function Search(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('Lost\Forms\searchlost', [
            'method' => 'post',
            'url' => route('searchlost')
        ]);
        return view('searchlost', ['form' => $form]);


    }

    public function Lost(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('Lost\Forms\searchfound', [
            'method' => 'post',
            'url' => route('searchfound')
        ]);
        return view('searchfound', ['form' => $form]);
    }
    public function ReportLost(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('Lost\Forms\lostitem', [
            'method' => 'post',
            'url' => route('lostitem')
        ]);
        return view('lostitem', ['form' => $form]);
    }
    public function  ReportFound(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('Lost\Forms\founditem', [
            'method' => 'post',
            'url' => route('founditem')
        ]);
        return view('founditem', ['form' => $form]);
    }
    public function  Information(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('Lost\Forms\information', [
            'method' => 'post',
            'url' => route('information')
        ]);
        return view('information', ['form' => $form]);

    }
    public function Contact (FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('Lost\Forms\contactform', [
            'method' => 'post',
            'url' => route('contact')
        ]);
        return view('contact', ['form' => $form]);
    }
    public function DashBoard (FormBuilder $formBuilder)
    {
        $form = $formBuilder->create('Lost\Forms\dashboard', [
            'method' => 'post',
            'url' => route('dashboard')
        ]);
        return view('dashboard', ['form' => $form]);
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

