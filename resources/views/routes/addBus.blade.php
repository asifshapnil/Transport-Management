@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-lg-5" style="width:1000px; margin:0 auto; margin-top:10px;" >
      <div class="">
        <h3>Add Bus on This Route</h3> <hr>
      </div>

        {!! Form::open(['action' => ['RouteController@postBus', $route_id]]) !!}
        {!! Form::Label('busid', 'Add Bus to this Route') !!} <br>
            <select class="form-control" name="busid">
            @foreach($bus as $bus)
            <option value="{{$bus->id}}">{{$bus->bus_num}}</option>
            @endforeach
            </select>
        <br>
        {!! Form::submit('Add Buss', ['class' => 'btn btn-block btn-info']) !!}
        <br> <br>


      {!! Form::close() !!}


  </div>

</div>
@endsection
