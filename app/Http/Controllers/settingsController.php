<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class settingsController extends Controller
{
    //

    public function index()

    {
        

        if ( Auth::user()->name === 'admin' )

         return view('setting');

        else  

         return '<h3>Users does not have settings</h3>';


    }
}
