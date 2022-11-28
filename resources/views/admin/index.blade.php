@extends('layouts.apps')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    #main-container {
        margin-top: -20%;
        z-index: -1;
    }

    body {
        min-height: auto;
        overflow-x: hidden;

    }

    .side-bar {
        background-color: white;
        box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
        width: 230px;
        height: 100vh;
        padding: 5px;
        position: fixed;
        margin-top: -24%;



    }

    .side-bar .menu {
        width: 100%;


    }

    .side-bar.menu.item {
        position: relative;
        cursor: pointer;
        font-size: 16px;
    }

    .side-bar .menu .item a {

        color: #909090;
        display: block;
        padding: 5px 20px;
        line-height: 35px;
        text-decoration: none;
    }

    .side-bar .menu .item a:hover {
        background: white;
        transition: 0.3s ease;
    }

    .side-bar .menu .item i {
        margin-right: 15px;
    }

    .side-bar .menu .item a .dropdown {
        position: absolute;
        margin: 10px;
        right: 0;
        transition: 0.3s ease;

    }

    .side-bar .menu .item .sub-menu {
        background: white;
        display: none;
        font-size: 13px;
    }

    .side-bar .menu .item .sub-menu .a {
        padding-left: 80px;

    }



    .navone {
        position: fixed;
        width: 85%;
        margin-left: 18%;
        background-color: white;
        box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
        padding: 8px;
        height: 55px;
        border-top-right-radius: 10px;
        z-index: 1;

    }

    nav>.log {
        display: flex;
        margin-left: auto;
        margin-right: 30px;

    }

    nav>.log>select {
        margin-left: 20px;
        border: none;
        width: 130px;
    }

    nav i {
        margin-top: 10px;
        margin-left: 30px;
    }

    .navtwo {
        visibility: hidden;
    }

    .main_container {
        width: (100% - 800px);
        margin-left: 19%;
        padding: 5px;
        margin-top: -10%;
        transition: all 0.3s ease;


    }


    @media (max-width:960px) {



        .side-bar {
            visibility: hidden;
        }



        .navone {
            position: fixed;
            width: 100%;
            margin-left: 0%;
            background-color: white;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
            padding: 8px;
            border-top-right-radius: 10px;

        }

        .navone>.log {
            display: flex;
            margin-left: auto;
            margin-right: 30px;

        }

        .navone>.log>select {
            margin-left: 20px;
            border: none;
            width: 130px;
        }

        .navone i {
            margin-top: 10px;
            margin-left: 30px;
        }


        .navtwo {
            width: 25%;
            height: auto;
            position: static;
            visibility: visible;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);

        }

        .navtwo ul li a {
            margin-top: 5%;
        }

        .navtwo .logo {
            width: 130px;
            height: 50px;

        }

        .navtwo .user {
            height: 30px;
            width: 25px;
            border-radius: 50%;
        }

        .navtwo>img {
            height: 40px;
            width: 120px;
            margin-top: 5%;
        }

        .navtwo ul .profile {
            display: flex;

        }

        body {
            background-color: whitesmoke;
        }

        .main_container {
            width: (100% - 800px);
            margin-left: 0%;
            position: relative;
            padding: 5px;
            transition: all 0.3s ease;
            z-index: 10;
        }

        /* .navtwo .navbar-toggler:active .main_container{
            width: (100% - 800px);
            margin-left: 10%;
            position: relative;
            padding: 5px;
            transition: all 0.3s ease;
            z-index: 10;
        } */

    }

    @media (max-width:480px) {


        .main_container {
            width: (100% - 800px);
            margin-left: 0%;
            position: relative;
            padding: 5px;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .side-bar {
            visibility: hidden;
        }


        .navone {
            position: fixed;
            width: 100%;
            margin-left: 0%;
            background-color: white;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
            padding: 8px;
            border-top-right-radius: 10px;

        }

        .navone>.log {
            display: flex;
            margin-left: auto;
            margin-right: 30px;

        }

        .navone>.log>select {
            margin-left: 20px;
            border: none;
            width: 130px;
        }

        .navone i {
            margin-top: 10px;
            margin-left: 30px;
        }


        .navtwo {


            height: auto;
            visibility: visible;

            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);

        }

        .navtwo ul li a {
            margin-top: 5%;
        }

        .navtwo .logo {
            width: 130px;
            height: 50px;

        }

        .navtwo .user {
            height: 30px;
            width: 25px;
            border-radius: 50%;
        }

        .navtwo>img {
            height: 40px;
            width: 120px;
            margin-top: 5%;
        }

        .navtwo ul .profile {
            display: flex;

        }

        body {
            background-color: whitesmoke;
        }




        /*


        .navone {
            position: fixed;
            width: 85%;
            margin-left: 15%;
            background-color: white;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
            padding: 8px;
            border-top-right-radius: 10px;

        }

        nav>.log {
            display: flex;
            margin-left: auto;
            margin-right: 30px;

        }

        nav > .log > select {
            margin-left: 20px;
            border: none;
            width: 130px;
        }

        nav i {
            margin-top: 10px;
            margin-left: 30px;
        } */

    }

    .card {
        background-color: white;
        box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
    }

    .card.item {
        position: relative;
        cursor: pointer;
        font-size: 18px;
    }

    .card .item a {
        color: black;
        display: block;
        padding: 5px 20px;
        line-height: 32px;
    }

    .card .item a:hover {
        background: white;
        transition: 0.3s ease;
    }

    .card .item i {
        margin-right: 15px;
    }

    .card .item a .dropdown {
        position: absolute;
        margin: 10px;
        right: 0;
        transition: 0.3s ease;

    }

    .card .item .sub-menu {
        background: white;

        font-size: 13px;
    }

    .card .item .sub-menu .a {
        padding-left: 80px;

    }
    </style>
