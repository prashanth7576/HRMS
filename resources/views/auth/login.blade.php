<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="https://cdn.tailwindcss.com"></script>

    <title>XSILICA HRMS</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Montserrat&family=Quintessential&family=Ubuntu+Mono&display=swap"
        rel="stylesheet">

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body style="background-color:whitesmoke;font-family: 'Montserrat', sans-serif;">
    @include('flash-message')

    <div class="row justify-content-center" style="font-family: 'Montserrat', sans-serif;">

        <div class="flex justify-center" style="margin-top:7%; margin-bottom:1%">

            <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="logo"
                                     style="width:150px;height:50px;text-align:center">
            </div>

        <div class="col-md-6"
            style="margin-top: 0%;background-color:white;width:500px;margin-bottom:5%;border-radius:10px; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);">
            <div style="padding-top:4%;padding-bottom:4%;border-radius:25px">
            
                <div class="flex justify-center">
                    
                    <h1 style="font-size:20px;font-weight:700">Hello there!</h1>
                </div>
                <br>
                <div class="flex justify-center" style="margin-top: 0%">
                    <div class="w-9/12    rounded-lg">


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


                        <form action="{{ route('login') }}" method="POST">
                            @csrf


                            <div class="mb-4">
                                <label>Login Id</label>
                                <input type="text" placeholder="Employee No" name="email" id="email"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror"
                                    value="">

                                @error('email')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label>Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter password"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-500 @enderror"
                                    value="">

                                @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div style="float:right">

<a href="" > <h1 style="color:#052CA3;font-size:15px;font-weight:600">Forgot Your Password?</h1> </a>

</div>
<br><br>

                            <div class="flex justify-center">
                                <button type="submit" class="bg-blue-500 text-white px-2 py-2 rounded font-medium w-35"
                                    style="background-color:#1ab2ff;width:100%"> <a> Log in </a> </button>

                            </div>
                            <br>

                            <br>
                           
                        </form>

                    </div>
                </div>

                

    
                
               
        </div>
    </div>

</body>

</html>
