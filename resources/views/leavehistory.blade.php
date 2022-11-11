@extends('layouts.apps')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

        <style>
            .side-bar {
                margin-top: -9%
            }

            .content {
                border: 1px solid lightgray;
                border-radius: 5px;
                background-color: white;
                margin-left: -5%;

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
                margin-left: 50%
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

            .approve > a{
                    text-decoration: none;
                    color: white
                }

                .approve > a:hover{
                    color: white
                }

                

            @media (max-width:960px) {

                .content {
                    border: 1px solid lightgray;
                    border-radius: 5px;
                    background-color: white;
                    margin-left: 0%
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
                    margin-top: 30px;
                    margin-left: -83px
                }

                button {
                    width: 120px;
                    height: 45px;
                    margin-left: 10px;

                }

                #btn {
                    margin-left: 18%
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
                .approve > a{
                    text-decoration: none;
                    color: white
                }

                .approve > a:hover{
                    color: white
                }

            }


            @media (max-width:480px) {

                .content {
                    border: 1px solid lightgray;
                    border-radius: 5px;
                    background-color: white;
                    margin-top: 0px
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

                .approve > a{
                    text-decoration: none;
                    color: white
                }

                .approve > a:hover{
                    color: white
                }

            }
        </style>
    </head>

    <body style="background-color: whitesmoke">

        <div class="main_container">

            @foreach ($leave as $i)
                
            

            <div class="content">
                <div class="flex">
                    <h1 class="user">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</h1>
                    <h1 class="leave" style="color: rgb(113, 111, 111)">Leave Type</h1>
                    <h1 class="period" style="color: rgb(113, 111, 111)">Period</h1>
                </div>

                <div class="flex">
                    <h1 class="employeid" style="color: rgb(113, 111, 111)">#{{$i->employeid}}</h1>
                    <h1 class="leavetype"> {{$i->leavetype}}</h1>
                    <h1 class="perioddate">{{Carbon\Carbon::parse($i->fromdate)->format('d-m-Y')}}</h1>
                </div>

                <hr>

                <p style="color: rgb(113, 111, 111)">No.of Days: <span style="color: black; font-size:17px;
                    font-weight:550"> {{$i['days']}} </span></p>
                <p style="color: rgb(113, 111, 111)">Balance:</p>

                <hr>

                <div class="approve">
                    <p class="applied" style="color: rgb(113, 111, 111)">Applied on:</p>

                    <p class="date">{{Carbon\Carbon::parse($i->created_at)->format('d-m-Y')}}</p>

                    <button id="btn" class="btn btn-outline-primary"> <a href="demo/{{$i['id']}}"> <span>View Details</span>
                        </a> </button>
                    <button class="btn btn-outline-primary"> <span>Forward</span> </button>
                    <button class="btn btn-outline-primary"> <a href="{{url('canceled', $i->id)}}"> <span>Reject</span> </a> </button>
                    <button class="btn btn-primary"> <a href="{{url('approved', $i->id)}}" style="color: white"> <span>Approve</span> </a> </button>
                </div>
            </div>
            <br>

            @endforeach
            
        </div>

        

    </body>

    </html>
@endsection
