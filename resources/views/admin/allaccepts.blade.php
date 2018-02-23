@extends('layouts.master')

@section('content')
  <div class="pull-left">
    <a href="/admin/requests" class="btn btn-secondary">Go Back</a>
  </div>
  <div class="card">
  <div class="card-header bg-secondary ">
      <h3>List of all accepted Employees</h3>
  </div>
</div>

<br>
  <table class="table table-striped table-hover">
    <thead>
      <th>Bus_num</th> <th>Accepted Users</th>
    </thead>
      <tbody>


  @foreach ($accepts as $accept)
          <tr style="width=300px;">
              {{-- <td>  <p>{{$route->route}}</p> </td> --}}
              <td>{{$accept->bus_num}}  </td>
              <td>{{$accept->username}} </td>


              <td><a href="/delete/accepted/user/{{$accept->username}}/{{$accept->bus_num}}">delete user</a> </td>

         </tr>
  @endforeach
  </table>
@endsection
