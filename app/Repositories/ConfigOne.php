<?php

namespace App\Repositories;

class ConfigOne extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/integration/configOne");
          
    }

}