@extends('layouts.master')

@section('content')
  <div class="pull-left">
    <a href="/admin/requests" class="btn btn-secondary">Go Back</a>
  </div>
  <div class="card" style="width:500px; margin:0 auto;">

    <div class="car-header bg-secondary" >
      <h3 style="padding:10px;">{{$bus->bus_num}}</h3>
    </div>

    <div class="card-body ">

      <table class="table">
        <tbody>
          <tr>
            <th>Bus Number</th> <td>{{$bus->bus_num}}</td>
          </tr>
          <tr>
            <th>Route</th> <td>{{$bus->route_id}}</td>
          </tr><tr>
            <th>Departure</th> <td>{{$bus->departure}}</td>
          </tr>
          <tr>
            <th>Total seat</th> <td>{{$bus->totalseat}}</td>
          </tr>
          <tr>
            <th>Free seat</th> <td>  {{$bus->totalseat - $totalseat}}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      @if(Auth::check())
      <a href="/editbus/{{$bus->id}}" class="btn btn-md btn-secondary">Edit</a>
      <a href="/deletebus/{{$bus->id}}" class="btn btn-md btn-secondary">Delete</a>
    @endif
    </div>
  </div>

@endsection
