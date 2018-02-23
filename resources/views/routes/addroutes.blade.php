@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-lg-5" style="width:1000px; margin:0 auto; margin-top:100px;" >
      <div class="">
        <h3>Add Routes</h3> <hr>
      </div>

    {!! Form::open(['action' => 'RouteController@postRoutes']) !!}
      {!! Form::label('route', 'Route') !!}
      {!! Form::text('route', '', ['class' => 'form-control'])!!}
      @if ($errors->has('route'))
        <span class="help-block" style="color:red">{!! $errors->first('route') !!}</span> <br>
      @endif

<br>
     {{-- {!! Form::select('size', [foreach ($buses as $bus) {
       $bus->id => $bus->bus_num
     }]); !!} --}}

     {{-- {!! Form::Label('bus_id', 'Add Bus in this Route') !!} <br>
<select class="form-control" name="bus_id">
  @foreach($buses as $bus)
    <option value="{{$bus->id}}">{{$bus->bus_num}}</option>
  @endforeach
</select> --}}
  <br>
    {!! Form::submit('Add Route', ['class' => 'btn btn-block btn-info']) !!}

    {!! Form::close() !!}

  </div>
</div>


@endsection
