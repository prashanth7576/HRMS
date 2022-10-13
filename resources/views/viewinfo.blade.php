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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    body {
        min-height: 100vh;

    }

    .side-bar {
        background-color: white;
        box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
        width: 230px;
        height: 100vh;
        padding: 5px;
        position: fixed;
        margin-top: -24%;



    }

    .side-bar .menu {
        width: 100%;


    }

    .side-bar.menu.item {
        position: relative;
        cursor: pointer;
        font-size: 16px;
    }

    .side-bar .menu .item a {

        color: #909090;
        display: block;
        padding: 5px 20px;
        line-height: 35px;
        text-decoration: none;
    }

    .side-bar .menu .item a:hover {
        background: white;
        transition: 0.3s ease;
    }

    .side-bar .menu .item i {
        margin-right: 15px;
    }

    .side-bar .menu .item a .dropdown {
        position: absolute;
        margin: 10px;
        right: 0;
        transition: 0.3s ease;

    }

    .side-bar .menu .item .sub-menu {
        background: white;
        display: none;
        font-size: 13px;
    }

    .side-bar .menu .item .sub-menu .a {
        padding-left: 80px;

    }



    .navone {
        position: fixed;
        width: 85%;
        margin-left: 15%;
        background-color: white;
        box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
        padding: 8px;
        border-top-right-radius: 10px;

    }

    nav>.log {
        display: flex;
        margin-left: auto;
        margin-right: 30px;

    }

    nav>.log>select {
        margin-left: 20px;
        border: none;
        width: 130px;
    }

    nav i {
        margin-top: 10px;
        margin-left: 30px;
    }

    .navtwo {
        visibility: hidden;
    }

    .main_container {
        width: (100% - 800px);
        margin-left: 19%;
        padding: 5px;
        transition: all 0.3s ease;
        
    }


    @media (max-width:960px) {



        .side-bar {
            visibility: hidden;
        }



        .navone {
            position: fixed;
            width: 100%;
            margin-left: 0%;
            background-color: white;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
            padding: 8px;
            border-top-right-radius: 10px;

        }

        .navone>.log {
            display: flex;
            margin-left: auto;
            margin-right: 30px;

        }

        .navone>.log>select {
            margin-left: 20px;
            border: none;
            width: 130px;
        }

        .navone i {
            margin-top: 10px;
            margin-left: 30px;
        }


        .navtwo {
            width: 25%;
            height: auto;
            position: static;
            visibility: visible;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);

        }

        .navtwo ul li a {
            margin-top: 5%;
        }

        .navtwo .logo {
            width: 130px;
            height: 50px;

        }

        .navtwo .user {
            height: 30px;
            width: 25px;
            border-radius: 50%;
        }

        .navtwo>img {
            height: 40px;
            width: 120px;
            margin-top: 5%;
        }

        .navtwo ul .profile {
            display: flex;

        }

        body {
            background-color: whitesmoke;
        }

        .main_container {
            width: (100% - 800px);
            margin-left: 0%;
            position: relative;
            padding: 5px;
            transition: all 0.3s ease;
            z-index: 10;
        }

        /* .navtwo .navbar-toggler:active .main_container{
            width: (100% - 800px);
            margin-left: 10%;
            position: relative;
            padding: 5px;
            transition: all 0.3s ease;
            z-index: 10;
        } */

    }

    @media (max-width:480px) {


        .main_container {
            width: (100% - 800px);
            margin-left: 0%;
            position: relative;
            padding: 5px;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .side-bar {
            visibility: hidden;
        }


        .navone {
            position: fixed;
            width: 100%;
            margin-left: 0%;
            background-color: white;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
            padding: 8px;
            border-top-right-radius: 10px;

        }

        .navone>.log {
            display: flex;
            margin-left: auto;
            margin-right: 30px;

        }

        .navone>.log>select {
            margin-left: 20px;
            border: none;
            width: 130px;
        }

        .navone i {
            margin-top: 10px;
            margin-left: 30px;
        }


        .navtwo {
           

            height: auto;
            visibility: visible;

            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);

        }

        .navtwo ul li a {
            margin-top: 5%;
        }

        .navtwo .logo {
            width: 130px;
            height: 50px;

        }

        .navtwo .user {
            height: 30px;
            width: 25px;
            border-radius: 50%;
        }

        .navtwo>img {
            height: 40px;
            width: 120px;
            margin-top: 5%;
        }

        .navtwo ul .profile {
            display: flex;

        }

        body {
            background-color: whitesmoke;
        }




        /*


        .navone {
            position: fixed;
            width: 85%;
            margin-left: 15%;
            background-color: white;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
            padding: 8px;
            border-top-right-radius: 10px;

        }

        nav>.log {
            display: flex;
            margin-left: auto;
            margin-right: 30px;

        }

        nav > .log > select {
            margin-left: 20px;
            border: none;
            width: 130px;
        }

        nav i {
            margin-top: 10px;
            margin-left: 30px;
        } */

    }

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

    <div class="navone">
        <nav class="navbar navbar-expand-lg ">

            <div class="log">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="font-size:13px;">
                    <option selected  >Quick Links</option>
                    <option value="1" style="font-size:12px;">Sign! You cannot 'Quick Link' this page
                    </option>

                    <option value="2" style="font-size:12px">Getting Started With greytHR</option>
                    <option value="3" style="font-size:12px">Tasks</option>
                    <option value="3" style="font-size:12px">Review Workflow</option>
                </select>
                <i class="fa-solid fa-bell"></i>
                <i class="fas fa-sign-out"></i>

            </div>

        </nav>
    </div>

    <div class="navtwo" style="width:230px">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <br><br>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <br>
                    <img class="logo" src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png"
                        alt="logo">
                    <br><br>

                    <div class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="profile">

                            <div class="info" style="display:flex;">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEM9yrAx98tmTyjbwX9pqreHepJS2FnWEitrzkF-xxgBuGKdl88SBgUC4_U-8n_tUjWdE&usqp=CAU"
                                    style=" height:40px;width:25px">
                                <p style="margin-left:7%;margin-top:2%;font-weight:600">HI DYAGA</p>


                                <i class="fa fa-cog" aria-hidden="true" style="margin-top:7%;margin-left:15%"></i>
                            </div>
                            <p style="margin-top:-8%;text-align:center;font-size:12px;color:blue;margin-right:20%">View
                                My Info
                            </p>
                        </div>
