@extends('layouts.app')

@section('content')


<dir> 

    <p>search result</p> 
    <div>
    <p> {{ count($guest) }} guest found</p>
    </div>
    <br/>
    

   <table class="table table-bordered">
     <tr>
       <th>Guest ID</th><th>Guest Name</th><th>Host Name</th><th>Entry Date and Time</th><th>Address</th><th>Company</th><th>Mobile No:</th><th>Photo</th><th>Note</th><!-- <th>Action</th> -->
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
      
      <!-- <td>
        {!! link_to('guest/'.$n->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm']) !!}
        <button class="btn btn-danger btn-sm"><a href = 'delete/{{ $n->id }}'>Delete</a>
        </button>
        </td>
      </td>
 -->

     </tr>
     <tr>
       
     </tr>
     @endforeach
   </table>

<input type="submit" name="print" onclick="myFunction()" value="Print" id="button">

<script type="text/javascript">

function myFunction()

{

  window.print();
} 

</script>
  
   </dir>
   <!-- <form action="{{url('report/result/pdf')}}" method="GET">
   {!! csrf_field() !!}

  
   <input type="submit" name="submit" value="Download PDF">
     
   </form> -->
   

    <script src="{{ asset('js/app.js') }}"></script> 


@stop