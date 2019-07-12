<?php

namespace App\Http\Controllers;
use App\Repositories\TeamManagement;
use Illuminate\Http\Request;

class TeamManagementController extends Controller
{
    protected $teamManagement;
    public function __construct(TeamManagement $teamManagement){
        $this->teamManagement = $teamManagement;
    }
    public function showAll($id){

        $teamManagement =  $this->teamManagement->listAll($id);
        return $teamManagement;

           
    }
}
