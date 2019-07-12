<?php

namespace App\Http\Controllers;
use App\Repositories\Activities;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    protected $activities;
    public function __construct(Activities $activities){
        $this->activities = $activities;
    }
    public function showAll($id){

        $activities =  $this->activities->listAll($id);
        return $activities;

           
    }
}
