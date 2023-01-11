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


<<<<<<< HEAD
            }

            #pills-history-tab {

                margin-left: 10%;
                border-radius: 0%;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
                width: 150px;
                height: 40px;
                border: 1px solid rgb(109, 123, 141, 0.5);
            }

            #pills-apply-tab:hover {
                border: 1px solid rgb(76, 67, 247);
            }


            #pills-pending-tab:hover {
                border: 1px solid rgb(76, 67, 247);
            }

            #pills-history-tab:hover {
                border: 1px solid rgb(76, 67, 247);
            }




            .status {
                margin-left: 40%;
                margin-top: -12%
            }

            /* .content {
                    margin-left: 18.5%;
                    border: 1px solid rgb(132, 127, 127, 0.5);
                    height: 78vh;
                    width: 140vh;
                    background-color: white;
                    border-radius: 5px;
                    margin-top: 5%
                } */

            .title {
                background-color: rgb(241, 241, 179, 0.5);
                margin: 7px;
                padding: 5px;
                border-radius: 10px;
            }


            .head {
                font-size: 15px;
                font-weight: 600;
                margin-left: 10px;
            }

            label {
                color: rgb(137, 131, 131);
                margin-left: 20px;
            }

            .form-select {
                width: 220px;
                margin-left: 20px;
            }

            .form-input {
                display: flex;
            }

            #floatingInput {
                width: 220px;
                margin-left: 20px;
                height: 10px;
                padding-bottom: -100px;

            }

            #fromdate {
                margin-top: -38px;
                margin-left: 5px
            }



            #selectInput {
                margin-left: -50px
            }

            #session {
                margin-top: -25px;
                margin-left: 5px
            }

            #floatinginput {
                height: 40px;
                width: 220px;
                margin-left: 20px
            }

            #floatingTextarea {
                width: 900px;
                margin-left: 20px;

            }

            .button {
                margin-left: 30%;
                margin-top: 10Px;
            }

            .btn {
                width: 130px;
            }

            .tab-content {
                margin-top: -6%
            }

            #employeid {
                visibility: hidden;
                margin-top: -50px
            }

            .side-bar {
                margin-top: -19%
            }


            .content {
                /* border: 1px solid lightgray;
                    border-radius: 5px;
                    background-color: white;
                    margin-left: 0%;
                    width: 70vh; */

                margin-left: 18.5%;
                border: 1px solid rgb(132, 127, 127, 0.5);
                width: 140vh;
                background-color: white;
                border-radius: 5px;
                margin-top: 5%
            }

            .flex {
                display: flex;
                

            }


            .content>.flex>h1 {
                font-size: 16px;

            }

            .approved > p {
                margin-left: 20px;
                font-size: 13px;
                font-weight: 550
                
            }

           

            .approve {
                display: flex
            }

            .approve > .applied{
                margin-left: 20px;
                font-size: 13px;
                font-weight: 550
            }



            .approve>.date {
                margin-top: 25px;
                margin-left: -70px;

            }

            button {
                width: 120px;
                height: 45px;
                margin-left: 10px;

            }

            #btn {
                margin-left: 30%
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
                margin-left: 15.5%
            }

            .leavetype {
                margin-left: 17%
            }

            .perioddate {
                margin-left: 16%
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
                text-transform: uppercase;
            }

            .content:hover{
                border: 1px solid rgb(69, 69, 241);
            }


            @media (max-width:960px) {


                #pills-apply-tab:hover {
                    border: 1px solid rgb(76, 67, 247);
                }


                #pills-pending-tab:hover {
                    border: 1px solid rgb(76, 67, 247);
                }

                #pills-history-tab:hover {
                    border: 1px solid rgb(76, 67, 247);
                }

                #links {
                    background-color: rgb(255, 255, 255, 0.5);
                    box-shadow: 0px 10px 10px rgba(173, 170, 170, 0.2);
                    height: 725px;
                    padding-top: 15%;
                    position: fixed;
                    width: 155px;
                    margin-top: 0%;

                }

                .tab-content {
                    margin-top: -4%;
                    margin-left: -20px;
                }




                #spanone {
                    margin-left: -50px;
                    font-weight: 550;
                    font-size: 14px;
                }

                #spantwo {
                    margin-left: -20px;
                    font-weight: 550;
                    font-size: 14px;
                }

                #spanthree {
                    margin-right: 30px;
                    font-weight: 550;
                    font-size: 14px;
                }

                #spanfour {
                    margin-left: -30px;
                    font-weight: 550;
                    font-size: 14px;
                }

                .tab {
                    width: 100px;
                    margin-left: -10px
                }

                #pills-apply-tab {
                    border: 1px solid rgb(109, 123, 141, 0.5);
                    border-radius: 0%;
                    width: 150px;
                    height: 40px;
                    border-bottom-left-radius: 10px;
                    border-top-left-radius: 10px;
                    margin-left: 10%;

                }

                #pills-pending-tab {
                    border: 1px solid rgb(109, 123, 141, 0.5);
                    border-radius: 0%;
                    width: 150px;
                    height: 40px;

                    margin-left: 10%;

                }

                #pills-history-tab {

                    margin-left: 10%;
                    border-radius: 0%;
                    border-top-right-radius: 10px;
                    border-bottom-right-radius: 10px;
                    width: 150px;
                    height: 40px;
                    border: 1px solid rgb(109, 123, 141, 0.5);
                }

                .status {
                    margin-left: 33%;
                    margin-top: 2%
                }

                /* .content {
                        margin-left: 27%;
                        border: 1px solid rgb(132, 127, 127, 0.5);
                        height: 82vh;
                        width: 75vh;
                        background-color: white;
                        border-radius: 5px;
                    } */

                .title {
                    background-color: rgb(241, 241, 179, 0.5);
                    margin: 7px;
                    padding: 5px;
                    border-radius: 10px;
                }

                .head {
                    font-size: 15px;
                    font-weight: 600;
                    margin-left: 10px;
                }


                label {
                    color: rgb(137, 131, 131);
                    margin-left: 20px;
                }

                .form-select {
                    width: 220px;
                    margin-left: 20px;
                }

                .form-input {
                    display: flex;
                }

                #floatingInput {
                    width: 220px;
                    margin-left: 20px;
                    height: 10px;
                    padding-bottom: -100px;

                }

                #fromdate {
                    margin-top: -38px;
                    margin-left: 5px
                }



                #selectInput {
                    margin-left: -50px
                }

                #session {
                    margin-top: -25px;
                    margin-left: 5px
                }

                #floatinginput {
                    height: 40px;
                    width: 220px;
                    margin-left: 20px
                }

                #floatingTextarea {
                    width: 500px;
                    margin-left: 20px;

                }

                .button {
                    margin-left: 30%;
                    margin-top: 10Px;
                }

                .btn {
                    width: 130px;
                }

                #employeid {
                    visibility: hidden;
                }


                .content {
                    /* border: 1px solid lightgray;
                        border-radius: 5px;
                        background-color: white;
                        margin-left: 0% */

                    margin-left: 25%;
                    border: 1px solid rgb(132, 127, 127, 0.5);

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

                .approved > p {
                    margin-left: 20px;
                    font-size: 16px;
                    font-weight: 550
                }

                .approve {
                    display: flex
                }

                .approve>.date {
                    margin-top: 40px;
                    margin-left: -70px
                }

                button {
                    width: 120px;
                    height: 50px;
                    margin-left: 10px;

                }

                #btn {
                    margin-left: 8%
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

                .content:hover{
                border: 1px solid rgb(69, 69, 241);
            }


            }


            @media (max-width:480px) {

                #pills-apply-tab:hover {
                    border: 1px solid rgb(76, 67, 247);
                }


                #pills-pending-tab:hover {
                    border: 1px solid rgb(76, 67, 247);
                }

                #pills-history-tab:hover {
                    border: 1px solid rgb(76, 67, 247);
                }

                #employeid {
                    visibility: hidden;
                }

                #links {
                    background-color: rgb(255, 255, 255, 0.5);
                    box-shadow: 0px 10px 10px rgba(173, 170, 170, 0.2);
                    height: 120vh;
                    padding-top: 15%;
                    position: fixed;
                    width: 120px;
                    margin-top: -1.4%;
                }

                .tab-content {
                    margin-top: -4%;
                    margin-left: -20px;
                }




                #spanone {
                    margin-left: -50px;
                    font-size: 14px;
                }

                #spantwo {
                    margin-left: -20px;
                    font-size: 14px;
                }

                #spanthree {
                    margin-right: 30px;
                    font-size: 14px;
                }

                #spanfour {
                    margin-left: -30px;
                    font-size: 14px;
                }

                .tab {
                    width: 100px;
                    margin-left: -10px
                }

                #pills-apply-tab {
                    border: 1px solid rgb(109, 123, 141, 0.5);
                    border-radius: 0%;
                    width: 80px;
                    height: 40px;
                    border-bottom-left-radius: 10px;
                    border-top-left-radius: 10px;
                    margin-left: 10%;

                }

                #pills-pending-tab {
                    border: 1px solid rgb(109, 123, 141, 0.5);
                    border-radius: 0%;
                    width: 80px;
                    height: 40px;

                    margin-left: 10%;

                }

                #pills-history-tab {

                    margin-left: 10%;
                    border-radius: 0%;
                    border-top-right-radius: 10px;
                    border-bottom-right-radius: 10px;
                    width: 80px;
                    height: 40px;
                    border: 1px solid rgb(109, 123, 141, 0.5);
                }

                .status {
                    margin-left: 35%;
                }

                /* .content {
                        margin-left: 27%;
                        border: 1px solid rgb(132, 127, 127, 0.5);
                        height: 107vh;
                        width: 40vh;
                        background-color: white;
                        border-radius: 5px;
                        margin-left: 38%;
                    } */

                .title {
                    background-color: rgb(241, 241, 179, 0.5);
                    margin: 7px;
                    padding: 5px;
                    border-radius: 10px;
                }

                .head {
                    font-size: 15px;
                    font-weight: 600;
                    margin-left: 10px;
                }


                label {
                    color: rgb(137, 131, 131);
                    margin-left: 20px;
                }

                .form-select {
                    width: 220px;
                    margin-left: 20px;
                }

                .form-input {
                    display: inline;
                }

                #floatingInput {
                    width: 220px;
                    margin-left: 20px;
                    height: 10px;
                    padding-bottom: -100px;

                }

                #fromdate {
                    margin-top: -38px;
                    margin-left: 5px
                }



                #selectInput {
                    margin-left: 20px
                }

                #session {
                    margin-top: -25px;
                    margin-left: 20px
                }

                #floatinginput {
                    height: 40px;
                    width: 220px;
                    margin-left: 20px
                }

                #floatingTextarea {
                    width: 220px;
                    margin-left: 20px;

                }

                .button {
                    display: flex;
                    margin-left: 5%;
                    margin-top: 10Px;
                }

                .btn {
                    width: 120px;
                    margin-left: 10px;
                }

                .content {
                    /* border: 1px solid lightgray;
                        border-radius: 5px;
                        background-color: white;
                        margin-top: 0px */

                    margin-left: 41%;
                    border: 1px solid rgb(132, 127, 127, 0.5);
                    height: 107vh;
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
                    font-size: 15px;
                    
                }

                .approve {
                    display: flex;
                    margin: 2px
                }

                .approve>.date {
                    margin-top: 40px;
                    margin-left: -40px;
                    font-size: 12px
                }

                button {
                    width: 60px;
                    height: 53px;
                    margin-left: 2px;


                }

                .btn>span {
                    font-size: 12px;
                    text-align: center;

                }

                #btn {
                    margin-left: 10%
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




                .content:hover{
                border: 1px solid rgb(69, 69, 241);
            }


            }
        </style>
    </head>

    <body style="background-color: whitesmoke">

        @include('flash-message')

        <div class="main_container">
