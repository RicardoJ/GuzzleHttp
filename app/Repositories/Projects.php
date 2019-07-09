<?php

namespace App\Repositories;
use GuzzleHttp\Client;
class Projects{
     public function listAll(){

        $client = new Client([
                
            'base_uri' => 'http://localhost:5001/api/v1/',
         
            'timeout'  => 2.0,
        ]);
            $response = $client->request('GET', 'projects');
        
            return json_decode( $response->getBody()->getContents() );
     }
    
}