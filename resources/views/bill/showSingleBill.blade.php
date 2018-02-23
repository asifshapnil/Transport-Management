@extends('layouts.master')

@section('content')
  <div class="pull-left">
    <a href="/admin/requests" class="btn btn-secondary">Go Back</a>
  </div>
<div class="card" style="width:800px; margin:0 auto;">
  <div class="card-header bg-secondary">
      <h3 style="padding:5px;">{{$bus_num->bus_num}} on Current Month</h3>
  </div>
<table style="margin:15px;" class="table">
  <tr>
    <th>Date</th> <th>Fuel</th> <th>Fine</th> <th>Repair</th> <th>Staffbill</th> <th>Total of the Day</th>
  </tr>
@foreach ($bill as $bill)
    <tr>
      <td style="width:150px;">{{date('M j, Y ', strtotime($bill->date))}}</td> <td style="width:100px;">{{$bill->fuel}}</td> <td style="width:100px;">{{$bill->fine}}</td> <td style="width:100px;">{{$bill->repair}}</td>
       <td style="width:100px;">{{$bill->staffbill}}</td>
       <td style="width:100px;">{{$bill->fine + $bill->fuel + $bill->repair + $bill->staffbill}}</td> <td><a href="/editBill/{{$bill->bus_id}}/{{$bill->date}}">edit</a> </td>
    </tr>


@endforeach

</table>
  
</div>

@endsection
