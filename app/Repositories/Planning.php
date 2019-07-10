<?php

namespace App\Repositories;
use GuzzleHttp\Client;
class Planning{
    protected $client;
    public function __construct(Client $client){
        $this->client =  $client;
    }

    public function listAll($id){
            $response = $this->client->request('GET', "projects/{$id}/integration/planning");
            return json_decode( $response->getBody()->getContents() );
    }
}