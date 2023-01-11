@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




        <style>
            .main_container {
                margin-top: -19%;
                margin-left: 8%;
                z-index: -1;


            }

            .btn_remove {
                margin-left: 17%
            }

            .btn_delete {
                margin-left: 17%;
                margin-top: 10px
            }

            .add-btn-head {
                margin-left: 17%
            }


            .navone {
                height: 70px;
                z-index: 1;
                margin-left: 15.1%
            }

            .navtwo {
                visibility: hidden;
                z-index: 0;
            }

            /* Progressbar */
            .progressbar {
                position: relative;
                display: flex;
                justify-content: space-between;
                counter-reset: step;
                /* margin: 2rem 5rem 4rem; */
                width: 1210px;
                margin-left: -100px;
                margin-top: 30px;
                margin-bottom: 30px;


            }

            .progressbar>.progress-step>i {
                font-size: 30px;
                color: rgb(130, 126, 126);
            }

            .progressbar>.progress-step-active>i {
                font-size: 30px;
                color: white;
            }

            .progressbar::before,
            .progress {
                content: "";
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                height: 8px;
                width: 100%;
                background-color: white;
                border: 1px solid rgb(175, 172, 172);
                z-index: -1;
            }

            .progress {
                background-color: lightgrey;
                width: 0%;
                transition: 0.3s;
            }

            .progress-step {
                width: 2.1875rem;
                height: 2.1875rem;
                background-color: white;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 40px;
                border: 1px solid rgb(119, 118, 118, 0.5);


            }

            .progress-step::before {
                /* counter-increment: step;
                            content: counter(step); */

            }

            .progress-step::after {
                content: attr(data-title);
                position: absolute;
                top: calc(100% + 0.5rem);
                font-size: 12px;
                color: rgb(129, 125, 125);
            }

            .progress-step-active {
                background-color: #22a3f8;
                color: white;

            }


            .form-step {
                display: none;
                transform-origin: top;
                animation: animate 0.5s;
            }

            .form-step-active {
                display: block;
            }


            .side-bar {
                margin-top: -25%
            }






            .title {
                text-align: center;
            }

            .title>h3 {
                font-size: 28px;
                font-size: 600;
            }

            .title>p {
                color: rgb(165, 162, 162);
                font-size: 15px;
                font-weight: 500;

            }

            .empdetails {
                margin-top: 25px;
                border: 1px solid lightgray;
                padding: 10px;
                padding-top: 20px;
                margin-left: 230px;
                margin-right: 230px
            }

            .details {
                display: flex;


            }

            .details>.name {
                font-size: 14px;
                font-weight: 550;
                margin-left: 1%;
                margin-top: -2px
            }

            .details>.contact {

                font-size: 15px;
                margin-left: 1%;


            }

            .details>.location {
                margin-right: 2%;
                font-size: 15px
            }


            .details {
                display: flex;
                justify-content: space-evenly;

            }

            .details>.id {
                margin-left: 2%;
            }

            .details>.department {
                margin-left: 16%;
            }

            .details>.designation {
                margin-left: 3%;
                font-size: 15px
            }



            @keyframes animate {
                from {
                    transform: scale(1, 0);
                    opacity: 0;
                }

                to {
                    transform: scale(1, 1);
                    opacity: 1;
                }
            }

            /* Button */
            .btns-group {
                margin-left: 55.7%
            }

            #btn {
                width: 170px;
                height: 50px;
                padding-top: 10px;
                margin-left: 72%
            }

            #btnback {
                width: 170px;
                height: 50px;
                padding: 10px;
                border: 1px solid rgb(98, 98, 238);
                margin-right: 30px
            }

            #btnnext {
                width: 170px;
                height: 50px;
                padding: 10px;

            }

            #btnsubmit {
                width: 170px;
                height: 50px;
                padding: 10px;

            }

            .bankdetails {
                margin-left: 5%
            }

            .pfdetails {
                margin-left: 5%
            }

            .pandetails {
                margin-left: 5%
            }

            .aadhaardetails {
                margin-left: 5%
            }

            /* .btn {
                            padding: 0.75rem;
                            display: block;
                            text-decoration: none;
                            background-color: var(--primary-color);
                            color: #f3f3f3;
                            text-align: center;
                            border-radius: 0.25rem;
                            cursor: pointer;
                            transition: 0.3s;
                        } */

            /* .btn:hover {
                            box-shadow: 0 0 0 2px #fff, 0 0 0 3px var(--primary-color);
                        } */



            #bar {
                width: 90%;
                margin-left: 8.5%
            }

            .form-group.c1 {
                display: inline-block;
                width: 30%;
                margin-left: 17%;
            }

            .form-group.c2 {

                display: inline-block;
                width: 30%;
                margin-left: 8%;


            }

            .address {
                width: 69%;
                margin-left: 17%;

            }

            h1 {
                text-align: center;
                font-size: 18px;
                font-weight: 550;
                margin-left: 10%
            }

            .nomination {
                font-size: 15px;
                font-weight: 500;
                margin-bottom: -1.2%
            }

            .nominee {
                font-size: 15px;
                font-weight: 500;
                margin-bottom: -1.2%;
                margin-left: 5%
            }



            .content {
                display: flex;
            }

            .icon {
                margin-left: 800px;

            }

            #icon {
                margin-left: 908px;

            }

            .icons {
                margin-left: 859px;

            }

            #personalinfo {

                font-size: 28px;

            }

            #personal_info {

                font-size: 28px;
            }

            #addressinfo {

                font-size: 28px;

            }

            #address_info {

                font-size: 28px;
            }

            #qualificationinfo {

                font-size: 28px;

            }

            #qualification_info {

                font-size: 28px;
            }

            label {
                font-size: 15px;
                font-weight: 500
            }

            .employeeicons {
                margin-left: 800px;
                margin-top: 0.5%;
            }

            #employeeinfo {

                font-size: 28px;

            }

            #employee_info {

                font-size: 28px;
            }

            .employementicons {
                margin-left: 780px;
                margin-top: 0.5%;
            }

            #employementinfo {

                font-size: 28px;

            }

            #employement_info {

                font-size: 28px;
            }

            .accounticons {
                margin-left: 797px;
                margin-top: 0.5%;
            }

            #accountinfo {

                font-size: 28px;

            }

            #account_info {

                font-size: 28px;
            }

            hr {
                margin-left: 4%;
                width: 90%;

            }


            .data {
                background-color: white;
                border-radius: 5px;
                margin: 20px;
                width: 1200px;
                padding-top: 10px;
                box-shadow: 0px 10px 50px rgba(173, 170, 170, 0.2);
            }


            .employeid {
                visibility: hidden;
            }



            @media screen and (max-width : 960px) {

                /*
                            .form-group.c1 {
                                display: inline-block;
                                width: 30%;
                                margin-left: 17%;
                            }

                            .form-group.c2 {

                                display: inline-block;
                                width: 30%;
                                margin-left: 8%;


                            }


                            #employeeid {
                                padding-top: 11%;
                            }

                            .progressbar {
                                position: relative;
                                display: flex;
                                justify-content: space-between;
                                counter-reset: step;
                                margin: 2rem 5rem 4rem;


                            }




                 */

                .employeid {
                    visibility: hidden;
                }

                .main_container {
                    margin-top: 0%;
                    margin-left: 0%;
                    z-index: -1;


                }

                .navone {
                    z-index: 0;
                    width: 100%;
                    margin-left: 0%;
                }

                .navtwo {
                    visibility: visible;
                    z-index: 1;
                }

                .progressbar {
                    position: relative;
                    display: flex;
                    justify-content: space-between;
                    counter-reset: step;
                    /* margin: 2rem 5rem 4rem; */
                    width: 710px;
                    margin-left: 10px;
                    margin-top: 30px;
                    margin-bottom: 30px;
                    margin-right: 10px;


                }

                .progressbar>.progress-step>i {
                    font-size: 15px;
                    color: rgb(130, 126, 126);
                }

                .progressbar>.progress-step-active>i {
                    font-size: 15px;
                    color: white;
                }

                .progressbar::before,
                .progress {
                    content: "";
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    height: 8px;
                    width: 100%;
                    background-color: white;
                    border: 1px solid rgb(175, 172, 172);
                    z-index: -1;
                }

                .progress {
                    background-color: lightgrey;
                    width: 0%;
                    transition: 0.3s;
                }

                .progress-step {
                    width: 2.1875rem;
                    height: 2.1875rem;
                    background-color: white;
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 25px;
                    border: 1px solid rgb(119, 118, 118, 0.5);


                }

                .progress-step::before {
                    /* counter-increment: step;
                            content: counter(step); */

                }

                .progress-step::after {
                    content: attr(data-title);
                    position: absolute;
                    top: calc(100% + 0.5rem);
                    font-size: 12px;
                    color: rgb(129, 125, 125);
                }

                .progress-step-active {
                    background-color: #22a3f8;
                    color: white;

                }


                .form-step {
                    display: none;
                    transform-origin: top;
                    animation: animate 0.5s;
                }

                .form-step-active {
                    display: block;
                }






                .title {
                    text-align: center;
                }

                .title>h3 {
                    font-size: 28px;
                    font-size: 600;
                }

                .title>p {
                    color: rgb(165, 162, 162);
                    font-size: 15px;
                    font-weight: 500;

                }

                .empdetails {
                    margin-top: 25px;
                    border: 1px solid lightgray;
                    padding: 10px;
                    padding-top: 20px;
                    margin-left: 20px;
                    margin-right: 20px
                }

                .details {
                    display: flex;


                }

                .details>.name {
                    font-size: 14px;
                    font-weight: 550;
                    margin-left: 5%;
                    margin-top: -2px
                }

                .details>.contact {

                    font-size: 15px;
                    margin-right: 9%;


                }

                .details>.location {
                    margin-right: 8%;
                    font-size: 15px
                }


                .details {
                    display: flex;
                    justify-content: space-evenly;

                }

                .details>.id {
                    margin-right: 0%;
                }

                .details>.department {
                    margin-right: 3%;
                }

                .details>.designation {
                    margin-right: 0%;
                    font-size: 15px
                }



                @keyframes animate {
                    from {
                        transform: scale(1, 0);
                        opacity: 0;
                    }

                    to {
                        transform: scale(1, 1);
                        opacity: 1;
                    }
                }

                /* Button */
                .btns-group {
                    margin-left: 38%
                }

                #btn {
                    width: 170px;
                    height: 50px;
                    padding-top: 10px;
                    margin-left: 62%
                }

                #btnback {
                    width: 170px;
                    height: 50px;
                    padding: 10px;
                    border: 1px solid rgb(98, 98, 238);
                    margin-right: 10px
                }

                #btnnext {
                    width: 170px;
                    height: 50px;
                    padding: 10px;

                }

                #btnsubmit {
                    width: 170px;
                    height: 50px;
                    padding: 10px;

                }

                /* .btn {
                            padding: 0.75rem;
                            display: block;
                            text-decoration: none;
                            background-color: var(--primary-color);
                            color: #f3f3f3;
                            text-align: center;
                            border-radius: 0.25rem;
                            cursor: pointer;
                            transition: 0.3s;
                        } */

                /* .btn:hover {
                            box-shadow: 0 0 0 2px #fff, 0 0 0 3px var(--primary-color);
                        } */



                #bar {
                    width: 95%;
                    margin-left: 2%
                }

                .form-group.c1 {
                    display: inline-block;
                    width: 30%;
                    margin-left: 17%;
                }

                .form-group.c2 {

                    display: inline-block;
                    width: 30%;
                    margin-left: 8%;


                }

                .address {
                    width: 69%;
                    margin-left: 17%;

                }

                h1 {
                    text-align: center;
                    font-size: 18px;
                    font-weight: 550
                }

                .nomination {
                    font-size: 15px;
                    font-weight: 500;
                    margin-bottom: -1.2%;
                    margin-left: 35px
                }

                .nominee {
                    font-size: 15px;
                    font-weight: 500;
                    margin-bottom: -1.2%;
                    margin-left: 5%
                }



                .content {
                    display: flex;
                }

                .icon {
                    margin-left: 400px;

                }

                #icon {
                    margin-left: 508px;

                }

                .icons {
                    margin-left: 459px;

                }

                #personalinfo {

                    font-size: 28px;

                }

                #personal_info {

                    font-size: 28px;
                }

                #addressinfo {

                    font-size: 28px;

                }

                #address_info {

                    font-size: 28px;
                }

                #qualificationinfo {

                    font-size: 28px;

                }

                #qualification_info {

                    font-size: 28px;
                }

                label {
                    font-size: 15px;
                    font-weight: 500
                }

                hr {
                    margin-left: 2%;
                    width: 95%;
                }


                .employeeicons {
                    margin-left: 400px;
                    margin-top: 0.5%;
                }

                #employeeinfo {

                    font-size: 28px;

                }

                #employee_info {

                    font-size: 28px;
                }

                .employementicons {
                    margin-left: 380px;
                    margin-top: 0.5%;
                }

                #employementinfo {

                    font-size: 28px;

                }

                #employement_info {

                    font-size: 28px;
                }

                .accounticons {
                    margin-left: 397px;
                    margin-top: 0.5%;
                }

                #accountinfo {

                    font-size: 28px;

                }

                #account_info {

                    font-size: 28px;
                }

                /* hr {
                        margin-left: 4%;
                        width: 100%;

                    } */


                .data {
                    background-color: white;
                    border-radius: 5px;
                    margin: 20px;
                    width: 700px;
                    padding-top: 10px;
                    box-shadow: 0px 10px 50px rgba(173, 170, 170, 0.2);
                }










            }
        </style>
    </head>

    <body style="background-color: white;font-family: 'Montserrat', sans-serif;">

        <div id="main-container" class="main_container">

            @include('flash-message')

            <div class="title">
                <h3> Hi, JANAGAMA PRASHANTH GOUD </h3>
                <P> Help us know you better! Provide all your employement information. </P>
            </div>

            <div class="empdetails">

                <div class="details">
                    <h6 class="name"> JANAGAMA PRASHANTH GOUD </h6>
                    <p class="contact"> Point of contact: <b> </b></p>
                    <p class="location"> Location: <b> </b></p>

                </div>

                <div class="details">
                    <p class="id">Emp ID: </p>
                    <p class="department"> Department: </p>
                    <p class="designation"> Designation: </p>
                </div>

            </div>
            <section>

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="progressbar" style="font-size:15px">
                            <div class="progress" id="progress"></div>


                            <div class="progress-step  progress-step-active" data-title="Personal info"> <i
                                    class="	fa fa-address-card-o"></i> </div>
                            <div class="progress-step" data-title="Previous Employment"> <i
                                    class="fa fa-address-card-o"></i></div>
                            <div class="progress-step" data-title="Accounts & Statutory"> <i
                                    class="	fa fa-address-card-o"></i></div>
                            <div class="progress-step" data-title=" Family Details"> <i class="fa fa-address-card-o"></i>
                            </div>
                            <div class="progress-step" data-title="Nomination Details"> <i class="fa fa-address-card-o"></i>
                            </div>
                            <div class="progress-step" data-title=" Attachements "> <i class="fa fa-address-card-o"></i>
                            </div>


                        </div>
                    </div>
                </div>

                <hr id="bar" style="border-top:dotted 3px;">



                <div class="row justify-content-center">
                    <div class="col-md-10">

                        <form action="employement" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group c1">
                                <div class="employeid">
                                    <label for=" Employe Id"> Employe Id </label>
                                    <input type="text" class="form-control" placeholder=" Employe Id"
                                        value="{{ auth()->user()->employeeid }}" name="employeid" style=" font-size:15px;"
                                        required>


                                </div>
                            </div>


                            <div class="form-step form-step-active">
                                <div class="data">

                                    <div class="content">
                                        <h1> Personal Information </h1>
                                        <div class="icon">
                                            <i id="personalinfo" class="fa fa-chevron-circle-down"></i>
                                            <i id="personal_info" class="fa fa-chevron-circle-up"></i>
                                        </div>
                                    </div>
                                    <br>

                                    <div id="personal">

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for=" dob"> Date Of Birth </label>
                                                <input type="date" class="form-control" placeholder=" DOB"
                                                    name="dateofbirth" style=" font-size:15px;" required>

                                                <div class="invalid-feedback">
                                                    Please Enter Date Of Birth
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group c2">
                                            <div class=" ">
                                                <label for="personalemail"> Personal Email </label>
                                                <input type="text" class="form-control" placeholder=" Personal Email"
                                                    name="personalemail" style=" font-size:15px;">

                                            </div>
                                        </div>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for=" Fathername"> Father Name</label>
                                                <input type="text" class="form-control" placeholder=" Father Name"
                                                    name="fathername" style=" font-size:15px;">

                                            </div>
                                        </div>




                                        <div class="form-group c2">
                                            <label for=" Blood Group "> Blood Group </label>

                                            <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                                aria-label="Default select example" name="bloodgroup">

                                                <option selected disabled value=""> Select Blood Group</option>
                                                <option value="A+"> A+ </option>
                                                <option value="A-"> A- </option>
                                                <option value="B+"> B+ </option>
                                                <option value="B-"> B- </option>
                                                <option value="AB+"> AB+ </option>
                                                <option value="AB-"> AB- </option>
                                                <option value="O+"> O+ </option>
                                                <option value="O-"> O- </option>



                                            </select>

                                        </div>



                                        <div class="form-group c1">
                                            <label for=" Marital Status "> Marital Status </label>

                                            <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                                aria-label="Default select example" name="maritalstatus">

                                                <option selected disabled value=""> Select Marital Status</option>
                                                <option value="married"> Married </option>
                                                <option value="Unmarried"> Unmarried </option>

                                            </select>

                                        </div>

                                        <div class="form-group c2">
                                            <div class="">
                                                <label for=" Marriagedate "> Marriage Date </label>
                                                <input type="date" class="form-control" placeholder=" Marriage Date "
                                                    name="marriagedate" style=" font-size:15px;">

                                            </div>
                                        </div>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for=" Spouse name"> Spouse Name </label>
                                                <input type="text" class="form-control" placeholder=" Spouse Name"
                                                    name="spousename" style=" font-size:15px;">

                                            </div>
                                        </div>



                                        <div class="form-group c2">
                                            <label for=" nationality "> Nationality </label>

                                            <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                                aria-label="Default select example" name="nationality" required>

                                                <option selected disabled value=""> Select Nationality</option>
                                                <option value="Indian"> Indian </option>
                                                <option value="Other"> Other </option>

                                            </select>

                                            <div class="invalid-feedback">
                                                Please Select Nationality
                                            </div>

                                        </div>

                                        {{-- <div class="form-group c1">
                            <div class=" ">
                                <label for=" Residentialstatus"> Residential Status </label>
                                <input type="text" class="form-control" placeholder=" Residential Status"
                                    name="residentialstatus" style=" font-size:15px;">

                            </div>
                        </div> --}}

                                        <div class="form-group c1">
                                            <label for=" Residential Status"> Residential Status </label>

                                            <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                                aria-label="Default select example" name="residentialstatus" required>

                                                <option selected disabled value=""> Select Residential Status
                                                </option>
                                                <option value="Resident"> Resident </option>
                                                <option value="Non-Resident"> Non-Resident </option>


                                            </select>

                                            <div class="invalid-feedback">
                                                Please Select Residential Status
                                            </div>

                                        </div>



                                        <div class="form-group c2">
                                            <div class=" ">
                                                <label for=" placeofbirth"> Place Of Birth </label>
                                                <input type="text" class="form-control" placeholder=" Place Of Birth "
                                                    name="placeofbirth" style=" font-size:15px;">

                                            </div>
                                        </div>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for="countryoforigin"> Country Of Origin </label>
                                                <input type="text" class="form-control"
                                                    placeholder=" Country Of Origin " name="countryoforigin"
                                                    style="font-size:15px;">

                                            </div>
                                        </div>

                                        <div class="form-group c2">
                                            <div class=" ">
                                                <label for=" Religion "> Religion </label>
                                                <input type="text" class="form-control" placeholder=" Religion "
                                                    name="religion" style=" font-size:15px;">

                                            </div>
                                        </div>



                                        <div class="form-group c1">
                                            <label for=" internationalemployee"> International Employee </label>

                                            <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                                aria-label="Default select example" name="internationalemployee" required>

                                                <option selected disabled value=""> Select Employee Status </option>
                                                <option value="No"> No </option>
                                                <option value="Yes"> Yes </option>


                                            </select>

                                            <div class="invalid-feedback">
                                                Please Select Emplyee Status
                                            </div>

                                        </div>

                                        <div class="form-group c2">
                                            <label for=" physicallychallenged"> Physically Challenged </label>

                                            <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                                aria-label="Default select example" name="physicallychallenged" required>

                                                <option selected disabled value=""> Select PH </option>
                                                <option value="No"> No </option>
                                                <option value="Yes"> Yes </option>


                                            </select>

                                            <div class="invalid-feedback">
                                                Please Select PH
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="data">

                                    <div class="content">
                                        <h1> Address </h1>
                                        <div id="icon">
                                            <i id="addressinfo" class="fa fa-chevron-circle-down"></i>
                                            <i id="address_info" class="fa fa-chevron-circle-up"></i>
                                        </div>
                                    </div>
                                    <br>



                                    <div id="address">



                                        <div class="form-group c1">
                                            <div class="">
                                                <label for="H-No"> H-No </label>
                                                <input type="text" class="form-control" placeholder=" H-No "
                                                    name="housenumber" style="font-size:15px;">

                                            </div>
                                        </div>

                                        <div class="form-group c2">
                                            <div class=" ">
                                                <label for=" Street "> Street </label>
                                                <input type="text" class="form-control" placeholder=" Street "
                                                    name="street" style=" font-size:15px;">

                                            </div>
                                        </div>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for="Area/Locality"> Area/Locality </label>
                                                <input type="text" class="form-control" placeholder=" Area/Locality "
                                                    name="locality" style="font-size:15px;">

                                            </div>
                                        </div>

                                        <div class="form-group c2">
                                            <div class=" ">
                                                <label for=" District "> District </label>
                                                <input type="text" class="form-control" placeholder=" District "
                                                    name="district" style=" font-size:15px;">

                                            </div>
                                        </div>

                                        <div class="form-group c1">
                                            <div class=" ">
                                                <label for=" State "> State </label>
                                                <input type="text" class="form-control" placeholder=" State "
                                                    name="state" style=" font-size:15px;">

                                            </div>
                                        </div>

                                        <div class="form-group c2">
                                            <div class="">
                                                <label for="pincode"> Pincode </label>
                                                <input type="number" class="form-control" placeholder=" Pincode "
                                                    name="pincode" style="font-size:15px;">

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="data">
                                    <div class="content">
                                        <h1> Qualifications </h1>
                                        <div class="icons">
                                            <i id="qualificationinfo" class="fa fa-chevron-circle-down"></i>
                                            <i id="qualification_info" class="fa fa-chevron-circle-up"></i>
                                        </div>
                                    </div>
                                    <br>


                                    <div id="qualification">
                                        <div id="first_row">

                                          

                                            <div class="address">
                                               
                                                <div class="form-floating">
                                                    <input type="hidden"  name="employeid"
                                                    value="{{ auth()->user()->employeeid }}">
                                                </div>
                                            </div>
                                            <div class="form-group c1">
                                                <div class="">
                                                    <label for="Start Date"> Start Date </label>
                                                    <input type="date" class="form-control" placeholder=" Start Date "
                                                        name="startdate[]" style="font-size:15px;">

                                                </div>
                                            </div>

                                            <div class="form-group c2">
                                                <div class=" ">
                                                    <label for=" End Date "> End Date </label>
                                                    <input type="date" class="form-control" placeholder=" End Date "
                                                        name="enddate[]" style=" font-size:15px;">

                                                </div>
                                            </div>

                                            <div class="form-group c1">
                                                <div class="">
                                                    <label for="Institution"> Institution Name </label>
                                                    <input type="text" class="form-control"
                                                        placeholder=" Institution Name " name="institution[]"
                                                        style="font-size:15px;">

                                                </div>
                                            </div>

                                            <div class="form-group c2">
                                                <div class=" ">
                                                    <label for=" Qualification "> Qualification </label>
                                                    <input type="text" class="form-control"
                                                        placeholder=" Qualification " name="qualification[]"
                                                        style=" font-size:15px;">

                                                </div>
                                            </div>

                                            <div id="dynamic_field">

                                            </div>
                                            <br>

                                            <button type="button" id="btn_add_license"
                                                class="btn btn-primary add-btn-head " title="Add More">Add
                                                More Feilds </button>

                                            <input type="hidden" name="license_count" id="license_count"
                                                value="1">
                                        </div>
                                    </div>


                                </div>




                                <br>
                                <br>


                                <br>

                                <div class="">

                                    <a href="#" id="btn" class="btn btn-primary active btn-next">Next</a>

                                </div>
                                <br>

                            </div>



                            <div class="form-step">

                                <h1> Previous Employement </h1>

                                <br>


                                <div id="first_row">

                                    <div class="address">
                                               
                                        <div class="form-floating">
                                            <input type="hidden"  name="employeid"
                                            value="{{ auth()->user()->employeeid }}">
                                        </div>
                                    </div>

                                    <div class="form-group c1">
                                        <div class="">
                                            <label for="Company Name "> Comapny Name </label>
                                            <input type="text" class="form-control" placeholder=" Company Name "
                                                name="companyname[]" style="font-size:15px;">

                                        </div>
                                    </div>

                                    <div class="form-group c2">
                                        <div class=" ">
                                            <label for=" Designation "> Designation </label>
                                            <input type="text" class="form-control" placeholder=" Designation "
                                                name="designation[]" style=" font-size:15px;">

                                        </div>
                                    </div>

                                    <div class="form-group c1">
                                        <div class="">
                                            <label for="From Date"> From Date </label>
                                            <input type="date" class="form-control" placeholder=" From Date "
                                                name="fromdate[]" style="font-size:15px;">

                                        </div>
                                    </div>

                                    <div class="form-group c2">
                                        <div class=" ">
                                            <label for=" To Date "> To Date </label>
                                            <input type="date" class="form-control" placeholder=" To Date "
                                                name="todate[]" style=" font-size:15px;">

                                        </div>
                                    </div>

                                    <div class="address">
                                        <label for="floatingTextarea"> Company Address* </label>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder=" Comapny Address" id="floatingTextarea" name="companyaddress[]"
                                                style="height: 50px"></textarea>
                                            <label id="title" for="floatingTextarea"> Enter Company Address.. </label>
                                        </div>
                                    </div>

                                    <div id="dynamic">

                                    </div>
                                    <br>

                                    <button type="button" id="btn_field"
                                        class="btn btn-primary add-btn-head " title="Add More">Add
                                        More Feilds </button>

                                    <input type="hidden" name="license_count" id="license"
                                        value="1">



                                </div>



                                <br><br>
                                <div class="btns-group">
                                    <a href="#" id="btnback" class="btn btn-outline-primary  btn-prev">Back</a>

                                    <a href="#" id="btnnext" class="btn btn-primary active btn-next">Next</a>

                                </div>
                                <br>
                            </div>


                            <div class="form-step">

                                <h1> Accounts & Statutory</h1>
                                <br>

                                <p class="bankdetails"> Bank Account Details </p>
                                <hr style="border-top: dotted 3px;" />
                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Bank Account Number "> Bank Account Number </label>
                                        <input type="number" class="form-control" placeholder=" Bank Account Number "
                                            name="accountnumber" style="font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Confirm Bank Account Number "> Confirm Bank Account Number </label>
                                        <input type="number" class="form-control"
                                            placeholder=" Confirm Bank Account Number " name="confirmbankaccountnumber"
                                            style=" font-size:15px;">

                                    </div>
                                </div>
                                <div class="form-group c1">
                                    <label for=" country "> Country </label>

                                    <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                        aria-label="Default select example" name="country" required>

                                        <option selected disabled value=""> Select Country</option>
                                        <option value="Indian"> Indian </option>
                                        <option value="Other"> Other </option>

                                    </select>



                                </div>


                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Bank Code "> Branch Code </label>
                                        <input type="text" class="form-control" placeholder=" Branch Code "
                                            name="branchcode" style=" font-size:15px;">

                                    </div>
                                </div>



                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Name "> Name as per Bank Account </label>
                                        <input type="text" class="form-control"
                                            placeholder="  Name as per Bank Account  " name="accountholdername"
                                            style="font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <label for=" Account Type "> Account Type </label>

                                    <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                        aria-label="Default select example" name="accounttype" required>

                                        <option selected disabled value=""> Select Account Type </option>
                                        <option value="Saving"> Saving </option>
                                        <option value="Current"> Current </option>

                                    </select>



                                </div>

                                <p class="pfdetails"> PF Account Details </p>
                                <hr style="border-top: dotted 3px;" />


                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="PF Account Number"> PF Account Number </label>
                                        <input type="text" class="form-control" placeholder=" PF Account number "
                                            name="pfnumber" style=" font-size:15px;">

                                    </div>
                                </div>



                                <div class="form-group c2">
                                    <div class="">
                                        <label for=" UAN "> UAN </label>
                                        <input type="text" class="form-control" placeholder=" UAN " name="uan"
                                            style="font-size:15px;">

                                    </div>
                                </div>


                                <p class="pandetails"> Permanent Account Number </p>
                                <hr style="border-top: dotted 3px;" />


                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="PAN Number"> PAN Number </label>
                                        <input type="text" class="form-control" placeholder=" PAN Number "
                                            name="pannumber" style=" font-size:15px;">

                                    </div>
                                </div>



                                <div class="form-group c2">
                                    <div class="">
                                        <label for=" Name on PAN "> Name on PAN </label>
                                        <input type="text" class="form-control" placeholder=" Name on PAN "
                                            name="nameonpan" style="font-size:15px;">

                                    </div>
                                </div>




                                <p class="aadhaardetails"> Aadhaar </p>
                                <hr style="border-top: dotted 3px;" />


                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="Aadhaar Number"> Aadhaar Number </label>
                                        <input type="number" class="form-control" placeholder=" Aadhaar Number "
                                            name="aadhaarnumber" style=" font-size:15px;">

                                    </div>
                                </div>



                                <div class="form-group c2">
                                    <div class="">
                                        <label for=" Name on Aadhaar "> Name on Aadhaar </label>
                                        <input type="text" class="form-control" placeholder=" Name on Aadhaar "
                                            name="nameonaadhaar" style="font-size:15px;">

                                    </div>
                                </div>


                                <br>


                                <div class="btns-group">
                                    <a href="#" id="btnback" class="btn btn-outline-primary btn-prev">Back</a>

                                    <a href="#" id="btnnext" class="btn btn-primary btn-next">Next</a>


                                </div>
                            </div>


                            <div class="form-step">

                                <h1> Family Details </h1>

                                <br>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Name "> Name </label>
                                        <input type="text" class="form-control" placeholder="  Name " name="name"
                                            style="font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <label for=" relationship "> Relationship </label>

                                    <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                        aria-label="Default select example" name="relationship">

                                        <option selected disabled value=""> Select Relationship</option>
                                        <option value="Father"> Father </option>
                                        <option value="Mother"> Mother </option>
                                        <option value="Brother"> Brother </option>
                                        <option value=" Sister"> Sister </option>

                                    </select>

                                </div>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for="DOB"> DOB </label>
                                        <input type="date" class="form-control" placeholder=" Date of Birth "
                                            name="dob" style="font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <label for=" Gender "> Gender </label>

                                    <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                        aria-label="Default select example" name="gender">

                                        <option selected disabled value=""> Select Gender</option>
                                        <option value="Male"> Male </option>
                                        <option value="Female"> Female </option>

                                    </select>

                                </div>

                                <div class="form-group c1">
                                    <label for=" Blood Group "> Blood Group </label>

                                    <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                        aria-label="Default select example" name="blood">

                                        <option selected disabled value=""> Select Blood Group</option>
                                        <option value="A+"> A+ </option>
                                        <option value="A-"> A- </option>
                                        <option value="B+"> B+ </option>
                                        <option value="B-"> B- </option>
                                        <option value="AB+"> AB+ </option>
                                        <option value="AB-"> AB- </option>
                                        <option value="O+"> O+ </option>
                                        <option value="O-"> O- </option>



                                    </select>

                                </div>

                                <div class="form-group c2">
                                    <label for=" Nationality "> Nationality </label>

                                    <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                        aria-label="Default select example" name="Nation">

                                        <option selected disabled value=""> Select Nationality</option>
                                        <option value="Indian"> Indian </option>
                                        <option value="Other"> Other </option>




                                    </select>

                                </div>

                                <br>

                                <div class="btns-group">
                                    <a href="#" id="btnback" class="btn btn-outline-primary btn-prev">Back</a>

                                    <a href="#" id="btnnext" class="btn btn-primary btn-next">Next</a>


                                </div>
                                <br>
                                <br>
                            </div>

                            <div class="form-step">

                                <h1> Nominations </h1>
                                <br>
                                <p class="nomination"> EPF Nominations </p>
                                <hr style="border-top: dotted 3px;">
                                <h6 class="nominee"> Nominee </h6>

                                <hr style="border-top: dotted 3px;">

                                <div class="form-group c1">
                                    <label for=" Name "> Name </label>

                                    <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                        aria-label="Default select example" name="epfnomineename">

                                        <option selected disabled value=""> Select Nominee</option>
                                        <option value="prashanth"> prashanth </option>





                                    </select>

                                </div>

                                <div class="form-group c2">
                                    <div class="">
                                        <label for=" Nomination "> Nomintation % </label>
                                        <input type="number" class="form-control" placeholder="  Nomination "
                                            name="nomination" style="font-size:15px;">

                                    </div>
                                </div>

                                <br>

                                <p class="nomination"> EPS Nominations </p>
                                <hr style="border-top: dotted 3px;">
                                <h6 class="nominee"> Nominee </h6>

                                <hr style="border-top: dotted 3px;">

                                <div class="form-group c1">
                                    <label for=" Name "> Name </label>

                                    <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                        aria-label="Default select example" name="epsnomineename">

                                        <option selected disabled value=""> Select Nominee</option>
                                        <option value="prashanth"> prashanth </option>





                                    </select>

                                </div>

                                <br>
                                <p class="nomination"> ESI Nominations </p>
                                <hr style="border-top: dotted 3px;">
                                <h6 class="nominee"> Nominee </h6>

                                <hr style="border-top: dotted 3px;">

                                <div class="form-group c1">
                                    <label for=" Name "> Name </label>

                                    <select style="font-size: 17px; color:rgb(158, 157, 157)" class="form-select"
                                        aria-label="Default select example" name="esinomineename">

                                        <option selected disabled value=""> Select Nominee</option>
                                        <option value="prashanth"> prashanth </option>





                                    </select>

                                </div>
                                <br>


                                <div class="btns-group">
                                    <a href="#" id="btnback" class="btn btn-outline-primary btn-prev">Back</a>
                                    <a href="#" id="btnnext" class="btn btn-primary btn-next">Next</a>


                                </div>
                                <br>
                            </div>

                            <div class="form-step">

                                <div class="data">
                                    <div class="content">
                                        <h1> Personal Information </h1>
                                        <div class="employeeicons">
                                            <i id="employeeinfo" class="fa fa-chevron-circle-down"></i>
                                            <i id="employee_info" class="fa fa-chevron-circle-up"></i>
                                        </div>
                                    </div>

                                    <div id="employee">

                                        <p class="bankdetails"> Permanent Address </p>
                                        <hr style="border-top: dotted 3px;">
                                        <br>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for=" Permanent Address "> Permanent Address </label>
                                                <input type="file" class="form-control"
                                                    placeholder="  Add Attachment " name="permanentaddress"
                                                    style="font-size:15px;">

                                            </div>
                                        </div>

                                        <p class="bankdetails"> Present Address </p>
                                        <hr style="border-top: dotted 3px;">
                                        <br>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for=" Present Address "> Present Address </label>
                                                <input type="file" class="form-control"
                                                    placeholder="  Add Attachment " name="presentaddress"
                                                    style="font-size:15px;">

                                            </div>
                                        </div>

                                        <p class="bankdetails"> Qualificatoin </p>
                                        <hr style="border-top: dotted 3px;">
                                        <br>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for="Qualification"> Qualification </label>
                                                <input type="file" class="form-control"
                                                    placeholder="  Add Attachment " name="qualificationdetails"
                                                    style="font-size:15px;">

                                            </div>
                                        </div>

                                    </div>

                                </div>


                                <div class="data">
                                    <div class="content">
                                        <h1> Previous Employement </h1>
                                        <div class="employementicons">
                                            <i id="employementinfo" class="fa fa-chevron-circle-down"></i>
                                            <i id="employement_info" class="fa fa-chevron-circle-up"></i>
                                        </div>
                                    </div>

                                    <div id="employement">

                                        <p class="bankdetails"> Previous Employement </p>
                                        <hr style="border-top: dotted 3px;">
                                        <br>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for="  Previous Employement "> Previous Employement </label>
                                                <input type="file" class="form-control"
                                                    placeholder="  Add Attachment " name=" previousemployement"
                                                    style="font-size:15px;">

                                            </div>
                                        </div>

                                    </div>

                                </div>



                                <div class="data">
                                    <div class="content">
                                        <h1> Accounts & Statutory </h1>
                                        <div class="accounticons">
                                            <i id="accountinfo" class="fa fa-chevron-circle-down"></i>
                                            <i id="account_info" class="fa fa-chevron-circle-up"></i>
                                        </div>
                                    </div>

                                    <div id="account">

                                        <p class="bankdetails"> Bank Account Details </p>
                                        <hr style="border-top: dotted 3px;">
                                        <br>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for="  Bank Account Details  "> Bank Account Details </label>
                                                <input type="file" class="form-control"
                                                    placeholder="  Add Attachment " name="bankaccount"
                                                    style="font-size:15px;">

                                            </div>
                                        </div>

                                        {{-- <p class="bankdetails "> Permanent Account Number </p>
                                        <hr style="border-top: dotted 3px;">
                                        <br>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for=" Permanent Account Number  "> Permanent Account Number </label>
                                                <input type="file" class="form-control"
                                                    placeholder="  Add Attachment " name="permanentaccountnumber "
                                                    style="font-size:15px;">

                                            </div>
                                        </div> --}}

                                        <p class="bankdetails"> Aadhaar </p>
                                        <hr style="border-top: dotted 3px;">
                                        <br>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for="Aadhaar"> Aadhaar </label>
                                                <input type="file" class="form-control"
                                                    placeholder="  Add Attachment " name="aadhaar"
                                                    style="font-size:15px;">

                                            </div>
                                        </div>


                                        <p class="bankdetails"> Passport </p>
                                        <hr style="border-top: dotted 3px;">
                                        <br>

                                        <div class="form-group c1">
                                            <div class="">
                                                <label for="Passport"> Passport </label>
                                                <input type="file" class="form-control"
                                                    placeholder="  Add Attachment " name="passport"
                                                    style="font-size:15px;">

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <br>
                                <div class="btns-group">
                                    <a href="#" id="btnback" class="btn btn-outline-primary btn-prev">Back</a>
                                    <button id="btnsubmit" class="btn btn-success active">
                                        Submit
                                    </button>
                                </div>
                                <br>

                            </div>


                        </form>



                    </div>
                </div>
















            </section>


        </div>

    </body>

    </html>

    <script>
        const prevBtns = document.querySelectorAll(".btn-prev");
        const nextBtns = document.querySelectorAll(".btn-next");
        const progress = document.getElementById("progress");
        const formSteps = document.querySelectorAll(".form-step");
        const progressSteps = document.querySelectorAll(".progress-step");

        let formStepsNum = 0;

        nextBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum++;
                updateFormSteps();
                updateProgressbar();
            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                formStepsNum--;
                updateFormSteps();
                updateProgressbar();
            });
        });

        function updateFormSteps() {
            formSteps.forEach((formStep) => {
                formStep.classList.contains("form-step-active") &&
                    formStep.classList.remove("form-step-active");
            });

            formSteps[formStepsNum].classList.add("form-step-active");
        }

        function updateProgressbar() {
            progressSteps.forEach((progressStep, idx) => {
                if (idx < formStepsNum + 1) {
                    progressStep.classList.add("progress-step-active");
                } else {
                    progressStep.classList.remove("progress-step-active");
                }
            });

            const progressActive = document.querySelectorAll(".progress-step-active");

            progress.style.width =
                ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
        }
    </script>

    <script>
        $(document).ready(function() {

            $('#personalinfo').hide();
            $('#personal_info').show();
            $('#personal').show();

            $('#addressinfo').show();
            $('#address_info').hide();
            $('#address').hide();

            $('#qualificationinfo').show();
            $('#qualification_info').hide();
            $('#qualification').hide();


            $("#personalinfo").click(function() {
                $("#personal").show();
                $('#personal_info').show();
                $('#personalinfo').hide();

            });

            $("#personal_info").click(function() {
                $("#personal").hide();
                $('#personal_info').hide();
                $('#personalinfo').show();

            });



            $("#addressinfo").click(function() {
                $('#personal').hide();
                $('#qualification').hide();
                $("#address").show();
                $('#address_info').show();
                $('#addressinfo').hide();

            });

            $("#address_info").click(function() {

                $("#address").hide();
                $('#address_info').hide();
                $('#addressinfo').show();

            });



            $("#qualificationinfo").click(function() {
                $('#personal').hide();
                $('#address').hide();
                $("#qualification").show();
                $('#qualification_info').show();
                $('#qualificationinfo').hide();

            });

            $("#qualification_info").click(function() {
                $("#qualification").hide();
                $('#qualification_info').hide();
                $('#qualificationinfo').show();

            });



        });
    </script>



    <script>
        $(document).ready(function() {

            $('#employeeinfo').hide();
            $('#employee_info').show();
            $('#employee').show();

            $('#employementinfo').show();
            $('#employement_info').hide();
            $('#employement').hide();

            $('#accountinfo').show();
            $('#account_info').hide();
            $('#account').hide();


            $("#employeeinfo").click(function() {
                $("#employee").show();
                $('#employee_info').show();
                $('#employeeinfo').hide();

            });

            $("#employee_info").click(function() {
                $("#employee").hide();
                $('#employee_info').hide();
                $('#employeeinfo').show();

            });



            $("#employementinfo").click(function() {
                $('#employee').hide();
                $('#account').hide();
                $("#employement").show();
                $('#employement_info').show();
                $('#employementinfo').hide();

            });

            $("#employement_info").click(function() {

                $("#employement").hide();
                $('#employement_info').hide();
                $('#employementinfo').show();

            });



            $("#accountinfo").click(function() {
                $('#employee').hide();
                $('#employement').hide();
                $("#account").show();
                $('#account_info').show();
                $('#accountinfo').hide();

            });

            $("#account_info").click(function() {
                $("#account").hide();
                $('#account_info').hide();
                $('#accountinfo').show();

            });



        });
    </script>

    <script>
        $(document).ready(function() {
            var i = 1;

            // Add form while clicking on add button
            $('#btn_add_license').click(function() {
                i++;
                $('#dynamic_field').append(
                    ' <div id="first_row' + i +
                    '">  <div class="form-group c1" > <label for="start date"> Start Date </label> <input type="date" class=" form-control" name="startdate[]' +
                    i +
                    '" placeholder=" Start Date" maxlength="35" class="form-control name_list" aria-required="true" /> </div>                              <div class="form-group c2"> <label for="end date"> End Date </label> <input type="date" class="form-control" name="enddate[]' +
                    i +
                    '" placeholder="End Date" maxlength="35" class="form-control name_list" aria-required="true" /> </div>                               <div class="form-group c1">  <label for="institution"> Institution Name </label> <input type="text" class=" form-control" name="institution[]' +
                    i +
                    '" placeholder="Institution Name" maxlength="35" class="form-control name_list" aria-required="true" /> </div>     <div class="form-group c2"> <label for="quqlification">  Qualification </label> <input type="text" class=" form-control" name="qualification[]' +
                    i +
                    '" placeholder=" Qualification" maxlength="35" class="form-control name_list" aria-required="true" /> </div>     <div class="form-group ">  <button type="button" name="remove" id="' +
                    i +
                    '" class="btn btn-danger btn_remove">Remove</button>   </div> </div>  '
                );

                $('#license_count').val(i);
            });

            // remove license row on clicking remove btn
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#first_row' + button_id + '').remove();
                i--;
                $('#license_count').val(i);
            });
        });
    </script>