</head>

<body>




    <div id="main-container" class="main_container" style="background-color:smokewhite">



        <br><br>

       
        <h3>Good Morning</h3>
        <div class="flex" style="display:flex">
            <div class="two" style="width:700px">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>

                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">

                            <p>Watch the following video to understand your new Employee Self Service portal quickly.
                            </p>
                            <p style="color:blue">Watch Video</p>
                        </div>

                        <div class="item">
                            <p>If not us, who? If not now, when?</p>
                            <p>- JOHN F. KENNEDY</p>
                        </div>


                    </div>
                </div>


            </div>
            <img src="https://img.freepik.com/free-vector/city-scene-with-office-buildings-park-illustration_1308-40905.jpg?size=626&ext=jpg&ga=GA1.2.95657150.1643557487&semt=sph"
                style="width:300px;height:150px">
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card"
                        style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                        <h5 style="font-weight:600">Review</h5>
                        <br>
                        <div style="text-align:center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/71/Notepad_icon.svg/2048px-Notepad_icon.svg.png"
                                style="width:60px;height:80px;">
                            <br><br>
                            <p>Hurrah! You've nothing to review.</p>
                            <br><br>
                        </div>
                    </div>
                    <br>
                    <div class="card"
                        style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                        <h5 style="font-weight:600">IT Declaration</h5>
                        <div style="display:flex">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgxrMuXkBe3oEoY-6H0IwV5PZ1hUA8H2HDew&usqp=CAU"
                                style="width:30px;height:30px">
                            <p style="margin-left:5%">Hold on! You can submit your Income Tax (IT) declaration once
                                released.</p>
                        </div>
                    </div>
                    <br>
                    <div class="card"
                        style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                        <h5 style="font-weight:600">POI</h5>
                        <div style="display:flex">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToezQhcnxQPTROzpRK08c64VJg7mEO7DLD1A&usqp=CAU"
                                style="width:30px;height:30px">
                            <p style="margin-left:5%">Hold on! You can submit your Proof of Investments (POI) once
                                released.</p>
                        </div>

                    </div>
                    <br>
                </div>

                <div class="col-sm-4">
                    <form action="{{route('admin')}}" method="POST">
                        @csrf
                        <div class="card"
                            style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
                            <div class="flex" style="display:flex">
                                <input type="text" id="date" readonly style="width:15px;border:none">
                                <input type="text" id="month" readonly style="width:80px;border:none">
                                <input type="text" id="year" readonly style="width:80px;border:none">
                            </div>
                            <div style="display:flex">
                                <input type="text" id="day" readonly name="day" style="width:60px;border:none">
                                <hr style="height:18px;width:2px;background-color:black;margin-left:5px;margin-top:5%">
                                <p style="margin-left:5px;margin-top:5%">10:00am To 7:00pm</p>
                            </div>
                            <input type="text" id="time" readonly style="width:80px;border:none">
                            <div>
                                <div>


                                    <button type="button" class="btn btn" data-bs-toggle="modal"
                                        data-bs-target="#myModal" style="color:blue">
                                        View Swipes
                                    </button>
                                </div>


                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <br><br><br><br><br><br>
                                        <div class="modal-content" style="width:600px;padding:20px">


                                            <div class="modal-header"
                                                style="height:50px;padding:5px;background-color:#f0f5f5">
                                                <p>Swipes</p>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>


                                            <div style="display:flex">
                                                <p>Date : 10 Oct, 2022</p>
                                                <p style="margin-left:10%">Shift Time:10:00 to 19:00</p>
                                                <p style="margin-left:10%">Shift Type : GS</p>

                                            </div>


                                            <table class="table table-bordered">
                                                <thead style="background-color:#e6f7ff">
                                                    <tr>

                                                        <th scope="col">Swipe Time</th>
                                                        <th scope="col">In/Out</th>
                                                        <th scope="col">Door/Address</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>9:00</td>
                                                        <td>In</td>
                                                        <td>-</td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary active"
                                        style="float:right;margin-top:-9%;background-color:blue">Sign In</button>
                    </form>

                    <form action="" method="POST">
            @csrf
                                    <button
                                    type="submit" class="btn btn-primary active" 
                                    style="float:right;margin-top:-9%;background-color:blue">Sign Out</button>

                   <div>
                                                
