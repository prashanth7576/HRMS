@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS only -->

    <style>
    ul {
        margin-left: 25%;
    }



    #pills-active-tab {
        border: 1px solid rgb(109, 123, 141, 0.5);
        border-radius: 0%;
        width: 250px;
        height: 40px;
        border-bottom-left-radius: 5px;
        border-top-left-radius: 5px;


    }

    #pills-closed-tab {


        border-radius: 0%;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
        width: 250px;
        height: 40px;
        box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
    }

    .col-md-11 {
        background-color: white;
        border: 1px solid rgb(135, 130, 130, 0.5);
        border-radius: 5px;

        margin-left: 20px;
        padding: 15px;
    }

    .request {
        margin-left: auto;
        margin-right: 10%;
    }

    .form-floating {
        margin-bottom: -10px
    }

    .modal-header {
        background-color: rgb(155, 149, 149, 0.3)
    }

    @media (max-width:480px) {
        .btn {

            margin-top: 10%;
        }

        ul {
            margin-left: 10%;
        }



        #pills-active-tab {
            border: 1px solid rgb(109, 123, 141, 0.5);
            border-radius: 0%;
            width: 150px;
            height: 40px;
            border-bottom-left-radius: 5px;
            border-top-left-radius: 5px;


        }

        #pills-closed-tab {


            border-radius: 0%;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            width: 150px;
            height: 40px;
            border: 1px solid rgb(109, 123, 141, 0.5);
        }

        .col-md-11 {
            background-color: white;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
            border-radius: 5px;


            margin-left: 20px;
            padding: 15px;
        }

        .request {
            margin-left: auto;
            margin-right: 10%;

        }

        .form-floating {
            margin-bottom: -10px
        }

        .modal-header {
            background-color: rgb(155, 149, 149, 0.3)
        }

        .modal {
            margin-left: -2%;
            width: 349px;
        }
    }
    </style>
</head>

