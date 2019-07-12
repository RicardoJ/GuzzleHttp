<?php

namespace App\Http\Controllers;
use App\Repositories\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    protected $team;
    public function __construct(Team $team){
        $this->team = $team;
    }
    public function showAll($id){

        $team =  $this->team->listAll($id);
        return $team;

           
    }
}
