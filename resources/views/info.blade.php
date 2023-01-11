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
    #col {
        margin-top: -2%;

    }

    #bank {
        margin-top: -2%;

    }

    #family {
        margin-top: -73%;
        margin-left: 10%
    }

    #employement {
        margin-top: -75%;
        margin-left: 1%
    }

    #asset {
        margin-top: -20%
    }

    .one {
        background-color: white;
        box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);
        padding: 10px;
        decoration: none;
    }

    .one.item {
        position: relative;
        cursor: pointer;
        font-size: 18px;
    }

    .one .item p {
        color: black;

        display: block;



    }

    .one .item p:hover {
        background: white;
        transition: 0.3s ease;
    }

    .one .item i {
        margin-right: 15px;
    }

    .one .item p .dropdown {
        float: right;
        margin: 10px;
        right: 0;
        transition: 0.3s ease;

    }

    .one .item .sub-menu {
        background: white;

        font-size: 13px;
    }

    .one .item .sub-menu .p {
        padding-left: 80px;

    }

    li {
        list-style: none;
    }



    @media (max-width:960px) {
        #family {
            margin-top: -70%;

        }

        #employement {
            margin-top: -70%;
            margin-left: 1%
        }

        #asset {
            margin-top: -600px
        }
    }

    @media (max-width:480px) {
        #family {
            margin-top: -890px;

        }

        #employement {
            margin-top: -800px;
            margin-left: 1%;
        }

        #asset {
            margin-top: -500%;
        }
    }
    </style>


</head>

