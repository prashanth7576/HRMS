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

            #title{
                font-size: 15px;
                color: black
            }
            ul {
                margin-left: 5%;
            }

            .tab{
                margin-left: 25%;
                display: flex
            }



            #pills-active-tab {
                border: 1px solid rgb(109, 123, 141, 0.5);
                border-radius: 0%;
                width: 150px;
                height: 40px;
                border-bottom-left-radius: 5px;
                border-top-left-radius: 5px;


            }

            #pills-closed-tab {


                border-radius: 0%;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
                width: 150px;
                height: 40px;
                border: 1px solid rgb(109, 123, 141, 0.5);
            }

            #main-body {
                border: 1px solid rgb(135, 130, 130, 0.5);
                border-radius: 5px;
                height: 550px;
                margin-left: 20px;
               

            }

            .request {
                margin-left: auto;
                margin-right: 10%;
            }

            .form-floating {
                margin-bottom: -10px
            }

            .modal-header {
                background-color: rgb(155, 149, 149, 0.3)
            }
            .content{
                margin-left: 20px;
                margin-top: -20px;
            }
            body{
                overflow-x: hidden;
            }

            #submit{
            margin-left: 58%;
            margin-top: 5%
        }

        @media (max-width:960px) {
            .content{
                margin-left: 0px;
                margin-top: 0px;
            
            }

            #main-body{
                width: 95%;
            } 

            #submit{

margin-left: 58%;
}
        }

            @media (max-width:480px) {
                 #submit{

                    margin-left: 58%;
                }

                .tab {
                    margin-left: -5%;
                }



                #pills-active-tab {
                    border: 1px solid rgb(109, 123, 141, 0.5);
                    border-radius: 0%;
                    width: 150px;
                    height: 40px;
                    border-bottom-left-radius: 5px;
                    border-top-left-radius: 5px;


                }

                #pills-closed-tab {


                    border-radius: 0%;
                    border-top-right-radius: 5px;
                    border-bottom-right-radius: 5px;
                    width: 150px;
                    height: 40px;
                    border: 1px solid rgb(109, 123, 141, 0.5);
                }

                #main-body {
                    border: 1px solid rgb(135, 130, 130, 0.5);
                    border-radius: 5px;
                    height: 500px;
                    
                    margin-left: 10px;
                }

                .request {
                    margin-left: auto;
                    margin-right: 35%;

                }

                .form-floating {
                    margin-bottom: -10px
                }

             
            }
        </style>
    </head>

    <body>


        <div class="main_container">
        <div class="content">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                <div class="tab">
                <li id="active" class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true"> Active </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Closed </button>
                </li>
                </div>

                <div class="request">
                   
                    <div class="navbar navbar-light" style="margin-top:-4%;margin-left:50%;">
                        <div class="container-fluid">
                            <button class="btn btn-outline-primary " type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                               Request
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                                aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
    
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body" style="margin-left:5%">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    
                                        <form action="">


                                            <div>
                                                <label for="Category"> Category</label>
    
                                                <select class="form-select" aria-label="Default select example">
                                                    <option id="title" selected> Select Category..</option>
                                                    <option value="1"> Employee Information</option>
                                                    <option value="2"> Income Tax </option>
                                                    <option value="3"> Loans </option>
                                                    <option value="4"> Others </option>
                                                    <option value="5"> Payslip </option>
                                                </select>
    
                                            </div>
                                            <br>
                                            <label for="form-check-label"> Subject* </label>
                                            <div class="form-floating">
                                                <label id="title" for="form-check-label"> Subject Line..</label>
                                                <input type="text" class="form-control" id="floatingPassword" placeholder=" Subject Line..">
 
    
                                            </div>
                                            <br>
                                            <label for="floatingTextarea"> Description* </label>
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                <label id="title" for="floatingTextarea"> Write here.. </label>
                                            </div>
                                            <br>
    
                                            <div>
                                                <label for=" Prioriry"> Prioriry </label>
    
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected> Priority..</option>
                                                    <option value="1"> High </option>
                                                    <option value="2"> Medium </option>
                                                    <option value="3"> Low </option>
    
                                                </select>
    
                                            </div>
    
    
                                            <button id="submit" type="submit" class="btn btn-primary">Save changes</button>
    
                                        </form>
                                    
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>



            </ul>


            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">


                        <div id="main-body" class="col-md-8">


                        </div>



                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                    <div class="row justify-content-center">

                        <div class="row">


                            <div id="main-body"  class="col-md-8">


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        </div>

    </body>

    </html>
@endsection
