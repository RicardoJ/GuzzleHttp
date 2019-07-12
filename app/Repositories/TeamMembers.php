<?php

namespace App\Repositories;

class TeamMembers extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/resources/teamMembers");
          
    }

}