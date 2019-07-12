<?php

namespace App\Repositories;

class Change extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/integration/changes");
          
    }


}