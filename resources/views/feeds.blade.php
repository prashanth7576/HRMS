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



        #links {
            background-color: white;
            height: 725px;
            padding-top: 5%;
            border: 1px solid rgb(0, 0, 0, 0.2);
            position: fixed;
            width: 220px;
            margin-left: 8px;
            margin-top: -4.2%;
        }


        #title {
            margin-top: -4.2%;
            margin-left: 14%;
            position: fixed;
            background-color: white;
            width: 100%;
            padding: 3px;
            border: 1px solid rgb(0, 0, 0, 0.1);
        }

        #feed {
            background-color: white;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
            border-radius: 10px;
            padding: 10px;
            margin-top: 10%;
            margin-left: 25%;
            margin-right: 10%;
            width: 700px;

        }

        .nav-link {
            color: rgb(114, 108, 108);
            font-weight: 600;
            margin-top: 10px;
            font-size: 18px;
            margin-left: 10%;
            width: 140px;
        }

        .spanone {
            margin-left: -55px;
            font-size: 16px;
        }

        .spantwo {
            margin-left: -60px;
            font-size: 16px;
        }

        .spanthree {
            margin-left: -80px;
            font-size: 16px;
        }

        .spanfour {
            margin-left: -18px;
            font-size: 16px;
        }

        .spanfive {
            margin-left: -25px;
            font-size: 16px;
        }

        
        .spansix {
            margin-left: -25px;
            font-size: 16px;
        }


        @media (max-width:960px) {


            #links {
                background-color: white;
                height: 725px;
                padding-top: 15%;
                border: 1px solid rgb(0, 0, 0, 0.2);
                position: fixed;
                width: 177px;
                margin-top: -2.2%
            }


            #title {
                margin-top: -2.2%;
                margin-left: 22.5%;
                position: fixed;
                background-color: white;
                width: 100%;
                padding: 3px;
                border: 1px solid rgb(0, 0, 0, 0.1);
            }

            #feed {
                background-color: white;
                box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
                border-radius: 10px;
                padding: 10px;
                margin-top: 10%;
                margin-left: 25%;
                margin-right: 10%;
                width: 520px;

            }

            .nav-link {
                color: rgb(114, 108, 108);
                font-weight: 600;
                margin-top: 10px;
                font-size: 18px;
                margin-left: 10%;
                width: 130px;
            }

            .spanone {
            margin-left: -55px;
            font-size: 16px;
        }

        .spantwo {
            margin-left: -60px;
            font-size: 16px;
        }

        .spanthree {
            margin-left: -80px;
            font-size: 16px;
        }

        .spanfour {
            margin-left: -22px;
            font-size: 16px;
        }

        .spanfive {
            margin-left: -25px;
            font-size: 16px;
        }

        
        .spansix {
            margin-left: -25px;
            font-size: 16px;
        }

        }


        @media (max-width:480px) {

/* 
            #links {
                background-color: white;
                height: 725px;
                padding-top: 15%;
                border: 1px solid rgb(0, 0, 0, 0.2);
                position: fixed;
                width: 120px;
            }


            #title {
                margin-top: 0%;
                margin-left: 25.6%;
                position: fixed;
                background-color: white;
                width: 310px;
                padding: 3px;
                border: 1px solid rgb(0, 0, 0, 0.1);
            }

            #feed {
                background-color: white;
                box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
                border-radius: 10px;
                padding: 10px;
                margin-top: 20%;
                margin-left: 32%;
                margin-right: 10%;
                width: 300px;

            }

            .nav-link {
                color: rgb(114, 108, 108);
                font-weight: 600;
                margin-top: 10px;
                font-size: 14px;
                margin-left: 1%;
                width: 80px;

            } */


            
        #links {
            background-color: white;
            height: 725px;
            padding-top: 18%;
            border: 1px solid rgb(0, 0, 0, 0.2);
            position: fixed;
            width: 130px;
            margin-top: -2%
        }


        #title {
            margin-top: -2%;
            margin-left: 28%;
            position: fixed;
            background-color: white;
            width: 80%;
            padding: 3px;
            border: 1px solid rgb(0, 0, 0, 0.1);
        }

        #feed {
            background-color: white;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
            border-radius: 10px;
            padding: 10px;
            margin-top: 20%;
            margin-left: 40%;
            margin-right: 10%;
            width: 300px;

        }

        .nav-link {
            color: rgb(114, 108, 108);
            font-weight: 600;
            margin-top: 10px;
            font-size: 18px;
            margin-left: 10%;
            width: 100px;
        }

        .spanone {
            margin-left: -30px;
            font-size: 14px;
        }

        .spantwo {
            margin-left: -30px;
            font-size: 14px;
        }

        .spanthree {
            margin-left: -50px;
            font-size: 14px;
        }

        .spanfour {
            margin-left: -30px;
            font-size: 14px;
        }

        .spanfive {
            margin-left: -17px;
            font-size: 14px;
        }

        
        .spansix {
            margin-left: -15px;
            font-size: 14px;
        }



        }
    </style>
</head>

<body style="background-color: whitesmoke">
    <div class="main_container">

    <div class="row">
        <div id="links" class="col-md-2">


            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true"> <span class="spanone"> All Feeds </span> </button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false"> <span class="spantwo"> Everyone </span> </button>
                    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-disabled" type="button" role="tab"
                        aria-controls="v-pills-disabled" aria-selected="false"> <span class="spanthree"> Events
                        </span> </button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false"> <span class="spanfour"> Company News </span>
                    </button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false"> <span class="spanfive"> Appreciations </span>
                    </button>
                    <button class="nav-link" id="v-pills-buy-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-buy" type="button" role="tab"
                        aria-controls="v-pills-buy" aria-selected="false"> <span class="spansix"> Buy/Sell/Rent </span>
                    </button>
                </div>

            </div>
        </div>




    </div>

    <div>



        <div id="title" class="row">

            <div class="col-md-12">
                <h3> Feeds </h3>
                <p> Groups </p>
            </div>
        </div>

        <br>

        <div class=" justify-content-center">

            <div id="feed">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab" tabindex="0"> All Feeds </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab" tabindex="0"> Everyone </div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                        aria-labelledby="v-pills-disabled-tab" tabindex="0"> Events </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab" tabindex="0"> Company News </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab" tabindex="0"> Appreciations </div>
                        <div class="tab-pane fade" id="v-pills-buy" role="tabpanel"
                        aria-labelledby="v-pills-buy-tab" tabindex="0"> Buy/Sell/Rent</div>    
                </div>
            </div>
        </div>
    </div>

</div>


</body>

</html>

<script>
    $('li').on('click', function() {
        $('li').removeClass('selected');
        $(this).addClass('selected');
    });
</script>

@endsection
