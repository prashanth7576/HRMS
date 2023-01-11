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
            /* .row {
                                                margin-top: 2%;
                                            } */




            /* #title{
                                                margin-top: 0%;
                                                margin-left: 15.9%;
                                                position: fixed;
                                                background-color: white;
                                                width: 100%;
                                                padding: 3px;
                                                border: 1px solid rgb(0, 0, 0, 0.1);
                                            }

                                            #feed{
                                                background-color: white;
                                                box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
                                                border-radius: 10px;
                                                padding:10px;
                                                margin-top: 10%;
                                            }

                                          

                                            #links {
                                                background-color: red;
                                                height: 725px;
                                                padding-top: 15%;
                                                border: 1px solid rgb(0, 0, 0, 0.2);
                                                position: fixed;
                                            }

                                            #head {
                                                background-color: white;
                                                height: 120px;
                                            }

                                            .list{
                                               
                                                    margin-top:100px;
                                                
                                            }

                                            li {
                                                cursor: pointer;
                                                list-style: none;
                                                margin-top: 15px;
                                                font-size: 17px;
                                                font-weight: 600;
                                                margin-left: -20px;


                                            }

                                            li.selected {
                                                background-color: rgb(109, 123, 141, 0.5);
                                                padding: 10px;
                                                border-radius: 10px;
                                                color: white;

                                            } */

            #spanone {
                margin-right: 60px;
                font-weight: 550;
                font-size: 14px;
            }

            #spantwo {
                margin-right: 60px;
                font-weight: 550;
                font-size: 14px;
            }

            #spanthree {
                margin-right: 70px;
                font-weight: 550;
                font-size: 14px;
            }

            #spanfour {
                margin-right: 110px;
                font-weight: 550;
                font-size: 14px;
            }

            #spanfive {
                margin-left: -7px;
                font-weight: 550;
                font-size: 14px;
            }

            #spansix {
                margin-left: -30px;
                font-weight: 550;
                font-size: 14px;
            }

            #spanseven {
                margin-left: -30px;
                font-weight: 550;
                font-size: 14px;
            }

            #spaneight {
                margin-right: 90px;
                font-weight: 550;
                font-size: 14px;
            }

            .title {
                margin-left: 20px;
                margin-top: 20px;
                color: rgb(125, 121, 121, 0.7);
            }

            #links {
                background-color: rgb(255, 255, 255, 0.5);
                box-shadow: 0px 10px 10px rgba(173, 170, 170, 0.2);
                height: 729px;
                border-radius: 5px;
                position: fixed;
                width: 210px;
                margin-left: 8px;
                margin-top: -14.1%;

            }

            .tab {
                color: rgb(114, 108, 108);
                font-weight: 550;
                font-size: 15px;

            }




            #form {
                display: flex;
                margin-left: 50%;

            }

            .form-floating {
                margin-left: 3%;
                width: 250px;
            }

            #pills-active-tab {
                border: 1px solid rgb(109, 123, 141, 0.5);
                border-radius: 0%;
                width: 150px;
                height: 40px;
                border-bottom-left-radius: 10px;
                border-top-left-radius: 10px;
                margin-left: 10%;

            }

            #pills-closed-tab {

                margin-left: 10%;
                border-radius: 0%;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
                width: 150px;
                height: 40px;
                border: 1px solid rgb(109, 123, 141, 0.5);
            }

            #pills-active-tab:hover {
                border: 1px solid rgb(76, 67, 247);
            }


            #pills-closed-tab:hover {
                border: 1px solid rgb(76, 67, 247);
            }

            .status {
                margin-left: 40%;
                margin-top: -18%
            }

            /* .content {
                        margin-left: 20.5%;
                        border: 1px solid rgb(132, 127, 127, 0.5);
                        height: 60vh;
                        width: 130vh;
                        background-color: white;
                        border-radius: 5px;
                    } */

            h3 {
                text-align: center;
                margin-top: 3%
            }

            .tab-content {
                margin-top: 0%
            }

            /* .side-bar {
                        margin-top: -9%
                    } */

            .content {
                /* border: 1px solid lightgray;
                        border-radius: 5px;
                        background-color: white;
                        margin-left: -5%; */

                margin-left: 18.5%;
                border: 1px solid rgb(132, 127, 127, 0.5);

                width: 140vh;
                background-color: white;
                border-radius: 5px;

            }

            .content:hover {
                border: 1px solid rgb(65, 147, 248);
            }

            .flex {
                display: flex;

            }


            .content>.flex>h1 {
                font-size: 18px;

            }

            p {
                margin-left: 20px;
                font-size: 16px;
                font-weight: 550
            }

            .approve {
                display: flex
            }



            .approve>.date {
                margin-top: 30px;
                margin-left: -87px;

            }

            button {
                width: 120px;
                height: 45px;
                margin-left: 10px;

            }

            #btn {
                margin-left: 40%
            }

            a {
                text-decoration: none;

            }

            a:hover {
                color: white;
            }

            .user {
                margin-left: 15%
            }

            .leave {
                margin-left: 15%
            }

            .period {
                margin-left: 15%
            }

            .employeid {
                margin-left: 15%
            }

            .leavetype {
                margin-left: 21%
            }

            .perioddate {
                margin-left: 15%
            }

            .approve>a {
                text-decoration: none;
                color: white
            }

            .approve>a:hover {
                color: white
            }

            #status {
                margin-left: 85%;
                margin-top: -5%;
            }

            @media (max-width:960px) {


                #pills-active-tab:hover {
                    border: 1px solid rgb(76, 67, 247);
                }


                #pills-closed-tab:hover {
                    border: 1px solid rgb(76, 67, 247);
                }

                .tab {
                    width: 120px;
                    color: rgb(114, 108, 108);
                    font-weight: 550;
                    font-size: 15px;
                }

                h3 {
                    text-align: center;
                    margin-top: 3%
                }

                #spanone {
                    margin-left: -10px;
                    font-weight: 550;
                    font-size: 14px;
                }

                #spantwo {
                    margin-left: -15px;
                    font-weight: 550;
                    font-size: 14px;
                }

                #spanthree {
                    margin-left: -16px;
                    font-weight: 550;
                    font-size: 14px;
                }

                #spanfour {
                    margin-left: -10px;
                    font-weight: 550;
                    font-size: 14px;
                }

                #spanfive {
                    margin-left: -15px;
                    font-weight: 550;
                    font-size: 14px;
                    ;
                }

                #spansix {
                    margin-left: -60px;
                    font-weight: 550;
                    font-size: 14px;
                }

                #spanseven {
                    margin-left: -40px;
                    font-weight: 550;
                    font-size: 14px;
                }

                #spaneight {
                    margin-left: -10px;
                    font-weight: 550;
                    font-size: 14px;
                }

                .title {
                    margin-left: 20px;
                    margin-top: 20px;
                    color: rgb(125, 121, 121, 0.7);
                }

                #links {
                    background-color: rgb(255, 255, 255, 0.5);
                    box-shadow: 0px 10px 10px rgba(173, 170, 170, 0.2);
                    height: 725px;
                    border-radius: 5px;
                    padding-top: 5%;
                    position: fixed;
                    width: 160px;
                    margin-left: 8px;
                    margin-top: 0%;
                }





                #form {
                    display: flex;
                    margin-left: 50%;

                }

                .form-floating {
                    margin-left: 3%;
                    width: 250px;
                }

                #pills-active-tab {
                    border: 1px solid rgb(109, 123, 141, 0.5);
                    border-radius: 0%;
                    width: 150px;
                    height: 40px;
                    border-bottom-left-radius: 10px;
                    border-top-left-radius: 10px;
                    margin-left: 10%;

                }

                #pills-closed-tab {

                    margin-left: 10%;
                    border-radius: 0%;
                    border-top-right-radius: 10px;
                    border-bottom-right-radius: 10px;
                    width: 150px;
                    height: 40px;
                    border: 1px solid rgb(109, 123, 141, 0.5);
                }

                .status {
                    margin-left: 40%;
                    margin-top: 5%
                }

                /* .content {
                            margin-left: 22.5%;
                            border: 1px solid rgb(132, 127, 127, 0.5);
                            height: 60vh;
                            width: 80vh;
                            background-color: white;
                            border-radius: 5px;
                        } */

                .tab-content {
                    margin-top: -4.5%
                }

                .content {
                    /* border: 1px solid lightgray;
                            border-radius: 5px;
                            background-color: white;
                            margin-left: 0%; */


                    margin-left: 21.5%;
                    border: 1px solid lightgray;

                    width: 80vh;
                    background-color: white;
                    border-radius: 5px;

                }

                .flex {
                    display: flex;

                    margin-left: -50px
                }

                .content>.flex>h1 {
                    font-size: 16px;

                }

                p {
                    margin-left: 20px;
                    font-size: 16px;
                    font-weight: 550
                }

                .approve {
                    display: flex
                }

                .approve>.date {
                    margin-top: 50px;
                    margin-left: -83px;
                    display: inline
                }

                button {
                    width: 120px;
                    height: 50px;
                    margin-left: 10px;

                }

                #btn {
                    margin-left: 2%
                }

                a {
                    text-decoration: none;

                }

                a:hover {
                    color: white;
                }

                .user {
                    margin-left: 15%
                }

                .leave {
                    margin-left: 15%
                }

                .period {
                    margin-left: 15%
                }

                .employeid {
                    margin-left: 15%
                }

                .leavetype {
                    margin-left: 23%
                }

                .perioddate {
                    margin-left: 15%
                }

                .approve>a {
                    text-decoration: none;
                    color: white
                }

                .approve>a:hover {
                    color: white
                }

                .main_container {
                    z-index: -1;
                }

                .navone {
                    z-index: 0;
                }

                .navtwo {
                    z-index: 0;
                }


            }


            @media (max-width:480px) {

                #pills-active-tab:hover {
                    border: 1px solid rgb(76, 67, 247);
                }


                #pills-closed-tab:hover {
                    border: 1px solid rgb(76, 67, 247);
                }


                h3 {
                    text-align: center;
                    margin-top: 3%
                }

                .tab {
                    width: 100px;
                }

                #spanone {
                    margin-left: -13px;
                    font-size: 13px;
                }

                #spantwo {
                    margin-left: -13px;
                    font-size: 13px;
                }

                #spanthree {
                    margin-left: -14px;
                    font-size: 13px;
                }

                #spanfour {
                    margin-left: -15px;
                    font-size: 13px;
                }

                #spanfive {
                    margin-left: -17px;
                    font-size: 13px;
                }

                #spansix {
                    margin-left: -62px;
                    font-size: 13px;
                }

                #spanseven {
                    margin-left: -40px;
                    font-size: 13px;
                }

                #spaneight {
                    margin-left: -17px;
                    font-size: 13px;
                }

                .title {
                    margin-left: 0px;
                    font-size: 15px;
                    margin-top: 20px;
                    color: rgb(125, 121, 121, 0.7);
                }

                #links {
                    background-color: rgb(255, 255, 255, 0.5);
                    box-shadow: 0px 10px 10px rgba(173, 170, 170, 0.2);
                    height: 725px;
                    border-radius: 5px;
                    padding-top: 15%;
                    position: fixed;
                    width: 115px;
                    margin-left: 8px;
                    margin-top: 0%;
                }





                #form {
                    display: flex;
                    margin-left: 30%;

                }

                .form-floating {
                    margin-left: 3%;
                    width: 150px;
                }

                #pills-active-tab {
                    border: 1px solid rgb(109, 123, 141, 0.5);
                    border-radius: 0%;
                    width: 100px;
                    height: 40px;
                    border-bottom-left-radius: 10px;
                    border-top-left-radius: 10px;
                    margin-left: 10%;

                }

                #pills-closed-tab {

                    margin-left: 10%;
                    border-radius: 0%;
                    border-top-right-radius: 10px;
                    border-bottom-right-radius: 10px;
                    width: 100px;
                    height: 40px;
                    border: 1px solid rgb(109, 123, 141, 0.5);
                }

                .status {
                    margin-left: 35%;
                }

                /* .content {
                            margin-left: 32.5%;
                            border: 1px solid rgb(132, 127, 127, 0.5);
                            height: 60vh;
                            width: 32vh;
                            background-color: white;
                            border-radius: 5px;
                        } */

                .tab-content {
                    margin-top: -4.5%
                }



                .content {
                    /* border: 1px solid lightgray;
                            border-radius: 5px;
                            background-color: white;
                            margin-top: 0px; */

                    margin-left: 32.5%;
                    border: 1px solid rgb(132, 127, 127, 0.5);

                    width: 60vh;
                    background-color: white;
                    border-radius: 5px;
                }

                .content>.flex {
                    margin-left: -20px
                }

                .content>.flex>h1 {
                    font-size: 15px;

                }

                .flex {
                    display: flex;
                    justify-content: space-evenly
                }

                p {
                    margin-left: 20px;
                    font-size: 12px;
                    font-weight: 550
                }

                .approve {
                    display: flex;
                    margin: 2px
                }

                .approve>.date {
                    margin-top: 40px;
                    margin-left: -60px;
                    font-size: 12px
                }

                button {
                    width: 80px;
                    height: 53px;
                    margin-left: 2px;


                }

                .btn>span {
                    font-size: 12px;
                    text-align: center;

                }

                #btn {
                    margin-left: 20%
                }

                .applied {
                    font-size: 12px
                }

                a {
                    text-decoration: none;

                }

                a:hover {
                    color: white;
                }

                .approve>a {
                    text-decoration: none;
                    color: white
                }

                .approve>a:hover {
                    color: white
                }





            }
        </style>
    </head>

    <body style="background-color: whitesmoke">
        <div class="main_container">

            @include('flash-message')

            <div class="row">
                <div id="links" class="col-md-2">


                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">

                            <p class="title"> ATTENDANCE </p>

                            <button class="tab nav-link active" id="v-pills-attendance-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-attendance" type="button" role="tab"
                                aria-controls="v-pills-confirmation" aria-selected="true"> <span id="spanone"> Attendance
                                </span> </button>

                            <p class="title"> EMPINFO </p>

                            <button class="tab nav-link " id="v-pills-resignation-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-resignation" type="button" role="tab"
                                aria-controls="v-pills-resignation" aria-selected="true"> <span id="spanthree"> Resignation
                                </span> </button>

                            <button class="tab nav-link " id="v-pills-confirmation-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-confirmation" type="button" role="tab"
                                aria-controls="v-pills-confirmation" aria-selected="true"> <span id="spantwo">
                                    Confirmation
                                </span> </button>


                            <p class="title"> Leave </p>

                            <button class="tab nav-link " id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true"> <span id="spanfour"> Leave </span></button>
                            <button class="tab nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false"> <span id="spanfive"> Leave Cancel
                                </span> </button>
                            <button class="tab nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-disabled" type="button" role="tab"
                                aria-controls="v-pills-disabled" aria-selected="false"> <span id="spansix"> Comp Off
                                </span>
                            </button>
                            <button class="tab nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false"> <span id="spanseven"> Restricted
                                    Holiday
                                </span></button>
                            <button class="tab nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false"> <span id="spaneight"> Helpdesk
                                </span></button>
                        </div>

                    </div>
                </div>




            </div>

            <div>




                <br>


                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-attendance" role="tabpanel"
                        aria-labelledby="v-pills-attendance-tab" tabindex="0">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true"> Active </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false"> Closed </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="term"
                                                    placeholder=" Search Employee " name="term">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>

                                        </div>

                                        <div class="content">

                                            <h3> Attendance </h3>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> Attendance Regularization </h3>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="tab-pane fade" id="v-pills-resignation" role="tabpanel"
                        aria-labelledby="v-pills-resignation-tab" tabindex="0">



                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-active" type="button" role="tab"
                                                aria-controls="pills-active" aria-selected="true"> Active </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-closed" type="button" role="tab"
                                                aria-controls="pills-closed" aria-selected="false"> Closed </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-active" role="tabpanel"
                                        aria-labelledby="pills-active-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> Resignation </h3>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-closed" role="tabpanel"
                                        aria-labelledby="pills-closed-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> Resignations </h3>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="v-pills-confirmation" role="tabpanel"
                        aria-labelledby="v-pills-confirmation-tab" tabindex="0">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-confirmation" type="button" role="tab"
                                                aria-controls="pills-confirmation" aria-selected="true"> Active </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-confirmations" type="button" role="tab"
                                                aria-controls="pills-confirmations" aria-selected="false"> Closed
                                            </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-confirmation" role="tabpanel"
                                        aria-labelledby="pills-confirmation-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> confirmation </h3>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-confirmations" role="tabpanel"
                                        aria-labelledby="pills-confirmations-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> confirmations </h3>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-leave" type="button" role="tab"
                                                aria-controls="pills-leave" aria-selected="true"> Active </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-leaves" type="button" role="tab"
                                                aria-controls="pills-leaves" aria-selected="false"> Closed </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-leave" role="tabpanel"
                                        aria-labelledby="pills-leave-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div>
                                            @if (auth()->user()->role == 1)
                                                @foreach ($data as $i)
                                                    @if ($i->status == 'Pending')
                                                        <div class="content">
                                                            <div class="flex" style="padding-top: 6px">
                                                                
                                                                <h1 class="user">{{ $i->firstname }}
                                                                    {{ $i->lastname }}</h1> 
                                                                
                                                                
                                                                <h1 class="leave" style="color: rgb(113, 111, 111)">Leave
                                                                    Type</h1>
                                                                <h1 class="period" style="color: rgb(113, 111, 111)">
                                                                    Period
                                                                </h1>
                                                            </div>

                                                            <div class="flex">
                                                                <h1 class="employeid" style="color: rgb(113, 111, 111)">
                                                                    #{{ $i->employeid }}</h1>
                                                                <h1 class="leavetype"> {{ $i->leavetype }}</h1>
                                                                <h1 class="perioddate">
                                                                    {{ Carbon\Carbon::parse($i->fromdate)->format('d-m-Y') }}
                                                                </h1>
                                                            </div>

                                                            <hr>

                                                            <p style="color: rgb(113, 111, 111)">No.of Days: <span
                                                                    style="color: black; font-size:17px;
                                                    font-weight:550">
                                                                    {{ $i->days }} </span></p>
                                                            <p style="color: rgb(113, 111, 111)">Balance:</p>

                                                            <hr>

                                                            <div class="approve">
                                                                <p class="applied" style="color: rgb(113, 111, 111)">
                                                                    Applied
                                                                    on:</p>

                                                                <p class="date">
                                                                    {{ Carbon\Carbon::parse($i->created_at)->format('d-m-Y') }}
                                                                </p>

                                                                <button id="btn" class="btn btn-outline-primary"> <a
                                                                        href="{{ url('pending/' . $i->id) }}"> <span>View
                                                                            Details</span>
                                                                    </a> </button>
                                                                <button class="btn btn-outline-primary">
                                                                    <span>Forward</span>
                                                                </button>
                                                                <button class="btn btn-outline-primary"> <a
                                                                        href="{{ url('canceled', $i->id) }}">
                                                                        <span>Reject</span> </a> </button>
                                                                <button class="btn btn-primary"> <a
                                                                        href="{{ url('approved', $i->id) }}"
                                                                        style="color: white"> <span>Approve</span> </a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-leaves" role="tabpanel"
                                        aria-labelledby="pills-leaves-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div>

                                            @if (auth()->user()->role == 1)
                                                @foreach ($data as $i)
                                                    @if ($i->status != 'Pending')
                                                        <div class="content">


                                                            <div class="flex" style="padding-top: 7px">
                                                               
                                                                <h1 class="user">{{ $i->firstname }}
                                                                    {{ $i->lastname }}</h1> 
                                                               
                                                                <h1 class="leave" style="color: rgb(113, 111, 111)">Leave
                                                                    Type</h1>
                                                                <h1 class="period" style="color: rgb(113, 111, 111)">
                                                                    Period
                                                                </h1>
                                                            </div>

                                                            <div class="flex" style="padding-bottom: 7px">
                                                                <h1 class="employeid" style="color: rgb(113, 111, 111)">
                                                                    #{{ $i->employeid }}</h1>
                                                                <h1 class="leavetype"> {{ $i->leavetype }}</h1>
                                                                <h1 class="perioddate">
                                                                    {{ Carbon\Carbon::parse($i->fromdate)->format('d-m-Y') }}
                                                                </h1>
                                                            </div>

                                                            <h5 id="status"
                                                                style="color: rgb(83, 190, 83); font-size:20px; font-weight:500">
                                                                {{ $i->status }}</h5>





                                                            <hr>

                                                            <p style="color: rgb(113, 111, 111)">No.of Days: <span
                                                                    style="color: black; font-size:17px;
                                                     font-weight:550">
                                                                    {{ $i['days'] }} </span></p>
                                                            <p style="color: rgb(113, 111, 111)">Reason: <span
                                                                    style="color: black; font-size:17px; font-weight:550">
                                                                    {{ $i->reason }} </span></p>

                                                            <hr>

                                                            <div class="approve">
                                                                <p class="applied" style="color: rgb(113, 111, 111)">
                                                                    Applied
                                                                    on:</p>

                                                                <p class="date">
                                                                    {{ Carbon\Carbon::parse($i->created_at)->format('d-m-Y') }}
                                                                </p>


                                                            </div>

                                                        </div>
                                                        <br>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab" tabindex="0">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-cancel" type="button" role="tab"
                                                aria-controls="pills-cancel" aria-selected="true"> Active </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-cancelation" type="button" role="tab"
                                                aria-controls="pills-cancelation" aria-selected="false"> Closed </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-cancel" role="tabpanel"
                                        aria-labelledby="pills-cancel-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> Leave Cancel </h3>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-cancelation" role="tabpanel"
                                        aria-labelledby="pills-cancelation-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> Leave Cancelation </h3>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                        aria-labelledby="v-pills-disabled-tab" tabindex="0">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-compoff" type="button" role="tab"
                                                aria-controls="pills-compoff" aria-selected="true"> Active </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-compoffs" type="button" role="tab"
                                                aria-controls="pills-compoffs" aria-selected="false"> Closed </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-compoff" role="tabpanel"
                                        aria-labelledby="pills-compoff-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> Comp Off </h3>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-compoffs" role="tabpanel"
                                        aria-labelledby="pills-compoffs-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> Comp-Off </h3>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-restricted" type="button" role="tab"
                                                aria-controls="pills-restricted" aria-selected="true"> Active </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-holiday" type="button" role="tab"
                                                aria-controls="pills-holiday" aria-selected="false"> Closed </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-restricted" role="tabpanel"
                                        aria-labelledby="pills-restricted-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> Restricted Holiday </h3>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-holiday" role="tabpanel"
                                        aria-labelledby="pills-holiday-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> Restricted Holidays </h3>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab" tabindex="0">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-helpdesk" type="button" role="tab"
                                                aria-controls="pills-helpdesk" aria-selected="true"> Active </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-helpdesks" type="button" role="tab"
                                                aria-controls="pills-helpdesks" aria-selected="false"> Closed </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-helpdesk" role="tabpanel"
                                        aria-labelledby="pills-helpdesk-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> Helpdesk </h3>

                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-helpdesks" role="tabpanel"
                                        aria-labelledby="pills-helpdesks-tab">
                                        <br>
                                        <br>
                                        <div id="form">



                                            <div class="form-floating mb-3">
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder=" Select Date Range">
                                                <label for="floatingInput"> Select Date Range</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Search Employee ">
                                                <label for="floatingInput"> Search Employee</label>
                                            </div>
                                        </div>

                                        <div class="content">

                                            <h3> Helpdesks </h3>

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
