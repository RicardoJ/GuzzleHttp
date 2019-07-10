<?php

namespace App\Repositories;
use GuzzleHttp\Client;
class Projects{

protected $client;
public function __construct(Client $client ){
    $this->client =  $client;
}
     public function listAll(){
            $response = $this->client->request('GET', 'projects');
            return json_decode( $response->getBody()->getContents() );
     }
    
}