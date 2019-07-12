<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Risk;
class RiskController extends Controller{
    protected $risk;
    public function __construct(Risk $risk){
        $this->risk = $risk;
    }
    public function showAll($id){

        $risk =  $this->risk->listAll($id);
        return $risk;

           
    }
}
