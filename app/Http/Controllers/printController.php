<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class printController extends Controller
{
    

    public function index($id)

    {

    	 $data['guest'] = DB::select(' SELECT * FROM guests WHERE id = ?',[$id] );

    	 

    	 return view('print', $data );
    }

}