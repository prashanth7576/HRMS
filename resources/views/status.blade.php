@extends('layouts.app')

@section('content')
<div class="main_container">
<br>
<form action="{{route('status')}}" method="POST">
  @csrf
<div class="form-group" style="width:260px;display:flex">

    <input type="date" class="form-control" id="date" aria-describedby="date" placeholder="" name="date">
    
    <button type="submit" class="btn btn-primary active" style="margin-left:2%">Search</button>
  </div>
</form>
<br><br>
    <div class="row">
        <div class="col-md-3">
<div class="card">
  <div class="card-header">
    Not Yet In
  </div>
  <table class="table table-borderless">
  <tbody style="background-color: #EDF9F9;height:45px;font-size:13px">
  
    <tr>
      <td>Employee</th>
      <td>  Expected In Time</td> 
    </tr> 
  </tbody>
  <table class="table" >
  <tbody style="height:45px;font-size:13px">
  
  @foreach($users as $k)
    <tr >
   
      <td>{{$k->firstname}} {{$k->lastname}}<br>{{$k->employeeid}}</th>
      <td>10:00:00</td>
     
    </tr>
   
    @endforeach
  </tbody>
</table>
</div>
<br><br>
</div>

<div class="col-md-3">
<div class="card">
  <div class="card-header">
    Late Arrivals
  </div>
  <table class="table table-borderless">
  <tbody style="background-color: #EDF9F9;height:45px;font-size:13px">
    <tr>
      <td>Employee</th>
      <td>Late By</td> 
    </tr> 
  </tbody>
  <table class="table" >
  <tbody style="height:45px;font-size:13px">
  @foreach($Details as $i)
  @if ($i->signin !== '10:00:00')
    <tr >
   
      <td>{{$i->firstname}} {{$i->lastname}}<br>{{$i->employeeid}}</td>
      <td>{{$i->time_difference}}<br>{{$i->logindate}},{{$i->signin}}</td>
      
    </tr> 
    @endif
    @endforeach
  </tbody>
</table>
</div>
<br><br>
</div>

<div class="col-md-3">
<div class="card">
  <div class="card-header">
    On Time
  </div>
  <table class="table table-borderless">
  <tbody style="background-color: #EDF9F9;height:45px;font-size:13px">
    <tr>
      <td>Employee</th>
      <td>Early By</td> 
    </tr> 
  </tbody>
  <table class="table" >
  <tbody style="height:45px;font-size:13px">
  @foreach($loginDetils as $i)
  @if ($i->signin <= '10:00:00')
    <tr >
   
      <td>{{$i->firstname}} {{$i->lastname}}<br>{{$i->employeeid}}</th>
      <td>{{$i->time_difference}}<br>{{$i->logindate}},{{$i->signin}}</td>
      
    </tr> 
    @endif
    @endforeach
  </tbody>
</table>
</div>
<br><br>
</div>

<div class="col-md-3">


<div class="card" >
  <div class="card-header">
    On Leave
  </div>
  <table class="table table-borderless">
  <tbody style="background-color: #EDF9F9;height:45px;font-size:13px">
  
    <tr>
      <td>Employee</th>
      <td>No of days</td> 
    </tr> 
  </tbody>
  <table class="table" >
  <tbody style="height:45px;font-size:13px">
  @foreach($leave as $j)
    <tr >
      <td>{{$j->employeid}}</th>
      <td>{{$j->days}}</td>
      
    </tr> 
    @endforeach
  </tbody>
</table>
</div>

<br><br>
</div>
</div>
</div>




@endsection