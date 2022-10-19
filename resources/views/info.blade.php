@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>




    <style>
    #col {
        margin-top: -2%;

    }

    #family {
        margin-top: -48%;
        margin-left: 10%
    }

    #employement {
        margin-top: -49%;
        margin-left: 1%
    }

    #asset {
        margin-top: -2%
    }

    .card {
        background-color: white;
        box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
        padding: 10px;
        decoration: none;
    }

    .card.item {
        position: relative;
        cursor: pointer;
        font-size: 18px;
    }

    .card .item p {
        color: black;

        display: block;



    }

    .card .item p:hover {
        background: white;
        transition: 0.3s ease;
    }

    .card .item i {
        margin-right: 15px;
    }

    .card .item p .dropdown {
        position: absolute;
        margin: 10px;
        right: 0;
        transition: 0.3s ease;

    }

    .card .item .sub-menu {
        background: white;

        font-size: 13px;
    }

    .card .item .sub-menu .p {
        padding-left: 80px;

    }

    li {
        list-style: none;
    }



    @media (max-width:960px) {
        #family {
            margin-top: -70%;

        }

        #employement {
            margin-top: -70%;
            margin-left: 1%
        }

        #asset {
            margin-top: -600px
        }
    }

    @media (max-width:480px) {
        #family {
            margin-top: -450px;

        }

        #employement {
            margin-top: -450px;
            margin-left: 1%
        }

        #asset {
            margin-top: -800px
        }
    }
    </style>


</head>

<body style="background-color: whitesmoke">

    <div class="main_container">
        <div class="flex" style="display:flex">
            <div class="row">
                <div id="links" class="col-md-4" style="width:250px">


                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">

                            <ul>
                                <li>
                                    <button class="btn btn-link  active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true"
                                        style="text-decoration:none;color:black;"> <span id="spanone"> Personal
                                        </span></button>
                                </li>
                                <li>
                                    <button class="btn btn-link " id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false"
                                        style="text-decoration:none;color:black;"> <span id="spantwo"> Accounts $
                                            Salary </span> </button>
                                </li>
                                <li>
                                    <button class="btn btn-link " id="v-pills-disabled-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-disabled" type="button" role="tab"
                                        aria-controls="v-pills-disabled" aria-selected="false"
                                        style="text-decoration:none;color:black;"> <span id="spanthree"> Family
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button class="btn btn-link " id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false"
                                        style="text-decoration:none;color:black;"> <span id="spanfour"> Employment
                                            $ Job
                                        </span></button>
                                </li>
                                <li>
                                    <button class="btn btn-link " id="v-pills-message-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-message" type="button" role="tab"
                                        aria-controls="v-pills-message" aria-selected="false"
                                        style="text-decoration:none;color:black;"> <span id="spanfour"> Assets
                                        </span></button>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>




            </div>

            <div>




                <br>
                <div class="row">
                    <div id="col" class="col-md-10">
                        <div class="tab-content" id="v-pills-tabContent">



                            <div class="tab-pane fade show active " id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">




                                <div class="content">


                                    <div class="card">



                                        <div class="item">
                                            <p class="sub-btn"></i>PROFILE<i class="fas fa-angle-right dropdown"></i>
                                            </p>
                                            <div class="sub-menu">
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p class="sub-item"><i class="fa fa-user"
                                                                style="font-size:65px"></i></p>
                                                        <p class="sub-item">Location</p>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <p>Name</p>
                                                        <p class="sub-item">Employee ID</p>
                                                        <p class="sub-item">Primary Contact No</p>
                                                    </div>
                                                    <div class="col-md-4">

                                                        <p class="sub-item">Extension</p>
                                                        <p class="sub-item">Company Email</p>

                                                    </div>
                                                </div>
                                                <br><br>



                                            </div>


                                        </div>
                                    </div>
                                    <br>
                                    <div class="card">



                                        <div class="item">
                                            <p class="sub-btn">PERSONAL</i><i class="fas fa-angle-right dropdown"></i>
                                            </p>
                                            <div class="sub-menu">
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="sub-item">Blood Group</p>
                                                        <p class="sub-item">Marital Status</p>
                                                        <p class="sub-item">Place of Birth</p>
                                                        <p class="sub-item">Religion</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="sub-item">Date of Birth</p>
                                                        <p class="sub-item">Marriage Date</p>
                                                        <p class="sub-item">Residential Status</p>
                                                        <p class="sub-item">Physically Challenged</p>
                                                    </div>
                                                    <div class="col-md-4">

                                                        <p class="sub-item">Nationality</p>
                                                        <p class="sub-item">Spouse</p>
                                                        <p class="sub-item">Father Name</p>
                                                        <p class="sub-item">International
                                                            Employee</p>

                                                    </div>
                                                </div>
                                                <br><br>



                                            </div>


                                        </div>
                                    </div>
                                    <br>
                                    <div class="card">



                                        <div class="item">
                                            <p class="sub-btn">ADDRESS</i><i class="fas fa-angle-right dropdown"></i>
                                            </p>
                                            <div class="sub-menu">
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="sub-item">Address</p>
                                                        <p class="sub-item">Name</p>
                                                        <p class="sub-item">Phone 1</p>
                                                        <p class="sub-item">Extension</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="sub-item">-</p>
                                                        <p class="sub-item">-</p>
                                                        <p class="sub-item">Phone 2</p>
                                                        <p class="sub-item">Fax</p>
                                                    </div>
                                                    <div class="col-md-4">

                                                        <p class="sub-item">-</p>
                                                        <p class="sub-item">Email</p>
                                                        <p class="sub-item">Mobile</p>
                                                        <p class="sub-item">-</p>

                                                    </div>
                                                </div>
                                                <br><br>



                                            </div>


                                        </div>
                                    </div>
                                    <br>
                                    <div class="card">

                                        <div class="item" style="display:flex;">

                                            <div class="item">
                                                <p class="sub-btn"></i>Education<i
                                                        class="fas fa-angle-right dropdown"></i></p>
                                                <div class="sub-menu">
                                                    <p class="sub-item">NO data Found</p>


                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="col" class="col-md-12">
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">

                                <div class="card">

                                    <div class="item" style="display:flex;">

                                        <div class="item">
                                            <p class="sub-btn"></i>BANK ACCOUNT<i
                                                    class="fas fa-angle-right dropdown"></i></p>
                                            <div class="sub-menu" style="display:flex">
                                                <p class="sub-item" style="padding:10px">Bank Name</p>
                                                <p class="sub-item" style="padding:10px">Bank Account Number</p>
                                                <p class="sub-item" style="padding:10px">Branch Name</p>
                                                <p class="sub-item" style="padding:10px">More</p>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>

                                <div class="card">

                                    <div class="item" style="display:flex;">

                                        <div class="item">
                                            <p class="sub-btn"></i>PF ACCOUNT<i
                                                    class="fas fa-angle-right dropdown"></i></p>
                                            <div class="sub-menu">
                                                <p class="sub-item">Not Covered Under PF</p>



                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br>

                                <div class="card">

                                    <div class="item" style="display:flex;">

                                        <div class="item">
                                            <p class="sub-btn"></i>OTHER IDS<i
                                                    class="fas fa-angle-right dropdown"></i></p>
                                                    <div class="sub-menu" style="display:flex;">