=======
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
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


<<<<<<< HEAD
                                                </div>
                                                <br>

                                                <div class="form-input">


                                                    <div class="form-floating mb-3">
                                                        <label id="fromdate" for="form-check-label"> From date* </label>
                                                        <input type="date" class="form-control date"
                                                            id="floatingInput" placeholder="" name="fromdate">


                                                    </div>
                                                    <label id="session" for="Category"> Session*</label>
                                                    <div>


                                                        <select id="selectInput" class="form-select"
                                                            aria-label="Default select example" name="fromdatesession">
                                                            {{-- <option selected> Select type..</option> --}}
                                                            <option selected value="session 1"> Session 1 </option>
                                                            <option value="session 2"> Session 2 </option>

                                                        </select>
                                                    </div>



                                                </div>

                                                <br>

                                                <div class="form-input">


                                                    <div class="form-floating mb-3">
                                                        <label id="fromdate" for="form-check-label"> From date* </label>
                                                        <input type="date" class="form-control" id="floatingInput"
                                                            placeholder="" name="todate">


                                                    </div>

                                                    <label id="session" for="Category"> Session*</label>

                                                    <div>


                                                        <select id="selectInput" class="form-select"
                                                            aria-label="Default select example" name="todatesession">
                                                            {{-- <option selected> Select type..</option> --}}
                                                            <option selected value="session 1"> Session 1 </option>
                                                            <option value="session 2"> Session 2 </option>

                                                        </select>
                                                    </div>



                                                </div>



                                                <div>
                                                    <label for="floatingInput"> Days*</label>
                                                    <input type="text" class="form-control " id="floatinginput"
                                                        placeholder=" Number of Days" name="days">
                                                </div>



                                                <br>

                                                <div>
                                                    <label for="floatingTextarea"> Description* </label>
                                                    <textarea class="form-control" placeholder=" Enter a reason" id="floatingTextarea" name="reason"></textarea>

                                                </div>

                                                {{-- <h1 id="consume">{{$balance - $pending}}</h1>
                                                <h1 id="pending">{{$pending - $balance}}</h1>

             --}}

                                                <div class="button">

                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <button type="reset" class="btn btn-secondary">Close</button>

                                                </div>
                                            </form>

                                        </div>

                                    


                                    </div>

                                    <div class="tab-pane fade" id="pills-pending" role="tabpanel"
                                        aria-labelledby="pills-pending-tab">

                                      
                                        @foreach ($data as $i)
                                            @if ($i->status == 'Pending')
                                                <div class="content">
                                                    <div class="flex" style="padding-top: 5px">
                                                        <h1 class="user">{{ auth()->user()->firstname }}
                                                            {{ auth()->user()->lastname }}</h1>
                                                        <h1 class="leave" style="color: rgb(113, 111, 111)">Leave Type
                                                        </h1>
                                                        <h1 class="period" style="color: rgb(113, 111, 111)">Period</h1>
                                                    </div>

                                                    <div class="flex" style="padding-bottom: 5px">
                                                        <h1 class="employeid" style="color: rgb(113, 111, 111)">
                                                            #{{ $i->employeid }}</h1>
                                                        <h1 class="leavetype"> {{ $i->leavetype }}</h1>
                                                        <h1 class="perioddate">
                                                            {{ Carbon\Carbon::parse($i->fromdate)->format('d-m-Y') }}</h1>
                                                    </div>

                                                    <hr>

                                                    <p style="color: rgb(113, 111, 111)">No.of Days: <span
                                                            style="color: black; font-size:17px;
                                                font-weight:550">
                                                            {{ $i->days }} </span></p>
                                                    <p style="color: rgb(113, 111, 111)">Balance:</p>

                                                    <hr>

                                                    <div class="approve">
                                                        <p class="applied" style="color: rgb(113, 111, 111)">Applied on:
                                                        </p>

                                                        <p class="date">
                                                            {{ Carbon\Carbon::parse($i->created_at)->format('d-m-Y') }}</p>

                                                        <button id="btn" class="btn btn-outline-primary"> <a
                                                                href="{{url('pending/'. $i->id)}}"> <span>View Details</span>
                                                            </a> </button>

                                                            @if (auth()->user()->role == 1)
                                                                
                                                            
                                                        <button class="btn btn-outline-primary"> <span>Forward</span>
                                                        </button>
                                                        <button class="btn btn-outline-primary"> <a
                                                                href="{{ url('canceled', $i->id) }}"> <span>Reject</span>
                                                            </a> </button>
                                                        <button class="btn btn-primary"> <a
                                                                href="{{ url('approved', $i->id) }}"
                                                                style="color: white"> <span>Approve</span> </a> </button>
                                                                @endif
                                                    </div>
                                                </div>
                                                <br>
                                            @endif
                                        @endforeach



                                    </div>


                                    <div class="tab-pane fade" id="pills-history" role="tabpanel"
                                        aria-labelledby="pills-history-tab">

                                        @foreach ($data as $i)

                                        @if ($i->status != 'Pending')
                                            
                                        
                                        <div class="content">

                                            
                                                <div class="flex" style="padding-top: 10px">
                                                    <h1 class="user" style="color: rgb(113, 111, 111)">Category</h1>
                                                    <h1 class="leave" style="color: rgb(113, 111, 111)">Leave
                                                        Type</h1>
                                                    <h1 class="period" style="color: rgb(113, 111, 111)">No. of days
                                                    </h1>
                                                </div>

                                                <div class="flex" style="margin-bottom: 10px">
                                                    <h1 class="employeid"> Leave </h1>
                                                    <h1 class="leavetype"> {{ $i->leavetype }}</h1>
                                                    <h1 class="perioddate"> {{$i->days}} </h1>
                                                </div>

                                                <h5 id="status"
                                                    style="color: rgb(83, 190, 83); font-size:20px; font-weight:500">
                                                    {{ $i->status }}</h5>

                                               
                                            
                                            
                                            
                                                <hr>
<div class="approved">
                                                <p style="color: rgb(113, 111, 111)"> Duration: <span
                                                        style="color: rgb(60, 59, 59); font-size:14px">
                                                        {{ Carbon\Carbon::parse($i->fromdate)->format('d M, Y') }}({{$i->todatesession}}) to {{ Carbon\Carbon::parse($i->todate)->format('d M, Y') }}({{$i->fromdatesession}}) </span></p>
                                                <p style="color: rgb(113, 111, 111)">Reason: <span
                                                        style="color: rgb(69, 67, 67); font-size:14px;">
                                                        {{ $i->reason }} </span></p>
=======
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
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

<<<<<<< HEAD
    </html>

   
@endsection
=======
</html>

@endsection
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
