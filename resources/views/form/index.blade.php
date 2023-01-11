@extends('layouts.app')

@section('content')

<body style="background-color: whitesmoke;font-family: 'Montserrat', sans-serif;">

   

    <br>
    <br>


    

        <div class="main_container">




            <br>
            <br>

            @if ($message = Session::get('success_message'))
            <div style="width: 700px; margin-left:350px ">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-11">

                    

                    <div class="table-responsive">

                        <table class="table table-bordered">
                            <tr style="background-color: #ccebff;color:black;font-size:15px">
                                <th>id</th>
                                <th>Employee ID</th>
                                <th>CTC</th>
                                <th>Basic Salary</th>
                                <th>HRA</th>
                                <th>Conveyance</th>
                                <th>Medical Allowance</th>
                                <th>Special Allowance</th>
                                <th>EPF</th>
                                <th>ESI</th>


                                <th >Action</th>
                            </tr>
                            @foreach ($data as $i)
                            <tr>

                                <td>{{ $i->id }}</td>
                                <td>{{ $i->employeeid }}</td>
                                <td>{{ $i-> ctc}}</td>

                                <td>{{ $i-> basicsalary}}</td>
                                <td>{{ $i-> hra}}</td>
                                <td>{{ $i->conveyance }}</td>
                                <td>{{ $i-> medicalallowance}}</td>
                                <td>{{ $i-> special}}</td>
                                <td>{{ $i-> epf}}</td>
                                <td>{{ $i-> esi}}</td>



                                <td>
                                    <form action="" method="POST">





                                        <a class="btn btn-primary" href="{{ route('form.edit', $i->id) }}">Edit</a>


                                        @csrf
                                       

                                        
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
   





</body>

@endsection