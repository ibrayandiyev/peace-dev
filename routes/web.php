<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PdfController;
use App\Http\Controllers\SparkpostController;
use App\Http\Controllers\GooglesheetsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('pdfs/tax_receipt');
});

Route::get('generate-pdf/donation-certificate', [PdfController::class, 'donationCertificateForm']);
Route::get('generate-pdf/donation-certificate/download', [PdfController::class, 'generateDonationCertificate'])->name('download_donation_certificate');

Route::get('generate-pdf/tax-receipt', [PdfController::class, 'taxReceiptForm']);
Route::get('generate-pdf/tax-receipt/download', [PdfController::class, 'generateTaxReceipt'])->name('download_tax_receipt');

Route::get('sparkpost/mailing-test', [SparkpostController::class, 'mailingTest']);
Route::get('sparkpost/send', [SparkpostController::class, 'donorMailSend'])->name('donor_mail_send');

Route::post('googlesheets/store-donation-data', [GooglesheetsController::class, 'saveDonationDataIntoGooglesheet'])->name('store_donation_data');
Route::get('googlesheets/donation-data-form', [GooglesheetsController::class, 'donationDataForm']);