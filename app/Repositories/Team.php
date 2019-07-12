<?php

namespace App\Repositories;

class Team extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/resources/teams");
          
    }

}