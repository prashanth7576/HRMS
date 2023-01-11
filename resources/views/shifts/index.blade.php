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

            .content{
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

            #shifts{
                width: 180px;
                margin-right: 62%
            }

     
        </style>
    </head>

    <body>

        <div class="main_container">
            <div class="content">
                @include('flash-message')

            <div class="d-flex">
                <button class="btn btn-primary" id="shifts"> <a href="employeshifts"> Employes Shifts </a> </button>
                <button class="btn btn-success"> <a href="{{ route('shifts.create') }}"> Add Shift </a> </button>
            </div>
<br>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" style="border: 1px solid rgb(153, 151, 151, 0.8);">
                    <thead class="text-center">
                        <tr>
                            <td>Shift Type</td>
                            <td>From Time</td>
                            <td>End Type</td>
                            <td> Remarks </td>
                           
                        </tr>
                    </thead>
@foreach ($data as $i)

<tbody class="text-center">
    <tr>
   <td>{{$i->Shift_type}}</td>
   <td>{{$i->from_time}}</td>
   <td>{{$i->end_time}}</td>
   <td>{{$i->remarks}}</td>
  
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
