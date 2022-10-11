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
            height: 250px;
            padding: 10px;
            margin-left: 0px;
            border-radius: 5px;
        }

        .form-select{
            margin-left: auto;
            width: 120px;
            margin-right: 30px
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
                height: 250px;
                padding: 10px;
                margin-left: 0px;
                border-radius: 5px;
            }

           
        }

        @media (max-width:480px) {
          
        }
    </style>

</head>

<body>
<div class="main_container">

    <div class="row">
        <div id="apply" class="col-md-12">
            
            <div>
              

                <select class="form-select" aria-label="Default select example">
                   
                    <option selected value="1"> 2022 </option>
                    <option value="2"> 2023 </option>

                </select>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="content">
              
            </div>
        </div>

        <div class="col-md-3">
            <div class="content">
               
            </div>
        </div>



        <div class="col-md-3">
            <div class="content">

            </div>
        </div>

        <div class="col-md-3">
            <div class="content">

            </div>
        </div>
    </div>

    <div class="row">



        <div class="col-md-3">
            <div class="content">
                
            </div>
        </div>

        <div class="col-md-3">
            <div class="content">
                
            </div>
        </div>

        <div class="col-md-3">
            <div class="content">
                
            </div>
        </div>

        <div class="col-md-3">
            <div class="content">
                
            </div>
        </div>

    </div>

    <div class="row">



        <div class="col-md-3">
            <div class="content">
                
            </div>
        </div>

        <div class="col-md-3">
            <div class="content">
                
            </div>
        </div>

        <div class="col-md-3">
            <div class="content">
                
            </div>
        </div>

        <div class="col-md-3">
            <div class="content">
                
            </div>
        </div>

    </div>
</div>

</body>

</html>

@endsection
