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

        .info {
            background-color: white;
            padding-top: 10px;
            padding-left: 15px;
            padding-bottom: 40px;
        }

        h3 {
            font-size: 25px;
            font-weight: 600;
            margin-bottom: 1%;
         
        }

        p {
            color: rgb(107, 105, 105);
        }

        .docs {
            background-color: white;
            padding: 10px;
            display: flex;
            margin: 10px;
        }
        h5{

            margin-left: 10px;
        }

        .docs>p {
            color: rgb(29, 25, 25);
        }

        .docs>a {
            text-decoration: none;
            margin-left: auto;
        }

        .request {
            background-color: white;
            padding: 10px;
            display: flex;
            margin: 10px;
        }

        .request > .closed{
            margin-left: auto;
        }

        .closed a{
            text-decoration: none;
        }

        .pending >p {
            color: rgb(29, 25, 25);
        }
        .content{
            margin-left: 20px;
        }
    </style>

</head>

<body>
    <div class="main_container">
        <div class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="info">

                <h3> We've got it sorted for you!</h3>
                <p> All Documents are now in one place. </p>
                <p> You can now request a new letter if you don't find the one you were looking for..</p>

            </div>

        </div>
    </div>

    <div class="row">
        <h5> Documents </h5>
        <div class="col-md-3">
            <div class="docs">
                <p> Documents </p>
                <a href="#"> View All </a>


            </div>
        </div>

        <div class="col-md-3">
            <div class="docs">
                <p> Payslips </p>
                <a href="#"> View All </a>


            </div>
        </div>

        <div class="col-md-3">
            <div class="docs">
                <p> Form 16 </p>
                <a href="#"> View All </a>


            </div>
        </div>

        <div class="col-md-3">
            <div class="docs">
                <p> Company Policies </p>
                <a href="#"> View All </a>


            </div>
        </div>


    </div>

    <div class="row">

        <div class="col-md-3">
            <div class="docs">
                <p> Forms </p>
                <a href="#"> View All </a>


            </div>
        </div>

    </div>

    <div class="row">
        <h5> Request </h5>
        <div class="col-md-3">
            <div class="request">
                <div class="pending">
                    <p> Letters </p>
                    <p style="margin-top: -15px">Pending: 0</p>

                </div>

                <div class="closed">
                    <a href="#"> View All </a>
                    <p> Closed: 0 </p>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>

@endsection
