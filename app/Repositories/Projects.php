<?php

namespace App\Repositories;

class Projects extends GuzzleHttpRequest{

     public function listAll(){
         return $this->get('projects');
   
     }

}