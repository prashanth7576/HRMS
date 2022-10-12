@extends('layouts.app')

@section('content')
<div class="main_container" style="color:#A9A9A9">
<select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                    style="font-size:13px;float:right;width:130px">
                    <option selected>Select</option>
                    <option value="1" style="font-size:12px;">2022</option>

                    <option value="2" style="font-size:12px">2023</option>
                    
                </select>
<br><br>
   <div class="row">
    <div class="col-sm-3">
        <div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">JAN 2022</p>
        <br>
        <div style="display:flex">
        <p style="font-weight:600">01</p>
        <p style="margin-left:10%">New Year's Day</p>
</div>
<div style="display:flex">
        <p style="font-weight:600;color:#A9A9A9">14</p>
        <p style="margin-left:10%">Makara Sankranti</p>
</div>

</div>
<br>
<div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">MAY 2022</p>
</div>
<br>
<div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">SEP 2022</p>
</div>
</div>
<div class="col-sm-3">
<div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">FEB 2022</p>
</div>
<br>
<div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">JUN 2022</p>
</div>
<br>
<div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">OCT 2022</p>
</div>
</div>
<div class="col-sm-3">
<div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">MAR 2022</p>
</div>
<br>
<div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">JUL 2022</p>
</div>
<br>
<div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">NOV 2022</p>
</div>
</div>
<div class="col-sm-3">
<div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">APR 2022</p>
</div>
<br>
<div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">AUG 2022</p>
</div>
<br>
<div class="card" style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;height:230px">
        <p style="font-weight:600">DEC 2022</p>
</div>
</div>
</div>
</div>

@endsection