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
       


        <style>

.main_container{
    margin-top: -10%
}


            .btn {
                margin-left: 80%;
            }

            #data {
                margin-left: 10px;
                display: flex;
            }

            .details {
                border: 2px solid rgb(113, 107, 107, 0.3);
                border-radius: 5px;
                width: 200px;
                margin-left: 10px;



            }

            .details p {
                text-align: center;
                height: 10px;


            }

            .details .hours {
                font-weight: 600;
                font-size: 17px;
            }

            .details .title {
                font-size: 15px;
                margin-top: 10px;
                color: rgb(113, 109, 109)
            }

            .details .date {
                margin-top: 0px;
                font-size: 13px;
                color: rgb(113, 109, 109)
            }

            hr {
                border: 0.1px solid rgb(113, 107, 107, 0.3);
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

            .attendance {
                border: 1px solid rgba(149, 144, 144, 0.5);
                margin-left: 0px;
                border-radius: 5px;
            }

            .attendance .head {
                border: 1px solid rgba(149, 144, 144, 0.5);


            }

            .head p {
                font-size: 16px;
                color: rgb(117, 109, 109);
                font-weight: 500;
            }

            th {
                font-size: 13px;
                color: rgb(76, 74, 74)
            }

            .nav {
                margin-left: auto
            }

            #table {
                margin-left: 20px;
            }

            .content {
                margin-top: -3%;
            }

            @media (max-width:960px) {

                .main_container{
    margin-top: 2%
}

                .content {
                    margin-top: 0%;
                }

                .btn {
                    margin-left: 75%;
                }

                .attendance{
                    margin-top: 1.5%
                }

            }

            @media (max-width:480px) {
                .btn {
                    margin-left: 50%;
                }

                #data {
                    margin-left: 10px;
                    display: inline;

                }

                .details {
                    border: 2px solid rgb(113, 107, 107, 0.3);
                    border-radius: 5px;
                    width: 200px;
                    margin-left: 25%;
                    margin-top: 10px;



                }

                .details p {
                    text-align: center;
                    height: 10px;


                }

                .details .hours {
                    font-weight: 600;
                    font-size: 17px;
                }

                .details .title {
                    font-size: 15px;
                    margin-top: 10px;
                    color: rgb(113, 109, 109)
                }

                .details .date {
                    margin-top: 0px;
                    font-size: 13px;
                    color: rgb(113, 109, 109)
                }

                hr {
                    border: 0.1px solid rgb(113, 107, 107, 0.3);

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
                    <div class="col-md-12">
                        <button class="btn btn-primary"> My Regularization </button>
                    </div>
                </div>
                <br>

                <div id="data">
                    <div>
                        <div class="details">
                            <p class="title"> AVG. WORK HRS</p>
                            <hr>
                            <p class="hours"> 09:04</p>
                            <p class="date"> +3% FROM September </p>

                        </div>
                    </div>

                    <div>
                        <div class="details">
                            <p class="title"> AVG. ACTUAL WORK HRS</p>
                            <hr>
                            <p class="hours"> 09:04</p>
                            <p class="date"> +3% FROM September </p>

                        </div>
                    </div>

                    <div>
                        <div class="details">
                            <p class="title"> PENALTY DAYS </p>
                            <hr>
                            <p class="hours"> 0</p>
                            <p class="date"></p>

                        </div>
                    </div>
                </div>

                <br>


                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-start">
                            <div class="nav flex-row nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="horizontal">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true"> Calender View </button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false"> Table View </button>

                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">

                        <div class="row">
                            <div class="col-md-7">
                                <div id="datepicker"></div>

                            </div>

                            <div class="col-md-5">
                                <div class="attendance">
                                    <div class="head">

                                    </div>

                                    <div class="body">
                                        <p> Processed on </p>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="table table-responsive table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th> First In </th>
                                                        <th> Last Out </th>
                                                        <th> Total Work hrs </th>
                                                        <th> Break Hours </th>
                                                        <th> Actual Work hrs </th>
                                                        <th> Shortfall hrs</th>
                                                        <th> Excess hrs </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="attendance">
                                    <div class="head">
                                        <p> Status Details </p>
                                    </div>

                                    <div class="body">

                                        <table class="table table-responsive table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th> Status </th>
                                                    <th> Remarks </th>

                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>

                                <br>

                                <div class="attendance">
                                    <div class="head">
                                        <p> Session Details </p>
                                    </div>

                                    <div class="body">
                                        <div class="table-responsive">

                                            <table class="table  table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th> Session </th>
                                                        <th> Session timing </th>
                                                        <th> First In </th>
                                                        <th> Last Out </th>
                                                        <th> Late In hrs </th>
                                                        <th> Early Out hrs</th>

                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <br>


                                <div class="attendance">
                                    <div class="head">
                                        <p> Swipes (Total: 00:00 hrs)</p>
                                    </div>

                                    <div class="body">
                                        <div class="table-responsive">
                                            <table class="table  table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th> In/Out </th>
                                                        <th> Swipe Time </th>
                                                        <th> Door/Address </th>

                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>



                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="table-responsive">

                            <table id="table" class="table table-striped table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th> General Details </th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th class="sessionone"> Session 1</th>
                                        <th class="sessiontwo"> Session 2 </th>
                                    </tr>
                                    <tr>
                                        <th> Date </th>
                                        <th> Shift </th>
                                        <th> Attendance Scheme </th>
                                        <th> First In </th>
                                        <th> Last Out </th>
                                        <th> Work Hrs </th>
                                        <th> Actual Hrs </th>
                                        <th> Status </th>
                                        <th> Swipe Details </th>
                                        <th> Exception </th>
                                        <th> Shortfall/Excess hours </th>
                                        <th> Shift Timings </th>
                                        <th> Shift Timings </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
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

            // var currentDate = $( "#demo" ).datepicker( "getDate" );
            // $( "#datepicker" ).datepicker( "#start" );

            // $("#weekpicker").datepicker({

            //     showOtherMonths: true,
            //     selectOtherMonths: true,
            //     onSelect: function(selectedDate, instance) {

            //         var currentDate = $("#datepicker").datepicker("getDate");

            //         var dateFormat = "dd/mm/yy";
            //         $("#start").val($.datepicker.formatDate(dateFormat, currentDtae));
            //     }
            // });
        });


        //      $(document).ready(function() {

        // var weekStart, weekEnd, weekTwo;

        // function completeWeek() {
        //     window.setTimeout(function() {
        //         $(".ui-datepicker-current-day a").addClass("ui-state-active");
        //     });
        // }




        // $("#datepicker").datepicker({
        //     showOtherMonths: true,
        //     selectOtherMonths: true,
        //     onSelect: function(selectedDate, instance) {


        //         var myDate = new Date(selectedDate);


        //         weekStart = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
        //             myDate.getDay());


        //         weekEnd = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
        //             myDate.getDay() + 6);


        //         weekTwo = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
        //             myDate.getDay() + 1);


        //         weekThree = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
        //             myDate.getDay() + 2);


        //         weekFour = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
        //             myDate.getDay() + 3);

        //         weekFive = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
        //             myDate.getDay() + 4);

        //         weekSix = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
        //             myDate.getDay() + 5);

        //         var dateFormat = "dd/mm/yy";
        //         $("#start").val($.datepicker.formatDate(dateFormat, weekStart));
        //         $("#two").val($.datepicker.formatDate(dateFormat, weekTwo));
        //         $("#three").val($.datepicker.formatDate(dateFormat, weekThree));
        //         $("#four").val($.datepicker.formatDate(dateFormat, weekFour));
        //         $("#five").val($.datepicker.formatDate(dateFormat, weekFive));
        //         $("#six").val($.datepicker.formatDate(dateFormat, weekSix));
        //         $("#end").val($.datepicker.formatDate(dateFormat, weekEnd));

        //         completeWeek();

        //     },
        //     beforeShowDay: function(date) {
        //         var cssClass = "";
        //         if (date >= weekStart && date <= weekEnd)
        //             cssClass = "ui-datepicker-current-day";
        //         return [true, cssClass];
        //     },
        //     onChangeMonthYear: function() {
        //         completeWeek();
        //     }


        // });

        // });
    </script>
@endsection
