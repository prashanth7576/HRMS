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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    ul {
        margin-left: 25%;
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

<body style="font-family: 'Montserrat', sans-serif;">
    <div class="main_container" >

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li id="active" class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true"> Payslip</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Reimb. Payslip
                </button>
            </li>




        </ul>


        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                    style="font-size:13px;float:right;width:130px">
                    <option selected>Select</option>
                    <option value="1" style="font-size:12px;">Aug 2022</option>

                    <option value="2" style="font-size:12px">Sep 2023</option>
                    <option value="2" style="font-size:12px">Oct 2023</option>

                </select>
                <button type="button" class="btn btn-primary active" style="width:100px;float:right;margin-right:3%"><i class="fa fa-download" aria-hidden="true"></i></button>
                <br><br><br><br>
                <div class="row">


                    <div class="col-md-8">
                        <div style="display:flex">
                            <div class="card"
                                style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);border-radius:10px;width:400px;font-size:13px">
                                <h5 style="padding:10px;font-size:15px;font-weight:700">Earnings</h5>

                                <table class="table table-borderless" style="padding:10px">
                                    <thead style="background-color:#e6f7ff">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col" style="float:right">Amount in (<i class="fa fa-inr"
                                                    aria-hidden="true"></i>)
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td>BASIC</td>
                                            @foreach ($data as $i)
                                            <td style="float:right">{{ $i->basicsalary}}</td>
                                            
                                        </tr>
                                       
                                        <tr>
                                            <td>HRA</td>
                                            <td style="float:right">{{ $i->hra}}</td>

                                        </tr>
                                        <tr>
                                            <td>CONVEYANCE</td>
                                            <td style="float:right">{{ $i->conveyance}}</td>

                                        </tr>
                                        <tr>
                                            <td>MEDICAL ALLOWANCE</td>
                                            <td style="float:right">{{ $i->medicalallowance}}</td>

                                        </tr>

                                        <tr>
                                            <td>SPECIAL ALLOWANCE</td>
                                            <td style="float:right">{{ $i->special}}</td>

                                        </tr>

                                        <tr style="background-color:#ecf2f9">
                                            <td style="font-weight:700">Total</td>
                                            <td style="float:right;font-weight:700">{{ $i->total}}</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="card"
                                style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);border-radius:10px;width:300px;margin-left:3%;font-size:13px">
                                <h5 style="padding:10px;font-size:15px;font-weight:700">Deductions</h5>

                                <table class="table table-borderless" style="padding:10px">
                                    <thead>
                                        <tr style="background-color:#e6f7ff">
                                            <th scope="col"></th>
                                            <th scope="col" style="float:right">Amount in (<i class="fa fa-inr"
                                                    aria-hidden="true"></i>)
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PF</td>
                                            <td style="float:right">{{ $i->epf}}</td>

                                        </tr>
                                        <tr>
                                            <td>ESI</td>
                                            <td style="float:right">{{ $i->esi}}</td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="float:right"></td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="float:right"></td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="float:right"></td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="float:right"></td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="float:right"></td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="float:right"></td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="float:right"></td>

                                        </tr>



                                        <tr style="background-color:#ecf2f9;">

                                            <td style="font-weight:700">Total</td>
                                            <td style="float:right;font-weight:700">{{ $i->totaldeductions}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <br><br> 
                    </div>
                   
                    <div class="col-md-4" style="background-color:#ffffe6;font-size:12px;padding:10px">
                        <p style="font-size:15px;font-weight:700">Employee Detail</p>
                        <table class="table table-borderless">
                        @foreach ($form as $j)
                            <tbody>
                                <tr>
                                    <td>Name<br>
                                        <p style="font-size:13px;font-weight:600">{{$j->firstname}}</p>
                                    </td>
                                   
                                    <td>Employee No<br>
                                        <p style="font-size:13px;font-weight:600">{{$j->employeeid }}</p>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Joining Date<br>
                                    <p style="font-size:13px;font-weight:600">{{$j->joiningdate }}</p>
                                </td>
                               
                                    <td>Bank Name <br> <p style="font-size:13px;font-weight:600">{{$j->bankname }}</p></td>

                                </tr>


                                <tr>
                                    <td>Deignation <br> <p style="font-size:13px;font-weight:600">{{$j->designation }}</p></td>
                                    <td>Bank Account No <br> <p style="font-size:13px;font-weight:600">{{$j->bankaccountnumber }}</p></td>

                                </tr>
                                <tr>
                                    <td>Department <br> <p style="font-size:13px;font-weight:600">{{$j->department }}</p></td>
                                    <td>PAN Number <br> <p style="font-size:13px;font-weight:600">{{$j->pannumber }}</p></td>

                                </tr>
                                <tr>
                                    <td>Location <br> <p style="font-size:13px;font-weight:600">{{$j->location }}</p></td>
                                    <td>PF No </td>

                                </tr>
                                <tr>
                                    <td>Effective Work Days </td>
                                    <td>PF UAN <br> <p style="font-size:13px;font-weight:600">{{$j->uannumber }}</p></td>

                                </tr>
                                <tr>
                                    <td>LOP </td>
                                    <td></td>

                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                    style="font-size:13px;float:right;width:130px">
                    <option selected>Select</option>
                    <option value="1" style="font-size:12px;">Aug 2022</option>

                    <option value="2" style="font-size:12px">Sep 2023</option>
                    <option value="2" style="font-size:12px">Oct 2023</option>

                </select>
                <br><br><br><br>

                <div class="row justify-content-center">

                    


                        <div class="col-md-8">
                           <div class="card" style="background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);border-radius:10px;padding:50px;text-align:center">
                           It???s lonely here !
<br>
Looks like your payslip has not been generated yet. Drop by later and
we'll have it ready for you
</div>

                        </div>

                    

                </div>
            </div>
        </div>

    </div>

</body>

</html>
@endsection