<body style="background-color: whitesmoke;font-family: 'Montserrat', sans-serif;">

    <div class="main_container">
        <div class="flex" style="display:flex">
            <div class="row">
                <div id="links" class="col-md-4" style="width:250px">


                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">

                            <ul>
                                <li>
                                    <button class="nav-link  active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true"
                                        style="text-decoration:none;color:black;"> <span id="spanone"> Personal
                                        </span></button>
                                </li>
                                <li>
                                    <button class="nav-link " id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false"
                                        style="text-decoration:none;color:black;"> <span id="spantwo"> Accounts $
                                            Salary </span> </button>
                                </li>
                                <li>
                                    <button class="nav-link " id="v-pills-disabled-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-disabled" type="button" role="tab"
                                        aria-controls="v-pills-disabled" aria-selected="false"
                                        style="text-decoration:none;color:black;"> <span id="spanthree"> Family
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button class="nav-link " id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false"
                                        style="text-decoration:none;color:black;"> <span id="spanfour"> Employment
                                            $ Job
                                        </span></button>
                                </li>
                                <li>
                                    <button class="nav-link " id="v-pills-message-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-message" type="button" role="tab"
                                        aria-controls="v-pills-message" aria-selected="false"
                                        style="text-decoration:none;color:black;"> <span id="spanfour"> Assets
                                        </span></button>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>




            </div>

            <div>




                <br>
                <div class="row">
                    <div id="col" class="col-md-10">
                        <div class="tab-content" id="v-pills-tabContent">



                            <div class="tab-pane fade show active " id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">




                                <div class="content">


                                    <div class="one">


                                   
                                        <div class="item">
                                            <p class="sub-btn"></i>PROFILE<i class="fas fa-angle-right dropdown"></i>
                                            </p>
                                            <div class="sub-menu">
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <p class="sub-item"><i class="fa fa-user"
                                                                style="font-size:65px"></i></p>
                                                                @foreach ($data as $i)         
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Location</p>
                                                        <p>{{ $i->location }}</p>
                                                       
                                                    </div>
                                                    <div class="col-md-5">
                                                   
                                                    <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Name</p>
                                                        <p>{{ $i->firstname }}</p>
                                                       
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Employee ID</p>
                                                        <p>{{ $i->employeeid }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Primary Contact No</p>
                                                        <p>{{ $i->mobile }}</p>
                                                        
                                                    </div>
                                                    <div class="col-md-4">

                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Extension</p>
                                                        <p>{{ $i->extension }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Company Email</p>
                                                        <p>{{ $i->email }}</p>

                                                    </div>

                                                    
                                                </div>
                                                <br><br>



                                            </div>


                                        </div>
                                        
                                    </div>
                                    <br>
                                    <div class="one">



                                        <div class="item">
                                            <p class="sub-btn">PERSONAL</i><i class="fas fa-angle-right dropdown"></i>
                                            </p>
                                            <div class="sub-menu">
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Blood Group</p>
                                                        <p>{{ $i->bloodgroup }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px" >Marital Status</p>
                                                        <p>{{ $i->maritalstatus }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Place of Birth</p>
                                                        <p>{{ $i->placeofbirth }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Religion</p>
                                                        <p>{{ $i->religion }}</p>
                                                    </div>

                                                    
                                                    <div class="col-md-4">
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Date of Birth</p>
                                                        <p>{{ $i->dateofbirth }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Marriage Date</p>
                                                        <p>{{ $i->marriagedate }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Residential Status</p>
                                                        <p>{{ $i->residentialstatus }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Physically Challenged</p>
                                                        <p>{{ $i->physicallychallenged }}</p>
                                                    </div>
                                                    <div class="col-md-4">

                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Nationality</p>
                                                        <p>{{ $i->nationality }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Spouse</p>
                                                        <p>{{ $i->spousename }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Father Name</p>
                                                        <p>{{ $i->fathername }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">International
                                                            Employee</p>
                                                            <p>{{ $i->internationalemployee }}</p>

                                                    </div>

                                                   
                                                </div>
                                                <br><br>



                                            </div>


                                        </div>
                                    </div>
                                    <br>
                                    <div class="one">



                                        <div class="item">
                                            <p class="sub-btn">ADDRESS</i><i class="fas fa-angle-right dropdown"></i>
                                            </p>
                                            <div class="sub-menu">
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px" >Address</p>
                                                        <p>{{ $i->residentialstatus }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Name</p>
                                                        <p>{{ $i->firstname }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px" >Phone 1</p>
                                                        <p>{{ $i->mobile }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Extension</p>
                                                        <p>{{ $i->extension }}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="sub-item">-</p>
                                                        <p class="sub-item">-</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Phone 2</p>
                                                        <p>{{ $i->mobile }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Fax</p>
                                                        <p>-</p>
                                                    </div>
                                                    <div class="col-md-4">

                                                        <p class="sub-item">-</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Email</p>
                                                        <p>{{ $i->personalemail }}</p>
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Mobile</p>
                                                        <p>{{ $i->mobile }}</p>
                                                        <p class="sub-item">-</p>

                                                    </div>
                                                    
                                                </div>
                                                <br><br>



                                            </div>


                                        </div>
                                    </div>
                                    <br>
                                    <div class="one">



                                        <div class="item">
                                            <p class="sub-btn">EDUCATION</i><i class="fas fa-angle-right dropdown"></i>
                                            </p>
                                            <div class="sub-menu">
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">No Data Found</p>

                                                    </div>
                                                    <div class="col-md-4">

                                                    </div>
                                                    <div class="col-md-4">



                                                    </div>
                                                </div>
                                                <br><br>



                                            </div>


                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="bank" class="col-md-10">
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">


                                <div class="one" >



                                    <div class="item">
                                        <p class="sub-btn">BANK ACCOUNT</i><i
                                                class="fas fa-angle-right dropdown"></i>
                                        </p>
                                        <div class="sub-menu">
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Bank Name</p>
                                                <p>{{ $i->bankname }}</p>

                                                </div>
                                                <div class="col-md-4">
                                                <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Bank Account Number</p>
                                                <p>{{ $i->bankaccountnumber }}</p>
                                                </div>
                                                <div class="col-md-4">

                                                <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Branch Name</p>
                                                <p>{{ $i->bankbranch }}</p>

                                                </div>
                                            </div>
                                            <br><br>



                                        </div>


                                    </div>
                                </div>


                                <br>
                                <div class="one" >



                                    <div class="item">
                                        <p class="sub-btn">PF ACCOUNT</i><i
                                                class="fas fa-angle-right dropdown"></i>
                                        </p>
                                        <div class="sub-menu">
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Not Covered Under PF</p>

                                                </div>
                                                <div class="col-md-4">
                                                   
                                                </div>
                                                <div class="col-md-4">

                                                    

                                                </div>
                                            </div>
                                            <br><br>



                                        </div>


                                    </div>
                                </div>
                                <br>
                                <div class="one" >



                                    <div class="item">
                                        <p class="sub-btn">OTHER ID'S</i><i
                                                class="fas fa-angle-right dropdown"></i>
                                        </p>
                                        <div class="sub-menu">
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Bank Account Number</p>
                                                <p>{{ $i->bankaccountnumber }}</p>


                                                </div>
                                                <div class="col-md-4">
                                                <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Unverified</p>
                                                </div>
                                                <div class="col-md-4">

                                                <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">More</p>

                                                </div>
                                                
                                            </div>
                                            <br><br>



                                        </div>


                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div id="family" class="col-md-12">
                            <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">


                                <h5 >NO Data For Family</h5>



                            </div>
                        </div>

                    </div>


                    
                    <div class="row">
                        <div id="employement" class="col-md-12">
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0">


                                <h5>Employment & Job</h5>
                                <br>
                                <div class="one">

                                    <p>Jump to: Current Position</p>
                                </div>
                                <br><br>
                                <div class="one" style="padding:7px;">

                                    <div class="one" style="padding:5px;background-color:#fff2e6;border-radius:10px">
                                        <h5>Current Position</h5>
                                        <div style="float:right;margin-top:-4%">
                                            <a href="#" tyle="margin-left:-3%">Resign</a>
                                            <a href="{{url ('timeline')}}">
                                                <button type="button" class="btn btn-primary active">View
                                                    Timeline</button></a>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-4">
                                            <p style="color: #868686;font-weight:700;font-size:15px">Cost Center</p>
                                            <p>{{ $i->costcenter }}</p>
                                            <br>
                                            <p style="color: #868686;font-weight:700;font-size:15px">Division</p>
                                            <p>{{ $i->division }}</p>
                                            <br>
                                            <p style="color: #868686;font-weight:700;font-size:15px">Reporting To</p>
                                            <p>{{ $i->reportingmanager }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p style="color: #868686;font-weight:700;font-size:15px">Department</p>
                                            <p>{{ $i->department }}</p>
                                            <br>
                                            <p style="color: #868686;font-weight:700;font-size:15px">Grade</p>
                                            <p>{{ $i->grade }}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <p style="color: #868686;font-weight:700;font-size:15px">Designation</p>
                                            <p>{{ $i->designation }}</p>
                                            <br>
                                            <p style="color: #868686;font-weight:700;font-size:15px">Location</p>
                                            <p>{{ $i->location }}</p>
                                        </div>
                                    </div>
                                   
                                </div>



                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div id="asset" class="col-md-10">
                            <div class="tab-pane fade" id="v-pills-message" role="tabpanel"
                                aria-labelledby="v-pills-message-tab" tabindex="0">


                                <div class="one" style="margin-top:-72%">



                                    <div class="item">
                                        <p class="sub-btn">ACCESS CARD DETAILS</i><i
                                                class="fas fa-angle-right dropdown"></i>
                                        </p>
                                        <div class="sub-menu">
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Card No</p>
                                                    <p>{{ $i->accesscardnumber }}</p>

                                                </div>
                                                <div class="col-md-4">
                                                    <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Validity</p>
                                                    <p>{{ $i->accesscardvalidity }}</p>
                                                </div>
                                                <div class="col-md-4">

                                                    <p class="sub-item" style="color: #868686;font-weight:700;font-size:15px">Previous</p>
                                                    <p>{{ $i->location }}</p>

                                                </div>
                                            </div>
                                            <br><br>

                                            @endforeach

                                        </div>


                                    </div>
                                </div>





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