<body>
    <br>

    <div class="main_container" style="font-family: 'Montserrat', sans-serif;">
    
    

              
                       
                        
                   
                  
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li id="active" class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="font-size:13px"> YTD
                    STATEMENT </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false"
                    style="font-size:13px">PF YTD STATEMENT
                </button>
            </li>




        </ul>


        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form action="{{url('report')}}" method="GET">
                    <select class="form-control" name="years" style="font-size:13px;float:right;width:200px">
                        @if(isset($_GET['years']))
                        <option value="{{$_GET['years']}}">{{$_GET['years']}}</option>
                        <option value="2022" >2022</option>
                        <option value="2023" style="font-size:12px;">2023</option>
                        @else
                        
                        <option value="2022" >2022</option>
                        <option value="2023" style="font-size:12px;">2023</option>
                        @endif
                    </select>
                    <button type="submit" class="btn btn-primary active"
                        style="width:100px;float:right;margin-right:3%">filter</button>
                </form>
                <button type="button" class="btn btn-primary active" style="width:100px;float:right;margin-right:3%"><i
                        class="fa fa-download" aria-hidden="true"></i></button>
                <br><br><br><br>
                
                <div class="row">


                    <div class="col-md-11">
                        <p>YTD Summary</p>
                        <div class="table-responsive">
                            <div style="display:flex">

                                <table class="table table-borderless" style="font-size:12px;">
                                    <thead style="background-color:#e6f7ff;height:51px">
                                        <tr>

                                            <th scope="col">Item</th>
                                            <th scope="col">Total In </th>
                                            @foreach ($form as $j)
                                            <th scope="col">{{$j->date}}{{$j->year}}</th>
                                            @endforeach

                                        </tr>
                                    </thead>

                                    <thead>
                                        <tr>

                                            <th scope="col" style="font-size:17px;height:60px">Income</th>


                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>

                                            <td>Baic</td>
                                            <td><input type="text" id="basictotal" onChange="Calculatebasic();" readonly
                                                    style="width:80px;border:none"></td>
                                            @foreach ($form as $j)
                                            <td><input type="text" class="basicone" value="{{$j->basicsalary}}" readonly
                                                    style="width:80px;border:none"></td>
                                            @endforeach
                                        </tr>
                                        <tr>

                                            <td>HRA</td>
                                            <td><input type="text" id="hratotal" onChange="Calculatehra();" readonly
                                                    style="width:80px;border:none"></td>
                                            @foreach ($form as $j)
                                            <td><input type="text" class="hra" value="{{$j->hra}}" readonly
                                                    style="width:80px;border:none"></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Conveyance</td>
                                            <td><input type="text" id="conveyancetotal"
                                                    onChange="Calculateconveyance();" readonly
                                                    style="width:80px;border:none"></td>
                                            @foreach ($form as $j)
                                            <td><input type="text" class="conveyance" value="{{$j->conveyance}}"
                                                    readonly style="width:80px;border:none"></td>
                                            @endforeach
                                        </tr>

                                        <tr>
                                            <td>Medical Allowance</td>
                                            <td><input type="text" id="medicaltotal" onChange="Calculatemedical();"
                                                    readonly style="width:80px;border:none"></td>
                                            @foreach ($form as $j)
                                            <td><input type="text" class="medical" value="{{$j->medicalallowance}}"
                                                    readonly style="width:80px;border:none"></td>
                                            @endforeach
                                        </tr>

                                        <tr>
                                            <td>Special Allowance</td>
                                            <td><input type="text" id="specialtotal" onChange="Calculatespecial();"
                                                    readonly style="width:80px;border:none"></td>
                                            @foreach ($form as $j)
                                            <td><input type="text" class="special" value="{{$j->special}}" readonly
                                                    style="width:80px;border:none"></td>
                                            @endforeach
                                        </tr>

                                        <tr style="background-color:#ecf2f9">
                                            <td>Gross</td>
                                            <td><input type="text" id="earningtotal" onChange="Calculateear();" readonly
                                                    style="width:80px;border:none;background-color:#ecf2f9"></td>
                                            @foreach ($form as $j)
                                            <td><input type="text" id="ears" class="earning" value="{{$j->total}}"
                                                    readonly style="width:80px;border:none;background-color:#ecf2f9">
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr>

                                            <th scope="col" style="font-size:17px;height:60px">Deduction</th>


                                        </tr>

                                        <tr>
                                            <td>PF</td>
                                            <td><input type="text" id="epftotal" onChange="Calculateepf();" readonly
                                                    style="width:80px;border:none"></td>
                                            @foreach ($form as $j)
                                            <td><input type="text" class="epf" value="{{$j->epf}}" readonly
                                                    style="width:80px;border:none"></td>
                                            @endforeach
                                        </tr>

                                        <tr>
                                            <td>ESI</td>
                                            <td><input type="text" id="esitotal" onChange="Calculateesi();" readonly
                                                    style="width:80px;border:none"></td>
                                            @foreach ($form as $j)
                                            <td><input type="text" class="esi" value="{{$j->esi}}" readonly
                                                    style="width:80px;border:none"></td>
                                            @endforeach
                                        </tr>
                                        <tr style="background-color:#ecf2f9">
                                            <td>Total Deductions</td>
                                            <td><input type="text" id="deductiontotal" onChange="Calculateded();"
                                                    readonly style="width:80px;border:none;background-color:#ecf2f9">
                                            </td>
                                            @foreach ($form as $j)
                                            <td><input type="text" class="deduction" value="{{$j->totaldeductions}}"
                                                    readonly style="width:80px;border:none;background-color:#ecf2f9">
                                            </td>
                                            @endforeach
                                        </tr>

                                        <tr>

                                            <th scope="col" style="font-size:17px;height:60px">Days</th>


                                        </tr>

                                        <tr>

                                            <td>Emp Effective Workdays</td>
                                            <td><input type="text" id="totalone" onChange="Cal();" readonly
                                                    style="width:80px;border:none"></td>
                                            @foreach ($form as $j)
                                            <td><input type="text" class="num" value="{{$j->workingdays}}"
                                                    style="width:80px;border:none"></td>
                                            @endforeach

                                        </tr>

                                        <tr>
                                            <td>Days in Month</td>
                                            <td><input type="text" id="total" onChange="Calculate();" readonly
                                                    style="width:80px;border:none"></td>

                                            @foreach ($form as $j)
                                            <td><input type="text" class="number" value="{{$j->daysinmonth}}" readonly
                                                    style="width:80px;border:none"></td>
                                            @endforeach

                                        </tr>

                                        <tr style="background-color:#ecf2f9">
                                            <td>Net Pay</td>
                                            <td><input type="text" id="net" onChange="Calculatenet();" readonly
                                                    style="width:80px;border:none;background-color:#ecf2f9"></td>
                                            @foreach($form as $j)
                                            <td><input type="text" id="netmonth" onChange="Calculatenetmonth();"
                                                    readonly style="width:80px;border:none;background-color:#ecf2f9"
                                                    value="{{$j->netpay}}"></td>
                                            @endforeach

                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>



                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                    style="font-size:13px;float:right;width:200px">
                    <option selected>Apr2022 - Mar2023</option>
                    <option value="1" style="font-size:12px;">Apr2022 - Mar2023</option>



                </select>
                <br><br><br><br>
                <div class="row justify-content-center">




                    <div class="col-md-11" style="padding:50px;text-align:center">


                        Hi , looks like your PF YTD Statement has not been generated yet.Drop by later and we'll have it
                        ready for you.


                    </div>



                </div>
            </div>
        </div>

    </div>

