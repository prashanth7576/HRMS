@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">






</head>

<body style="background-color: whitesmoke;font-family: 'Montserrat', sans-serif;">

    <div class="main_container">
        <form action="{{route('form.store')}}" method="POST">
            @csrf

           

                            <div class="row mb-1 align-items-center" style="float:right">
                        <div class="col-auto">
                            <label for="employeeid" class="col-form-label"> Employee ID</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="employeeid" class="form-control" aria-describedby="enployeeid"
                                name="employeeid">
                        </div>

                    </div>
                    <br><br>
            <div class="row">
                <div class="col-md-4">
                </div>


                <div class="col-md-4">
                    <div class="flex" style="display:flex">
                        
                            <div class=" form-floating mb-4">
                                <input type="number" class="form-control" id="ctc" placeholder=" CTC" name="ctc"
                                    style=" font-size:12px;height:50px">
                                <label for="CTC">CTC*</label>
                            </div>
                       

                        
                        <button class="btn btn-primary active" type="button" id="myBtn"
                style="width:100px; height:45px; margin-left:2%;margin-top:1%">Get Value</button>

                       

                    </div>

                </div>
            </div>

            
               

                
            <div class="flex" style="display:flex">
                <div class="one" style="width:48%;padding:2%;">
                <h5 style="text-align:center;margin-left:20%">Earnings</h5>
                  
                        <div class=" form-floating mb-1" style="float:right">
                            <input type="number" class="form-control" id="basic" placeholder="Basic Salary"
                                name="basicsalary" style=" font-size:12px;width:300px;height:50px">
                            <label for="Basic Salary">Basic Salary</label>
                        </div>
                   

                    
                        <div class=" form-floating mb-1" style="float:right">
                            <input type="number" class="form-control" id="hra" placeholder="HRA" name="hra"
                                style=" font-size:12px;width:300px;height:50px">
                            <label for="HRA">HRA</label>
                        </div>
                    

                    
                        <div class=" form-floating mb-1" style="float:right">
                            <input type="number" class="form-control" id="conveyance" placeholder=" Conveyance"
                                name="conveyance" style=" font-size:12px;width:300px;height:50px ">
                            <label for="Conveyance">Conveyance</label>
                        </div>
                    

                    
                        <div class=" form-floating mb-1" style="float:right">
                            <input type="number" class="form-control" id="medicalAllowance"
                                placeholder="Medical Allowance" name="medicalallowance"
                                style="padding-top:30px; font-size:12px;width:300px;height:50px ">
                            <label for="Medical Allowance">Medical Allowance</label>
                        </div>
                    

                    
                        <div class=" form-floating mb-1" style="float:right">
                            <input type="number" class="form-control" id="special" placeholder="Medical Allowance"
                                name="special" style=" font-size:12px;width:300px;height:50px ">
                            <label for="Medical Allowance">Special Allowance</label>
                        </div>
                    

                    <br><br>

                    <div class="row g-3 align-items-center" style="float:right;font-size:12px">
                        <div class="col-auto">
                            <label for="total" class="col-form-label" >TOTAL</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" id="total" class="form-control" aria-describedby="passwordHelpInline"
                                name="total">
                        </div>

                    </div>
                </div>
<div class="two" style="width:48%;margin-left:3%;padding:2%">
<h5 style="margin-left:25%">Deductions</h5>
                   

                                    <div class=" form-floating mb-1">
                                        <input type="number" class="form-control" id="epf" placeholder="EPF" name="epf"
                                            style=" font-size:12px;width:300px;height:50px">
                                        <label for="EPF">EPF</label>
                                    </div>
                                
                               

                               

                                
                                    <div class=" form-floating mb-1">
                                        <input type="number" class="form-control" id="taxTwo" placeholder="ESI" name="esi"
                                            style=" font-size:12px;width:300px;height:50px ">
                                        <label for="ESI">ESI</label>
                                    </div>
                                


                                <div class="row g-3 align-items-center" style="font-size:12px">
  <div class="col-auto">
    <label for="total" class="col-form-label">TOTAL</label>
  </div>
  <div class="col-auto">
    <input type="number" id="totaldeductions" class="form-control" aria-describedby="passwordHelpInline" name="totaldeductions">
  </div>
  
</div>

</div>
            </div>


            <br>
            <div style="text-align:center">


                        <button id="btnone" class="btn btn-primary btn-lg" type="submit">
                            Submit </button>


                    </div>
        </form>


    </div>


</body>

</html>


