@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            min-height: 100vh;
            

        }

        /* .side-bar {
            background-color: white;
            box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
            width: 230px;
            height: 100vh;
            padding: 5px;
            position: fixed;
            margin-top: -18.4%;



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
            line-height: 37px;
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
 */


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

        nav>.log>select {
            margin-left: 20px;
            border: none;
            width: 130px;
        }

        nav i {
            margin-top: 10px;
            margin-left: 30px;
        }

        /* .navtwo {
            visibility: hidden;
        } */

        .main_container {
            width: (100% - 800px);
            margin-left: 15%;
            padding: 5px;
            transition: all 0.3s ease;
            margin-top: -10%
        }

        .item{
            cursor: pointer;
        }

        #breadcrumb{
            margin-left: 0%;
            position: relative;
            visibility: hidden;
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

/* 
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

            } */

            body {
                background-color: whitesmoke;
            }

            .main_container {
            width: (100% - 800px);
            margin-left: 0%;
            position: relative;
            padding: 5px;
            transition: all 0.3s ease;
            margin-top: 2%
        
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
/* 

            .navtwo {
                width: 50%;
                
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

            } */

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






      

       
    </style>
</head>
<body>
    
    
    <div class="">
        <nav class="navbar navbar-expand-lg ">

            <nav id="breadcrumb"  aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
              </nav>

            <div class="">

                
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Quick Links</option>
                    <option value="1" style="font-size:12px;">Sign! You cannot 'Quick Link' this page
                    </option>

                    <option value="2" style="font-size:12px">Getting Started With greytHR</option>
                    <option value="3" style="font-size:12px">Tasks</option>
                    <option value="3" style="font-size:12px">Review Workflow</option>
                </select>
                <i class="fa-solid fa-bell"></i>
                <i class="fas fa-sign-out"></i>

            </div>

        </nav>
    </div>

</body>
</html>

@endsection