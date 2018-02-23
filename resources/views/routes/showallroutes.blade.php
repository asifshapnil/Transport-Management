@extends('layouts.master')

@section('content')
  <div class="pull-left">
    <a href="/admin/requests" class="btn btn-secondary">Go Back</a>
  </div>
  <div class="card">
  <div class="card-header bg-secondary ">
      <h3>List of all Routes</h3>
  </div>
</div>
  <table class="table table-striped table-hover">
    <thead>
      <th>Route</th> <th>Bus On This Route</th> <th>Departure</th>
    </thead>
      <tbody>
  @foreach ($routes as $route)
          <tr style="width=300px;">
              {{-- <td>  <p>{{$route->route}}</p> </td> --}}
              <td> <a href="/addBusToThisRoute/{{$route->id}}"> <p>{{$route->route}}</p> </a></td>

              <td>
                <table>
                  <tbody>
                     @foreach ($route->bus as $bus)
                   <tr>
                     <td><a href="/singlebus/{{$bus->bus_num}}">{{$bus->bus_num}}</a></td>

                   </tr>
                 @endforeach
                 </tbody>
               </table>
            </td>
            <td>
              <table>
                <tbody>
                   @foreach ($route->bus as $bus)
                 <tr>

                   <td>{{$bus->departure}}</td>
                 </tr>
               @endforeach
               </tbody>
             </table>
          </td>
         </tr>
    @endforeach

          </tbody>
        </table>
@endsection
