@extends('layouts.apps')
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
        .side-bar{
            margin-top: -7.5%
        }
        .col-md-11{
            background-color: white;
            margin:5%;
            border-radius:5px;
            border: 1px solid lightgrey;
            padding: 10px 
        }

        .head > p{
            color:rgb(128, 125, 125);
            font-size: 18px
        }

        .designation > p{
            color:rgb(128, 125, 125);
            font-size: 18px;
            
        }

        .joining > p{
            color:rgb(128, 125, 125);
            font-size: 18px;
            
        }

        .details > p{
            color:rgb(128, 125, 125);
            font-size: 18px
        }

        span{
            color: black;
            font-size: 18px
        }
        hr{
            width: 102%;
            margin-left: -1%;
            z-index: -1;
        }

        .head{
            display: flex;
            
        }

        .head > p{
            margin-left: 15px
        }

        .head > a> i{
            margin-left: 230px;
            color: rgb(45, 124, 242);
            margin-right: 20px;
            padding: 10px;
            background-color: rgb(222, 213, 213,0.5);
            border-radius: 5px
        }
       .head >  .employeid{
            margin-left: 30%
        }

        .designation{
            display: flex
        }

        .designation > #designation{
            margin-left: 15px
        }

        .designation > .department{
            margin-left: 22%
        }

        .designation > .reporting{
            margin-left: 33%
        }

        .joining{
            display: flex
        }

        .joining > #joining{
            margin-left: 14px
        }

        .joining > .location{
            margin-left: 21.5%
        }

        .details{
            display: flex
        }

        .details > .mobile{
            margin-left: 15px
        }

        .details > .email{
            margin-left: 21.5%
        }

        .details > .address{
            margin-left: 18.5%
        }
    </style>
</head>
<body style="background-color: whitesmoke">
<div class="main_container">

    @include('flash-message')

    @foreach ($data as $i)
        
    
    <div class="row justify-content-center">
        <div class="col-md-11">

            <div class="head">
                <p class="name"> Name:  <span> {{$i->firstname}} {{$i->lastname}} </span></p>
                <p class="employeid"> Employee Id: <span> {{$i->employeeid}} </span></p>
               <a href="{{route('onboard.edit', $i->id)}}"> <i class="fa fa-pencil" style="font-size:24px"></i> </a>
            </div>
            <hr>

            <div class="designation">
                <p id="designation"> Designation: <br> <span> {{$i->designation}} </span> </p>
                <p class="department"> Department: <br> <span> {{$i->department}} </span></p>
                <p class="reporting"> Repotiong Manager: <br> <span> {{$i->reportingmanager}} </span></p>
            </div>

            <div class="joining">
                <p id="joining"> Joining Date: <br><span>  {{ Carbon\Carbon::parse($i->joiningdate)->format('d-m-Y') }}</h1> </span></p>
                <p class="location"> Office Location: <br><span> {{$i->officelocation}} </span></p>
            </div>

            <div class="details">
                <p class="mobile"> Mobile: <br><span> {{$i->mobile}} </span></p>
                <p class="email"> Email: <br><span> {{$i->email}} </span></p>
                <p class="address"> Address: <br><span> {{$i->address}} </span></p>
            </div>

        </div>
    </div>
    @endforeach
</div>
    
</body>
</html>

@endsection