<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/collaborator_delete.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Collaborator List</title>
</head>
<body>
    
</body>
</html>

<h1>Collaborator List</h1>

<table class="t1" border="1">
    <tr class="tr1">
        <td>ID</td>
        <td>Civility</td>
        <td>Last Name</td>
        <td>First Name</td>
        <td>Address</td>
        <td>Postal Code</td>
        <td>City</td>
        <td>Phone Number</td>
        <td>Email</td>
        <td>Company Name</td>
        <td>Company Number</td>
        <td>Option</td>

    </tr> 
    @foreach($data as $collaborator)
    <tr class="tr2">
        <td>{{$collaborator['id']}}</td>
        <td>{{$collaborator['civility']}}</td>
        <td>{{$collaborator['last_name']}}</td>
        <td>{{$collaborator['first_name']}}</td>
        <td>{{$collaborator['street']}}</td>
        <td>{{$collaborator['postal_code']}}</td>
        <td>{{$collaborator['city']}}</td>
        <td>{{$collaborator['phone_number']}}</td>
        <td>{{$collaborator['email']}}</td>
        <td>{{$collaborator['name']}}</td>
        <td>{{$collaborator['company_number']}}</td>
        <td> <button><a href={{"update/".$collaborator['id']}}>Update</a></button></td>
    </tr>
    @endforeach    
</table> 