<script>
var btn = document.getElementById("myBtn");

btn.addEventListener("click", basic);
btn.addEventListener("click", hra);
btn.addEventListener("click", epf);
btn.addEventListener("click", gross);
btn.addEventListener("click", net);
btn.addEventListener("click", special);
btn.addEventListener("click", professional);
btn.addEventListener("click", esi);
btn.addEventListener("click", total);
btn.addEventListener("click", totaldeductions);




function basic() {

    var inputVal = document.getElementById("ctc").value;

    const percent = 40;

    const net = Math.floor((percent / 100 * inputVal) / 12);

    const head = document.getElementById('basic').value = net;


    document.body.appendChild(head);

}






function hra() {

    var inputVal = document.getElementById("basic").value;

    const percent = 40;

    const net = Math.floor(((percent / 100) * inputVal));

    const head = document.getElementById('hra').value = net;


    document.body.appendChild(head);

}



const conveyance = document.getElementById('conveyance').value = 1600;

function epf() {

    var inputVal = document.getElementById("basic").value;

    const percent = 12;

    const net = Math.floor(((percent / 100) * inputVal));

    const head = document.getElementById('epf').value = net;




    document.body.appendChild(head);

}







const medicalAllowance = document.getElementById('medicalAllowance').value = 1250;







function gross() {

    var inputVal = document.getElementById("ctc").value;

    const percent = 12;

    const net = Math.floor((inputVal / 12));

    const head = document.getElementById('gross').value = net;




    document.body.appendChild(head);

}






function special() {

    const basic = parseInt(document.getElementById("basic").value);
    const hra = parseInt(document.getElementById("hra").value);
    const conveyance = parseInt(document.getElementById("conveyance").value);
    const medicalAllowance = parseInt(document.getElementById("medicalAllowance").value);

    const ctc = parseInt(document.getElementById("ctc").value);

    const salary = ctc / 12;

    const epf = parseInt(document.getElementById("epf").value);


    const net = Math.floor(salary - basic - hra - conveyance - medicalAllowance - epf);

    document.getElementById("special").value = net;


    document.body.appendChild(head);
}

function totaldeductions() {


    const ctc = parseInt(document.getElementById("ctc").value);

    const salary = ctc / 12;

    const epf = parseInt(document.getElementById("epf").value);
    const esi = parseInt(document.getElementById("taxTwo").value);


    const net = Math.floor(epf + esi);

    document.getElementById("totaldeductions").value = net;


    document.body.appendChild(head);
}


function total() {

    const basic = parseInt(document.getElementById("basic").value);
    const hra = parseInt(document.getElementById("hra").value);
    const conveyance = parseInt(document.getElementById("conveyance").value);
    const medicalAllowance = parseInt(document.getElementById("medicalAllowance").value);
    const special = parseInt(document.getElementById("special").value);

    const ctc = parseInt(document.getElementById("ctc").value);

    const salary = ctc / 12;

    const epf = parseInt(document.getElementById("epf").value);


    const net = Math.floor(basic + hra + conveyance + medicalAllowance + special);

    document.getElementById("total").value = net;



}




function professional() {

    const ctc = parseInt(document.getElementById("ctc").value);

    const salary = ctc / 12;

    if (salary < 16000) {

        const head = document.getElementById('professional').value = 0;




        document.body.appendChild(head);

    } else if (salary < 22000) {

        const head = document.getElementById('professional').value = 150;




        document.body.appendChild(head);

    } else {
        const head = document.getElementById('professional').value = 200;




        document.body.appendChild(head);
    }

}





function esi() {

    const ctc = parseInt(document.getElementById("ctc").value);

    const salary = ctc / 12;

    if (salary < 21000) {

        const percent = 0.75;

        const net = Math.floor((percent / 100) * salary);

        const head = document.getElementById('taxTwo').value = net;

        document.body.appendChild(head);

    } else {

        const head = document.getElementById('taxTwo').value = 0;

    }
}







function net() {

    const basic = parseInt(document.getElementById("basic").value);
    const hra = parseInt(document.getElementById("hra").value);
    const conveyance = parseInt(document.getElementById("conveyance").value);
    const medicalAllowance = parseInt(document.getElementById("medicalAllowance").value);

    const special = parseInt(document.getElementById("taxOne").value);


    const epf = parseInt(document.getElementById("epf").value);

    const net = (basic + hra + conveyance + medicalAllowance + special - epf);

    const head = document.getElementById('net').value = net;




    document.body.appendChild(head);

}
</script>

@endsection