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
                font-weight: 600;
            }

            #spantwo {
                margin-right: 60px;
                font-weight: 600;
            }

            #spanthree {
                margin-right: 70px;
                font-weight: 600;
            }

            #spanfour {
                margin-right: 110px;
                font-weight: 600;
            }

            #spanfive {
                margin-left: -50px;
                font-weight: 600;
            }

            #spansix {
                margin-right: 80px;
                font-weight: 600;
            }

            #spanseven {
                margin-right: 15px;
                font-weight: 600;
            }

            #spaneight {
                margin-right: 80px;
                font-weight: 600;
            }

            .title {
                margin-left: 20px;
                margin-top: 20px;
                color: rgb(125, 121, 121, 0.7);
            }

            #links {
                background-color: white;
                height: 729px;
                border: 1px solid rgba(99, 97, 97, 0.2);
                border-radius: 5px;
                position: fixed;
                width: 210px;
                margin-left: 8px;
                margin-top: -4.2%
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
            }

            .content {
                margin-left: 22.5%;
                border: 1px solid rgb(132, 127, 127, 0.5);
                height: 60vh;
                width: 130vh;
                background-color: white;
                border-radius: 5px;
            }

            .tab-content {
                margin-top: -4.5%
            }

            @media (max-width:960px) {



                .nav-link {
                    width: 120px;
                }

                #spanone {
                    margin-left: -10px;
                    font-size: 15px;
                }

                #spantwo {
                    margin-left: -15px;
                    font-size: 15px;
                }

                #spanthree {
                    margin-left: -16px;
                    font-size: 15px;
                }

                #spanfour {
                    margin-left: -10px;
                    font-size: 15px;
                }

                #spanfive {
                    margin-left: -15px;
                    font-size: 15px;
                }

                #spansix {
                    margin-left: -60px;
                    font-size: 15px;
                }

                #spanseven {
                    margin-left: -40px;
                    font-size: 15px;
                }

                #spaneight {
                    margin-left: -20px;
                    font-size: 15px;
                }

                .title {
                    margin-left: 20px;
                    margin-top: 20px;
                    color: rgb(125, 121, 121, 0.7);
                }

                #links {
                    background-color: white;
                    height: 725px;
                    border: 1px solid rgba(99, 97, 97, 0.2);
                    border-radius: 5px;
                    padding-top: 15%;
                    position: fixed;
                    width: 160px;
                    margin-left: 8px;
                    margin-top: -2.2%;
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
                }

                .content {
                    margin-left: 22.5%;
                    border: 1px solid rgb(132, 127, 127, 0.5);
                    height: 60vh;
                    width: 80vh;
                    background-color: white;
                    border-radius: 5px;
                }

                .tab-content {
                    margin-top: -4.5%
                }



            }


            @media (max-width:480px) {




                .nav-link {
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
                    background-color: white;
                    height: 725px;
                    border: 1px solid rgba(99, 97, 97, 0.2);
                    border-radius: 5px;
                    padding-top: 15%;
                    position: fixed;
                    width: 115px;
                    margin-left: 8px;
                    margin-top: -1.2%;
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

                .content {
                    margin-left: 32.5%;
                    border: 1px solid rgb(132, 127, 127, 0.5);
                    height: 60vh;
                    width: 32vh;
                    background-color: white;
                    border-radius: 5px;
                }

                .tab-content {
                    margin-top: -4.5%
                }









            }
        </style>
    </head>

    <body style="background-color: whitesmoke">
        <div class="main_container">

            <div class="row">
                <div id="links" class="col-md-2">


                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">

                            <p class="title"> ATTENDANCE </p>

                            <button class="nav-link active" id="v-pills-attendance-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-attendance" type="button" role="tab"
                                aria-controls="v-pills-confirmation" aria-selected="true"> <span id="spanone"> Attendance
                                </span> </button>

                            <p class="title"> EMPINFO </p>

                            <button class="nav-link " id="v-pills-confirmation-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-confirmation" type="button" role="tab"
                                aria-controls="v-pills-confirmation" aria-selected="true"> <span id="spantwo">
                                    Confirmation
                                </span> </button>
                            <button class="nav-link " id="v-pills-resignation-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-resignation" type="button" role="tab"
                                aria-controls="v-pills-resignation" aria-selected="true"> <span id="spanthree"> Resignation
                                </span> </button>

                            <p class="title"> Leave </p>
                            <button class="nav-link " id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true"> <span id="spanfour"> Leave </span></button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false"> <span id="spanfive"> Leave Cancel
                                </span> </button>
                            <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-disabled" type="button" role="tab"
                                aria-controls="v-pills-disabled" aria-selected="false"> <span id="spansix"> Comp Off
                                </span>
                            </button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false"> <span id="spanseven"> Restricted
                                    Holiday
                                </span></button>
                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
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

                                    <h1> Attendance Regularization </h1>

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

                                    <h1> Resignation </h1>

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

                                    <h1> confirmation </h1>

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

                                    <h1> Home </h1>

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

                                    <h1> Home </h1>

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

                                    <h1> Home </h1>

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

                                    <h1> Home </h1>

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

                                    <h1> Home </h1>

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
