<?php

namespace Wave\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RewriterController extends Controller{
       
    public function rewriter(Request $data){

        $client = new \GuzzleHttp\Client();


    	$response = $client->request('POST', 'https://tinq.ai/api/v1/rewrite', [
            'form_params' => [
              'text' => $data->text,
              'mode' => $data->mode,
              'lang' => $data->lang
            ],
            'headers' => [
              'accept' => 'application/json',
              'authorization' => 'Bearer key-d73c6023-08c3-4b7f-9e2b-d0b733e95af4-6387a5e53d1cb',
              'content-type' => 'application/x-www-form-urlencoded',
            ],
          ]);
          
          return $response->getBody()->getContents();

    }

}



