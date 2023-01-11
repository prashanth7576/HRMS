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
                margin-left: 0%;

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
                    margin-left: 0%;
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


                        <form action=" {{ route('onboard.store') }}" method="post"  class="row g-3 needs-validation"  enctype="multipart/form-data" novalidate>
                            @csrf
                            <div>

                                <h1 style="text-align: center"> Employee Onbarding </h1>

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
                                        <label for="Last Name"> Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" name="lastname"
                                            style="font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide a Last Name
                                              </div>

                                    </div>
                                </div>


                                <div class="form-group c1">
                                    <div class="">
                                        <label for="JOb Title">Job Title </label>
                                        <input type="text" class="form-control" placeholder="Job Title" name="jobtitle"
                                            style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide a Job Title
                                              </div>


                                    </div>
                                </div>

                     
                            

                                <div class="form-group c2">
                                    <div class="">
                                        <label for="JOb Title"> Employee ID </label>
                                        <input type="text" class="form-control" placeholder=" Employee ID"
                                            name="employeeid" style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide a Employee ID
                                              </div>


                                    </div>
                                </div>



                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for=" Mobile"> Mobile Number </label>
                                        <input type="number" class="form-control" placeholder=" Mobile Number"
                                            name="mobile" style="font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Enter Mobile Number
                                              </div>


                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for="Email"> Email </label>
                                        <input type="email" class="form-control" placeholder=" Email" name="email"
                                            style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide a Email
                                              </div>

                                    </div>
                                </div>

                                

                                <div class="form-group c1">
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

                                <div class="form-group c2">
                                    <div class="">
                                        <label for=" Location "> Location  </label>
                                        <input type="text" class="form-control" placeholder=" Location "
                                            name="address" style=" font-size:15px;" >

                                            <div class="invalid-feedback">
                                                Please Provide address
                                              </div> 


                                    </div>
                                </div>


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
                                    <div class="">
                                        <label for=" joiningdate"> Joining Date </label>
                                        <input type="date" class="form-control" placeholder=" Joining Date"
                                            name="joiningdate" style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Enter Joining Date
                                              </div>

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="confirmationdate"> Confirmation Date </label>
                                        <input type="date" class="form-control" placeholder=" Confirmation Date"
                                            name="confirmationdate" style="font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Enter Confirmation Date
                                              </div>

                                    </div>

                                  
                                </div>

            

                                



                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" probationperiod"> Probation Period </label>
                                        <input type="text" class="form-control" placeholder=" Probation Period "
                                            name="probationperiod" style=" font-size:15px;" >

                                            <div class="invalid-feedback">
                                                Please Provide Probation Period
                                              </div>

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class="">
                                        <label for="noticeperiod"> Notice Period </label>
                                        <input type="text" class="form-control" placeholder=" Notice Period "
                                            name="noticeperiod" style=" font-size:15px;" >

                                            <div class="invalid-feedback">
                                                Please Provide Notice Period
                                              </div>

                                    </div>
                                </div>

                               

                               



                            

                                <div class="form-group c2">
                                    <div class="">
                                        <label for=" Designation"> Designation </label>
                                        <input type="text" class="form-control" placeholder=" Designation"
                                            name="designation" style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide Designation
                                              </div>
                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for="Department"> Department </label>
                                        <input type="text" class="form-control" placeholder=" Department "
                                            name="department" style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide Department
                                              </div>
                                    </div>
                                </div>

                                <div class="form-group c2">
                                    <div class="">
                                        <label for=" Location"> Location</label>
                                        <input type="text" class="form-control" placeholder=" Location "
                                            name="officelocation" style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide Office Location
                                              </div>
                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <label for=" Shift Type"> Shift Type </label>

                                    <select class="form-select" aria-label="Default select example" name="shifttype" required>
                                        <option selected disabled value=""> Select Shift Type</option>

                                        <option  value="General Shift"> General Shift </option>
                                        <option value="Night Shift"> Night Shift </option>
                                        <option value="US Shift"> US Shift </option>
 

                                    </select>

                                    <div class="invalid-feedback">
                                        Please Select Shift
                                      </div>

                                </div>



              

                                
                               

                                <div class="form-group c2">
                                    <div class=" ">
                                        <label for=" Reporting Manager "> Reporting Manager </label>
                                        <input type="text" class="form-control" placeholder=" Reporting Manager "
                                            name="reportingmanager" style=" font-size:15px;" required>

                                            <div class="invalid-feedback">
                                                Please Provide Reporting Manager Name
                                              </div>

                                    </div>
                                </div>

                                <div class="form-group c1">
                                    <div class=" ">
                                        <label for=" Profile picture "> Image </label>
                                        <input type="file" class="form-control" placeholder=" choose a profile image "
                                            name="profilepicture" style=" font-size:15px;">

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