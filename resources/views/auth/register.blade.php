@extends('layouts.apps')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

   
    <script src="https://cdn.tailwindcss.com"></script>

    <title>XSILICA HRMS</title>

    <style>

.side-bar{
                margin-top: -8%
            }
        .main_container{
            margin-top: -8%
        }

        @media (max-width:960px) {
            
        .main_container{
            margin-top: -6%
        }

        }

    </style>


</head>

<body style="font-family: 'Montserrat', sans-serif;">


    <div class="main_container">
<br>

    <div class="row justify-content-center">


        <div class="col-md-6"
            style="margin-top: 5%;background-color:white;width:500px;margin-bottom:0%;border-radius:10px; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);">
            <div class="" style="padding-top:4%;padding-bottom:4%;border-radius:25px">
                <div class="flex justify-center">
                    <img src="https://imagizer.imageshack.com/img923/5138/bRZo8P.png" alt="logo" height="170px"
                        width="150px" style="align-item:center">

                </div>
                <br>
                <div class="flex justify-center" style="margin-top: 0%">
                    <div class="w-6/12    rounded-lg">


                        @if (session('status'))
                            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('message'))
                            <div class="alert alert-success-500 p-4 rounded-lg mb-6 text-white text-center">
                                {{ session('message') }}
                            </div>
                        @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" style="width: 375px;  ">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            

                            <div class="mb-4">
                                <label for="Employee ID"> Employee ID </label>
                                <input type="text" name="employeeid" id="employeeid" placeholder="Enter Employee Id"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('employeeid') border-red-500 @enderror"
                                    value="{{ old('employeeid') }}">

                                @error('employeeid')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="First Name"> First Name</label>
                                <input type="text" name="firstname" id="firstname" placeholder="Enter First Name "
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('firstname') border-red-500 @enderror">

                                @error('firstname')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="Last Name"> Last Name</label>
                                <input type="text" name="lastname" id="lastname" placeholder="Enter Last Name "
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('lastname') border-red-500 @enderror">

                                @error('lastname')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            

                            <div class="mb-4">
                                <label for="email">Email Id</label>
                                <input type="text" name="email" id="email" placeholder="Enter Email Id"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror"
                                    value="{{ old('email') }}">

                                @error('email')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>





                            <div class="mb-4">
                                <label>Password</label>
                                <input type="password" name="password" id="password" placeholder="Choose a password"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-500 @enderror"
                                    value="">

                                @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation">Re-enter Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Re-enter password"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password_confirmation') border-red-500 @enderror"
                                    value="">

                                @error('passwor_confirmation')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                          
                          



                            <div class="flex justify-center">
                                <button type="submit"
                                    class=" bg-blue-500 text-white px-2 py-2 rounded font-medium w-45"
                                    style="background-color:#052CA3;width:100px">Register</button>
                            </div>
                            <br>
                        </form>


                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>

</body>

</html>

@endsection
