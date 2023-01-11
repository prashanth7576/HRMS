@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
    

    .card {
        background-color: white;
        box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
    }

    .card.item {
        position: relative;
        cursor: pointer;
        font-size: 18px;
    }

    .card .item a {
        color: black;
        display: block;
        padding: 5px 20px;
        line-height: 32px;
    }

    .card .item a:hover {
        background: white;
        transition: 0.3s ease;
    }

    .card .item i {
        margin-right: 15px;
    }

    .card .item a .dropdown {
        position: absolute;
        margin: 10px;
        right: 0;
        transition: 0.3s ease;

    }

    .card .item .sub-menu {
        background: white;

        font-size: 13px;
    }

    .card .item .sub-menu .a {
        padding-left: 80px;

    }

    </style>
</head>

<body>

    
    <div class="main_container" style="background-color:smokewhite">

<div class="row">
    <div class="col-md-2">
        <ul class="nav nav-pill nav-stacked">

            <li class="active"><a data-toggle="pill" href="#Personal"
                    style="background-color:none;color:black;">Personal</a></li><br><br>
            <li><a data-toggle="pill" href="#VoidTransfers" style="color:black">Accounts$Salary</a></li>
            <li><a data-toggle="pill" href="#PendingEmployees" style="color:black">Family</a></li>
            <li><a data-toggle="pill" href="#CompletedEmployees" style="color:black">Employement $ Job</a>
            </li>
            <li><a data-toggle="pill" href="#assets" style="color:black">Assets</a>
            </li>

        </ul>
    </div>
    <div class="col-md-9">
        <div class="tab-content">

            <div id="Personal" class="tab-pane fade">
                <div class="card">

                    <div class="item" style="display:flex;">

                        <div class="item">
                            <a class="sub-btn"></i>PROFILE<i class="fas fa-angle-right dropdown"></i></a>
                            <div class="sub-menu">
                                <br>
                                <div class="col-md-3">
                                    <a href="#" class="sub-item"><i class="fa fa-user"
                                            style="font-size:65px"></i></a>
                                    <a href="#" class="sub-item">Location</a>
                                </div>
                                <div class="col-md-5">
                                    <a href="#" class="sub-item">Name</a>
                                    <a href="#" class="sub-item">Employee ID</a>
                                    <a href="#" class="sub-item">Primary Contact No</a>
                                </div>
                                <div class="col-md-4">

                                    <a href="#" class="sub-item">Extension</a>
                                    <a href="#" class="sub-item">Company Email</a>

                                </div>
                                <br><br>



                            </div>
                        </div>

                    </div>
                </div>
                <br>

                <div class="card">

                    <div class="item" style="display:flex;">

                        <div class="item">
                            <a class="sub-btn"></i>PERSONAL<i class="fas fa-angle-right dropdown"></i></a>
                            <div class="sub-menu">

                                <br>
                                <div class="col-md-4">
                                    <a href="#" class="sub-item">Blood Group</a>
                                    <a href="#" class="sub-item">Marital Status</a>
                                    <a href="#" class="sub-item">Place of Birth</a>
                                    <a href="#" class="sub-item">Religion</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="sub-item">Date of Birth</a>
                                    <a href="#" class="sub-item">Marriage Date</a>
                                    <a href="#" class="sub-item">Residential Status</a>
                                    <a href="#" class="sub-item">Physically Challenged</a>
                                </div>
                                <div class="col-md-4">

                                    <a href="#" class="sub-item">Nationality</a>
                                    <a href="#" class="sub-item">Spouse</a>
                                    <a href="#" class="sub-item">Father Name</a>
                                    <a href="#" class="sub-item">International
                                        Employee</a>

                                </div>
                                <br><br>


                            </div>
                        </div>

                    </div>
                </div>
                <br>

                <div class="card">

                    <div class="item" style="display:flex;">

                        <div class="item">
                            <a class="sub-btn"></i>ADDRESS<i class="fas fa-angle-right dropdown"></i></a>
                            <div class="sub-menu">

                                <br>
                                <div style="display:flex">
                                    <a href="#" class="sub-item">Address</a>
                                    <a href="#" class="sub-item"></a>
                                    <a href="#" class="sub-item"></a>
                                    <a href="#" class="sub-item"></a>
                                </div>
                                <div style="display:flex">
                                    <a href="#" class="sub-item">Name</a>
                                    <a href="#" class="sub-item"></a>
                                    <a href="#" class="sub-item"></a>
                                    <a href="#" class="sub-item">Email</a>
                                </div>
                                <div style="display:flex">

                                    <a href="#" class="sub-item">Phone 1</a>
                                    <a href="#" class="sub-item">Phone 2</a>
                                    <a href="#" class="sub-item"></a>
                                    <a href="#" class="sub-item">Mobile</a>


                                </div>
                                <div style="display:flex">

                                    <a href="#" class="sub-item">Extension</a>
                                    <a href="#" class="sub-item">Fax</a>
                                    <a href="#" class="sub-item"></a>
                                    <a href="#" class="sub-item"></a>


                                </div>
                                <br><br>


                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <div class="card">

                    <div class="item" style="display:flex;">

                        <div class="item">
                            <a class="sub-btn"></i>Education<i class="fas fa-angle-right dropdown"></i></a>
                            <div class="sub-menu">
                                <a href="#" class="sub-item">NO data Found</a>


                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <br>

            <div id="VoidTransfers" class="tab-pane fade">

                <div class="card">

                    <div class="item" style="display:flex;">

                        <div class="item">
                            <a class="sub-btn"></i>BANK ACCOUNT<i class="fas fa-angle-right dropdown"></i></a>
                            <div class="sub-menu" style="display:flex">
                                <a href="#" class="sub-item">Bank Name</a>
                                <a href="#" class="sub-item">Bank Account Number</a>
                                <a href="#" class="sub-item">Branch Name</a>
                                <a href="#" class="sub-item">More</a>


                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <div class="card">

                    <div class="item" style="display:flex;">

                        <div class="item">
                            <a class="sub-btn"></i>PF ACCOUNT<i class="fas fa-angle-right dropdown"></i></a>
                            <div class="sub-menu">
                                <a href="#" class="sub-item">Not Covered Under PF</a>



                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <div class="card">

                    <div class="item" style="display:flex;">

                        <div class="item">
                            <a class="sub-btn"></i>OTHER IDS<i class="fas fa-angle-right dropdown"></i></a>
                            <div class="sub-menu" style="display:flex">

                                <a href="#" class="sub-item">Bank Account Number</a>
                                <a href="#" class="sub-item">Unverified</a>
                                <a href="#" class="sub-item">More</a>


                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div id="PendingEmployees" class="tab-pane fade">

                <h5>NO Data For Family</h5>

            </div>

            <div id="CompletedEmployees" class="tab-pane fade">

                <h3>Employment & Job</h3>
                <br>
                <div class="card">

                    <h4>Jump to: Current Position</h4>
                </div>
                <br><br>
                <div class="card" style="padding:7px;">

                    <div class="one" style="padding:5px;background-color:#fff2e6;border-radius:10px">
                        <h5>Current Position</h5>
                        <div style="float:right;margin-top:-4%">
                            <a href="#">Resign</a>
                            <a href="{{url ('timeline')}}">
                            <button type="button" class="btn btn-primary active">View Timeline</button></a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-sm-3">
                        <p>Cost Center</p>
                        <h5>NA</h5>
                        <br>
                        <p>Division</p>
                        <h5>NA</h5>
                        <br>
                        <p>Reporting To</p>
                        <h5>NA</h5>
                    </div>
                    <div class="col-sm-3">
                        <p>Department</p>
                        <h5>NA</h5>
                        <br>
                        <p>Grade</p>
                        <h5>NA</h5>
                    </div>
                    <div class="col-sm-3">
                        <p>Designation</p>
                        <h5>NA</h5>
                        <br>
                        <p>Location</p>
                        <h5>NA</h5>
                    </div>
</div>
                </div>
            </div>



            <div id="assets" class="tab-pane fade">
            <div class="card">



<div class="item">
<a class="sub-btn"></i>ACCESS CARD DETAILS<i class="fas fa-angle-right dropdown"></i></a>
<div class="sub-menu" style="display:flex">

    <a href="#" class="sub-item">Card No</a>
    <a href="#" class="sub-item">validity</a>
    <a href="#" class="sub-item">Previous</a>



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




