<?php

namespace App\Http\Controllers;
use App\Repositories\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    protected $provider;
    public function __construct(Provider $provider){
        $this->provider = $provider;
    }
    public function showAll($id){

        $provider =  $this->provider->listAll($id);
        return $provider;

           
    }
}
