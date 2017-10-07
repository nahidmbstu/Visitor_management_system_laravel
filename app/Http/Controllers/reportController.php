<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Guest;
use DB;


class reportController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';


    public function __construct()
        {
            $this->middleware('auth');
        }


    public function index()
   
    {

        return view('report');
    }

    public function showResult(Request $request)
    { 

    	  $start_date = $request->input('start');
          

    	$data['guest'] = DB::select(' SELECT * FROM guests WHERE DATE(created_at)= ? ', [$start_date]);

        return view('result', $data );
    }

}
