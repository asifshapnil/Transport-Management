@extends('layouts.master')

@section('content')
  <div class="pull-left">
    <a href="/admin/requests" class="btn btn-secondary">Go Back</a>
  </div>
  <div class="card">
  <div class="card-header bg-secondary ">
      <h3>List of all Buses</h3>
  </div>
</div>
  <table class="table table-striped table-hover">
      <tbody>
  @foreach ($buses as $bus)
            <tr>
              <td> <a href="/singlebus/{{$bus->bus_num}}"> <p>{{$bus->bus_num}}</p> </a></td>
              <td>  <a href="/editbus/{{$bus->id}}">Update</a> </td>
            </tr>
  @endforeach
        </tbody>
    </table>

@endsection
