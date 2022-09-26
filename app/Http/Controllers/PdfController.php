<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function donationCertificateForm()
    {
        return view('donation_certificate_form');
    }

    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function generateDonationCertificate(Request $request)
    {
        $pdf = PDF::loadView('pdfs/donation_certificate', ['donor_name' => $request->donor_name]);

        return $pdf->download('Certificate of donation.pdf');
        // return $pdf->stream();
    }

    public function taxReceiptForm()
    {
        return view('tax_receipt_form');
    }

    public function generateTaxReceipt(Request $request)
    {
        $pdf = PDF::loadView('pdfs/tax_receipt', $request->all());

        return $pdf->download('Tax receipt.pdf');
        // return $pdf->stream();
    }
}
