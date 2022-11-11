@extends('layouts.apps')


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

        

        <style>

            .side-bar{
                margin-top: -7.5%
            }
            h1 {
                font-size: 20px;
                margin-left: 17%;

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

            #large {
                width: 360px;
            }

            #btnone {
                margin-left: 32%;
                width: 200px;
                height: 50px;
                border-radius: 10px;
            }

            #btntwo {
                margin-left: 5%;
                width: 200px;
                height: 50px;
                border-radius: 10px;
            }

            #content {
                background-color: white;
                border-radius: 10px;
                margin: 10px;
                margin-top: -4%;
                padding: 20px;
            }




            @media screen and (max-width : 960px) {


                .main_container{
                    margin-top: 2%
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

                #large {
                    width: 360px;
                }

                #btnone {
                    margin-left: 19%;
                    width: 200px;
                    height: 50px;
                    border-radius: 10px;
                }

                #btntwo {
                    margin-left: 5%;
                    width: 200px;
                    height: 50px;
                    border-radius: 10px;
                }
            }

            @media screen and (max-width : 480px) {



                h1 {
                    font-size: 17px;
                    margin-left: 10%;
                }

                .form-group.c1 {
                    display: inline-block;
                    width: 35%;
                    margin-left: 10%;
                }

                .form-group.c2 {

                    display: inline-block;
                    width: 35%;
                    margin-left: 8%;


                }

                #large {
                    width: 360px;
                }

                #btnone {
                    margin-left: 3%;
                    width: 150px;
                    height: 50px;
                    border-radius: 10px;
                }

                #btntwo {
                    margin-left: 5%;
                    width: 150px;
                    height: 50px;
                    border-radius: 10px;
                }
            }
        </style>
    </head>

    <body style="background-color: whitesmoke">

        <br>



        <div class="main_container">

            {{-- @if (Session::has('success'))
            <div style="width: 700px; margin-left:350px ">
                <p>{{ $message }}</p>
            </div>
        @endif --}}



            <div class="row">
                <div class="col-md-12">
                    <div id="content">


                        <form action=" {{ route('onboard.store') }}" method="post"  class="row g-3 needs-validation" novalidate >
                            @csrf
                            <div>

                                <h1> Employee Information </h1>

                                <br>


                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="First Name"> First Name</label>
                                        <input type="text" class="form-control"  placeholder="First Name" name="firstname"
                                            style="font-size:15px;" required >
                                            <div class="invalid-feedback">
                                                Please Provide a First Name
                                              </div>
                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for="Middle Name"> Middle Name</label>
                                        <input type="text" class="form-control"    placeholder="Middle Name"
                                            name="middlename" style="font-size:15px;" >
                                          

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="Last Name"> Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" name="lastname"
                                            style="font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide a Last Name
                                              </div>

                                    </div>
                                </div>


                                <div class="form-group c2">
                                    <div class="">
                                        <label for="JOb Title">Job Title </label>
                                        <input type="text" class="form-control" placeholder="Job Title" name="jobtitle"
                                            style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide a Job Title
                                              </div>


                                    </div>
                                </div>

                                {{-- <div class="form-group c1">
                                    <div class=" ">
                                        <label for=" Employe Number"> Employe Number</label>
                                        <input type="text" class="form-control" placeholder=" Employe Number"
                                            name="employenumber" style="font-size:15px;">


                                    </div>
                                </div> --}}

                                <div class="form-group c1">
                                    <div class="">
                                        <label for="JOb Title"> Employee ID </label>
                                        <input type="text" class="form-control" placeholder=" Employee ID"
                                            name="employeeid" style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide a Employee ID
                                              </div>


                                    </div>
                                </div>



                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Mobile"> Mobile Number </label>
                                        <input type="number" class="form-control" placeholder=" Mobile Number"
                                            name="mobile" style="font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Enter Mobile Number
                                              </div>


                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="Email"> Email </label>
                                        <input type="email" class="form-control" placeholder=" Email" name="email"
                                            style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide a Email
                                              </div>

                                    </div>
                                </div>

                                

                                <div class="form-group c2">
                                    <label for=" Prioriry"> Gender </label>

                                    <select class="form-select" aria-label="Default select example" name="gender" required>
                                        <option selected disabled value=""> Select Gender</option>

                                        <option  value="Male"> Male </option>
                                        <option value="Female"> Female </option>
 

                                    </select>

                                    <div class="invalid-feedback">
                                        Please Select gender
                                      </div>

                                </div>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Location "> Location  </label>
                                        <input type="text" class="form-control" placeholder=" Location "
                                            name="location" style=" font-size:15px;" required>

                                            {{-- <div class="invalid-feedback">
                                                Please Provide a Employee ID
                                              </div> --}}


                                    </div>
                                </div>



                                <div class="form-group c2">
                                    <div class="">
                                        <label for=" Extension "> Extension </label>
                                        <input type="text" class="form-control" placeholder=" Extension"
                                            name="extension" style=" font-size:15px;" >

                                            {{-- <div class="invalid-feedback">
                                                Please Provide a Employee ID
                                              </div> --}}


                                    </div>
                                </div>



                                {{-- <div class="form-group c2">
                                    <label for=" Prioriry"> Gender </label>

                                    <select class="form-select" aria-label="Default select example" name="gender">
                                        
                                        <option selected value="1"> Male </option>
                                        <option value="2"> Female </option>
 

                                    </select>

                                </div>



               

                                <div class="form-group c1">
                                    <div class="">
                                        <label for="JOb Title"> Employee ID </label>
                                        <input type="text" class="form-control" placeholder=" Employee ID" name="employeeid"
                                            style=" font-size:15px;">


                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for="Name"> Name</label>
                                        <input type="text" class="form-control" placeholder=" Name" name="name"
                                            style="font-size:15px;">


                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for=" Employe Number"> Date Of Birth</label>
                                        <input type="date" class="form-control" placeholder=" Employe Number"
                                            name="dateofbirth" style="font-size:15px;">


                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <label for=" Prioriry"> Gender </label>

                                    <select class="form-select" aria-label="Default select example" name="gender">
                                        
                                        <option selected value="1"> Male </option>
                                        <option value="2"> Female </option>
 

                                    </select>

                                </div>
 --}}


                                {{-- <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Mobile"> Mobile Number </label>
                                        <input type="text" class="form-control" placeholder=" Mobile Number"
                                            name="mobile" style="font-size:15px;">


                                    </div>
                                </div> --}}

                                {{-- <div class="form-group c1">
                                    <div class=" ">
                                        <label for="Email"> Reporting Manager </label>
                                        <input type="text" class="form-control" placeholder=" Reporting Manager" name="reportingmanager"
                                            style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Status "> Status </label>
                                        <input type="text" class="form-control" placeholder=" Status " name="status"
                                            style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="Date Of Joining"> Date Of Joining </label>
                                        <input type="date" class="form-control" placeholder=" Date Of Joining" name="dateofjoining"
                                            style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Probation Period "> Probation Period </label>
                                        <input type="text" class="form-control" placeholder=" Porbation Period " name="probationperiod"
                                            style=" font-size:15px;">

                                    </div>
                                </div> --}}
                                {{-- 
                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="Confirmation Date"> Confirmation Date </label>
                                        <input type="date" class="form-control" placeholder=" Confirmation Date" name="confirmationdate"
                                            style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Personal Email "> Personal Email </label>
                                        <input type="text" class="form-control" placeholder=" Personal Email " name="personalemail"
                                            style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="Mobile number"> Mobile Number </label>
                                        <input type="text" class="form-control" placeholder=" Mobile Number" name="mobilenumber"
                                            style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Emergency Contact Number "> Emergency Contact Number </label>
                                        <input type="text" class="form-control" placeholder=" Emergency Contact Number " name="emergencycontactnumber"
                                            style=" font-size:15px;">

                                    </div>
                                </div> --}}



                            </div>

                            <div>
                                <br>

                                <h1> Personal Information </h1>

                                <br>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" dob"> Date Of Birth </label>
                                        <input type="date" class="form-control" placeholder=" DOB" name="dateofbirth"
                                            style=" font-size:15px;" required>

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

                                    <select class="form-select" aria-label="Default select example" name="bloodgroup">

                                        <option selected disabled value=""> Select Blood Group</option>
                                        <option  value="A+"> A+ </option>
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

                                    <select class="form-select" aria-label="Default select example" name="maritalstatus">

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

                                    <select class="form-select" aria-label="Default select example" name="nationality" required>

                                        <option selected disabled value=""> Select Nationality</option>
                                        <option  value="Indian"> Indian </option>
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

                                    <select class="form-select" aria-label="Default select example"
                                        name="residentialstatus" required>

                                        <option selected disabled value=""> Select Residential Status </option>
                                        <option  value="Resident"> Resident </option>
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
                                        <input type="text" class="form-control" placeholder=" Country Of Origin "
                                            name="countryoforigin" style="font-size:15px;">

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

                                    <select class="form-select" aria-label="Default select example"
                                        name="internationalemployee" required>

                                        <option selected disabled value=""> Select Employee Status </option>
                                        <option  value="No"> No </option>
                                        <option value="Yes"> Yes </option>


                                    </select>

                                    <div class="invalid-feedback">
                                        Please Select Emplyee Status
                                      </div>

                                </div>

                                <div class="form-group c2">
                                    <label for=" physicallychallenged"> Physically Challenged </label>

                                    <select class="form-select" aria-label="Default select example"
                                        name="physicallychallenged" required>

                                        <option selected disabled value=""> Select PH </option>
                                        <option  value="No"> No </option>
                                        <option value="Yes"> Yes </option>


                                    </select>

                                    <div class="invalid-feedback">
                                        Please Select PH
                                      </div>

                                </div>

                            </div>

                            
                            <div>
                                <br>

                                <h1> Joining Details </h1>

                                <br>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" joiningdate"> Joining Date </label>
                                        <input type="date" class="form-control" placeholder=" Joining Date"
                                            name="joiningdate" style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Enter Joining Date
                                              </div>

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for="confirmationdate"> Confirmation Date </label>
                                        <input type="date" class="form-control" placeholder=" Confirmation Date"
                                            name="confirmationdate" style="font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Enter Confirmation Date
                                              </div>

                                    </div>

                                  
                                </div>

            

                                <div class="form-group c1">
                                    <label for=" status"> Status </label>

                                    <select class="form-select" aria-label="Default select example" name="status" required>
                                        
                                        <option selected value="Approved"> Approved </option>
                                        <option value="Pending"> Pending </option>
 

                                    </select>

                                    <div class="invalid-feedback">
                                        Please Select Status
                                      </div>

                                </div>



                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" probationperiod"> Probation Period </label>
                                        <input type="text" class="form-control" placeholder=" Probation Period "
                                            name="probationperiod" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for="noticeperiod"> Notice Period </label>
                                        <input type="text" class="form-control" placeholder=" Notice Period "
                                            name="noticeperiod" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class="">
                                        <label for=" currentcompanyexperience "> Current Company Experience </label>
                                        <input type="text" class="form-control"
                                            placeholder=" Current Company Experience " name="currentcompanyexperience"
                                            style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for=" previousexperience "> Previous Experince </label>
                                        <input type="text" class="form-control" placeholder=" Previous Experience "
                                            name="previousexperience" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for="totalexperience"> Total Experience </label>
                                        <input type="text" class="form-control" placeholder=" Total Experience "
                                            name="totalexperience" style=" font-size:15px;">

                                    </div>
                                </div>



                            </div>


                            <div>
                                <br>

                                <h1> Employment & Job </h1>

                                <br>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Designation"> Designation </label>
                                        <input type="text" class="form-control" placeholder=" Designation"
                                            name="designation" style=" font-size:15px;" required>

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for="Department"> Department </label>
                                        <input type="text" class="form-control" placeholder=" Department "
                                            name="department" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Location"> Location</label>
                                        <input type="text" class="form-control" placeholder=" Location "
                                            name="officelocation" style=" font-size:15px;">

                                    </div>
                                </div>



                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Attendance Scheme"> Attendance Scheme </label>
                                        <input type="text" class="form-control" placeholder=" Attendance Scheme "
                                            name="attendancescheme" style=" font-size:15px;">

                                    </div>
                                </div>

                                
                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Costcenter "> Costcenter</label>
                                        <input type="text" class="form-control" placeholder=" CostCenter "
                                            name="costcenter" style=" font-size:15px;">

                                    </div>
                                </div>



                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Division"> Division </label>
                                        <input type="text" class="form-control" placeholder=" Division  "
                                            name="division" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for="grade"> Grade </label>
                                        <input type="text" class="form-control" placeholder=" Grade " name="grade"
                                            style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Reporting Manager "> Reporting Manager </label>
                                        <input type="text" class="form-control" placeholder=" Reporting Manager "
                                            name="reportingmanager" style=" font-size:15px;">

                                    </div>
                                </div>


                            </div>


                            <div>
                                <br>

                                <h1> Additional Information </h1>

                                <br>

                                
                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Bank Name "> Bank Name </label>
                                        <input type="text" class="form-control" placeholder=" Bank Name"
                                            name="bankname" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Bank Branch"> Bank Branch </label>
                                        <input type="text" class="form-control" placeholder=" Bank Branch "
                                            name="bankbranch" style="font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Account Type "> Account Type </label>
                                        <input type="text" class="form-control" placeholder=" Account Type"
                                            name="accounttype" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Payment Type "> Payment Type </label>
                                        <input type="text" class="form-control" placeholder=" Payment Type "
                                            name="paymenttype" style="font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" DD Payable At "> DD Payable At </label>
                                        <input type="text" class="form-control" placeholder=" DD Payable At"
                                            name="ddpayableat" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Name As Per Bank Records "> Name As Per Bank Records </label>
                                        <input type="text" class="form-control" placeholder="  Name As Per Bank Records "
                                            name="nameasperbankrecords" style="font-size:15px;">

                                    </div>
                                </div>


                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" PAN Number"> PAN Number </label>
                                        <input type="text" class="form-control" placeholder=" PAN Number"
                                            name="pannumber" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for="UAN Number"> UAN Number </label>
                                        <input type="text" class="form-control" placeholder=" UAN Number"
                                            name="uannumber" style="font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Aadhaar Number"> Aadhaar Number </label>
                                        <input type="text" class="form-control" placeholder=" Aadhaar Number"
                                            name="aadhaarnumber" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for="Bank Account Number"> Bank Account Number </label>
                                        <input type="text" class="form-control" placeholder=" Bank Account Number"
                                            name="bankaccountnumber" style="font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" IFSC Code"> IFSC Code </label>
                                        <input type="text" class="form-control" placeholder=" IFSC Code"
                                            name="ifsccode" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for="Branch Code"> Branch Code </label>
                                        <input type="text" class="form-control" placeholder="  Branch Code"
                                            name="branchcode" style="font-size:15px;">

                                    </div>
                                </div>


                            </div>

                            <div>
                                <br>

                                <h1> Access Card Information </h1>

                                <br>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Card No "> Access Card Number </label>
                                        <input type="text" class="form-control" placeholder=" Access Card Number"
                                            name="accesscardnumber" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Validity "> Validity  </label>
                                        <input type="date" class="form-control" placeholder=" Validity "
                                            name="accesscardvalidity" style="font-size:15px;">

                                    </div>
                                </div>

                            </div>



                            <br>
                            <br>

                            <div style="display: flex">


                                <button id="btnone" class="btn btn-success btn-lg" type="submit">
                                    Submit </button>

                                <button id="btntwo" class="btn btn-outline-primary btn-lg" type="reset">
                                    <a href="" style="text-decoration: none"> Cancel </a> </button>

                            </div>
                        </form>
                    </div>





                </div>
            </div>
        </div>

    </body>

    </html>

    <script>
        (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>

@endsection