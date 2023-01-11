<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>

<body>
    {{-- <table class="table bordered">
        <tr>
            <th>permanentaddress</th>
            <th>presentaddress</th>
            <th>qualification</th>
            <th>experience</th>
        </tr>
        @foreach ($data as $i)
            <tbody>
                <tr>
                    <td><a href="{{ url('/permanentaddress', $i->permanentaddress) }}"> download permanentaddress </a>
                    </td>
                    <td><a href="{{ url('/presentaddress', $i->presentaddress) }}"> Download presentaddress </a></td>
                    <td><a href="{{ url('/qualification', $i->qualificationdetails) }}"> Download qualification </a>
                    </td>
                    <td><a href="{{ url('/previousemployement', $i->previousemployement) }}"> Download experience </a>
                    </td>

                    <td><a href="{{ url('/bankaccountdetails', $i->bankaccount) }}"> Download Bankdetails </a></td>
                    <td><a href="{{ url('/aadhaar', $i->aadhaar) }}"> Download aadhaar </a></td>
                    <td><a href="{{ url('/passport', $i->passport) }}"> Download passport </a></td>
                </tr>
            </tbody>
        @endforeach


    </table> --}}



{{-- 
    <button type="button" class="btn btn-primary" id="button" data-bs-toggle="button" autocomplete="off"> Login
    </button>

    <h2>Example to toggle a button</h2>

<input type="button" id="myBtn" value="OFF"

     onClick="tgl()">

     <button>hello</button> --}}

     <input type="button" id="demo" value="on" onclick="sample()">


     {{-- <input id="myInput" type="button"> --}}
@foreach ($data as $i)
<img src="{{asset('public/profiles/' . $i->profilepicture)}}" alt="" height="200px" width="200px">
@endforeach

</body>

</html>

{{-- <script>
    function tgl()
{
var t = document.getElementById("myBtn");
if(t.value=="ON"){
      t.value="OFF";
    }
elseif(t.value=="OFF"){
      t.value="ON";
    }
}

</script> --}}


<script>
    document.getElementById("demo").addEventListener("click", function sample(event){

        const hello = document.getElementById("demo");

if (hello.value == "on") {
  hello.value="off"
  
} else{
  hello.value="on"
  
}
  event.preventDefault()
});
</script>

{{-- 
<script>
    function sample() {

      const hello = document.getElementById("demo");

      if (hello.value == "on") {
        hello.value="off"
        
      } else{
        hello.value="on"
        
      }
        
    }



</script>


<script>
    var myInput = document.getElementById("demo");
function sample(){
    if (hello.value == "on") {
        hello.value="off"
        
      } else{
        hello.value="on"
        
      }

    }

    window.onload = function() {
        if (sessionStorage.getItem("autosave"))
            hello.value = sessionStorage.getItem("autosave");
    }

    hello.addEventListener("keyup", function() {
        sessionStorage.setItem("autosave", hello.value);

       
    });
</script>





<script>
    $("#button").on('click', function(e) {
                if ($(this).hasClass("login") {
                        $(this).removeClass("login");
                        $(this).addClass("logout");
                        doLogin();
                    } else {
                        $(this).removeClass("logout");
                        $(this).addClass("login");
                        doLogout();
                    }
                });
</script> --}}


{{-- 
@foreach ($data as $i)
    

@if($i->status == 'signedin')

    <form action="{{route('signout')}}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary active"
        style="float:right;margin-top:-9%;background-color:blue">Sign Out</button>
</form>
@endif



<form action="{{route('admin')}}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary active"
        style="float:right;margin-top:-9%;background-color:blue">Sign In</button>
</form>


@endforeach --}}
