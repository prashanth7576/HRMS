@extends('layouts.app')

@section('content')
<style>
    .main-container{
       
        z-index: -1;
    }
    </style>
<body style="background-color: whitesmoke;font-family: 'Montserrat', sans-serif;">

    

    <div class="main_container">

        <form action="{{ route('form.update', $form->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row mb-1 align-items-center" style="float:right">
                        <div class="col-auto">
                            <label for="employeeid" class="col-form-label" :value="__('employeeid')" > Employee ID</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" id="employeeid" class="form-control" aria-describedby="enployeeid"
                                name="employeeid" 
                                value="{{ $form->employeeid }}" >
                        </div>

                    </div>
                    <br><br>
            <div class="row">
                <div class="col-md-4">
                </div>


                <div class="col-md-4">
                    <div class="flex" style="display:flex">
                        
                            <div class=" form-floating mb-4">
                                <input type="number" class="form-control" id="ctc" placeholder=" CTC" name="ctc" value="{{ $form->ctc }}" 
                                    style=" font-size:12px;height:50px">
                                <label for="CTC" :value="__('ctc')"  >CTC*</label>
                            </div>
                       

                        
                        <button class="btn btn-primary active" type="button" id="submit"
                style="width:100px; height:45px; margin-left:2%;margin-top:1%">Get Value</button>

                       

                    </div>

                </div>
            </div>

            
               

                
            <div class="flex" style="display:flex">
                <div class="one" style="width:48%;padding:2%;">
                <h5 style="text-align:center;margin-left:20%">Earnings</h5>
                  
                        <div class=" form-floating mb-1" style="float:right">
                            <input type="number" class="form-control" id="basic"  placeholder="Basic Salary" value="{{ $form->basicsalary }}" 
                                name="basicsalary" style=" font-size:12px;width:300px;height:50px">
                            <label for="Basic Salary" :value="__('basicsalary')" >Basic Salary</label>
                        </div>
                   

                    
                        <div class=" form-floating mb-1" style="float:right">
                            <input type="number" class="form-control" id="hra" placeholder="HRA" name="hra" 
                                value="{{ $form->hra }}" 
                                style=" font-size:12px;width:300px;height:50px">
                            <label for="HRA" :value="__('hra')" >HRA</label>
                        </div>
                    

                    
                        <div class=" form-floating mb-1" style="float:right">
                            <input type="number" class="form-control" id="conveyance" placeholder=" Conveyance"
                                name="conveyance" style=" font-size:12px;width:300px;height:50px " value="{{ $form->conveyance }}" >
                            <label for="Conveyance" :value="__('conveyance')" >Conveyance</label>
                        </div>
                    

                    
                        <div class=" form-floating mb-1" style="float:right">
                            <input type="number" class="form-control" id="medical"
                                placeholder="Medical Allowance" name="medicalallowance"
                                style="padding-top:30px; font-size:12px;width:300px;height:50px " 
                                value="{{ $form->medicalallowance }}">
                            <label for="Medical Allowance" :value="__('medicalallowance')" >Medical Allowance</label>
                        </div>
                    

                    
                        <div class=" form-floating mb-1" style="float:right">
                            <input type="number" class="form-control" id="special" placeholder="special Allowance"
                                name="special" style=" font-size:12px;width:300px;height:50px " value="{{ $form->special }}" >
                            <label for="special" :value="__('special')" >Special Allowance</label>
                        </div>
                    

                    <br><br>

                    <div class="row g-3 align-items-center" style="float:right;font-size:12px">
                        <div class="col-auto">
                            <label for="total" :value="__('total')"  class="col-form-label" >TOTAL</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" id="earning" class="form-control" aria-describedby="passwordHelpInline"
                                name="total" value="{{ $form->total }}" >
                        </div>

                    </div>
                </div>
<div class="two" style="width:48%;margin-left:3%;padding:2%">
<h5 style="margin-left:25%">Deductions</h5>
                   

                                    <div class=" form-floating mb-1">
                                        <input type="number" class="form-control" id="epf" placeholder="EPF" name="epf" value="{{ $form->epf }}"
                                            style=" font-size:12px;width:300px;height:50px"   >
                                        <label for="EPF" :value="__('epf')" >EPF</label>
                                    </div>
                                
                               

                               

                                
                                    <div class=" form-floating mb-1">
                                        <input type="number" class="form-control" id="esi" placeholder="ESI" name="esi"
                                            style=" font-size:12px;width:300px;height:50px " value="{{ $form->esi }}">
                                        <label for="ESI" :value="__('esi')" >ESI</label>
                                    </div>
                                


                                <div class="row g-3 align-items-center" style="font-size:12px">
  <div class="col-auto">
    <label for="total" :value="__('totaldeductions')"  class="col-form-label">TOTAL</label>
  </div>
  <div class="col-auto">
    <input type="number" id="deduction" class="form-control" aria-describedby="passwordHelpInline" name="totaldeductions" value="{{ $form->totaldeductions }}">
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

<script>


  

  var btn = document.getElementById('submit');

  btn.addEventListener("click", earnings);
  btn.addEventListener("click", deductions);
  

  

  
//Monday Data


function earnings(){

 document.getElementById('basic').value;
 document.getElementById('hra').value;
 document.getElementById('conveyance').value;
 document.getElementById('medical').value;
 document.getElementById('special').value;


 
 const basicsalary = parseInt( document.getElementById('basic').value);
 const hr = parseInt( document.getElementById('hra').value);
 
 const conveyances = parseInt( document.getElementById('conveyance').value);
 const medicalallowance = parseInt( document.getElementById('medical').value);
 
 const specialallowance = parseInt( document.getElementById('special').value);

 

 const result =  basicsalary + hr + conveyances + medicalallowance + specialallowance;

 const total = document.getElementById('earning').value= result;

}


function deductions(){


document.getElementById('epf').value;
document.getElementById('esi').value;




const epfs = parseInt( document.getElementById('epf').value);
const esis = parseInt( document.getElementById('esi').value);

const result =   epfs + esis;

const total = document.getElementById('deduction').value= result;

}


 

</script>
@endsection


