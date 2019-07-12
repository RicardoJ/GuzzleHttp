<?php

namespace App\Repositories;

class Provider extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/acquisitions/providers");
          
    }

}