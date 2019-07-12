<?php

namespace App\Repositories;

class Planning extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/integration/planning");
          
    }

}