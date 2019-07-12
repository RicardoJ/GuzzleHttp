<?php

namespace App\Http\Controllers;
use App\Repositories\LearnedLessons;

use Illuminate\Http\Request;

class LearnedLessonsController extends Controller
{
    protected $learnedLessons;
    public function __construct(LearnedLessons $learnedLessons){
        $this->learnedLessons = $learnedLessons;
    }
    public function showAll($id){

        $learnedLessons =  $this->learnedLessons->listAll($id);
        return $learnedLessons;

           
    }
}
