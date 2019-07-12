<?php

namespace App\Http\Controllers;
use App\Repositories\Acquisition;
use Illuminate\Http\Request;

class AcquisitionController extends Controller
{
    protected $acquisition;
    public function __construct(Acquisition $acquisition){
        $this->acquistion = $acquisition;
    }
    public function showAll($id){

        $acquisition =  $this->acquistion->listAll($id);
        return $acquisition;

           
    }
}
