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
    <main>
    <div class="form-style-3">
        <form method="POST" action="create">
        @csrf
                <fieldset>
                    <legend>Company Creation</legend><br />
                    <label for="name">Name (Required)</label>
                    <input type="text" id="name" name="name" placeholder="Name" required><br /><br />
                    

                    <label for="street">Address (Required)</label>
                    <input type="text" id="street" name="street" placeholder="Street Address" required><br /><br />
                    

                    <label for="postal_code">Postal Code (Required)</label>
                    <input type="tel" id="postal_code" name="postal_code" placeholder="Postal Code" required
                    pattern="[0-9]{5}"><br /><br />
                    
                    <label for="city">City (Required)</label>
                    <input type="text" id="city" name="city" placeholder="City" required><br /><br />
                    

                    <label for="company_number">Phone Number</label>
                    <input type="tel" id="company_number" name="company_number" min="0" placeholder="Phone Number"
                    pattern="[0-9]{10}"><br /><br />
                    

                    <label for="email">Email (Required)</label>
                    <input type="email" id="email" name="email" placeholder="Email" required><br /><br /><br />
                    

                    <button type="submit" id="conpany-submit">Validate</button>

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