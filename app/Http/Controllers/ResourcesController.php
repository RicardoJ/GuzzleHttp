<?php

namespace App\Http\Controllers;
use App\Repositories\Resources;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    protected $resources;
    public function __construct(Resources $resources){
        $this->resources = $resources;
    }
    public function showAll($id){

        $resources =  $this->resources->listAll($id);
        return $resources;

           
    }
}
