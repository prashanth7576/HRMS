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
        ul {
            margin-left: 25%;
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

        .col-md-8 {
            border: 1px solid rgb(135, 130, 130, 0.5);
            border-radius: 5px;
            height: 550px;
            margin-left: 20px;
            
        }

        .request {
            margin-left: auto;
            margin-right: 10%;
        }

        .form-floating{
            margin-bottom: -10px
        }

        .modal-header{
            background-color: rgb(155, 149, 149, 0.3)
        }

        @media (max-width:480px) {
            .btn{
               
                margin-top:10%;
            }

            ul{
                margin-left: 10%;
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

        .col-md-8 {
            border: 1px solid rgb(135, 130, 130, 0.5);
            border-radius: 5px;
            height: 550px;
            width: 340px;
            margin-left: 20px;
        }

        .request {
            margin-left: auto;
            margin-right: 10%;

        }

        .form-floating{
            margin-bottom: -10px
        }

        .modal-header{
            background-color: rgb(155, 149, 149, 0.3)
        }
        .modal{
            margin-left: -2%;
            width: 349px;
        }
        }
    </style>
</head>

<body>
    

    <div class="main_container">

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li id="active" class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true"> Active </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Closed </button>
            </li>

            <div class="request">



                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    New Request
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> New Request </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="">


                                    <div>
                                       <label for="Category"> Category</label>

                                        <select class="form-select" aria-label="Default select example">
                                            <option selected> Select Category..</option>
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
                                        <input type="text" class="form-control" id="floatingPassword" placeholder="">
                                            <label for="form-check-label"> Subject Line..</label>
                                      
                                    </div>
<br>
                                    <label for="floatingTextarea"> Description* </label>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea"> Write here.. </label>
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

                              


                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </ul>


        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">


                    <div class="col-md-8">


                    </div>



                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                <div class="row justify-content-center">

                    <div class="row">


                        <div class="col-md-8">


                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

</body>

</html>

@endsection
