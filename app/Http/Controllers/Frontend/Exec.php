<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Exec extends Controller
{
   
    public function __construct()
    {
        //$this->middleware('auth');
    }
 
    public function index()
    {
        $whoami =  exec('whoami');
        dd($whoami);

        $sshkey_commd = 'ssh-keygen -t rsa -b 2048 -C "[email protected]"';
    }
}