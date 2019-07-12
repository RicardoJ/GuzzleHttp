<?php

namespace App\Http\Controllers;
use App\Repositories\Change;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
    protected $change;
    public function __construct(Change $change){
        $this->change = $change;
    }
    public function showAll($id){

        $change =  $this->change->listAll($id);
        return $change;

           
    }
}
