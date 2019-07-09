<?php

namespace App\Http\Controllers;

use App\Repositories\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller{

    protected $projects;
    public function __construct(Projects $projects){
        $this->projects = $projects;
    }

    public function showAll(){
    
                $projects =  $this->projects->listAll();
                return $projects;
           
    }
}
