@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-lg-5" style="width:1000px; margin:0 auto; margin-top:10px;" >
      <div class="">
        <h3>Update Bills</h3> <hr>
      </div>

        {!! Form::open(['action' => ['BillController@updateBill', $bill->id]]) !!}
        {!! Form::label('date', 'Date') !!}
        {!! Form::date('date',$bill->date, ['class' => 'form-control'])!!}
      <br>
        {!! Form::label('fuel', 'Fuel cost') !!}
        {!! Form::text('fuel',$bill->fuel, ['class' => 'form-control'])!!} <br>
        {!! Form::label('fine', 'Fined today??') !!}
        {!! Form::text('fine',$bill->fine, ['class' => 'form-control'])!!} <br>
        {!! Form::label('repair', 'Repair cost') !!}
        {!! Form::text('repair',$bill->repair, ['class' => 'form-control'])!!} <br>
        {!! Form::label('staffbill', 'Staff Bill') !!}
        {!! Form::text('staffbill',$bill->staffbill, ['class' => 'form-control'])!!}

        {!! Form::submit('Update Bill', ['class' => 'btn btn-block btn-info']) !!}
        <br> <br>


      {!! Form::close() !!}


  </div>

</div>
@endsection
