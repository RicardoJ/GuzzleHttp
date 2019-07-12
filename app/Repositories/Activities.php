<?php

namespace App\Repositories;

class Activities extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/resources/activities");
          
    }

}