<p class="sub-item" style="padding:10px">Bank Account Number</p>
<p class="sub-item" style="padding:10px">Unverified</p>
<p class="sub-item" style="padding:10px">More</p>


</div>

                                        </div>
                                    </div>

                                </div>

                                                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div id="family" class="col-md-12">
                            <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">


                                <h5>NO Data For Family</h5>



                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div id="employement" class="col-md-12">
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0">


                                <h5>Employment & Job</h5>
                                <br>
                                <div class="card">

                                    <p>Jump to: Current Position</p>
                                </div>
                                <br><br>
                                <div class="card" style="padding:7px;">

                                    <div class="one" style="padding:5px;background-color:#fff2e6;border-radius:10px">
                                        <h5>Current Position</h5>
                                        <div style="float:right;margin-top:-4%">
                                            <a href="#" tyle="margin-left:-3%">Resign</a>
                                            <a href="{{url ('timeline')}}">
                                                <button type="button" class="btn btn-primary active">View
                                                    Timeline</button></a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-4">
                                            <p>Cost Center</p>
                                            <p>NA</p>
                                            <br>
                                            <p>Division</p>
                                            <p>NA</p>
                                            <br>
                                            <p>Reporting To</p>
                                            <p>NA</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Department</p>
                                            <p>NA</p>
                                            <br>
                                            <p>Grade</p>
                                            <p>NA</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>Designation</p>
                                            <p>NA</p>
                                            <br>
                                            <p>Location</p>
                                            <p>NA</p>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div id="asset" class="col-md-12">
                            <div class="tab-pane fade" id="v-pills-message" role="tabpanel"
                                aria-labelledby="v-pills-message-tab" tabindex="0">


                                <div class="card" style="margin-top:-72%">



                                    <div class="item">
                                        <p class="sub-btn"></i>ACCESS CARD DETAILS<i
                                                class="fas fa-angle-right dropdown"></i></p>
                                        <div class="sub-menu" style="display:flex">

                                            <p class="sub-item" style="padding:10px">Card No</p>
                                            <p class="sub-item" style="padding:10px">validity</p>
                                            <p class="sub-item" style="padding:10px">Previous</p>



                                        </div>

                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>

    </div>


</body>

</html>

@endsection