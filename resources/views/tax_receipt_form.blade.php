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
            .form-control {
                height: 40px;
                font-size: 15px;
                width: 300px;
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
            <form action="{{ route('download_tax_receipt') }}" method="get">
                <p>Donor's Name:</p>
                <input type="text" name="donor_name" class="form-control" required />
                <p>Donor's Address:</p>
                <input type="text" name="donor_address" class="form-control" required />
                <p>Donation Amount:</p>
                <input type="number" name="donation_amount" class="form-control" required />
                <p>Date Received:</p>
                <input type="date" name="date_received" class="form-control" value="<?= date('Y-m-d') ?>" required />

                <button type="submit" class="d-block submit-btn">Submit</button>
            </form>
        </div>
    </body>
</html>