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
        margin-top: -8%;
      }

      .main_container{
      margin-left: 16%
      }
     </style>
</head>
<body>
  <div class="main_container">
    <div class="table-responsive">

    <table class="table">
        <thead class="table-light">
          <tr>
            <td>Employee Id</td>
            <td>Leave Type</td>
            <td>From Date</td>
            <td>From Date Session</td>
            <td>To Date</td>
            <td>To Date Session</td>
            <td>Number of Days</td>
            <td>Reason</td>
            <td>Status</td>
            <td>Approve</td>
            <td>Cancel</td>
          </tr>
        </thead>

        @foreach ($leave as $i)
            
       
        <tbody>
         <tr>

            <td>{{$i->employeid}}</td>
            <td>{{$i->leavetype}}</td>
            <td>{{Carbon\Carbon::parse($i->fromdate)->format('d-m-Y')}}</td>
            <td>{{$i->fromdatesession}}</td>
            <td>{{Carbon\Carbon::parse($i->todate)->format('d-m-Y')}}</td>
            <td>{{$i->todatesession}}</td>
            <td>{{$i->days}}</td>
            <td>{{$i->reason}}</td>
            <td>{{$i->status}}</td>
            <td><a href="{{url('approved', $i->id)}}"> <button class="btn btn-success">Approve</button></a></td>
            <td><a href="{{url('canceled', $i->id)}}"> <button class="btn btn-danger">Cancel</button></a></td>

         </tr>
        </tbody>


        @endforeach
      </table>

    </div>

  </div>
    
</body>
</html>

@endsection