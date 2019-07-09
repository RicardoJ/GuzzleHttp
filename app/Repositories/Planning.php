<?php

namespace App\Repositories;
use GuzzleHttp\Client;
class Planning{
    public function listAll($id){
        $client = new Client([
                
            'base_uri' => 'http://localhost:5001/api/v1/',
           
            'timeout'  => 2.0,
        ]);
            $response = $client->request('GET', "projects/{$id}/integration/planning");
        
            return json_decode( $response->getBody()->getContents() );
    }
}