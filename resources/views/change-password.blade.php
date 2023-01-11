@extends('layouts.app')

@section('content')
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
                </div>
            </div>
        </div>








        

    </body>

    </html>
@endsection
