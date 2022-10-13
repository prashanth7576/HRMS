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
           
            #spanone {
                margin-left: -90px;
                font-weight: 550;
                font-size: 14px;
            }

            #spantwo {
                margin-left: -10px;
                font-weight: 550;
            font-size: 14px;
            }

            #spanthree {
                margin-left: -40px;
                font-weight: 550;
            font-size: 14px;
            }

            #spanfour {
                margin-left: -27px;
                font-weight: 550;
            font-size: 14px;
               
            }

            .nav-link {
                margin-left: 20px;
                color: rgb(114, 108, 108);
            font-weight: 550;
            font-size: 14px;
            }





            #links {
                background-color: rgb(255, 255, 255, 0.5);
                box-shadow: 0px 10px 10px rgba(173, 170, 170, 0.2);
                height: 729px;
                border-radius: 5px;
                position: fixed;
                width: 230px;
                padding-top: 100px;
                margin-top: -4.5%;
                margin-left: 8px;
            }







            #pills-apply-tab {
                border: 1px solid rgb(109, 123, 141, 0.5);
                border-radius: 0%;
                width: 150px;
                height: 40px;
                border-bottom-left-radius: 10px;
                border-top-left-radius: 10px;
                margin-left: 10%;

            }

            #pills-pending-tab {
                border: 1px solid rgb(109, 123, 141, 0.5);
                border-radius: 0%;
                width: 150px;
                height: 40px;

                margin-left: 10%;

            }

            #pills-history-tab {

                margin-left: 10%;
                border-radius: 0%;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
                width: 150px;
                height: 40px;
                border: 1px solid rgb(109, 123, 141, 0.5);
            }

            .status {
                margin-left: 40%;
            }

            .content {
                margin-left: 22.5%;
                border: 1px solid rgb(132, 127, 127, 0.5);
                height: 78vh;
                width: 130vh;
                background-color: white;
                border-radius: 5px;
            }

            .title {
                background-color: rgb(241, 241, 179, 0.5);
                margin: 7px;
                padding: 5px;
                border-radius: 10px;
            }


            .head {
                font-size: 15px;
                font-weight: 600;
                margin-left: 10px;
            }

            label {
                color: rgb(137, 131, 131);
                margin-left: 20px;
            }

            .form-select {
                width: 220px;
                margin-left: 20px;
            }

            .form-input {
                display: flex;
            }

            #floatingInput {
                width: 220px;
                margin-left: 20px;
                height: 10px;
                padding-bottom: -100px;

            }

            #fromdate {
                margin-top: -38px;
                margin-left: 5px
            }



            #selectInput {
                margin-left: -50px
            }

            #session {
                margin-top: -25px;
                margin-left: 5px
            }

            #floatinginput {
                height: 40px;
                width: 220px;
                margin-left: 20px
            }

            #floatingTextarea {
                width: 900px;
                margin-left: 20px;

            }

            .button {
                margin-left: 30%;
                margin-top: 10Px;
            }

            .btn {
                width: 130px;
            }

            .tab-content{
                margin-top: -6%
            }



            @media (max-width:960px) {


                #links {
                    background-color: rgb(255, 255, 255, 0.5);
                box-shadow: 0px 10px 10px rgba(173, 170, 170, 0.2);
                    height: 725px;
                    padding-top: 15%;
                    position: fixed;
                    width: 155px;
                    margin-top: -2.2%;

                }

                .tab-content{
                margin-top: -4%;
                margin-left: -20px;
            }




                #spanone {
                    margin-left: -50px;
                    font-weight: 550;
            font-size: 14px;
                }

                #spantwo {
                    margin-left: -20px;
                    font-weight: 550;
            font-size: 14px;
                }

                #spanthree {
                    margin-right: 30px;
                    font-weight: 550;
            font-size: 14px;
                }

                #spanfour {
                    margin-left: -30px;
                    font-weight: 550;
            font-size: 14px;
                }

                .nav-link{
                    width: 100px;
                    margin-left: -10px

                
                }
                #pills-apply-tab {
                    border: 1px solid rgb(109, 123, 141, 0.5);
                    border-radius: 0%;
                    width: 150px;
                    height: 40px;
                    border-bottom-left-radius: 10px;
                    border-top-left-radius: 10px;
                    margin-left: 10%;

                }

                #pills-pending-tab {
                    border: 1px solid rgb(109, 123, 141, 0.5);
                    border-radius: 0%;
                    width: 150px;
                    height: 40px;

                    margin-left: 10%;

                }

                #pills-history-tab {

                    margin-left: 10%;
                    border-radius: 0%;
                    border-top-right-radius: 10px;
                    border-bottom-right-radius: 10px;
                    width: 150px;
                    height: 40px;
                    border: 1px solid rgb(109, 123, 141, 0.5);
                }

                .status {
                    margin-left: 33%;
                }

                .content {
                    margin-left: 27%;
                    border: 1px solid rgb(132, 127, 127, 0.5);
                    height: 82vh;
                    width: 75vh;
                    background-color: white;
                    border-radius: 5px;
                }

                .title {
                    background-color: rgb(241, 241, 179, 0.5);
                    margin: 7px;
                    padding: 5px;
                    border-radius: 10px;
                }

                .head {
                    font-size: 15px;
                    font-weight: 600;
                    margin-left: 10px;
                }


                label {
                    color: rgb(137, 131, 131);
                    margin-left: 20px;
                }

                .form-select {
                    width: 220px;
                    margin-left: 20px;
                }

                .form-input {
                    display: flex;
                }

                #floatingInput {
                    width: 220px;
                    margin-left: 20px;
                    height: 10px;
                    padding-bottom: -100px;

                }

                #fromdate {
                    margin-top: -38px;
                    margin-left: 5px
                }



                #selectInput {
                    margin-left: -50px
                }

                #session {
                    margin-top: -25px;
                    margin-left: 5px
                }

                #floatinginput {
                    height: 40px;
                    width: 220px;
                    margin-left: 20px
                }

                #floatingTextarea {
                    width: 500px;
                    margin-left: 20px;

                }

                .button {
                    margin-left: 30%;
                    margin-top: 10Px;
                }

                .btn {
                    width: 130px;
                }




            }


            @media (max-width:480px) {


                #links {
                    background-color: rgb(255, 255, 255, 0.5);
                box-shadow: 0px 10px 10px rgba(173, 170, 170, 0.2);
                    height: 120vh;
                    padding-top: 15%;
                    position: fixed;
                    width: 120px;
                    margin-top: -1.4%;
                }

                .tab-content{
                margin-top: -4%;
                margin-left: -20px;
            }




                #spanone {
                    margin-left: -50px;
                    font-size: 14px;
                }

                #spantwo {
                    margin-left: -20px;
                    font-size: 14px;
                }

                #spanthree {
                    margin-right: 30px;
                    font-size: 14px;
                }

                #spanfour {
                    margin-left: -30px;
                    font-size: 14px;
                }

                .nav-link{
                    width: 100px;
                    margin-left: -10px

                
                }
                #pills-apply-tab {
                    border: 1px solid rgb(109, 123, 141, 0.5);
                    border-radius: 0%;
                    width: 80px;
                    height: 40px;
                    border-bottom-left-radius: 10px;
                    border-top-left-radius: 10px;
                    margin-left: 10%;

                }

                #pills-pending-tab {
                    border: 1px solid rgb(109, 123, 141, 0.5);
                    border-radius: 0%;
                    width: 80px;
                    height: 40px;

                    margin-left: 10%;

                }

                #pills-history-tab {

                    margin-left: 10%;
                    border-radius: 0%;
                    border-top-right-radius: 10px;
                    border-bottom-right-radius: 10px;
                    width: 80px;
                    height: 40px;
                    border: 1px solid rgb(109, 123, 141, 0.5);
                }

                .status {
                    margin-left: 35%;
                }

                .content {
                    margin-left: 27%;
                    border: 1px solid rgb(132, 127, 127, 0.5);
                    height: 107vh;
                    width: 40vh;
                    background-color: white;
                    border-radius: 5px;
                    margin-left: 38%;
                }

                .title {
                    background-color: rgb(241, 241, 179, 0.5);
                    margin: 7px;
                    padding: 5px;
                    border-radius: 10px;
                }

                .head {
                    font-size: 15px;
                    font-weight: 600;
                    margin-left: 10px;
                }


                label {
                    color: rgb(137, 131, 131);
                    margin-left: 20px;
                }

                .form-select {
                    width: 220px;
                    margin-left: 20px;
                }

                .form-input {
                    display: inline;
                }

                #floatingInput {
                    width: 220px;
                    margin-left: 20px;
                    height: 10px;
                    padding-bottom: -100px;

                }

                #fromdate {
                    margin-top: -38px;
                    margin-left: 5px
                }



                #selectInput {
                    margin-left: 20px
                }

                #session {
                    margin-top: -25px;
                    margin-left: 20px
                }

                #floatinginput {
                    height: 40px;
                    width: 220px;
                    margin-left: 20px
                }

                #floatingTextarea {
                    width: 220px;
                    margin-left: 20px;

                }

                .button {
                    display: flex;
                    margin-left: 5%;
                    margin-top: 10Px;
                }

                .btn {
                    width: 120px;
                    margin-left: 10px;
                }









            }
        </style>
    </head>

    <body style="background-color: whitesmoke">

        <div class="main_container">
            <div class="row">
                <div id="links" class="col-md-2">


                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">


                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true"> <span id="spanone"> Leave </span></button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false"> <span id="spantwo"> Restricted
                                    Holiday </span> </button>
                            <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-disabled" type="button" role="tab"
                                aria-controls="v-pills-disabled" aria-selected="false"> <span id="spanthree"> Leave
                                    Cancel</span>
                            </button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false"> <span id="spanfour"> Comp Off Grant
                                </span></button>

                        </div>

                    </div>
                </div>




            </div>

            <div>




                <br>


                <div class="tab-content" id="v-pills-tabContent">



                    <div class="tab-pane fade show active " id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-apply-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true"> Apply </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-pending-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-pending" type="button" role="tab"
                                                aria-controls="pills-pending" aria-selected="false"> Pending </button>
                                        </li>


                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false"> History </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>


                                <div class="content">


                                    <div class="title">
                                        <p> Leave is earned by an employee and granted by the employer to take time off
                                            work. The employee is free to avail this leave in accordance with the company
                                            policy.</p>
                                    </div>

                                    <p class="head"> Applying for Leave </p>

                                    <form action="" method="post">



                                        <div>
                                            <label for="Category"> Leave type*</label>

                                            <select class="form-select" aria-label="Default select example">
                                                <option selected> Select type..</option>
                                                <option value="1"> Comp - Off</option>

                                            </select>

                                        </div>
                                        <br>

                                        <div class="form-input">


                                            <div class="form-floating mb-3">
                                                <label id="fromdate" for="form-check-label"> From date* </label>
                                                <input type="date" class="form-control date" id="floatingInput"
                                                    placeholder="" >
                                                <label for="form-check-label"> Select date</label>

                                            </div>
                                            <label id="session" for="Category"> Session*</label>
                                            <div>


                                                <select id="selectInput" class="form-select"
                                                    aria-label="Default select example">
                                                    {{-- <option selected> Select type..</option> --}}
                                                    <option selected value="1"> Session 1 </option>
                                                    <option value="2"> Session 2 </option>

                                                </select>
                                            </div>



                                        </div>

                                        <br>

                                        <div class="form-input">


                                            <div class="form-floating mb-3">
                                                <label id="fromdate" for="form-check-label"> From date* </label>
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder="">
                                                <label for="form-check-label"> Select date</label>

                                            </div>

                                            <label id="session" for="Category"> Session*</label>

                                            <div>


                                                <select id="selectInput" class="form-select"
                                                    aria-label="Default select example">
                                                    {{-- <option selected> Select type..</option> --}}
                                                    <option selected value="1"> Session 1 </option>
                                                    <option value="2"> Session 2 </option>

                                                </select>
                                            </div>



                                        </div>



                                        <div>
                                            <label for="floatingInput"> Days*</label>
                                            <input type="number" class="form-control " id="floatinginput"
                                                placeholder=" Number of Days">
                                        </div>



                                        <br>

                                        <div>
                                            <label for="floatingTextarea"> Description* </label>
                                            <textarea class="form-control" placeholder=" Enter a reason" id="floatingTextarea"></textarea>

                                        </div>

                                        <div class="button">

                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-secondary">Close</button>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab" tabindex="0">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-apply-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true"> Apply </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-pending-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-pending" type="button" role="tab"
                                                aria-controls="pills-pending" aria-selected="false"> Pending </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false"> History </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>


                                <div class="content">

                                    <div class="title">
                                        <p> Restricted Holidays (RH) are a set of holidays allocated by the company that are
                                            optional for the employee to utilize. The company sets a limit on the amount of
                                            holidays that can be used.</p>
                                    </div>

                                    <p class="head"> Applying for Restricted Holiday </p>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                        aria-labelledby="v-pills-disabled-tab" tabindex="0">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-apply-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true"> Apply </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-pending-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-pending" type="button" role="tab"
                                                aria-controls="pills-pending" aria-selected="false"> Pending </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false"> History </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>


                                <div class="content">

                                    <div class="title">
                                        <p> Leave Cancel enables you to apply for cancellation of approved leave
                                            applications.
                                            Please select a leave type to get started.</p>
                                    </div>

                                    <p class="head"> Appliying for Leave Cancel </p>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="status">

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li id="active" class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-apply-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true"> Apply </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-pending-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-pending" type="button" role="tab"
                                                aria-controls="pills-pending" aria-selected="false"> Pending </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false"> History </button>
                                        </li>

                                    </ul>
                                </div>
                                <br>


                                <div class="content">

                                    <div class="title">
                                        <p> Compensatory Off is additional leave granted as a compensation for working
                                            overtime
                                            or on an off day.</p>
                                    </div>

                                    <p class="head"> Appliying for Comp. Off Grant </p>

                                    <form action="" method="post">



                                        <div>
                                            <label for="Category"> Leave type*</label>

                                            <select class="form-select" aria-label="Default select example">
                                                <option selected> Select type..</option>
                                                <option value="1"> Comp - Off</option>

                                            </select>

                                        </div>
                                        <br>

                                        <div class="form-input">


                                            <div class="form-floating mb-3">
                                                <label id="fromdate" for="form-check-label"> From date* </label>
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder="">
                                                <label for="form-check-label"> Select date</label>

                                            </div>
                                            <label id="session" for="Category"> Session*</label>
                                            <div>


                                                <select id="selectInput" class="form-select"
                                                    aria-label="Default select example">
                                                    {{-- <option selected> Select type..</option> --}}
                                                    <option selected value="1"> Session 1 </option>
                                                    <option value="2"> Session 2 </option>

                                                </select>
                                            </div>



                                        </div>

                                        <br>

                                        <div class="form-input">


                                            <div class="form-floating mb-3">
                                                <label id="fromdate" for="form-check-label"> From date* </label>
                                                <input type="date" class="form-control" id="floatingInput"
                                                    placeholder="">
                                                <label for="form-check-label"> Select date</label>

                                            </div>

                                            <label id="session" for="Category"> Session*</label>

                                            <div>


                                                <select id="selectInput" class="form-select"
                                                    aria-label="Default select example">
                                                    {{-- <option selected> Select type..</option> --}}
                                                    <option selected value="1"> Session 1 </option>
                                                    <option value="2"> Session 2 </option>

                                                </select>
                                            </div>



                                        </div>



                                        <div>
                                            <label for="floatingInput"> Days*</label>
                                            <input type="number" class="form-control " id="floatinginput"
                                                placeholder=" Number of Days">
                                        </div>



                                        <br>

                                        <div>
                                            <label for="floatingTextarea"> Description* </label>
                                            <textarea class="form-control" placeholder=" Enter a reason" id="floatingTextarea"></textarea>

                                        </div>

                                        <div class="button">

                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-secondary">Close</button>

                                        </div>
                                    </form>

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
