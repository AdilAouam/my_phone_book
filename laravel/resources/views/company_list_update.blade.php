<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/collaborator_delete.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<h1>Company List</h1>

<table class="t1" border="1">
    <tr class="tr1">
        <td>Name</td>
        <td>Address</td>
        <td>Postal Code</td>
        <td>City</td>
        <td>Phone Number</td>
        <td>Email</td>
        <td>Option</td>

    </tr> 
    @foreach($data as $company)
    <tr class="tr2">
        <td>{{$company['name']}}</td>
        <td>{{$company['street']}}</td>
        <td>{{$company['postal_code']}}</td>
        <td>{{$company['city']}}</td>
        <td>{{$company['company_number']}}</td>
        <td>{{$company['email']}}</td>
        <td> <button><a href={{"update/".$company['id']}}>Update</a></button></td>
    </tr>
    @endforeach    
</table> 
