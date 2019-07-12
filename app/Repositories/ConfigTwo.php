<?php

namespace App\Repositories;

class ConfigTwo extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/integration/configTwo");
          
    }

}