</body>


</html>


<script>
window.addEventListener('load', function() {

    var sum = 0;
    $('.number').each(function() {
        sum += Number($(this).val());
    });
    $('#total').val(sum);



    var sum = 0;
    $('.num').each(function() {
        sum += Number($(this).val());
    });
    $('#totalone').val(sum);




    var sum = 0;
    $('.basicone').each(function() {
        sum += Number($(this).val());
    });
    $('#basictotal').val(sum);

    var sum = 0;
    $('.hra').each(function() {
        sum += Number($(this).val());
    });
    $('#hratotal').val(sum);

    var sum = 0;
    $('.conveyance').each(function() {
        sum += Number($(this).val());
    });
    $('#conveyancetotal').val(sum);

    var sum = 0;
    $('.medical').each(function() {
        sum += Number($(this).val());
    });
    $('#medicaltotal').val(sum);

    var sum = 0;
    $('.special').each(function() {
        sum += Number($(this).val());
    });
    $('#specialtotal').val(sum);

    var sum = 0;
    $('.earning').each(function() {
        sum += Number($(this).val());
    });
    $('#earningtotal').val(sum);

    var sum = 0;
    $('.epf').each(function() {
        sum += Number($(this).val());
    });
    $('#epftotal').val(sum);

    var sum = 0;
    $('.esi').each(function() {
        sum += Number($(this).val());
    });
    $('#esitotal').val(sum);

    var sum = 0;
    $('.deduction').each(function() {
        sum += Number($(this).val());
    });
    $('#deductiontotal').val(sum);


    document.getElementById('earningtotal').value;
    document.getElementById('deductiontotal').value;
    const epfs = parseInt(document.getElementById('earningtotal').value);
    const esis = parseInt(document.getElementById('deductiontotal').value);

    const result = epfs - esis;

    const total = document.getElementById('net').value = result;



    document.getElementById('net').addEventListener('change', Calculatenet);
    Calculatenet();
    document.getElementById('totalone').addEventListener('change', Calculate);
    Calculate();
    document.getElementById('total').addEventListener('change', Calculate);
    Calculate();
    document.getElementById('basictotal').addEventListener('change', Calculatebasic);
    Calculatebasic();
    document.getElementById('hratotal').addEventListener('change', Calculatehra);
    Calculatehra();
    document.getElementById('conveyancetotal').addEventListener('change', Calculateconveyance);
    Calculateconveyance();
    document.getElementById('medicaltotal').addEventListener('change', Calculatemedical);
    Calculatemedical();
    document.getElementById('specialtotal').addEventListener('change', Calculatespecial);
    Calculatespecial();
    document.getElementById('earningtotal').addEventListener('change', Calculateear);
    Calculateear();
    document.getElementById('epftotal').addEventListener('change', Calculateepf);
    Calculateepf();
    document.getElementById('esitotal').addEventListener('change', Calculateesi);
    Calculateesi();
    document.getElementById('deductiontotal').addEventListener('change', Calculateded);
    Calculateded();
});
</script>

<script>
    
    var y=new Date();
    document.getElementById("year").value=[y.getFullYear()]  ;

    
    </script>

@endsection