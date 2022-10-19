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

    <div class="main_container">

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li id="active" class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="font-size:13px"> YTD STATEMENT </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="font-size:13px">PF YTD STATEMENT
                </button>
            </li>




        </ul>


        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                    style="font-size:13px;float:right;width:200px">
                    <option selected>Apr2022 - Mar2023</option>
                    <option value="1" style="font-size:12px;">Apr2022 - Mar2023</option>



                </select>
                <button type="button" class="btn btn-primary active" style="width:100px;float:right;margin-right:3%"><i
                        class="fa fa-download" aria-hidden="true"></i></button>
                <br><br><br><br>
                <div class="row">


                    <div class="col-md-11">
                        <p>YTD Summary</p>

                        <div style="display:flex">

                            <table class="table table-borderless" style="font-size:12px;width:500px;">
                                <thead style="background-color:#e6f7ff;height:55px">
                                    <tr>

                                        <th scope="col">Item</th>
                                        <th scope="col">Total In </th>

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
                                        <td>000.00</td>
                                    </tr>
                                    <tr>

                                        <td>HRA</td>
                                        <td>000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Conveyance</td>
                                        <td>000.00</td>
                                    </tr>

                                    <tr>
                                        <td>Medical Allowance</td>
                                        <td>000.00</td>
                                    </tr>

                                    <tr>
                                        <td>Special Allowance</td>
                                        <td>000.00</td>
                                    </tr>

                                    <tr style="background-color:#ecf2f9">
                                        <td>Gross</td>
                                        <td>000.00</td>
                                    </tr>
                                    <tr>

                                        <th scope="col" style="font-size:17px;height:60px">Deduction</th>


                                    </tr>

                                    <tr>
                                        <td>PF</td>
                                        <td>000.00</td>
                                    </tr>

                                    <tr>
                                        <td>ESI</td>
                                        <td>000.00</td>
                                    </tr>
                                    <tr style="background-color:#ecf2f9">
                                        <td>Total Deductions</td>
                                        <td>000.00</td>
                                    </tr>

                                    <tr>

                                        <th scope="col" style="font-size:17px;height:60px">Days</th>


                                    </tr>
                                    <tr>
                                        <td>Emp Effective Workdays</td>
                                        <td>000.00</td>
                                    </tr>

                                    <tr>
                                        <td>Days in Month</td>
                                        <td>000.00</td>
                                    </tr>

                                    <tr style="background-color:#ecf2f9">
                                        <td>Net Pay</td>
                                        <td>000.00</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="table-responsive">
                                <table class="table table-borderless" style="font-size:12px;">
                                    <thead style="background-color:#e6f7ff">
                                        <tr>

                                            <th scope="col">Apr 2022</th>
                                            <th scope="col">May 2022 </th>
                                            <th scope="col">Jun 2022 </th>
                                            <th scope="col">Jul 2022 </th>
                                            <th scope="col">Aug 2022 </th>
                                            <th scope="col">Sep 2022 </th>
                                            <th scope="col">Oct 2022 </th>
                                            <th scope="col">Nov 2022 </th>
                                            <th scope="col">Dec 2022 </th>
                                            <th scope="col">Jan 2022 </th>
                                            <th scope="col">Feb 2022 </th>
                                            <th scope="col">Mar 2022 </th>
                                        </tr>
                                    </thead>
                                    <thead style="height:60px">
                                        <tr>

                                            <th scope="col" style="height:60px"></th>


                                        </tr>


                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                        </tr>
                                        <tr>

                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                        </tr>
                                        <tr>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                        </tr>

                                        <tr>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                        </tr>

                                        <tr>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr style="background-color:#ecf2f9;width:40px">
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="col" style="font-size:13px;height:60px"></th>
                                        </tr>

                                        <tr>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                        </tr>
                                        <tr>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>

                                        <tr style="background-color:#ecf2f9;width:70px">
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                        </tr>

                                        <tr>
                                            <th scope="col" style="font-size:13px;height:60px"></th>
                                        </tr>
                                        <tr>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                        </tr>

                                        <tr>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                        </tr>


                                        <tr style="background-color:#ecf2f9;">
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
                                            <td>000.00</td>
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

                        
                    Hi , looks like your PF YTD Statement has not been generated yet.Drop by later and we'll have it ready for you.


                    </div>



                </div>
            </div>
        </div>

    </div>

</body>

</html>
@endsection