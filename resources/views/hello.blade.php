<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
    
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
        padding: 10px 15px;
        position: fixed;
        overflow-y: auto;
    }

    side-bar .menu {
        width: 100%;
        margin-top: 80px;

    }

    .side-bar.menu.item {
        position: relative;
        cursor: pointer;
        font-size: 16px;
    }

    .side-bar .menu .item a {
        color: black;
        color: #909090;

        display: block;
        padding: 5px 20px;
        line-height: 32px;
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

    .rotate {
        transform: rotate(90deg);
    }

    .navone {
        position: fixed;
        width: 100%;
        background-color: white;
        box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
        padding: 20px;

        border-top-right-radius: 10px;
        border-top-left-radius: 10px;

    }

    @media (max-width:960px) {

        .side-bar {
            visibility: hidden;
        }

        .navone {
            position: relative;

        }

        .navtwo {
            position: relative;
            margin-top: -10%;
            opacity: 1;



        }

        .main_container {
            width: (100% - 700px);
            margin-top: 2%;
            margin-left: 0px;
            padding: 15px;
            transition: all 0.3s ease;
            background-color: whitesmoke;
        }

        .navtwo .dropdown-menu>li:hover {
            background-color: #0066ff;
        }

        .navtwo .dropdown-menu>li:hover>.submenu {
            display: block;
            background-color: #669999;
        }

        #navbarSupportedContent {
            margin-left: 5%;
        }


    }

    @media (max-width:480px) {

        .head {
            color: red;
            font-size: 70px;
        }

        .side-bar {
            visibility: hidden;
        }

        .main_container {
            width: (100% - 700px);
            margin-top: 0px;
            margin-left: 0px;
            padding: 15px;
            transition: all 0.3s ease;
            background-color: whitesmoke;
        }


        .navtwo {
            opacity: 1;

        }

        .navtwo .dropdown-menu>li:hover {
            background-color: yellow;
        }

        .navtwo .dropdown-menu>li:hover>.submenu {
            display: block;

        }

        #navbarSupportedContent {
            margin-left: 5%;
        }



    }
    </style>
</head>

<body>
    <div class="navone">
        <nav id="navone" class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <div class="topnav" style="margin-left:20%">
                    <div>
                        <h3 style="margin-bottom:-2%">Home</h3>
                        <div style="float:right;">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                                style="border:none;margin-left:-33%;width:120px">
                                <option selected>Quick Links</option>
                                <option value="1" style="font-size:12px;">Sign! You cannot 'Quick Link' this page
                                </option>

                                <option value="2" style="font-size:12px">Getting Started With greytHR</option>
                                <option value="3" style="font-size:12px">Tasks</option>
                                <option value="3" style="font-size:12px">Review Workflow</option>
                            </select>
                            <i class="fa-solid fa-bell" style="margin-left:10%"></i>
                            <i class="fas fa-sign-out" style="margin-left:10%"></i>
                        </div>
                    </div>
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
                <br>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEM9yrAx98tmTyjbwX9pqreHepJS2FnWEitrzkF-xxgBuGKdl88SBgUC4_U-8n_tUjWdE&usqp=CAU"
                    style=" height:40px;width:25px">
                <p style="margin-left:10%;margin-top:2%;font-weight:600">HI DYAGA</p>


                <i class="fa fa-cog" aria-hidden="true" style="margin-top:7%;margin-left:15%"></i>
            </div>
            <p style="margin-top:-8%;text-align:center;font-size:12px;color:blue;margin-right:20%">View My Info</p>
            <br>
            <div class="item"><a><i class="fa fa-home"></i>Home</a></div>
            <div class="item"><a><i class="fa fa-server"></i>Feeds</a></div>
            <div class="item">
                <a class="sub-btn"><i class="fa fa-clipboard"></i>Tasks<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">Tasks</a>
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
    });
    </script>
</body>

</html>