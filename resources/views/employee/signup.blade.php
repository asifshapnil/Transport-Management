@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-lg-5" style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Get Signedup here</h3> <hr>
      </div>

    {!! Form::open(['action' => 'AuthController@postSignup']) !!}
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email', '', ['class' => 'form-control'])!!}
      @if ($errors->has('email'))
        <span class="help-block" style="color:red">{!! $errors->first('email') !!}</span> <br>
      @endif
      {!! Form::label('employee_id', 'Employee ID') !!}
      {!! Form::text('employee_id', '', ['class' => 'form-control'])!!}
      @if ($errors->has('employee_id'))
        <span class="help-block" style="color:red">{!! $errors->first('employee_id') !!}</span> <br>
      @endif
      {!! Form::label('username', 'Username') !!}
      {!! Form::text('username', '', ['class' => 'form-control'])!!}
      @if ($errors->has('username'))
        <span class="help-block" style="color:red">{!! $errors->first('username') !!}</span> <br>
      @endif
      {!! Form::label('password', 'Password') !!}
      {!! Form::text('password', '', ['class' => 'form-control'])!!}
      @if ($errors->has('password'))
        <span class="help-block" style="color:red">{!! $errors->first('password') !!}</span> <br>
      @endif <br>

      {!! Form::token()!!}
      {!! Form::submit('Sign Up', ['class' => 'btn btn-block btn-info']) !!}


    {!! Form::close() !!}

  </div>
</div>
@endsection
