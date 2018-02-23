@extends('layouts.master')

@section('content')
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
              <td>  <p>{{$route->route}}</p> </td>

              <td>  <table>
                 <tbody>
                     @foreach ($route->bus as $bus)
                   <tr>
                     <td><a href="/singlebus/{{$bus->bus_num}}">{{$bus->bus_num}}</a></td>

                   </tr>
                 @endforeach


                 </tbody>
              </table> </td>
              <td>  <table>
                 <tbody>
                     @foreach ($route->bus as $bus)
                   <tr>

                     <td>{{$bus->departure}}</td>
                   </tr>
                 @endforeach


                 </tbody>
              </table> </td>
              @if(Auth::check())
                @if ($username)
                  <td>  <table>
                     <tbody>
                         @foreach ($route->bus as $bus)

                             <tr>
                            @if($bus->request_id != Auth()->User()->id)
                               <td><a href="/userRequest/{{Auth::user()->username}}/{{$bus->id}}/{{Auth()->User()->id}}/{{$bus->bus_num}}">Request</a> </td>
                            @else
                              <td><a href="/userRequest/{{$username}}/{{$bus->id}}/{{Auth()->User()->id}}/{{$bus->bus_num}}/cancel">Cancel Request</a> </td>
                            @endif

                             </tr>

                     @endforeach


                     </tbody>
                  </table> </td>
                @endif
              @endif

            </tr>
  @endforeach
        </tbody>
    </table>

@endsection
