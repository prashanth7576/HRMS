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



            <div class="row">
                <div class="col-md-12">
                    <div id="content">


                        <form action=" {{ route('onboard.store') }}" method="post" >
                            @csrf
                            <div>

                                <h1> Employee Information </h1>

                                <br>


                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="First Name"> First Name</label>
                                        <input type="text" class="form-control"  placeholder="First Name" name="firstname"
                                            style="font-size:15px;" >

                                          


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
                                            style="font-size:15px;" >

                     

                                    </div>
                                </div>


                                <div class="form-group c2">
                                    <div class="">
                                        <label for="JOb Title">Job Title </label>
                                        <input type="text" class="form-control" placeholder="Job Title" name="jobtitle"
                                            style=" font-size:15px;">


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
                                            name="employeeid" style=" font-size:15px;">


                                    </div>
                                </div>



                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Mobile"> Mobile Number </label>
                                        <input type="text" class="form-control" placeholder=" Mobile Number"
                                            name="mobile" style="font-size:15px;">


                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="Email"> Email </label>
                                        <input type="text" class="form-control" placeholder=" Email" name="email"
                                            style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <label for=" Prioriry"> Gender </label>

                                    <select class="form-select" aria-label="Default select example" name="gender">
                                        
                                        <option selected value="1"> Male </option>
                                        <option value="2"> Female </option>
 

                                    </select>

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
                                        <label for=" dob"> DOB </label>
                                        <input type="date" class="form-control" placeholder=" DOB" name="dateofbirth"
                                            style=" font-size:15px;">

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

                                        <option selected value="A+"> A+ </option>
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

                                        <option selected value="married"> Married </option>
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

                                    <select class="form-select" aria-label="Default select example" name="nationality">

                                        <option selected value="Indian"> Indian </option>
                                        <option value="Other"> Other </option>

                                    </select>

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
                                        name="residentialstatus">

                                        <option selected value="Resident"> Resident </option>
                                        <option value="Non-Resident"> Non-Resident </option>


                                    </select>

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
                                        name="internationalemployee">

                                        <option selected value="No"> No </option>
                                        <option value="Yes"> Yes </option>


                                    </select>

                                </div>

                                <div class="form-group c2">
                                    <label for=" physicallychallenged"> Physically Challenged </label>

                                    <select class="form-select" aria-label="Default select example"
                                        name="physicallychallenged">

                                        <option selected value="No"> No </option>
                                        <option value="Yes"> Yes </option>


                                    </select>

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
                                            name="joiningdate" style=" font-size:15px;">

                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for="confirmationdate"> Confirmation Date </label>
                                        <input type="date" class="form-control" placeholder=" Confirmation Date"
                                            name="confirmationdate" style="font-size:15px;">

                                    </div>
                                </div>

            

                                <div class="form-group c1">
                                    <label for=" status"> Status </label>

                                    <select class="form-select" aria-label="Default select example" name="status">
                                        
                                        <option selected value="Approved"> Approved </option>
                                        <option value="Pending"> Pending </option>
 

                                    </select>

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

                                <h1> Employee Position </h1>

                                <br>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for=" Designation"> Designation </label>
                                        <input type="text" class="form-control" placeholder=" Designation"
                                            name="designation" style=" font-size:15px;">

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
                                            name="location" style=" font-size:15px;">

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

@endsection
