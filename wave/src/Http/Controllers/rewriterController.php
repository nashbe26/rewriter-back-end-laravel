<?php

namespace Wave\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RewriterController extends Controller{
       
    public function rewriter(Request $data){

        $client = new \GuzzleHttp\Client();
        $data   = [
            "tool"=>"rewriter",
                "language"=>$data->lang,
                "tone"=>$data->mode,
                "creativity"=>0.8,
                "output_no"=>1,
                "text"=> $data->text
          ];

    	$response = $client->request('POST', 'https://tinq.ai/api/v2/assistant', [
            'body' => json_encode($data),

            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Bearer 39|FjxoBy6M3Qc9VMzdtIUAGPOSeXqK87Fd3BAMvUBn',
                'content-type' => 'application/json',
              ],
          ]);
          
          return $response->getBody()->getContents();

    }

}



