<?php

namespace App\Http\Controllers;
use App\Repositories\TeamMembers;
use Illuminate\Http\Request;

class TeamMembersController extends Controller
{
    protected $teamMembers;
    public function __construct(TeamMembers $teamMembers){
        $this->teamMembers = $teamMembers;
    }
    public function showAll($id){

        $teamMembers =  $this->teamMembers->listAll($id);
        return $teamMembers;

           
    }
}
