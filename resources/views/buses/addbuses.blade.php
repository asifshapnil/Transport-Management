@extends('layouts.master')

@section('content')
  <div class="pull-left">
    <a href="/admin/requests" class="btn btn-secondary">Go Back</a>
  </div>
  <div class="row">
    <div class="col-lg-5" style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Add Buses</h3> <hr>
      </div>

    {!! Form::open(['action' => 'BusController@postBuses']) !!}
      {!! Form::label('bus_num', 'Bus Number') !!}
      {!! Form::text('bus_num', '', ['class' => 'form-control'])!!}
      @if ($errors->has('bus_num'))
        <span class="help-block" style="color:red">{!! $errors->first('bus_num') !!}</span> <br>
      @endif

<br>
    {!! Form::label('departure', 'Departure Time') !!}
    {!! Form::text('departure','', ['class' => 'form-control'])!!} <br>
    {!! Form::label('totalseat', 'Total Seat') !!}
    {!! Form::text('totalseat','', ['class' => 'form-control'])!!} <br>
    {!! Form::Label('route_id', 'Add Route for this Bus') !!} <br>
        <select class="form-control" name="route_id">
        @foreach($routes as $route)
        <option value="{{$route->id}}">{{$route->route}}</option>
        @endforeach
        </select>
    <br>
      {!! Form::submit('Add Bus', ['class' => 'btn btn-block btn-info']) !!}


    {!! Form::close() !!}

  </div>
</div>
@endsection
