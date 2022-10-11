@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
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

<body>
   
    <div class="main_container">

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li id="active" class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true"> Paylip </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Reimb. Payslip
                </button>
            </li>

        </ul>
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
            style="font-size:13px;float:right;width:130px">
            <option selected>Select</option>
            <option value="1" style="font-size:12px;">Aug 2022</option>

            <option value="2" style="font-size:12px">Sep 2023</option>
            <option value="2" style="font-size:12px">Oct 2023</option>

        </select>
       
        <br><br>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">


                    <div class="col-md-8">

                        <div style="display:flex">
                            <div class=""
                                style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);border-radius:10px;width:400px;font-size:13px">
                                <h5 style="padding:10px;font-size:15px">Earnings</h5>
                                
                                <table class="table table-borderless" style="padding:10px">
                                    <thead style="background-color:#e6f7ff">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col" style="float:right">Amount in (<i class="fa fa-inr" aria-hidden="true"></i>)
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>BASIC</td>
                                            <td style="float:right">000.00</td>

                                        </tr>
                                        <tr>
                                            <td>HRA</td>
                                            <td style="float:right">000.00</td>

                                        </tr>
                                        <tr>
                                            <td>CONVEYANCE</td>
                                            <td style="float:right">000.00</td>

                                        </tr>
                                        <tr>
                                            <td>MEDICAL ALLOWANCE</td>
                                            <td style="float:right">000.00</td>

                                        </tr>

                                        <tr>
                                            <td>SPECIAL ALLOWANCE</td>
                                            <td style="float:right">000.00</td>

                                        </tr>

                                        <tr style="background-color:#ecf2f9">
                                            <td>Total</td>
                                            <td style="float:right">000.00</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class=""
                                style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);border-radius:10px;width:300px;margin-left:3%;font-size:13px">
                                <h5 style="padding:10px;font-size:15px">Deductions</h5>
                               
                                <table class="table table-borderless" style="padding:10px">
                                    <thead>
                                        <tr style="background-color:#e6f7ff">
                                            <th scope="col"></th>
                                            <th scope="col" style="float:right">Amount in (<i class="fa fa-inr" aria-hidden="true"></i>)
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PF</td>
                                            <td style="float:right">000.00</td>

                                        </tr>
                                        <tr>
                                            <td>ESI</td>
                                            <td style="float:right">000.00</td>

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

                                            <td>Total</td>
                                            <td style="float:right">000.00</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-4" style="background-color:#ffffe6;font-size:12px;padding:10px">
                        <p style="font-size:15px;">Employee Detail</p>
                        <table class="table table-borderless">

                            <tbody>
                                <tr>
                                    <td>Name<br>
                                        <p style="font-size:13px;font-weight:600">DYAGA LIKHITHA</p>
                                    </td>
                                    <td>Employee No<br>
                                        <p style="font-size:13px;font-weight:600">XSS-004</p>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Joining Date</td>
                                    <td>Bank Name</td>

                                </tr>


                                <tr>
                                    <td>Deignation</td>
                                    <td>Bank Account No</td>

                                </tr>
                                <tr>
                                    <td>Department</td>
                                    <td>PAN Number</td>

                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td>PF No</td>

                                </tr>
                                <tr>
                                    <td>Effective Work Days</td>
                                    <td>PF UAN</td>

                                </tr>
                                <tr>
                                    <td>LOP</td>
                                    <td></td>

                                </tr>


                            </tbody>
                        </table>
                        <br>




                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                    <div class="row justify-content-center">

                        <div class="row">


                            <div class="col-md-8">
hello

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

</body>

</html>
@endsection