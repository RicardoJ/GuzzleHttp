<?php

namespace App\Repositories;

class LearnedLessons extends GuzzleHttpRequest{

    public function listAll($id){
        return $this->get("projects/{$id}/integration/learnedLessons");
          
    }

}