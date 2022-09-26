<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .center {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100%;
            }
            input.form-control {
                height: 40px;
                font-size: 15px;
                width: 300px;
            }
            select.form-control {
                height: 50px;
                font-size: 15px;
                width: 308px;
            }
            .d-block {
                display: block;
            }
            .submit-btn {
                margin-top: 1.5rem;
                font-size: 17px;
                padding: .5rem 2rem;
                cursor: pointer;
            }
            .container {
                min-height: 100vh;
            }

            form p {
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body height="500">
        <div class="container center">
            <form action="{{ route('store_donation_data') }}" method="post">
                @csrf

                <h3 style="font-size: 20px;">Please fill a donation detail.</h3>
                <p>First Name:</p>
                <input type="text" name="donor_first_name" class="form-control" required />
                <p>Last Name:</p>
                <input type="text" name="donor_last_name" class="form-control" required />
                <p>Email:</p>
                <input type="email" name="donor_email" class="form-control" required />
                <p>Donation Amount:</p>
                <input type="number" name="donation_amount" class="form-control" required />
                <p>Address:</p>
                <input type="text" name="donor_address" class="form-control" required />
                <p>Payment Provider:</p>
                <select name="payment_provider" class="form-control">
                    <option value="PayPal">PayPal</option>
                    <option value="Authorize.net">Authorize.net</option>
                    <option value="Cozeni">Cozeni(Crypto)</option>
                    <option value="Opennode">Opennode(Bitcoin)</option>
                </select>

                <button type="submit" class="d-block submit-btn">Submit</button>
            </form>
        </div>
    </body>
</html>