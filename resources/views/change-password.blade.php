@extends('layouts.app')

@section('content')

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
                </div>
            </div>
        </div>

        
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