<script>
    $(document).ready(function() {
        var i = 1;

        // Add form while clicking on add button
        $('#btn_field').click(function() {
            i++;
            $('#dynamic').append(
                ' <div id="first_row' + i +
                '"> <br>  <div class="form-group c1" > <label for="Company Name"> Company Nmae </label> <input type="text" class=" form-control" name="companyname[]' +
                i +
                '" placeholder=" Company Name" maxlength="35" class="form-control name_list" aria-required="true" /> </div>                              <div class="form-group c2"> <label for="Designation"> Designation </label> <input type="text" class="form-control" name="designation[]' +
                i +
                '" placeholder="Designation" maxlength="35" class="form-control name_list" aria-required="true" /> </div>                               <div class="form-group c1">  <label for="From Date"> From Date </label> <input type="date" class=" form-control" name="fromdate[]' +
                i +
                '" placeholder="From Date" maxlength="35" class="form-control name_list" aria-required="true" /> </div>     <div class="form-group c2"> <label for="To Date">  To Date </label> <input type="date" class=" form-control" name="todate[]' +
                i +
                '" placeholder=" To Date" maxlength="35" class="form-control name_list" aria-required="true" /> </div>   <div class="address">                                          <label for="floatingTextarea"> Company Address* </label>   <div class="form-floating">                <textarea class="form-control" placeholder=" Comapny Address" id="floatingTextarea" name="companyaddress[]" style="height: 50px"></textarea>                                             <label id="title" for="floatingTextarea"> Enter Company Address.. </label> </div> </div>    <div class="form-group ">   <button type="button" name="remove" id="' +
                i +
                '" class="btn btn-danger btn_delete">Remove</button>   </div> </div>  '
            );

            $('#license').val(i);
        });

        // remove license row on clicking remove btn
        $(document).on('click', '.btn_delete', function() {
            var button_id = $(this).attr("id");
            $('#first_row' + button_id + '').remove();
            i--;
            $('#license').val(i);
        });
    });
</script>
@endsection
