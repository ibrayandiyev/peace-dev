<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GooglesheetsController extends Controller
{

    public function donationDataForm()
    {
        return view('donation_data_form');
    }

    public function saveDonationDataIntoGooglesheet(Request $request)
    {
        // Append data into google sheets
        if (config('settings.google.sheets.enabled', true)) {
            $service = app()->make('googlesheets');

            $data = array_values($request->only([
                'donor_first_name',
                'donor_last_name',
                'donor_email',
                'donation_amount',
                'donor_address',
                'payment_provider',
            ]));
            $values = [
                array_merge(array_slice($data, 0, 3), [date('Y-m-d h:i:s'), date('Y-m-d')], array_slice($data, 3)),
            ];

            // Object - range of values
            $ValueRange = new \Google_Service_Sheets_ValueRange();
            // Setting the data
            $ValueRange->setValues($values);
            // Specify in the options to process user data
            $options = ['valueInputOption' => 'USER_ENTERED'];

            // Add the values into the last row
            $service->spreadsheets_values->append(config('sheets.post_spreadsheet_id'), 'A:H', $ValueRange, $options);
        }

        dd('Saved!');
    }
}
