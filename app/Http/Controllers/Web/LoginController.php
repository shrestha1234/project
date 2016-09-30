<?php

namespace Lost\Http\Controllers\Web;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

use Lost\Http\Requests;
use Lost\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;

class LoginController extends Controller
{

    public function Login(FormBuilder $formBuilder,Request $request)
    {
        $form = $formBuilder->create('Lost\Forms\LoginForm', [
            'method' => 'post',
            'url' => route('login')
        ]);
        return view('login', ['form' => $form]);
    }

    public function Register(FormBuilder $formBuilder,Request $request)
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
                            'phone_no' => $request->Phone_No,
                            'locality' => $request->Locality,
                            'user_typeid' => $request->User_Type,
                            'country' => $request->Country,
                            'state' => $request->State,
                            'zone' => $request->Zone,
                            'district' => $request->District,

                        ]
                    ]);
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
}

