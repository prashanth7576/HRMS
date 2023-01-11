@extends('layouts.app')

@section('content')


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
        
      

      
    
        <style>
           
            .tasks{
                margin-top: 50px;
                margin-left: 0px
            }
            .task {
                margin-left: auto;
                margin-right: 10%;
                margin-bottom: -100px
            }

            #task {
                width: 400px;
                margin-top: -210px
            }

            .side-bar {
                margin-top: -18.5%
            }

            .main_container {
                margin-top: -15%
            }

            #content {
                background-color: white;
                padding: 10%;
                border: 2px solid rgb(131, 137, 150, 0.3);
                border-radius: 10px;
                margin-top: 2%;
                height: 80vh;
                width: 97%;
                margin-left: 0px;

            }

            .task {
                margin-top: 130px;
            }

            #data {
                margin: 1%;
                height: 720px;


            }

            .btn {
                margin-top: 10%;
                margin-left: -10%;
            }

            #submit {
                margin-left: 68%;
            }

            .form-control {

                margin-bottom: 10px;

            }

            .form-check {
                display: inline-block;
            }


            #priority {
                margin-left: 5%;
                margin-top: 10px;
                margin-bottom: 10px
            }

            #select {
                height: 60px;
                margin-bottom: 10px;
            }

            #addfile {
                display: block;
                visibility: hidden;
                width: 0;
                height: 0;
            }

            #status{
                    visibility: hidden;
                }


            @media (max-width:960px) {
                #content {
                    margin-left: 2px;
                    margin-top: 17%;
                }

                .btn {
                    margin-top: 10%;
                    margin-left: -20%;
                }

                #addfile {
                    display: block;
                    visibility: hidden;
                    width: 0;
                    height: 0;
                }

                #status{
                    visibility: hidden;
                }


            }

            @media (max-width:480px) {

                #content {
                    background-color: white;
                    padding: 10%;
                    border: 2px solid rgb(131, 137, 150, 0.3);
                    border-radius: 10px;
                    margin-top: 17%;
                    height: 80vh;

                    margin-left: 5px;

                }

                #select {
                    height: 60px;
                    margin-bottom: 10px;
                }

                .task {
                    margin-top: 100px;
                }

                #data {
                    margin: 1%;
                    height: 720px;


                }

                .btn {
                    margin-top: 10%;
                    margin-left: -50%;
                }

                .form-control {

                    margin-bottom: 10px;

                }

                .form-check {
                    display: inline-block;
                }

                .btn-close {
                    margin-left: 0%;
                }



                #priority {
                    margin-top: 10px;
                    margin-bottom: 10px
                }

                #addfile {
                    display: block;
                    visibility: hidden;
                    width: 0;
                    height: 0;
                }

                #status{
                    visibility: hidden;
                }


            }
        </style>
    </head>

    <body style="background-color: whitesmoke">

        <div class="main_container">

            @include('flash-message')

            @foreach ($task as $i)
                @if ($task->count() == 0)
                    <div id="data" class="row">
                        <div id="content" class="col-md-12">
                            <div class="task">



                                <p class="text-center">You haven't added any tass yet! Start by creating new tasks or
                                    configuring
                                    checklist </p>


                                <div class="navbar navbar-light" style="margin-top:-4%;margin-left:50%;">
                                    <div class="container-fluid">
                                        <button class="btn btn-primary " type="button" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                            Add Task
                                        </button>
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                                            aria-labelledby="offcanvasNavbarLabel">
                                            <div class="offcanvas-header">

                                                <button type="button" class="btn-close text-reset"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body" style="margin-left:5%">
                                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                                                    <form action="{{ route('task.store') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf


                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="floatingPassword"
                                                                placeholder="Task Name" name="taskname">
                                                            <label for="floatingPassword"> Task Name</label>
                                                        </div>


                                                        <div>


                                                            <select id="select" class="form-select"
                                                                aria-label="Default select example" name="assignee">
                                                                <option selected> Assignee..</option>

                                                                @foreach ($user as $i)
                                                                    <option value="{{ $i->firstname }}"> {{ $i->firstname }}
                                                                    </option>
                                                                @endforeach

                                                            </select>

                                                        </div>





                                                        <div class="form-floating">
                                                            <input type="date" class="form-control" id="floatingPassword"
                                                                placeholder="Due Date" name="duedate">
                                                            <label for="floatingPassword">Due Date</label>
                                                        </div>



                                                        <div>


                                                            <select id="select" class="form-select"
                                                                aria-label="Default select example" name="priority">
                                                                <option selected> Priority..</option>
                                                                <option value="High"> High </option>
                                                                <option value="Medium"> Medium </option>
                                                                <option value="Low"> Low </option>

                                                            </select>

                                                        </div>



                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="floatingPassword"
                                                                placeholder=" Tags " name="tags">
                                                            <label for="floatingPassword"> Tags </label>
                                                        </div>

                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description"></textarea>
                                                            <label for="floatingTextarea"> Description </label>
                                                        </div>

                                                        <input type="file" name="addfile" id="addfile">

                                                        <p style="color: rgb(63, 124, 246);  cursor: pointer"
                                                            id="file"> Attach
                                                            File</p>



                                                            <input type="number" name="Active" id="status" value="1">



                                                        <button id="submit" type="submit" class="btn btn-primary">Save
                                                            Task
                                                        </button>
                                                    </form>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="tasks">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="background-color: white; padding:10px; border:1px solid lightgray; border-radius:5px">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true"> Open </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false"> Closed
                    </button>
                </li>

                <li class=" nav-item task "  role="presentation">
                    <div class="navbar navbar-light" style="margin-top:-4%;margin-left:50%;">
                        <div class="container-fluid">
                            <button id="task" class="btn btn-outline-primary " type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                                aria-controls="offcanvasNavbar" style="width: 270px">
                                Add Task
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                                aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">

                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body" style="margin-left:5%">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                                        <form action="{{ route('task.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingPassword"
                                                    placeholder="Task Name" name="taskname">
                                                <label for="floatingPassword"> Task Name</label>
                                            </div>


                                            <div>


                                                <select id="select" class="form-select"
                                                    aria-label="Default select example" name="assignee">
                                                    <option selected> Assignee..</option>

                                                    @foreach ($user as $i)
                                                        <option value="{{ $i->firstname }}"> {{ $i->firstname }}
                                                        </option>
                                                    @endforeach

                                                </select>

                                            </div>





                                            <div class="form-floating">
                                                <input type="date" class="form-control" id="floatingPassword"
                                                    placeholder="Due Date" name="duedate">
                                                <label for="floatingPassword">Due Date</label>
                                            </div>



                                            <div>


                                                <select id="select" class="form-select"
                                                    aria-label="Default select example" name="priority">
                                                    <option selected> Priority..</option>
                                                    <option value="High"> High </option>
                                                    <option value="Medium"> Medium </option>
                                                    <option value="Low"> Low </option>

                                                </select>

                                            </div>



                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingPassword"
                                                    placeholder=" Tags " name="tags">
                                                <label for="floatingPassword"> Tags </label>
                                            </div>

                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description"></textarea>
                                                <label for="floatingTextarea"> Description </label>
                                            </div>

                                            <input type="file" name="addfile" id="addfile">

                                            <p style="color: rgb(63, 124, 246);  cursor: pointer" id="file"> Attach
                                                File</p>


                                                <input type="number" name="Active" id="status" value="1">




                                            <button id="submit" type="submit" class="btn btn-primary">Save Task
                                            </button>
                                        </form>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    {{-- @foreach ($task as $i)
                        @if ($task->count() >= 1)
                            <h1>{{ $i->taskname }}</h1>
                        @endif
                    @endforeach --}}

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="background-color:#e4e9f0">
                                <tr>
                                    <td>Task Name</td>
                                    <td> Assignee </td>
                                    <td> Due Date</td>
                                    <td> Priority </td>
                                    <td> Status </td>
                                </tr>
                            </thead>

                            @foreach ($task as $i)
                            @if ($task->count() >= 1)
                            @if ($i->Active == 1)

                            <tbody>
                                <tr>
                                    <td>{{$i->taskname}}</td>
                                    <td>{{$i->assignee}}</td>
                                    <td>{{$i->duedate}}</td>
                                    <td>{{$i->priority}}</td>
                                    <td style="margin-bottom: -5%">  <input data-id="{{ $i->id }}" class="toggle-class" type="checkbox"
                                        data-onstyle="success" data-offstyle="danger" data-toggle="toggle" {{ $i->Active ? 'checked' : '' }} id="active" > </td>
                                </tr>
                            </tbody>
                            @endif
                            @endif
                            @endforeach
                        </table>
                    </div>

                   

                </div>





                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="background-color:#e4e9f0">
                                <tr>
                                    <td>Task Name</td>
                                    <td> Assignee </td>
                                    <td> Due Date</td>
                                    <td> Priority </td>
                                    <td> Status </td>
                                </tr>
                            </thead>

                            @foreach ($task as $i)
                            @if ($i->Active == 0)

                            <tbody>
                                <tr>
                                    <td>{{$i->taskname}}</td>
                                    <td>{{$i->assignee}}</td>
                                    <td>{{$i->duedate}}</td>
                                    <td>{{$i->priority}}</td>
                                    <td>  <input data-id="{{ $i->id }}" class="toggle-class" type="checkbox"
                                        data-onstyle="success" data-offstyle="danger" data-toggle="toggle"  {{ $i->Active ? 'checked' : '' }}  id="active"> </td>
                                </tr>
                            </tbody>
                            @endif
                            @endforeach
                        </table>
                    </div>

                   
                </div>
            </div>
            </div>

        </div>

    </body>

    </html>

    {{-- <script>
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script> --}}


    <script>
        $('#file').click(function() {
            $('#addfile').click();
        });


        // $('#assignee').click(function() {
        //     $('#assigne').show();
        // });
    </script>

    
<script>
    $(function() {
        $('.toggle-class').change(function() {
            var Active = $(this).prop('checked') == true ? 1 : 0;
            var job_id = $(this).data('id');
            $.ajax({

                type: "GET",
                dataType: "json",
                url: '/active/update',
                data: {
                    'Active': Active,
                    'job_id': job_id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        })
    });
</script>

@endsection
