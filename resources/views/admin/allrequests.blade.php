@extends('layouts.master')

@section('content')
  <div class="card">
  <div class="card-header bg-secondary ">
      <h3>List of all Requests</h3>
  </div>
</div>
<br>
<a href="/see/accepts" class="btn btn-secondary pull-right">Accepted list</a>
<a href="/addroutes" class="btn btn-secondary pull-right">Add new route</a>
<a href="/addbuses" class="btn btn-secondary pull-right">Add new bus</a>
<a href="/addbuses/success" class="btn btn-secondary pull-right">All buses</a>
<a href="/routes/success" class="btn btn-secondary pull-right">All routes</a>

<a href="/addBill" class="btn btn-secondary pull-right">Update Cost</a>
<a href="/checkBill" class="btn btn-secondary pull-right">Check Cost</a> <br>

<br>

<br>
<br>

<br>
<br>
  <table class="table table-striped table-hover">
    <thead>
      <th>Bus_num</th> <th>User's who requested</th>
    </thead>
      <tbody>


  @foreach ($requests as $request)
          <tr style="width=300px;">
              {{-- <td>  <p>{{$route->route}}</p> </td> --}}
              <td><a href="/singlebus/{{$request->bus_num}}">{{$request->bus_num}} </a> </td>
              <td>{{$request->username}} </td>

              <td><a href="/accepts/user/{{$request->user_id}}/{{$request->username}}/{{$request->bus_id}}/{{$request->bus_num}}">accept</a> </td>
              <td><a href="/delete/request/user/{{$request->username}}/{{$request->bus_num}}">delete request</a> </td>

         </tr>
  @endforeach
  </table>
@endsection
