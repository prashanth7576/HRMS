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

</head>
<body>
    <form  action="sample" method="POST" enctype="multipart/form-data">
      @csrf
        <div>
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="file" class="form-control" id="validationCustom01" name="file">
        
        </div>

        <div>
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="file" class="form-control" id="validationCustom01" name="aadhaar">
        
        </div>
        <div>
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationCustom01" name="name">
        
        </div>
       
        <div >
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>
<h1>{{auth()->user()->employeeid}}</h1>
 
         {{-- <img src="{{ asset('public/folders/'.$i->file)}}" alt="" height="200px" width="200px"> --}}
         {{-- <iframe src="{{asset('public/folders/'.$i->file)}}" frameborder="0" height="100px" width="200px" ></iframe> --}}
         {{-- <embed src="{{asset('public/folders/'.$i->file)}}" type="application/pdf" height="200px" width="300px"> --}}


          <table class="table bordered">
            <thead>
            <tr>
              <th>file</th>
              <th>file</th>
              <th>name</th>
              <th>view</th>
              <th>download</th>
              <th>download</th>
            </tr>
            </thead>

            @foreach ($user as $i)
            <tbody>
              <tr>
                <td>{{$i->file}}</td>
                <td>{{$i->aadhaar}}</td>
                <td>{{$i->name}}</td>
                <td><a href="{{url('/view', $i->id)}}"> View </a></td>
                <td><a href="{{url('/download', $i->file)}}"> Download Aadhaar </a></td>
                <td><a href="{{url('/downloads', $i->aadhaar)}}"> Download Payslip </a></td>
              </tr>
            </tbody>
            @endforeach
          </table>
      

     

</body>
</html>
