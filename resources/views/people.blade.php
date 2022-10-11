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

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        ul {
            margin-left: 20px;
        }

        li {

            margin-bottom: -1%;
        }


        #pills-active-tab {
            border: 1px solid rgb(109, 123, 141, 0.5);
            border-radius: 0%;
            width: 150px;
            height: 40px;
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px;


        }

        #pills-closed-tab {


            border-radius: 0%;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            width: 150px;
            height: 40px;
            border: 1px solid rgb(109, 123, 141, 0.5);
        }

        input {
            width: 270px;
            margin-left: 4px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid rgb(100, 98, 98, 0.5)
        }

        .search {

            border-radius: 5px;
            border: 1px solid rgb(109, 123, 141, 0.5);
            background-color: white;
            height: 600px;
            width: 350px;
            border-radius: 5px;
            margin-left: 10px;

        }

        .info {
            margin-left: 370px;
            margin-right: 20px;
            height: 600px;
            margin-top: -600px;
            border-radius: 5px;
            border: 1px solid rgb(133, 131, 131, 0.5);
        }

        @media (max-width: 960px) {

            ul {
                margin-left: 20px;
            }

            li {

                margin-bottom: -1%;
            }


            #pills-active-tab {
                border: 1px solid rgb(109, 123, 141, 0.5);
                border-radius: 0%;
                width: 150px;
                height: 40px;
                border-bottom-left-radius: 10px;
                border-top-left-radius: 10px;


            }

            #pills-closed-tab {


                border-radius: 0%;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
                width: 150px;
                height: 40px;
                border: 1px solid rgb(109, 123, 141, 0.5);
            }

            input {
                width: 220px;
                margin-left: 4px;
                height: 35px;
                border-radius: 5px;
                border: 1px solid rgb(100, 98, 98, 0.5)
            }

            .search {

                border-radius: 5px;
                border: 1px solid rgb(109, 123, 141, 0.5);
                background-color: white;
                height: 600px;
                width: 270px;
                border-radius: 5px;

            }

            .info {
                margin-left: 285px;
                height: 600px;
                margin-top: -600px;
                border-radius: 5px;
                border: 1px solid rgb(133, 131, 131, 0.5);
            }



        }

        @media (max-width:480px) {

            ul {
                margin-left: 20px;
            }

            li {

                margin-bottom: -1%;
            }


            #pills-active-tab {
                border: 1px solid rgb(109, 123, 141, 0.5);
                border-radius: 0%;
                width: 150px;
                height: 40px;
                border-bottom-left-radius: 10px;
                border-top-left-radius: 10px;


            }

            #pills-closed-tab {


                border-radius: 0%;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
                width: 150px;
                height: 40px;
                border: 1px solid rgb(109, 123, 141, 0.5);
            }

            input {
                width: 150px;
                margin-left: 4px;
                height: 35px;
                border-radius: 5px;
                border: 1px solid rgb(100, 98, 98, 0.5)
            }

            .search {

                border-radius: 5px;
                border: 1px solid rgb(109, 123, 141, 0.5);
                background-color: white;
                height: 600px;
                width: 170px;
                border-radius: 5px;

            }

            .info {
                margin-left: 185px;
                height: 600px;
                margin-top: -600px;
                border-radius: 5px;
                width: 210px;
                border: 1px solid rgb(133, 131, 131, 0.5);
            }

        }
    </style>
</head>

<body>
    <br>

    <div>

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li id="active" class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-active-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true"> Active </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-closed-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Closed </button>
            </li>

        </ul>


        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div>
                    <div class="search">
                        <input type="text" placeholder="search people">


                    </div>

                    <div class="info">


                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                <div class="row justify-content-center">

                    <div>
                        <div class="search">
                            <input type="text" placeholder="search people">

                        </div>

                        <div class="info">


                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

</body>

</html>
