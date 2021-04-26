<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/collaborator.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>Collaborator</title>
</head>
<body>
    <main>
        <div class="form-style-3">
        <form method="POST" action="create">
        @csrf
                <fieldset>
                    <legend>Collaborator Creation</legend><br />
                    <div class="gender">
                    <label for="">Civility</label>
                    <div>
                    <input type="radio" id="civility" name="civility" value="Homme">
                    <label for="Homme">Homme</label>
                    </div>


                    <div>
                    <input type="radio" id="civility" name="civility" value="Femme">
                    <label for="Femme">Femme</label>
                    </div>


                    <div>
                    <input type="radio" id="civility" name="civility" value="Non-Binaire">
                    <label for="Non-Binaire">Non-Binaire</label>
                    </div>
                    </div><br /><br />

                    <label for="first_name">First Name (Required)</label>
                    <input type="text" id="first_name" name="first_name" placeholder="First Name" required><br /><br />


                    <label for="last_name">Last Name (Required)</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name" required><br /><br />
                    

                    <label for="street">Address (Required)</label>
                    <input type="text" id="street" name="street" placeholder="Street Address" required><br /><br />
                    

                    <label for="postal_code">Postal Code (Required)</label>
                    <input type="tel" id="postal_code" name="postal_code" placeholder="Postal Code" required
                    pattern="[0-9]{5}"><br /><br />
                    
                    <label for="city">City (Required)</label>
                    <input type="text" id="city" name="city" placeholder="City" required><br /><br />
                    

                    <label for="phone_number">Phone Number</label>
                    <input type="tel" id="phone_number" name="phone_number" min="0" placeholder="Phone Number"
                    pattern="[0-9]{10}"><br /><br />
                    

                    <label for="email">Email (Required)</label>
                    <input type="email" id="email" name="email" placeholder="Email" required><br /><br />

                    <label for="company_id">Company_ID (Required)</label>
                    <input type="text" id="company_id" name="company_id" placeholder="Company" required><br /><br /><br />
                    

                    <button type="submit" id="company-submit">Validate</button>

                </fieldset>
                
            </form>
            @if($errors->any())
            @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
            @endif
        </div>
        </main>
</body>
</html>