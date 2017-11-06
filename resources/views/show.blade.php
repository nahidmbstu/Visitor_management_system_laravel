@extends('layouts.app')

@section('content')
   
   <dir> 
   <h3>Guests List</h3>
   {!! link_to('guest/create','Register new Guest',['class'=>'btn btn-primary', 'id'=>'button', 'media'=>'screen']) !!}
   <br/><br/>

    <div>
    <p>Total Number of Guest Today  {{ count($guest) }}</p>
    </div>
    <br/>

   <table class="table table-bordered">
     <tr>
       <th>Guest ID</th><th>Guest Name</th><th>Host Name</th><th>Entry Date and Time</th><th>Address</th><th>Company</th><th>Mobile No:</th><th>Photo</th><th>Note</th><th>Action</th>
     </tr>   
     @foreach($guest as $n)
     <tr>
      <td align="right">{{ $n->id }}</td>
      <td>{{ $n->guest_name }}</td>
      <td>{{ $n->guest_idcard }}</td>
      <td>{{ $n->created_at }}</td>
      <td>{{ $n->guest_drivelic }}</td>
      <td>{{ $n->guest_company }}</td>
      <td>{{ $n->guest_phone }}</td>
      
      <td><img src="{{ $n->photo }}" width="100px" height="75px"></td>
      <td>{{ $n->note }}</td>

      @if ( Auth::user()->name === 'admin' )

       <td>
        {!! link_to('guest/'.$n->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm']) !!}
        <button class="btn btn-danger btn-sm"><a href = 'delete/{{ $n->id }}'>Delete</a>
        </button>
        <button class="btn btn-danger btn-sm"><a href = "{{url('/print')}}">Print</a>
        </button>
       </td>
     
       @else

       <td>
       <button class="btn btn-danger btn-sm">
       <a href = 'print/{{ $n->id }}'>Print</a>
        </button>
       </td>
   
       @endif

     </tr>
   
     @endforeach
   </table>


   </dir>

    <script src="{{ url('js/app.js') }}"></script> 
@stop