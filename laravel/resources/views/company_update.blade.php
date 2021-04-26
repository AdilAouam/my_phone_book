<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/company.css') }}" >
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Company</title>
</head>
<body>
    <main class="form-style-3">
        <form method="POST" action="/company/update/{id}">
        @csrf
                <fieldset>
                    <legend>Company Update</legend>

                    <input type="hidden" id="name" name="id" value="{{$data['id']}}" required>

                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name" value="{{$data['name']}}" required>
                    

                    <label for="street">Address</label>
                    <input type="text" id="street" name="street" placeholder="Street Address" value="{{$data['street']}}" required>
                    

                    <label for="postal_code">Postal Code</label>
                    <input type="tel" id="postal_code" name="postal_code" placeholder="Postal Code" value="{{$data['postal_code']}}" required
                    pattern="[0-9]{5}">
                    
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="City" value="{{$data['city']}}" required>
                    

                    <label for="company_number">Phone Number</label>
                    <input type="tel" id="company_number" name="company_number" min="0" placeholder="Phone Number" value="{{$data['company_number']}}"
                    pattern="[0-9]{10}">
                    

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" value="{{$data['email']}}" required>
                    

                    <button type="submit" id="conpany-submit">Validate</button>

                </fieldset>
                
            </form>
            @if($errors->any())
            @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
            @endif
        </main>
</body>
</html>