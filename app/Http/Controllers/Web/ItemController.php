<?php

namespace Lost\Http\Controllers\Web;

use Illuminate\Http\Request;

use Lost\Http\Requests;
use Lost\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function FoundItem(FormBuilder $formBuilder)
    {
        try {
            $client = new Client(['base_uri' => config('app.REST_API')]);
            $response = $client->request('GET', 'found_item');
            $data = $response->getBody()->getContents();
            $found_items = \GuzzleHttp\json_decode($data);

            $form = $formBuilder->create('Lost\Forms\found_item', [
                'method' => 'post',
                'url' => route('found_item')
            ], ['found_items' => $found_items]);
            return view('login', ['form' => $form]);
        }
        catch(\Exception $e)
        {
            print_r($e->getMessage());die();
        }

    }

}
