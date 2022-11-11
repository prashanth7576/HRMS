@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/start/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>

        .main_container{
            margin-top: -12%
        }

            
        #head{
            display: flex
        }
        .content{
            margin-left: 8px;
        }

        #filter{
            margin-left: 50px;
            color: rgb(122, 114, 114)
        }
        #select{
            margin-left: 50px;
            width: 180px;
            font-size: 17px;
            font-weight: 600

        }
        .btn {
            margin-left: 70%;
            width: 120px;
            height: 45px;
            margin-top: 20px;
        }



        #datepicker {
            margin-left: 2.5%;


        }

        /* .ui-state-highlight,
.ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
    border: 1px solid #dad55e;
    background: red;
    color: black;
} */

        .ui-widget-header {
            border: 1px solid #5bfec8 !important;
            width: 45em !important;
            font-weight: bold !important;
        }

        .ui-datepicker td a {
            height: 5em !important;
            width: 7em !important;
        }

        .ui-widget-content {
            width: 46em;
            height: auto;
            border: 1px solid blue;
        }

        .body{
            border:1px solid rgb(109, 105, 105, 0.5);
            border-radius: 5px;
            margin-right: 40px;
            width: 500px;
            margin-left: 10px
        }

        .body p {
            margin-left: 20px;
            color: rgb(86, 83, 83);
            font-size: 16px;
            font-weight: 550
        }
        tbody{
            height: 100px;
        }
        th{
            font-size: 14px !important;
            font-weight: 550 !important;
            
        }

        @media (max-width:960px) {
            .btn {
            margin-left: 50%;
            width: 120px;
            height: 45px;
            margin-top: 20px;
        }

        .main_container{
            margin-top: 2%
        }

        .body{
            border:1px solid rgb(109, 105, 105, 0.5);
            border-radius: 5px;
            margin-top: 10px;
            margin-right: 0px;
            margin-left: 20px;
            width: 700px;
            
        }

        .body p {
            margin-left: 20px;
            color: rgb(86, 83, 83);
            font-size: 16px;
            font-weight: 500
        }
        table{
            height: 100px;
        }

        th{
            font-size: 14px !important;
            font-weight: 550 !important;
            
        }

        }

 

        @media (max-width:480px) {
           

            #head{
            display: flex
        }

        #filter{
            margin-left: 20px;
            color: rgb(122, 114, 114)
        }
        #select{
            margin-left: 10px;
            width: 120px;
            font-size: 17px;
            font-weight: 600

        }
        .btn {
            margin-left: 20%;
            width: 120px;
            height: 45px;
            margin-top: 20px;
        }

      

        .body{
            border:1px solid rgb(109, 105, 105, 0.5);
            border-radius: 5px;
            margin-top: 10px;
            margin-right: 0px;
            margin-left: 10px;
            width: 350px;
            
        }

        .body p {
            margin-left: 20px;
            color: rgb(86, 83, 83);
            font-size: 16px;
            font-weight: 500
        }
        table{
            height: 100px;
        }

        th{
            font-size: 14px !important;
            font-weight: 550 !important;
            
        }


      

            #datepicker {
                margin-bottom: 5%;


            }

            /* .ui-state-highlight,
.ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
    border: 1px solid #dad55e;
    background: red;
    color: black;
} */

            .ui-widget-header {
                border: 1px solid #5bfec8 !important;
                width: 21.5em !important;
                font-weight: bold !important;
            }

            .ui-datepicker td a {
                height: 1.7em !important;
                width: 3em !important;
            }

            .ui-widget-content {
                width: 22em;
                height: auto;
                border: 1px solid blue;
            }
        }
    </style>

</head>

<body>
    <div class="main_container">
        <div class="content">

    <div class="row">
        <div  id="head" class="col-md-12">

            
            <div>
                <label id="filter" for="Category"> Filter Type</label>

                <select id="select" class="form-select" aria-label="Default select example">
                   
                    <option selected value="1"> Me </option>
                    <option value="1"> My Team </option>

                </select>

            </div>

            <button class="btn btn-primary"> <i class="fa fa-download"></i>  </button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-7">
            <div id="datepicker"></div>

        </div>

        <div class="col-md-5">

            <div class="body">
                <p> Leave Transactions  </p>
                <hr>
                <div class="table-responsive">
                    <table class="table table-responsive table-striped table-hover">
                        <thead>
                            <tr>
                                <th> Employee </th>
                                <th> Number of days </th>
                                <th> From - To </th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> - </td>
                                <td> - </td>
                                <td> - </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    </div>
</div>
</div>

</body>

</html>

<script>
    $(function() {
        $("#datepicker").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,

        });


    });
</script>

@endsection
