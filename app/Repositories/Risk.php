<?php

namespace App\Repositories;

class Risk extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/integration/risks");
          
    }

}