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
    
    .one {
        background-color: white;
        box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
        padding: 10px;
        decoration: none;
    }

    .one.item {
        position: relative;
        cursor: pointer;
        font-size: 18px;
    }

    .one .item p {
        color: black;

        display: block;



    }

    .one .item p:hover {
        background: white;
        transition: 0.3s ease;
    }

    .one .item i {
        margin-right: 15px;
    }

    .one .item p .dropdown {
        float: right;
        margin: 10px;
        right: 0;
        transition: 0.3s ease;

    }

    .one .item .sub-menu {
        background: white;

        font-size: 13px;
    }

    .one .item .sub-menu .p {
        padding-left: 80px;

    }

    li {
        list-style: none;
    }

//
</style>


</head>

<body style="background-color: whitesmoke">

    <div class="main_container">
        <div class="flex" style="display:flex">


            <div class="row">
                <div id="links" class="col-md-4" style="width:250px">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical" >


                            <ul >
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

            <div class="row">
<div class="col-md-10">

                <br>


                <div class="tab-content" id="v-pills-tabContent">



                    <div class="tab-pane fade show active " id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-10" >


                                <br>


                                




                                <div class="one">



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


                                
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab" tabindex="0">

                        <div class="row">
                            <div class="col-md-10">




                                <div class="content">



                                    <p class="head"> Applying for Restricted Holiday </p>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                        aria-labelledby="v-pills-disabled-tab" tabindex="0">

                        <div class="row">
                            <div class="col-md-12">




                                <div class="content">



                                    <p class="head"> Appliying for Leave Cancel </p>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-12">




                                <div class="content">



                                    <p class="head"> Appliying for Comp. Off Grant </p>


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