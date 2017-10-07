@extends('template')
@section('content')
   <h3>Guests List</h3>
   {!! link_to('guest/create','Register new Guest',['class'=>'btn btn-primary']) !!}
   <br/><br/>
   <table class="table table-bordered">
     <tr>
       <th>Guest ID</th><th>Name</th><th>ID Card</th><th>Passport</th><th>Drive License</th><th>Company</th><th>Telephone</th><th>Guest Type</th><th>Action</th>
     </tr>   
     @foreach($guest as $n)
     <tr>
     	<td align="right">{{ $n->id }}</td>
     	<td>{{ $n->guest_name }}</td>
     	<td>{{ $n->guest_idcard }}</td>
     	<td>{{ $n->guest_passport }}</td>
     	<td>{{ $n->guest_drivelic }}</td>
     	<td>{{ $n->guest_company }}</td>
     	<td>{{ $n->guest_phone }}</td>
     	<td>{{ $n->guest_type }}</td>
     	<td>
     		{!! link_to('guest/'.$n->id.'/edit','Edit',['class'=>'btn btn-warning btn-sm']) !!}
     		{!! link_to('guest/'.$n->id,'Delete',['class'=>'btn btn-danger btn-sm']) !!}
     	</td>
     </tr>
     @endforeach
   </table>
@stop