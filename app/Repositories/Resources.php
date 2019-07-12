<?php

namespace App\Repositories;

class Resources extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/resources/resources");
          
    }

}