<?php

namespace App\Repositories;

class Acquisition extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/acquisitions/acquisitions");
          
    }

}