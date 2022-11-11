

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table bordered">
       <tr>
        <th>permanentaddress</th>
        <th>presentaddress</th>
        <th>qualification</th>
        <th>experience</th>
       </tr>
@foreach ($data as $i)

<tbody>
    <tr>
        <td><a href="{{url('/permanentaddress', $i->permanentaddress)}}"> download permanentaddress </a></td>
        <td><a href="{{url('/presentaddress', $i->presentaddress)}}"> Download presentaddress </a></td>
        <td><a href="{{url('/qualification', $i->qualificationdetails)}}"> Download qualification </a></td>
        <td><a href="{{url('/previousemployement', $i->previousemployement)}}"> Download experience </a></td>

        <td><a href="{{url('/bankaccountdetails', $i->bankaccount)}}"> Download Bankdetails </a></td>
        <td><a href="{{url('/aadhaar', $i->aadhaar)}}"> Download aadhaar </a></td>
        <td><a href="{{url('/passport', $i->passport)}}"> Download passport </a></td>
    </tr>
</tbody>
    
@endforeach
      

    </table>
</body>
</html>