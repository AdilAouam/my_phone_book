<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/collaborator_update.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Collaborator Update</title>
</head>
<body>
    <main class="form-style-3">
        <form method="POST" action="/collaborator/update/{id}">
        @csrf
                <fieldset>
                    <input type="hidden" id="name" name="id" value="{{$data['id']}}" required>
                    <legend>Collaborator Update</legend>
                    <div class="gender">
                        <label for="">Civility</label>
                        <div>
                        <input type="radio" id="civility" name="civility" value="Homme"{{$data['civility']}}>
                        <label for="Homme">Homme</label>
                        </div>


                        <div>
                        <input type="radio" id="civility" name="civility" value="Femme"{{$data['civility']}}>
                        <label for="Femme">Femme</label>
                        </div>


                        <div>
                        <input type="radio" id="civility" name="civility" value="Non-Binaire"{{$data['civility']}}>
                        <label for="Non-Binaire">Non-Binaire</label>  
                        </div>
                    </div><br /><br />


                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="First Name" value="{{$data['first_name']}}" required><br /><br />


                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name" value="{{$data['last_name']}}" required><br /><br />
                    

                    <label for="street">Address</label>
                    <input type="text" id="street" name="street" placeholder="Street Address" value="{{$data['street']}}" required><br /><br />
                    

                    <label for="postal_code">Postal Code</label>
                    <input type="tel" id="postal_code" name="postal_code" placeholder="Postal Code" value="{{$data['postal_code']}}" required
                    pattern="[0-9]{5}"><br /><br />
                    
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="City" value="{{$data['city']}}" required><br /><br />
                    

                    <label for="phone_number">Phone Number</label>
                    <input type="tel" id="phone_number" name="phone_number" min="0" placeholder="Phone Number" value="{{$data['phone_number']}}"
                    pattern="[0-9]{10}"><br /><br />
                    

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" value="{{$data['email']}}" required><br /><br />

                    <label for="company_id">Company</label>
                    <input type="text" id="company_id" name="company_id" placeholder="Company" value="{{$data['company_id']}}" required><br /><br />
                    

                    <button type="submit" id="company-submit">Validate</button>

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