<?php
namespace Lost;
use GuzzleHttp\Client;

class found{
    public static function getFoundData(){
        $client = new Client(['base_uri' => config('app.REST_API')]);
        $response = $client->request('GET', 'found_item');
        $data = $response->getBody()->getContents();
        $found_items = \GuzzleHttp\json_decode($data);
        return $found_items;
    }
}