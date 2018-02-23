@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-lg-5" style="width:1000px; margin:0 auto; margin-top:130px;" >
      <div class="">
        <h3>Employee Signin </h3> <hr>
      </div>
      @if(Auth::check())
        <div class="alert alert-danger">
          You are already logged in
        </div>
      @else
      {!! Form::open(['action' => 'AuthController@postSignin', 'class' => 'form-group']) !!}
          {!! Form::label('email', 'email') !!}
          {!! Form::email('email', '', ['class' => 'form-control'])!!}

          {!! Form::label('employeeid', 'employee-id') !!}
          {!! Form::text('employeeid', '', ['class' => 'form-control'])!!}


          {!! Form::label('password', 'password') !!}
          {!! Form::text('password', '', ['class' => 'form-control'])!!}

       <br>
          {!! Form::token()!!}
          {!! Form::submit('Sign In', ['class' => 'btn btn-block btn-info'])!!}
      {!! Form::close() !!}
    @endif
    <h6><a href="/signup">not registerd yet ???</a></h6>
    </div>
  </div>

@endsection
