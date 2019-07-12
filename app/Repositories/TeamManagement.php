<?php

namespace App\Repositories;

class TeamManagement extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/resources/teamManagement");
          
    }

}