<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Guest;
use DB;





class GuestController extends Controller
{
    
     use AuthenticatesUsers;

    protected $redirectTo = '/';


    public function __construct()
        
        {
            $this->middleware('auth');
        }


    public function index()
    {

         

         $data['guest'] = DB::select(' SELECT * FROM guests WHERE DATE(created_at) = DATE(NOW()) ');

        // $data ['guest'] = Guest::all();
        return view('show',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();

        // $request->file('photo')->store('images');

        Guest::create($data);
        
        return redirect( 'guest');
    
     }
 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data['guest'] = Guest::find($id);
        return view('edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $guest = Guest::find($id);
        $guest->update($data);
        return redirect('guest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        DB::delete('delete from guests where id = ?',[$id]);
        return redirect('guest');
    }

    public function check()
    {

             if (Auth::guest()) {

                return redirect('/guest');
                 
             } else {

                 return redirect('/login');
                 
             }
             

    }
}
