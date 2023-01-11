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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

        <style>
            .side-bar {
                margin-top: -7.5%
            }

            .content {
                margin-right: 7%
            }

            .btn {
                width: 130px;
                margin-left: auto;
                margin-right: 7%
            }

            a {
                color: white;
                text-decoration: none
            }

            a:hover {
                color: white
            }

.form-control{
    margin-bottom: 10px
}
            #shifts{
                background-color: rgb(247, 238, 238, 0.2);
                border: 1px solid rgba(200, 197, 197, 0.5);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 2px 2px 2px 1px rgb(146, 142, 142)
            }
        </style>
    </head>

    <body>

        <div class="main_container">
            <div class="content">
                <div>
                    <button class="btn btn-primary"> <a href="{{ route('shifts.index') }}"> Back </a> </button>

                </div>
                <br>

                <div class="row justify-content-center">
                    <div class="col-md-6" id="shifts">

                

                <form action="{{route('shifts.update')}}" method="post">
                    @csrf
                    @method('PUT')

                    <label for="Shift Type"> Shift Type </label>
                    <input type="text" class="form-control" placeholder=" Shift Type " name="Shift_type" value="{{$shifts->Shift_type}}"
                        style=" font-size:15px;">


                    <label for="From Time"> From Time </label>
                    <input type="text" class="form-control" placeholder=" From Time" name="from_time" value="{{$shifts->from_time}}"
                        style=" font-size:15px;">


                    <label for="End Time"> End Time </label>
                    <input type="text" class="form-control" placeholder=" End Time" name="end_time" value="{{$shifts->end_time}}"
                        style=" font-size:15px;">


                    <label for="remarks"> Remarks </label>
                    <input type="text" class="form-control" placeholder=" Remarks " name="remarks" value="{{$shifts->end_time}}"
                        style=" font-size:15px;">

                        <br>
<button type="submit" class="btn btn-success" id="submit" style="margin-left: 75%"> Submit </button>
                </form>
                    </div>
                </div>

            </div>
        </div>

    </body>

    </html>
@endsection
