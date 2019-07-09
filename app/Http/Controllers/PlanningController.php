<?php

namespace App\Http\Controllers;
use App\Repositories\Planning;

use Illuminate\Http\Request;

class PlanningController extends Controller{

    protected $planning;
    public function __construct(Planning $planning){
        $this->planning = $planning;
    }
    public function showAll($id){

        $planning =  $this->planning->listAll($id);
        return $planning;

           
    }
}
