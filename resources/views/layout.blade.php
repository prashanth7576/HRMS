{{-- @extends('layouts.app')

@section('content')
<div class="main_container">

    <h1>dfuohfxkld,m.kl</h1>

</div>



@endsection --}}


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
            margin-top: -18.2%;



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
            line-height: 37px;
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
            margin-left: 16%;
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
                width: 50%;
                
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






      

       
    </style>
</head>

<body>

    <div class="navone">
        <nav class="navbar navbar-expand-lg ">

            <div class="log">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
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

    <div class="navtwo">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">

                <button  class="navbar-toggler" type="button" data-bs-toggle="collapse"
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

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="profile">

                            <li class="nav-item">
                                <img class="user"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEM9yrAx98tmTyjbwX9pqreHepJS2FnWEitrzkF-xxgBuGKdl88SBgUC4_U-8n_tUjWdE&usqp=CAU">
                            </li>

                            <p class="name"> Hi  </p>

                        </div>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Feeds </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Tasks
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#"> Tasks </a></li>
                                <li><a class="dropdown-item" href="#"> Review </a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Salary
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="tasks"> Payslip </a></li>
                                <li><a class="dropdown-item" href="#"> YTD Reports </a></li>
                                <li><a class="dropdown-item" href="#"> IT Statements </a></li>
                                <li><a class="dropdown-item" href="#"> IT Declaration </a></li>
                                <li><a class="dropdown-item" href="#"> Loans and Advances </a></li>
                                <li><a class="dropdown-item" href="#"> Reimbursement </a></li>
                                <li><a class="dropdown-item" href="#"> Proof of Investment </a></li>
                                <li><a class="dropdown-item" href="#"> Salary Revision </a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Leave
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#"> Leave Apply </a></li>
                                <li><a class="dropdown-item" href="#"> Leave Balances </a></li>
                                <li><a class="dropdown-item" href="#"> Leave Calendar </a></li>
                                <li><a class="dropdown-item" href="#"> Holiday Calendar </a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Attendance
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#"> Attendance Info </a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#"> Document Center</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> People </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#"> Helpdesk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Worlflow Delegates </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Settings </a>
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
                <a class="sub-btn"><i class="fa fa-clipboard"></i>Tasks<i
                        class="fas fa-angle-right dropdown"></i></a>
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

@yield('content')
   
</body>

</html>



