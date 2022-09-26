<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SparkpostController extends Controller
{
    public function mailingTest()
    {
        return view('mailing_test');
    }

    public function donorMailSend(Request $request)
    {
        // Mail to a donor
        dispatch(new \App\Jobs\DonorMailJob($request->donor_email));

        dd('Sent!');
    }
}
