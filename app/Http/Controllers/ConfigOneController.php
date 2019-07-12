<?php

namespace App\Http\Controllers;
use App\Repositories\ConfigOne;
use Illuminate\Http\Request;

class ConfigOneController extends Controller{
    
    protected $configOne;
    public function __construct(ConfigOne $configOne){
        $this->configOne = $configOne;
    }
    public function showAll($id){

        $configOne =  $this->configOne->listAll($id);
        return $configOne;

           
    }
}
