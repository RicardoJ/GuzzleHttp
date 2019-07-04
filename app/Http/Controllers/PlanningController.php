<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PlanningController extends Controller
{
    public function index(){
    
            $client = new Client([
                
                'base_uri' => 'http://localhost:5001/api/v1/',
               
                'timeout'  => 2.0,
            ]);
            //$response = $client->request('GET', 'projects/5cfde3043c012622d294c4a6/integration/planning');
         
                $response = $client->request('GET', "projects/{$id}/integration/planning");
            
                return json_decode( $response->getBody()->getContents() );
           
    }
}
