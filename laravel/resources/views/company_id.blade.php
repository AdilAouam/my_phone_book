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

<h1>Company</h1>

<table class="t1" border="1">
    <tr class="tr1">
        <td>Name</td>
        <td>Address</td>
        <td>Postal Code</td>
        <td>City</td>
        <td>Phone Number</td>
        <td>Email</td>

    </tr> 
    <tr class="tr2">
        <td>{{$data['name']}}</td>
        <td>{{$data['street']}}</td>
        <td>{{$data['postal_code']}}</td>
        <td>{{$data['city']}}</td>
        <td>{{$data['company_number']}}</td>
        <td>{{$data['email']}}</td>
    </tr>