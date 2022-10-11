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
        body {
            background-color: whitesmoke;
        }

        .content {
            background-color: white;
            border: 1px solid rgb(121, 116, 116, 0.5);
            margin: 20px;
            width: 320px;
            height: 200px;
            padding: 10px;
            margin-left: 30px;
            border-radius: 5px;
        }

        .title {
            display: flex;
            margin-top: 10px
        }

        p {
            color: rgb(109, 101, 101)
        }

        .subtitle {
            font-size: 16px;
            font-weight: 650;
            margin-left: 15px
        }

        .count {
            margin-left: auto;
            margin-right: 20px;

        }

        .balancecount {
            text-align: center;
            color: black;
            font-size: 20px;
            font-weight: 600;
            margin-top: 10px;
        }

        .balancetitle {
            text-align: center;

            font-size: 17px;
            font-weight: 600;
            margin-top: -10px;
        }

        .details {
            text-align: center;

            font-size: 18px;
            font-weight: 600
        }

        .details a {
            text-decoration: none;
        }
        .btn{
            margin-left: 10px;
            width: 100px;
        }
        #apply{
            display: flex;
            margin-left: 80%
        }

        .btn i{
color: white;

        }

        @media (max-width:960px) {
            body {
                background-color: whitesmoke;
            }

            .content {
                background-color: white;
                border: 1px solid rgb(121, 116, 116, 0.5);
                margin: 20px;
                width: 92%;
                height: 200px;
                padding: 10px;
                margin-left: 30px;
                border-radius: 5px;
            }

            .title {
                display: flex;
                margin-top: 10px
            }

            p {
                color: rgb(109, 101, 101)
            }

            .subtitle {
                font-size: 16px;
                font-weight: 650;
                margin-left: 15px
            }

            .count {
                margin-left: auto;
                margin-right: 20px;

            }

            .balancecount {
                text-align: center;
                color: black;
                font-size: 20px;
                font-weight: 600;
                margin-top: 10px;
            }

            .balancetitle {
                text-align: center;

                font-size: 17px;
                font-weight: 600;
                margin-top: -10px;
            }

            .details {
                text-align: center;

                font-size: 18px;
                font-weight: 600
            }

            .details a {
                text-decoration: none;
            }
            #apply{
                margin-left: 60%
            }
        }

        @media (max-width:480px) {
            #apply{
                margin-left: 30%
            }
        }
    </style>

</head>

<body>
    <div class="main_container">

    <div class="row">
        <div id="apply" class="col-md-12">
            
            <button class="btn btn-outline-primary"> Apply </button>
            <button class="btn btn-primary"> <i class="fa fa-download"></i> </button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="content">
                <div class="title">
                    <p class="subtitle">
                        Loss Of Pay
                    </p>

                    <p class="count"> Granted: 0</p>
                </div>


                <p class="balancecount"> 0 </p>
                <p class="balancetitle"> Balance </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="content">
                <div class="title">
                    <p class="subtitle">
                        Casual Leave
                    </p>

                    <p class="count"> Granted: 2</p>
                </div>


                <p class="balancecount"> 02 </p>
                <p class="balancetitle"> Balance </p>
                <p class="details"> <a href="#"> View Details</a> </p>
            </div>
        </div>



        <div class="col-md-3">
            <div class="content">
                <div class="title">
                    <p class="subtitle">
                        Comp - Off
                    </p>

                    <p class="count"> Granted: 0</p>
                </div>


                <p class="balancecount"> 0 </p>
                <p class="balancetitle"> Balance </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="content">
                <div class="title">
                    <p class="subtitle">
                        Sick Leave
                    </p>

                    <p class="count"> Granted: 3</p>
                </div>


                <p class="balancecount"> 03 </p>
                <p class="balancetitle"> Balance </p>
                <p class="details"> <a href="#"> View Details</a> </p>
            </div>
        </div>
    </div>

    <div class="row">



        <div class="col-md-3">
            <div class="content">
                <div class="title">
                    <p class="subtitle">
                        Privileged Leave
                    </p>

                    <p class="count"> Granted: 0</p>
                </div>


                <p class="balancecount"> 0 </p>
                <p class="balancetitle"> Balance </p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="content">
                <div class="title">
                    <p class="subtitle">
                        Paternity Leave
                    </p>

                    <p class="count"> Granted: 0</p>
                </div>


                <p class="balancecount"> 0 </p>
                <p class="balancetitle"> Balance </p>
            </div>
        </div>

    </div>
</div>
</body>

</html>

@endsection
