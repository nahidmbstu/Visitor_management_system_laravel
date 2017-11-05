@extends('layouts.app')

@section('content')

<!--  <script src="{{ asset('js/app.js') }}"></script> -->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <a class="btn btn-lg btn-danger" 
           href="{{ url('create') }}"

                      role="button">Register Visitor</a>
                      <a class="btn btn-lg btn-success" href="{{ url('guest') }}"

                       role="button">
                      See all guest
                      </a>

                       
        </div>

     


    </div>
</div>





 <script src="{{ asset('public/js/app.js') }}"></script>


@endsection
