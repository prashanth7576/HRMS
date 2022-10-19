@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

   
    <style>
        #content {
            background-color: white;
            padding: 10%;
            border: 2px solid rgb(131, 137, 150, 0.3);
            border-radius: 10px;
            margin-top: 0%;
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

        .btn{
            margin-top: 10%;
            margin-left: -10%;
        }

        #submit{
            margin-left: 60%;
        }

        .form-control {

            margin-bottom: 10px;

        }

        .form-check {
            display: inline-block;
        }


        #priority{
            margin-left: 5%; margin-top:10px;margin-bottom:10px

        }

        #select{
            height: 60px;
            margin-bottom: 10px;
        }

        @media (max-width:960px){
            #content{
                margin-left: 2px;
            }

            .btn{
            margin-top: 10%;
            margin-left: -20%;
        }
        }

        @media (max-width:480px) {

            #content {
            background-color: white;
            padding: 10%;
            border: 2px solid rgb(131, 137, 150, 0.3);
            border-radius: 10px;
            margin-top: -2%;
            height: 80vh;
            
            margin-left: 5px;

        }

        #select{
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

        .btn{
            margin-top: 10%;
            margin-left: -50%;
        }

        .form-control {

            margin-bottom: 10px;

        }

        .form-check {
            display: inline-block;
        }

     .btn-close{
        margin-left: 0%;
     }

       

        #priority{
           margin-top:10px;margin-bottom:10px

        }
        }
    </style>
</head>

<body>

    <div class="main_container">
        <div id="data" class="row">
            <div id="content" class="col-md-12">
                <div class="task">



                    <p class="text-center">You haven't added any tass yet! Start by creating new tasks or configuring
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
        
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body" style="margin-left:5%">
                                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        
                                            <form action="{{route('task.store')}}" method="POST">
                                                @csrf
        
        
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingPassword"
                                                        placeholder="Task Name" name="taskname">
                                                    <label for="floatingPassword"> Task Name</label>
                                                </div>
        
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingPassword"
                                                        placeholder=" Assignee " name="assignee">
                                                    <label for="floatingPassword">Assignee</label>
                                                </div>
        
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingPassword"
                                                        placeholder=" Checklist " name="checklist">
                                                    <label for="floatingPassword">Checklist</label>
                                                </div>
        
                                                <div class="form-floating">
                                                    <input type="date" class="form-control" id="floatingPassword"
                                                        placeholder="Due Date" name="duedate">
                                                    <label for="floatingPassword">Due Date</label>
                                                </div>

                                                <div>
                                                   
        
                                                    <select id="select" class="form-select" aria-label="Default select example" name="priority">
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
        
                                                <button id="submit" type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                        
                                       
                                        </ul>
                                    </div>
                                </div>
                            </div>
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

@endsection
