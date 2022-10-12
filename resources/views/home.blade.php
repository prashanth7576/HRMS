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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
        margin-top: -10%;
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
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                    style="font-size:13px;">
                    <option selected>Quick Links</option>
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
        <h3>Good Morning</h3>
        <div class="flex">
            <div class="two">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>

                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">

                            <p>Watch the following video to understand your new Employee Self Service portal quickly.
                            </p>
                            <p style="color:blue">Watch Video</p>
                        </div>

                        <div class="item">
                            <p>If not us, who? If not now, when?</p>
                            <p>- JOHN F. KENNEDY</p>
                        </div>


                    </div>
                </div>
            </div>

        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card"
                        style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                        <h5 style="font-weight:600">Review</h5>
                        <br>
                        <div style="text-align:center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Notepad_icon.svg/2048px-Notepad_icon.svg.png"
                                style="width:60px;height:80px;">
                            <br><br>
                            <p>Hurrah! You've nothing to review.</p>
                            <br><br>
                        </div>
                    </div>
                    <br>
                    <div class="card"
                        style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                        <h5 style="font-weight:600">IT Declaration</h5>
                        <div style="display:flex">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgxrMuXkBe3oEoY-6H0IwV5PZ1hUA8H2HDew&usqp=CAU"
                                style="width:30px;height:30px">
                            <p style="margin-left:5%">Hold on! You can submit your Income Tax (IT) declaration once
                                released.</p>
                        </div>
                    </div>
                    <br>
                    <div class="card"
                        style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                        <h5 style="font-weight:600">POI</h5>
                        <div style="display:flex">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToezQhcnxQPTROzpRK08c64VJg7mEO7DLD1A&usqp=CAU"
                                style="width:30px;height:30px">
                            <p style="margin-left:5%">Hold on! You can submit your Proof of Investments (POI) once
                                released.</p>
                        </div>

                    </div>
                    <br>
                </div>
                <div class="col-sm-4">
                    <div class="card"
                        style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                        <h5 style="font-weight:600">10 October 2022</h5>
                        <div style="display:flex">
                            <p>Monday </p>
                            <hr style="height:18px;width:2px;background-color:black;margin-left:5px;margin-top:-1px">
                            <p style="margin-left:5px">10:00am To 7:00pm</p>
                        </div>
                        <h5 style="font-weight:600">13:40:00</h5>
                        <div>
                            <div >


                                <button type="button" class="btn btn" data-bs-toggle="modal"
                                    data-bs-target="#myModal" style="color:blue" >
                                    View Swipes
                                </button>
                            </div>


                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <br><br><br><br><br><br>
                                    <div class="modal-content" style="width:600px;padding:20px">


                                        <div class="modal-header"
                                            style="height:50px;padding:5px;background-color:#f0f5f5">
                                            <p>Swipes</p>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>


                                        <div style="display:flex">
                                            <p>Date : 10 Oct, 2022</p>
                                            <p style="margin-left:10%">Shift Time:10:00 to 19:00</p>
                                            <p style="margin-left:10%">Shift Type : GS</p>

                                        </div>


                                        <table class="table table-bordered">
                                            <thead style="background-color:#e6f7ff">
                                                <tr>

                                                    <th scope="col">Swipe Time</th>
                                                    <th scope="col">In/Out</th>
                                                    <th scope="col">Door/Address</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td>9:00</td>
                                                    <td>In</td>
                                                    <td>-</td>
                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary active"
                                style="float:right;margin-top:-9%;background-color:blue">Sign In</button>
                        </div>
                    </div>
                    <br>
                    <div class="card"
                        style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                        <div>
                            <h5 style="font-weight:600">Payslip</h5>
                            <a href="{{url('payslip')}}">
                            <i class="fa-solid fa-arrow-right" style="float:right;margin-top:-10%"></i></a>
                        </div>
                        <div style="display:flex">
                            <canvas id="myChart" style="width:100%;max-width:400px;margin-left:-20%"></canvas>
                            <ul style="margin-left:-10%;padding-top:15%">
                                <p style="font-weight:600">Aug 2022</p>
                                <p style="font-weight:600">30 </p>
                                <p>Paid Days</p>
                            </ul>
                        </div>
                        <br><br><br>
                        <div style="display:flex">
                            <ul>
                                <p>Gross Pay</p>
                                <p>Deduction</p>
                                <p>Net Pay</p>
                                <br><br>
                                <p style="color:blue">Download</p>
                            </ul>
                            <ul style="margin-left:50%">
                                <p><i class="fa fa-inr" aria-hidden="true"></i>***</p>
                                <p><i class="fa fa-inr" aria-hidden="true"></i>***</p>
                                <p><i class="fa fa-inr" aria-hidden="true"></i>***</p>
                                <br><br>
                                <p style="color:blue">Show Salary</p>
                            </ul>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-sm-3">
                    <div class="card"
                        style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                        <div>
                            <h5 style="font-weight:600">Upcoming Holidays</h5>
                            <a href="{{url('holidays')}}">
                            <i class="fa-solid fa-arrow-right" style="float:right;margin-top:-10%"></i></a>
                        </div>

                        <h5>24 Oct Monday</h5>
                        <p>Diwali</p>
                        <h5>25 Oct Tuesday</h5>
                        <p>Diwali</p>
                        <h5>25 Dec Sunday</h5>
                        <p>Christmas</p>

                    </div>
                    <br>
                    <div class="card"
                        style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                        <h5 style="font-weight:600">Quick Access</h5>
                        <br>
                        <div style="display:flex">
                            <ul>
                                <p>Reimbursement Payslip
                                <p>
                                <p>IT Statement</p>
                                <p>YTD Reports</p>
                                <p>Loan Statement</p>

                            </ul>
                            <p style="margin-left:15%;background-color:#fff2e6">Use quick access to view important
                                salary details.</p>

                        </div>
                    </div>
                    <br>

                    <div class="card"
                        style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                        <h5 style="font-weight:600">Track</h5>
                        <div style="text-align:center">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdsKMCAAM3wjbZaevNN6FjKGgBlZcTBFqCvQ&usqp=CAU"
                                style="width:160px;height:100px">
                            <br><br>
                            <p>All good! You've nothing new to track.</p>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <br><br><br>
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


    <script>
    var xValues = [];
    var yValues = [90, 10];
    var barColors = [

        "#005580",
        "#00e6ac"
    ];

    new Chart("myChart", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            title: {
                display: true,

            }
        }
    });
    </script>



</body>

</html>