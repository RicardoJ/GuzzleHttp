<?php

namespace App\Http\Controllers;
use App\Repositories\ConfigTwo;

use Illuminate\Http\Request;

class ConfigTwoController extends Controller
{
    
    protected $configTwo;
    public function __construct(ConfigTwo $configTwo){
        $this->configTwo = $configTwo;
    }
    public function showAll($id){

        $configTwo =  $this->configTwo->listAll($id);
        return $configTwo;

           
    }
}
