@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">




</head>

<body id="main_container" style="background-color: whitesmoke;font-family: 'Montserrat', sans-serif;">

    <div class="main_container">
        <form action="{{route('ytd.store')}}" method="POST">
            @csrf

            @foreach ($data as $i)

            <div class="row mb-1 align-items-center" style="float:right">
                <div class="col-auto">
                    <label for="employeeid" class="col-form-label"> Employee ID</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="employeeid" class="form-control" aria-describedby="enployeeid"
                        value="{{ $i->employeeid }}" name="employeeid">
                </div>

            </div>


            <br><br>
            <div class="row">
                <div class="col-md-2">
                </div>


                <div class="col-md-4">
                    
                    <div class="flex" style="display:flex">
                    <div class=" form-floating mb-1" style="float:right">
                            <input type="text" class="form-control" id="date" min="2022-11-10"
                                placeholder="date" name="date"
                                style=" font-size:12px;width:100px;height:50px;">
                            <label for="days" style=" font-size:12px;"> Month</label>
                        </div>
                        <div class=" form-floating mb-1" style="float:right;margin-left:5%">
                            <input type="text" class="form-control" id="year" min="2022-11-10"
                                placeholder="Year" name="year"
                                style=" font-size:12px;width:100px;height:50px;">
                            <label for="days" style=" font-size:12px;"> Year</label>
                        </div>
                        <div class="form-floating" style="float:right;margin-left:5%">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                                name="daysinmonth" name="date" style=" font-size:12px;height:50px;width:160px;margin-left:5%">>

                                <option>28</option>
                                <option>30</option>
                                <option>31</option>

                            </select>
                            <label for="floatingSelect"> Select days</label>
                        </div>



                        <div class=" form-floating mb-1" style="float:right;margin-left:5%">
                            <input type="number" class="form-control" id="effectiveworkingday"
                                placeholder="effectiveworkingday	" name="workingdays"
                                style=" font-size:12px;width:160px;height:50px;">
                            <label for="days" style=" font-size:12px;">Effective Working Days</label>
                        </div>


                    </div>


                </div>
            </div>





            <div class="flex" style="display:flex">
                <div class="one" style="width:48%;padding:2%;">
                    <h5 style="text-align:center;margin-left:20%">Earnings</h5>

                    <div class=" form-floating mb-1" style="float:right">
                        <input type="number" class="form-control" id="basic" placeholder="Basic Salary"
                            value="{{ $i-> basicsalary}}" name="basicsalary"
                            style=" font-size:12px;width:300px;height:50px">
                        <label for="Basic Salary">Basic Salary</label>
                    </div>



                    <div class=" form-floating mb-1" style="float:right">
                        <input type="number" class="form-control" id="hra" placeholder="HRA" name="hra"
                            value="{{ $i-> hra}}" style=" font-size:12px;width:300px;height:50px">
                        <label for="HRA">HRA</label>
                    </div>



                    <div class=" form-floating mb-1" style="float:right">
                        <input type="number" class="form-control" id="conveyance" placeholder=" Conveyance"
                            value="{{ $i->conveyance }}" name="conveyance"
                            style=" font-size:12px;width:300px;height:50px ">
                        <label for="Conveyance">Conveyance</label>
                    </div>



                    <div class=" form-floating mb-1" style="float:right">
                        <input type="number" class="form-control" id="medical" placeholder="Medical Allowance"
                            value="{{ $i-> medicalallowance}}" name="medicalallowance"
                            style="padding-top:30px; font-size:12px;width:300px;height:50px ">
                        <label for="Medical Allowance">Medical Allowance</label>
                    </div>



                    <div class=" form-floating mb-1" style="float:right">
                        <input type="number" class="form-control" id="special" placeholder="Medical Allowance"
                            value="{{ $i-> special}}" name="special" style=" font-size:12px;width:300px;height:50px ">
                        <label for="Medical Allowance">Special Allowance</label>
                    </div>


                    <br><br>

                    <div class="row g-3 align-items-center" style="float:right;font-size:12px">
                        <div class="col-auto">
                            <label for="total" class="col-form-label">TOTAL</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" id="earning" class="form-control" aria-describedby="passwordHelpInline"
                                name="total">
                        </div>

                    </div>
                </div>
                <div class="two" style="width:48%;margin-left:3%;padding:2%">
                    <h5 style="margin-left:25%">Deductions</h5>


                    <div class=" form-floating mb-1">
                        <input type="number" class="form-control" id="epf" placeholder="EPF" name="epf"
                            value="{{ $i-> epf}}" style=" font-size:12px;width:300px;height:50px">
                        <label for="EPF">EPF</label>
                    </div>






                    <div class=" form-floating mb-1">
                        <input type="number" class="form-control" id="esi" placeholder="ESI" name="esi"
                            value="{{ $i-> esi}}" style=" font-size:12px;width:300px;height:50px ">
                        <label for="ESI">ESI</label>
                    </div>



                    <div class="row g-3 align-items-center" style="font-size:12px">
                        <div class="col-auto">
                            <label for="total" class="col-form-label">TOTAL</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" id="deduction" class="form-control"
                                aria-describedby="passwordHelpInline" name="totaldeductions">
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            <br>
                    <div class="row g-3 align-items-center" style="font-size:12px;margin-left:35%">
                        <div class="col-auto">
                            <label for="total" class="col-form-label">NetPay</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" id="netpay" class="form-control"
                                aria-describedby="passwordHelpInline" name="netpay">
                        </div>

                    </div>

            <br>
            <div style="text-align:center">


                <button id="btnone" class="btn btn-primary btn-lg" type="submit">
                    Submit </button>


            </div>
        </form>


    </div>


</body>

</html>


<script>
window.addEventListener('load', function() {
    document.getElementById('basic').value;
    document.getElementById('hra').value;
    document.getElementById('conveyance').value;
    document.getElementById('medical').value;
    document.getElementById('special').value;



    const basicsalary = parseInt(document.getElementById('basic').value);
    const hr = parseInt(document.getElementById('hra').value);

    const conveyances = parseInt(document.getElementById('conveyance').value);
    const medicalallowance = parseInt(document.getElementById('medical').value);

    const specialallowance = parseInt(document.getElementById('special').value);



    const result = basicsalary + hr + conveyances + medicalallowance + specialallowance;

    const total = document.getElementById('earning').value = result;



    document.getElementById('epf').value;
    document.getElementById('esi').value;




    const epfs = parseInt(document.getElementById('epf').value);
    const esis = parseInt(document.getElementById('esi').value);

    const resul = epfs + esis;

    const totals = document.getElementById('deduction').value = resul;

    document.getElementById('earning').value;
    document.getElementById('deduction').value;

    const earn = parseInt(document.getElementById('earning').value);
    const ded = parseInt(document.getElementById('deduction').value);

    const results = earn - ded;

    const num = document.getElementById('netpay').value = results;

    document.getElementById('earning').addEventListener('change', Calculateearning);
    Calculateearning();
    document.getElementById('deduction').addEventListener('change', Calculatededuction);
    Calculatededuction();
    document.getElementById('netpay').addEventListener('change', Calculatenetpay);
    Calculatenetpay();


});
</script>
<script>
    var getmonths = 
    [
       "Jan", "Feb", "mar","Apr","May", "Jun","Jul", "Aug","Sep", "Oct", "  Nov","Dec"
    ];
    var d=new Date();
    var y=new Date();
    document.getElementById("date").value=getmonths[d.getMonth()-1]  ;
    document.getElementById("year").value=[y.getFullYear()]  ;

    
    </script>
@endsection