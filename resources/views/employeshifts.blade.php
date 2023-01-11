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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <style>
            .side-bar {
                margin-top: -7.5%
            }

            .content {
                margin-right: 7%
            }


            a {
                color: white;
                text-decoration: none
            }

            a:hover {
                color: white
            }

            #shifts {
                width: 110px;
                margin-right: 62%
            }
        </style>
    </head>

    <body style="background-color: white">

        <div class="main_container">
            <div class="content">
                @include('flash-message')

                <div>
                    <button class="btn btn-primary" id="shifts"> <a href="{{ route('shifts.index') }}"> Back </a>
                    </button>

                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-responsive table-bordered table-hover table-striped"
                        style="border: 1px solid rgb(153, 151, 151, 0.8);">
                        <thead class="text-center">
                            <tr>
                                <td> First Name</td>
                                <td> Last Name</td>
                                <td> Employeeid </td>

                                <td> Email </td>
                                <td> Gender </td>
                                <td> Date Of Birth </td>
                                <td> Joining Date </td>
                                <td> Designation </td>
                                <td>Department </td>
                                <td> Location </td>
                                <td> Shift Type </td>
                                <td> Reporting Manager </td>
                                <td>action</td>

                            </tr>
                        </thead>
                        @foreach ($data as $i)
                            <tbody class="text-center">
                                <tr>
                                    <td>{{ $i->firstname }}</td>
                                    <td>{{ $i->lastname }}</td>
                                    <td>{{ $i->employeeid }}</td>
                                    <td>{{ $i->email }}</td>
                                    <td>{{ $i->gender }}</td>
                                    <td> {{ Carbon\Carbon::parse($i->dateofbirth)->format('d-m-Y') }}</td>
                                    <td> {{ Carbon\Carbon::parse($i->joiningdate)->format('d-m-Y') }}</td>
                                    <td>{{ $i->designation }}</td>
                                    <td>{{ $i->department }}</td>
                                    <td>{{ $i->officelocation }}</td>
                                    <td>{{ $i->shifttype }}</td>
                                    <td>{{ $i->reportingmanager }}</td>
                                    <td> <a  href="{{url('shiftedit/'. $i->id)}}"> <i class="fa fa-pencil-square-o" style="font-size:24px; color:black"></i> </a>


                                    </td>
                                </tr>
                            </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
