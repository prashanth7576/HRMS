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
            margin-top: -2%;
            height: 80vh;

        }

        .task {
            margin-top: 180px;
        }

        #data {
            margin: 1%;
            height: 720px;


        }

        button{
            margin-left: 40%
        }

        .form-control {

            margin-bottom: 10px;

        }

        .form-check {
            display: inline-block;
        }

        .modal-header{
            background-color: rgb(155, 149, 149, 0.3)
        }

        #priority{
            margin-left: 5%; margin-top:10px;margin-bottom:10px

        }

        @media (max-width:480px) {

            #content {
            background-color: white;
            padding: 10%;
            border: 2px solid rgb(131, 137, 150, 0.3);
            border-radius: 10px;
            margin-top: -2%;
            height: 80vh;

        }

        .task {
            margin-top: 100px;
        }

        #data {
            margin: 1%;
            height: 720px;


        }

      button{
        margin-left: 40%
      }

        .form-control {

            margin-bottom: 10px;

        }

        .form-check {
            display: inline-block;
        }

        .modal-header{
            background-color: rgb(155, 149, 149, 0.3)
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


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        New Task
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Task</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">


                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingPassword"
                                                placeholder="Task Name">
                                            <label for="floatingPassword"> Task Name</label>
                                        </div>

                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingPassword"
                                                placeholder=" Assignee ">
                                            <label for="floatingPassword">Assignee</label>
                                        </div>

                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingPassword"
                                                placeholder=" Checklist ">
                                            <label for="floatingPassword">Checklist</label>
                                        </div>

                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="floatingPassword"
                                                placeholder="Due Date">
                                            <label for="floatingPassword">Due Date</label>
                                        </div>


                                        <label for="priority" id="mode"> Priority </label>
                                        <div class="form-check" id="priority">


                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Low
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Medium
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    High
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingPassword"
                                                placeholder=" Tags ">
                                            <label for="floatingPassword"> Tags </label>
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea"> Description </label>
                                        </div>


                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
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
