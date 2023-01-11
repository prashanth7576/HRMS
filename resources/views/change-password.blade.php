@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <div class="main_container">




            <br>
            <br>
            <br>
            <div class="flex justify-center">

                <div class="card card-default">

                    <form method="POST" action="{{ route('update-password') }}" class="form-pill">
                        @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleFormControlInput3">Current Password</label>
                                <input type="password" name="old_password" class="form-control" id="current_password"
                                    placeholder="Current password" style="width: 400px">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput3">New Password</label>
                                <input type="password" name="new_password" class="form-control" id="password"
                                    placeholder="New password" style="width: 400px">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }} </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput3">Confirm Password</label>
                                <input type="password" name="new_password_confirmation" class="form-control"
                                    id="password_confirmation" placeholder="Confirm password" style="width: 400px">
                                @error('new_password_confirmation')
                                    <span class="text-danger">{{ $message }} </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-default active">Save</button>

                    </form>
=======

<div class="main_container">
    <div class="flex" style="display:flex">
        <div class="card" style="width:600px;padding:10px;">
        <form method="POST" action="{{route('update-password')}}" class="form-pill">
       @csrf
            <div class="row g-3 align-items-center">

                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Old Password</label>
                    <input type="password" id="inputPassword6" class="form-control"
                        aria-describedby="passwordHelpInline " placeholder="Current Password" name="old_password">

                        @error('old_password')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
                </div>
                <hr>
                <div class="flex" style="display:flex">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">New Password</label>
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline " placeholder="New Password" name="new_password">

                                @error('new_password')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Confirm New Password</label>
                            <input type="password" id="inputPassword6" class="form-control"
                                aria-describedby="passwordHelpInline " placeholder="Confirm New Password" name="new_password_confirmation">

                                @error('new_password_confirmation')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
                        </div>
                    </div>
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
                </div>
            </div>
        </div>

<<<<<<< HEAD







        

    </body>

    </html>
@endsection
=======
        
        <div class="card" style="width:300px;height:120px;margin-left:3%;padding:5px;font-size:11px;background-color:#fffae6">
            <p><i class="bi bi-check-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                    fill="currentcolor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg> Password should contain minimum of 10characters.</p>

            <p style="color:navblue"><i class="bi bi-check-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg"
                    width="12" height="12" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg> Password should contain minimum of 50characters.</p>

            <p style="color:navblue"><i class="bi bi-check-circle-fill"></i><svg xmlns="http://www.w3.org/2000/svg"
                    width="12" height="12" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg> Password should contain at least one of the following specialcharacters
                &,*,(),$,%^,#,@.</p>


        </div>

        
    </div>
    <br><br>
    <div style="margin-left:30%">
    <button type="submit" class="btn btn-light" >Save Password</button>
</div>
</div>

@endsection
>>>>>>> c8245aba9cd17f1f760826371b9ffb0f48fecd9f
