@extends('layouts.apps')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>


        <style>
            .side-bar {
                margin-top: -7.5%
            }


            .col-md-8 {
                margin-top: 10px;
                margin-left: 0px;

            }

            .col-md-4 {
                margin-top: 10px;

            }

            .content {
                border: 1px solid lightgray;
                border-radius: 5px;
                padding: 10px;
                margin: 5px;
                background-color: white;
                margin-left: -5%
            }

            #content {
                margin-left: 30px
            }

            #user {
                margin-top: -10px
            }

            .date {
                border: 1px solid lightgray;
                border-top-left-radius: 5px;
                border-bottom-left-radius: 5px;
                padding: 5px;
                background-color: lightyellow;
                width: 300px;
                height: 120px;

            }

            .days {
                border: 1px solid lightgray;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
                padding: 5px;
                margin: 0px;
                background-color: lightyellow;
                width: 220px;
                height: 120px;
                text-align: center
            }

            .data {
                display: flex;

            }

            .data>p {
                margin-left: 20px
            }

            .title {
                display: flex
            }

            .title>p {
                margin-left: 20px
            }

            .session {
                display: flex
            }

            .session>p {
                margin-left: 20px
            }

            .details {
                display: flex
            }

            .balance {
                display: flex;
                margin-top: 18px
            }

            .leavetype {
                margin-left: 100px;
                font-weight: 550;
                color: rgb(114, 111, 111)
            }

            hr {
                width: 106%;
                margin-left: -40px
            }

            .applying {
                display: flex
            }

            .name {

                margin-left: 100px;
                font-weight: 550;
                color: rgb(114, 111, 111)
            }

            .reason {
                display: flex
            }

            #reason {

                margin-left: 128px;
                font-weight: 550;
                color: rgb(114, 111, 111)
            }


            .contact {
                display: flex
            }

            #contact {

                margin-left: 123px;
                font-weight: 550;
                color: rgb(114, 111, 111)
            }

            span {
                font-size: 17px;
                font-weight: 550
            }

            #duration {
                width: 200px;
            }

            .leaves {
                background-color: lightyellow;
                width: 200px;
                border-radius: 5px;
                padding: 15px;
                font-size: 16px;
                font-weight: 550;
                height: 90px;
                margin-top: 20px
            }

            #table {
                border-radius: 5px;
                margin-top: 20px;
                margin-right: 40px
            }

            .pendinginfo>p {
                color: rgb(98, 95, 95)
            }

            /* #floatingTextarea{
                    border: none;
                } */



            #btn {
                width: 100px;
                margin-top: 15px
            }

            .form {
                margin-left: 40%
            }

            /* .description{
                    border: 1px solid lightgray;
                    border-radius: 5px
                } */

                .col-md-12{
                    background-color: white;
                   border: 1px solid lightgray;
                    padding: 15px;
                    margin-left: -2%;
                    border-radius: 5px;
                }

                .approval>  #btn{
                    margin-left: 60%;
                    margin-top: -1.5px
                }

                .approval > button{
                    width: 100px;
                    margin-left: 3px

                }

                .approval > button > a{
                    text-decoration: none
                }

                .approval > button > a:hover{
                    color: white
                }

            @media (max-width:960px) {




                .col-md-8 {
                    margin-top: 10px;
                    margin-left: 0px;

                }

                .col-md-4 {
                    margin-top: 10px;


                }

                .content {
                    border: 1px solid lightgray;
                    border-radius: 5px;
                    padding: 10px;
                    margin: 5px;
                    background-color: white;
                    margin-right: 2%;

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

                #content {
                    margin-left: 0px
                }

                #user {
                    margin-top: -10px
                }

                .date {
                    border: 1px solid lightgray;
                    border-top-left-radius: 5px;
                    border-bottom-left-radius: 5px;
                    padding: 5px;
                    background-color: lightyellow;
                    width: 300px;
                    height: 120px;

                }

                .days {
                    border: 1px solid lightgray;
                    border-top-right-radius: 5px;
                    border-bottom-right-radius: 5px;
                    padding: 5px;
                    margin: 0px;
                    background-color: lightyellow;
                    width: 220px;
                    height: 120px;
                    text-align: center
                }

                .data {
                    display: flex;

                }

                .data>p {
                    margin-left: 20px
                }

                .title {
                    display: flex
                }

                .title>p {
                    margin-left: 20px
                }

                .session {
                    display: flex
                }

                .session>p {
                    margin-left: 20px
                }

                .details {
                    display: flex
                }

                .balance {
                    display: flex;
                    margin-top: 18px
                }

                .leavetype {
                    margin-left: 100px;
                    font-weight: 550;
                    color: rgb(114, 111, 111)
                }

                hr {
                    width: 106%;
                    margin-left: -40px
                }

                .applying {
                    display: flex
                }

                .name {

                    margin-left: 100px;
                    font-weight: 550;
                    color: rgb(114, 111, 111)
                }

                .reason {
                    display: flex
                }

                #reason {

                    margin-left: 128px;
                    font-weight: 550;
                    color: rgb(114, 111, 111)
                }


                .contact {
                    display: flex
                }

                #contact {

                    margin-left: 123px;
                    font-weight: 550;
                    color: rgb(114, 111, 111)
                }

                span {
                    font-size: 17px;
                    font-weight: 550
                }

                #duration {
                    width: 200px;
                }

                .leaves {
                    background-color: lightyellow;
                    width: 200px;
                    border-radius: 5px;
                    padding: 15px;
                    font-size: 16px;
                    font-weight: 550;
                    height: 90px;
                    margin-top: 20px
                }

                #table {
                    border-radius: 5px;
                    margin-top: 20px;
                    margin-right: 40px
                }

                .pendinginfo>p {
                    color: rgb(98, 95, 95)
                }

                /* #floatingTextarea{
                    border: none;
                } */



                #btn {
                    width: 100px;
                    margin-top: 15px
                }

                .form {
                    margin-left: 40%
                }

                .col-md-12{
                    background-color: white;
                   border: 1px solid lightgray;
                    padding: 15px;
                    width: 95%;
                   margin-left: 2%;
                    border-radius: 5px;
                }

                .approval>  #btn{
                    margin-left: 35%;
                    margin-top: 0px
                }

                .approval > button{
                    width: 100px;
                    margin-left: 3px

                }

                .approval > button > a{
                    text-decoration: none
                }

                .approval > button > a:hover{
                    color: white
                }

            }

            @media (max-width:480px) {




                .col-md-8 {
                    margin-top: 10px;
                    margin-left: 0px;

                }

                .col-md-4 {
                    margin-top: 10px;


                }

                .content {
                    border: 1px solid lightgray;
                    border-radius: 5px;
                    padding: 10px;
                    margin: 5px;
                    background-color: white;
                    margin-right: 2%;

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

                #content {
                    margin-left: 0px
                }

                #user {
                    margin-top: -10px
                }

                .date {
                    border: 1px solid lightgray;
                    border-top-left-radius: 5px;
                    border-bottom-left-radius: 5px;
                    padding: 5px;
                    background-color: lightyellow;
                    width: 300px;
                    height: 120px;

                }

                .days {
                    border: 1px solid lightgray;
                    border-top-right-radius: 5px;
                    border-bottom-right-radius: 5px;
                    padding: 5px;
                    margin: 0px;
                    background-color: lightyellow;
                    width: 220px;
                    height: 120px;
                    text-align: center
                }

                .data {
                    display: flex;

                }

                .data>p {
                    margin-left: 20px
                }

                .title {
                    display: flex
                }

                .title>p {
                    margin-left: 20px
                }

                .session {
                    display: flex
                }

                .session>p {
                    margin-left: 20px
                }

                .details {
                    display: flex
                }

                .balance {
                    display: flex;
                    margin-top: 18px
                }

                .leavetype {
                    margin-left: 100px;
                    font-weight: 550;
                    color: rgb(114, 111, 111)
                }

                hr {
                    width: 115%;
                    margin-left: -35px
                }

                .applying {
                    display: flex
                }

                .name {

                    margin-left: 30px;
                    font-weight: 550;
                    color: rgb(114, 111, 111)
                }

                .reason {
                    display: flex
                }

                #reason {

                    margin-left: 56px;
                    font-weight: 550;
                    color: rgb(114, 111, 111)
                }


                .contact {
                    display: flex
                }

                #contact {

                    margin-left: 53px;
                    font-weight: 550;
                    color: rgb(114, 111, 111)
                }

                span {
                    font-size: 17px;
                    font-weight: 550
                }

                #duration {
                    width: 200px;
                }

                .leaves {
                    background-color: lightyellow;
                    width: 200px;
                    border-radius: 5px;
                    padding: 15px;
                    font-size: 16px;
                    font-weight: 550;
                    height: 90px;
                    margin-top: 20px
                }

                #table {
                    border-radius: 5px;
                    margin-top: 20px;
                    width: 320px;

                }

                .pendinginfo>p {
                    color: rgb(98, 95, 95)
                }

                /* #floatingTextarea{
            border: none;
        } */



                #btn {
                    width: 100px;
                    margin-top: 15px
                }

                .form {
                    margin-left: 30%
                }

                .col-md-12{
                    background-color: white;
                   border: 1px solid lightgray;
                    padding: 15px;
                    width: 95%;
                   margin-left: 2%;
                    border-radius: 5px;
                }

                .approval>  #btn{
                    margin-left: 1%;
                    margin-top: 0px
                }

                .approval > button{
                    width: 85px;
                    margin-left: 1px

                }

                .approval > button > a{
                    text-decoration: none
                }

                .approval > button > a:hover{
                    color: white
                }

            }
        </style>

    </head>

    <body style="background-color: whitesmoke">
        <div class="main_container">

            @include('flash-message')

            <div class="row">
                <div class="col-md-8">
                    <div class="content">

                        <div id="content">
                            <p> Applied By</p>
                            <p id="user"> {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</p>
                            <div class="details">
                                <div class="date">
                                    <div class="title">
                                        <p>From Date</p>
                                        <p>To Date</p>
                                    </div>

                                    <div class="data">


                                        <p> {{ Carbon\Carbon::parse($pending->fromdate)->format('d-m-Y') }}</p>
                                        <p> {{ Carbon\Carbon::parse($pending->todate)->format('d-m-Y') }}</p>



                                    </div>

                                    <div class="session">
                                        <p>session 1</p>
                                        <p>session 2</p>
                                    </div>
                                </div>

                                <div class="days">
                                    <p>No. of Days </p>

                                    <p class="count">{{ $pending->days }}</p>
                                </div>


                            </div>

                            <div class="balance">
                                <p> <b>Balance: {{$taken - $balance}}</b></p>
                                <p class="leavetype">{{ $pending->leavetype }}</p>
                            </div>

                            <hr>

                            <h6> Details </h6>

                            <div class="applying">
                                <p>Applying to</p>
                                <p class="name"> GYAN PRABODH DASARI</p>
                            </div>

                            <div class="reason">
                                <p> Reason</p>
                                <p id="reason">{{ $pending->reason }}</p>
                            </div>

                            <div class="contact">
                                <p> Contact </p>
                                <p id="contact"> 7675035745 </p>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <p> Application Template </p>
                        <div class="pendinginfo">
                            <p>Pending <br> with GYAN PRABODH DASARI </p>

                            <div class="description">
                                <form action="" method="post">
                                    <textarea class="form-control" id="floatingTextarea" name="description"></textarea>
                                    <div class="form">
                                        <button id="btn" class="btn btn-outline-primary" type="reset"> Cancel
                                        </button>
                                        <button id="btn" class="btn btn-outline-secondary" type="submit"> Post
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-8">
                    <div class="content">
                        <div id="content">
                            <p> <span>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</span>'s leave
                                Transaction
                            </p>

                            {{-- <select class="form-select" aria-label="Default select example" name="duration" id="duration">

                                <option selected disabled value=""> Select Duration</option>
                                <option value="Last Week"> Last Week </option>
                                <option value="Last Month"> Last Month </option>

                            </select> --}}

                            <div class="leaves">
                                <p> Total leaves taken </p>
                                <p>{{$balance }}</p>
                            </div>

                            <div class="table-responsive" id="table">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-info" style="text-align: center">
                                        <tr>
                                            <td> Leave Type </td>
                                            <td> Applied on </td>
                                            <td> Date (From - to)</td>
                                            <td> Days </td>
                                            <td> Status </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="text-align: center">
                                            <td>{{ $pending->leavetype }}</td>
                                            <td> {{ Carbon\Carbon::parse($pending->created_at)->format('d-m-Y') }}</td>
                                            <td> {{ Carbon\Carbon::parse($pending->fromdate)->format('d M, Y') }} -
                                                {{ Carbon\Carbon::parse($pending->todate)->format('d M, Y') }}<br> <span
                                                    style="margin-left: 13px; font-weight:400">
                                                    ({{ $pending->fromdatesession }}) - ({{ $pending->todatesession }})
                                                </span></td>
                                            <td>{{ $pending->days }}</td>
                                            <td>{{ $pending->status }}</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="approval">
                        <button id="btn" class="btn btn-outline-primary"> <a href="review"> <span> Back </span>
                            </a> </button>
                        <button class="btn btn-outline-primary"> <span>Forward</span>
                        </button>
                        <button class="btn btn-outline-primary"> <a href="{{ url('canceled', $pending->id) }}">
                                <span>Reject</span> </a> </button>
                        <button class="btn btn-primary"> <a href="{{ url('approved', $pending->id) }}"
                                style="color: white"> <span>Approve</span> </a>
                        </button>
                    </div>
                </div>
            </div>

            

        </div>

    </body>

    </html>
@endsection
