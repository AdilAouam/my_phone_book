<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/collaborator_list.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Collaborator List</title>
</head>
<body>
    
    <h1>Collaborator List</h1>
    <table class="t1" border="1">
        <tr class="tr1">
            <td>Last Name</td>
            <td>First Name</td>
            <td>Phone Number</td>
            <td>Email</td>
            <td>Company Name</td>
            <td>Company Number</td>


        </tr> 
        @foreach($data as $collaborator)
            <tr class="tr2">
            <td>{{$collaborator['last_name']}}</td>
            <td>{{$collaborator['first_name']}}</td>
            <td>{{$collaborator['phone_number']}}</td>
            <td>{{$collaborator['email']}}</td>
            <td>{{$collaborator['name']}}</td>
            <td>{{$collaborator['company_number']}}</td>
        </tr>
        @endforeach    
    </table> 

</body>
</html>