</div>
</form>
                </div>
            </div>

        </div>
        <br>
        <div class="card"
            style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
            <div>
                <h5 style="font-weight:600">Payslip</h5>
                <a href="{{url('payslip')}}">
                    <i class="fa-solid fa-arrow-right" style="float:right;margin-top:-10%"></i></a>
            </div>
            <div style="display:flex">
                <canvas id="myChart" style="width:100%;max-width:400px;margin-left:-20%"></canvas>
                <ul style="margin-left:-10%;padding-top:15%">
                    <p style="font-weight:600">{{$latest->date}}{{$latest->year}}</p>
                    <p style="font-weight:600">30 </p>
                    <p>Paid Days</p>
                </ul>
            </div>
            <br><br><br>
            <div style="display:flex">
                <ul>
                    <p>Gross Pay</p>
                    <p>Deduction</p>
                    <p>Net Pay</p>
                    <br><br>
                    <p style="color:blue">Download</p>
                </ul>
                <ul style="margin-left:50%">

                    <p><i class="fa fa-inr" aria-hidden="true"></i>{{$latest->total}}</p>
                    <p><i class="fa fa-inr" aria-hidden="true"></i>{{$latest->totaldeductions}}</p>
                    <p><i class="fa fa-inr" aria-hidden="true"></i>{{$latest->netpay}}</p>


                    <br><br>
                    <p style="color:blue">Show Salary</p>
                </ul>
            </div>
        </div>
        <br>
    </div>
    <div class="col-sm-3">
        <div class="card"
            style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
            <div>
                <h5 style="font-weight:600">Upcoming Holidays</h5>
                <a href="{{url('holidays')}}">
                    <i class="fa-solid fa-arrow-right" style="float:right;margin-top:-10%"></i></a>
            </div>

            <h5>24 Oct Monday</h5>
            <p>Diwali</p>
            <h5>25 Oct Tuesday</h5>
            <p>Diwali</p>
            <h5>25 Dec Sunday</h5>
            <p>Christmas</p>

        </div>
        <br>
        <div class="card"
            style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
            <h5 style="font-weight:600">Quick Access</h5>
            <br>
            <div style="display:flex">
                <ul>
                    <p>Reimbursement Payslip
                    <p>
                    <p>IT Statement</p>
                    <p>YTD Reports</p>
                    <p>Loan Statement</p>

                </ul>
                <p style="margin-left:15%;background-color:#fff2e6;padding:5%">Use quick access to view
                    important
                    salary details.</p>

            </div>
        </div>
        <br>

        <div class="card"
            style=" background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px;border-radius:10px">
            <h5 style="font-weight:600">Track</h5>
            <div style="text-align:center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdsKMCAAM3wjbZaevNN6FjKGgBlZcTBFqCvQ&usqp=CAU"
                    style="width:160px;height:100px">
                <br><br>
                <p>All good! You've nothing new to track.</p>
                <br>
            </div>
        </div>
        <br>
    </div>
    </div>
    </div>
    <br><br><br>

    </div>



    <script labguage="javascript">
    function enableDisable(objID) {
        //check if login is clicked then make logout disable
        if (objID == "btnLogin") {
            document.getElementById("btnLogin").disabled = true;
            document.getElementById("btnLogout").disabled = false;
        } else //if logout clicked
        {
            document.getElementById("btnLogin").disabled = false;
            document.getElementById("btnLogout").disabled = true;
        }

    }
    </script>

    <script>
    var xValues = [];
    var yValues = [90, 10];
    var barColors = [

        "#005580",
        "#00e6ac"
    ];

    new Chart("myChart", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            title: {
                display: true,

            }
        }
    });
    </script>

    <script>
    $(document).ready(function() {
        $('.sub-item').hide();
        $('#close').hide();
        $("#book").click(function() {
            $("#book").hide();
        });

        $("#book").click(function() {
            $(".sub-item").show();
            $("#close").show();
        });

        $("#close").click(function() {
            $(".sub-item").hide();
            $("#close").hide();
        });

        $("#close").click(function() {
            $("#book").show();

        });

    });
    </script>

</body>

</html>
<script>
var getmonths = [
    "January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
    "  November", "December"
];
var weekdays = [
    "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday",
];

var t = new Date();
var d = new Date();
var y = new Date();
var day = new Date();
var time = new Date();
document.getElementById("month").value = getmonths[d.getMonth()];
document.getElementById("year").value = [y.getFullYear()];
document.getElementById("date").value = [t.getDate()];
document.getElementById("time").value = (time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds());
document.getElementById("day").value = weekdays[day.getDay()];
</script>
<script>
$(function() {
    $('#toggle-two').bootstrapToggle({
        on: 'Enabled',
        off: 'Disabled'
    });
})
</script>
@endsection