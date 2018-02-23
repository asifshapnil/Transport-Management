@extends('layouts.master')

@section('content')
  <div class="pull-left">
    <a href="/admin/requests" class="btn btn-secondary">Go Back</a>
  </div>
  <div class="row">
    <div class="col-lg-5" style="width:1000px; margin:0 auto; margin-top:10px;" >
      <div class="">
        <h3>Check Bills</h3> <hr>
      </div>

    {!! Form::open(['action' => 'BillController@findBill']) !!}
    {!! Form::Label('busid', 'Select Bus') !!} <br>
        <select class="form-control" name="busid">
        @foreach($bus as $bus)
        <option value="{{$bus->id}}">{{$bus->bus_num}}</option>
        @endforeach
        </select>
        @if ($errors->has('busid'))
          <span class="help-block" style="color:red">{!! $errors->first('busid') !!}</span> <br>
        @endif




   <br>
      {!! Form::submit('Find Bill', ['class' => 'btn btn-block btn-info']) !!}
      <br> <br>


    {!! Form::close() !!}

  </div>

</div>
@endsection