</div>
                        <ul id="links" class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home"
                                        style="font-size:20px;margin-right:8%"></i>Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-server"
                                        style="font-size:20px;margin-right:8%"></i>Feeds</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-clipboard" style="font-size:20px;margin-right:8%"></i>Tasks
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:none">

                                    <li><a class="dropdown-item" href="#">Tasks</a>



                                    </li>

                                    <li><a class="dropdown-item" href="#"> Review </a>



                                    </li>


                                </ul>



                            </li>



                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-money" style="font-size:20px;margin-right:8%"></i>Salary
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:none">

                                    <li><a class="dropdown-item" href="#">payslips</a>

                                    </li>
                                    <li><a class="dropdown-item" href="#">YTD Reports</a>

                                    </li>
                                    <li><a class="dropdown-item" href="#">IT Statement</a>

                                    </li>
                                    <li><a class="dropdown-item" href="#">IT Declaration</a>

                                    </li>
                                    <li><a class="dropdown-item" href="#">Loans and Advances</a>

                                    </li>
                                    <li><a class="dropdown-item" href="#">Reimbursement</a>

                                    </li>
                                    <li><a class="dropdown-item" href="#">Proof of Investment</a>

                                    </li>
                                    <li><a class="dropdown-item" href="#">Salary Revision</a>

                                    </li>





                                </ul>



                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-calendar-o" style="font-size:20px;margin-right:8%"></i>Leave
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:none">

                                    <li><a class="dropdown-item" href="#">Leave Apply</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Leave Balances</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Leave Calendar</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Holiday Calendar</a>
                                    </li>



                                </ul>



                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-check-square-o" style="font-size:20px;margin-right:8%"></i>
                                    Attendance
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="border:none">

                                    <li><a class="dropdown-item" href="#">Attendance Info</a>

                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-book"
                                        style="font-size:20px;margin-right:8%"></i>Document Center</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-users"
                                        style="font-size:20px;margin-right:8%"></i> People</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-info-circle"
                                        style="font-size:20px;margin-right:8%"></i> Help Desk</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-bar-chart-o"
                                        style="font-size:20px;margin-right:8%"></i>Workflow Delegates</a>
                            </li>
                        </ul>


                    </div>
                </div>
        </nav>
    </div>


    <div class="side-bar">
        <div class="menu">


            <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="logo"
                height="40px" width="150px" style=" margin-top:5%">
            <br><br>
            <div class="item" style="display:flex;">
                <br>

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEM9yrAx98tmTyjbwX9pqreHepJS2FnWEitrzkF-xxgBuGKdl88SBgUC4_U-8n_tUjWdE&usqp=CAU"
                    style=" height:40px;width:25px">
                <p style="margin-left:10%;margin-top:2%;font-weight:600">HI DYAGA</p>


                <i class="fa fa-cog" aria-hidden="true" style="margin-top:7%;margin-left:15%"></i>
            </div>
            <p style="margin-top:-8%;text-align:center;font-size:12px;color:blue;margin-right:20%">View My Info</p>

            <div class="item"><a><i class="fa fa-home"></i> Home </a></div>
            <div class="item"><a><i class="fa fa-server"></i>Feeds</a></div>
            <div class="item">
                <a class="sub-btn"><i class="fa fa-clipboard"></i>Tasks<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="tasks" class="sub-item">Tasks</a>
                    <a href="#" class="sub-item">Review</a>

                </div>
            </div>
            <div class="item">
                <a class="sub-btn"><i class="fa-solid fa-hand-holding-dollar"></i>Salary<i
                        class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Payslips</a>
                    <a href="#" class="sub-item">YTD Reports</a>
                    <a href="#" class="sub-item">IT Statement</a>
                    <a href="#" class="sub-item">IT Declaration</a>
                    <a href="#" class="sub-item">Loans and Advances</a>
                    <a href="#" class="sub-item">Reimbursement</a>
                    <a href="#" class="sub-item">Proof of Investment</a>
                    <a href="#" class="sub-item">Salary Revision</a>
                </div>

            </div>
            <div class="item">
                <a class="sub-btn"><i class="fa fa-calendar"></i>Leave<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Leave Apply</a>
                    <a href="#" class="sub-item">Leave Balances</a>
                    <a href="#" class="sub-item">Leave Calendar</a>
                    <a href="#" class="sub-item">Holiday Calendar</a>
                </div>

            </div>

            <div class="item">
                <a class="sub-btn"><i class="fa fa-check-square"></i>Attendance<i
                        class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Attendance Info</a>

                </div>

            </div>
            <div class="item"><a><i class="fa fa-book"></i>Document Center</a></div>
            <div class="item"><a><i class="fa fa-users"></i>People</a></div>
            <div class="item"><a><i class="fa fa-info-circle"></i>Help Desk</a></div>
            <div class="item"><a><i class="fa fa-bar-chart"></i>Workflow Delegates</a></div>
        </div>
    </div>


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

<div class="item" style="display:flex;">

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

</div>

    
    <script type="text/javascript">
    $(document).ready(function() {
        $('.sub-btn').click(function() {
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleclass('rotate');
        });

        $('.menu-btn').click(function() {
            $('.menu-btn').css("visibility", "hidden");
        });
        $('.close-btn').click(function() {
            $('.navtwo').removeClass('active');
        });

        $('.navbar-toggler').click(function() {
            $('.navbar-toggler').css("visibility", "hidden%");
        });
    });
    </script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.sub-btn').click(function() {
            $(this).next('.sub-menu').slideToggle();

        });
    });
    </script>
   

</body>

</html>





