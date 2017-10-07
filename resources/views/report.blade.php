@extends('layouts.app')

@section('content')

<dir>
<p>Select the date you want to show the guest list</p>
<form class="form-group" method="POST" action="{{url('report/result')}}">
    {!! csrf_field() !!}
    <div class="col-md-3"> 
    <label for="email" class="col-md-4 control-label">Select Date</label> 
	<input type="date" name="start" class="form-control">
	</div>
	<!-- <div class="col-md-6">
	<label for="email" class="col-md-4 control-label">End Date</label>
	<input type="date" name="end" class="form-control">
	</div> -->
	<br/><br/>
	<div class="col-md-3" style="padding-top: 5px;">
	<input type="submit" name="submit" value="search">
	</div>
</form>

<script src="{{ asset('js/app.js') }}"></script> 
</dir>
@stop