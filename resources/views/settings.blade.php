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
    .card .menu.item {
        position: relative;
        cursor: pointer;
        font-size: 16px;

    }

    .card .menu .item a {

        color: #909090;

        padding: 5px 20px;
        line-height: 35px;
        text-decoration: none;
    }

    .card .menu .item a:hover {
        background: white;
        transition: 0.3s ease;
    }

    .card .menu .item i {
        margin-right: 15px;
    }

    .card .menu .item a .dropdown {
        position: absolute;
        margin: 10px;
        right: 0;
        transition: 0.3s ease;
        color: #99ebff;

    }

    .card .menu .item .sub-menu {
        background: white;
        display: none;
        font-size: 13px;
    }

    .card .menu .item .sub-menu .a {
        padding-left: 80px;

    }
    </style>


</head>

<body style="font-family: 'Montserrat', sans-serif;">
    <div class="main_container">
        <br>
        <div style="float:right">
            <button type="button" class="btn btn-link">View Login History</button>
            <a href="{{url('change-password')}}">
                <button type="button" class="btn btn-primary">Change Password</button></a>

        </div>
        <br><br>
        <div class="row" style="padding:20px">
            <div class="col-md-8" style="background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);">
                <div style="display:flex;padding:10px;font-size:13px">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEM9yrAx98tmTyjbwX9pqreHepJS2FnWEitrzkF-xxgBuGKdl88SBgUC4_U-8n_tUjWdE&usqp=CAU"
                        style=" height:60px;width:40px">
                    <div class="col-md-4" style="margin-left:5%">
                        <p style="font-weight:600">DYAGA LIKHITHA</p>
                        <p>Emp ID: XSS-0399</p>

                    </div>
                    <div class="col-md-4">
                        <p>Official Birthday:</p>
                        <p>Department:Development Team</p>
                    </div>
                    <div class="col-md-4">
                        <p>Location:Hyderabad</p>
                        <p>Designation:Intern</p>
                    </div>
                </div>
            </div>


            <div class="col-md-9"
                style="background-color: white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);margin-top:5%">
                <div style="padding:15px;background-color:smokewhite">
                    <p>My Profile</p>
                </div>

                <div class="card">
                    <div class="menu">
                        <div class="item">
                            <a class="sub-btn">Profile<i id="book" class="fas fa-edit dropdown"></i><i id="close"
                                    class="fa fa-close dropdown" style="font-size: 20px"></i></a>



                            <div class="sub-menu">
                                <div style="display:flex">
                                    <a class="sub-item">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="name@example.com" style="width:200px">
                                            <label for="floatingInput">Nick Name</label>
                                        </div>
                                    </a>
                                    <a href="#" class="sub-item">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="name@example.com" style="width:200px">
                                            <label for="floatingInput">Wish me on</label>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="card">
                    <div class="menu">
                        <div class="item">
                            <a class="sub-btn">Timezone<i id="books" class="fas fa-edit dropdown"></i><i id="closes"
                                    class="fa fa-close dropdown" style="font-size: 20px"></i></a>



                            <div class="sub-menu">
                                <div style="display:flex">
                                    <a id="one" class="sub-item">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelect"
                                                aria-label="Floating label select example" style="width:200px">
                                                <option selected> Select Timezone</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>

                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="card">
                    <div class="menu">
                        <div class="item">
                            <a class="sub-btn">Biography<i id="bookss" class="fas fa-edit dropdown"></i><i id="closed"
                                    class="fa fa-close dropdown" style="font-size: 20px"></i></a>



                            <div class="sub-menu">
                                <div style="display:flex">
                                    <a id="two" class="sub-item">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="name@example.com" style="width:600px">

                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="menu">
                        <div class="item">
                            <a class="sub-btn">Social Media<i id="bok" class="fas fa-edit dropdown"></i><i id="clos"
                                    class="fa fa-close dropdown" style="font-size: 20px"></i></a>



                            <div class="sub-menu">

                                <a id="three" class="sub-item">
                                    <div class="form-group " style="margin-left:3%">
                                        <label for="exampleInputEmail1"></label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email" style="width:200px">

                                    </div>

                                    <div class="form-group " style="margin-left:3%">
                                        <label for="exampleInputEmail1"></label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email" style="width:200px">

                                    </div>
                                    <div class="form-group " style="margin-left:3%">
                                        <label for="exampleInputEmail1"></label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email" style="width:200px">

                                    </div>


                                </a>



                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>




        </div>
    </div>
    </div>




</body>

</html>
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
<script>
$(document).ready(function() {
    $('#one').hide();
    $('#closes').hide();
    $("#books").click(function() {
        $("#books").hide();
    });

    $("#books").click(function() {
        $("#one").show();
        $("#closes").show();
    });

    $("#closes").click(function() {
        $("#one").hide();
        $("#closes").hide();
    });

    $("#closes").click(function() {
        $("#books").show();

    });

});
</script>
<script>
$(document).ready(function() {
    $('#two').hide();
    $('#closed').hide();
    $("#bookss").click(function() {
        $("#bookss").hide();
    });

    $("#bookss").click(function() {
        $("#two").show();
        $("#closed").show();
    });

    $("#closed").click(function() {
        $("#two").hide();
        $("#closed").hide();
    });

    $("#closed").click(function() {
        $("#bookss").show();

    });

});
</script>

<script>
$(document).ready(function() {
    $('#three').hide();
    $('#clos').hide();
    $("#bok").click(function() {
        $("#bok").hide();
    });

    $("#bok").click(function() {
        $("#three").show();
        $("#clos").show();
    });

    $("#clos").click(function() {
        $("#three").hide();
        $("#clos").hide();
    });

    $("#clos").click(function() {
        $("#bok").show();

    });

});
</script>

@endsection