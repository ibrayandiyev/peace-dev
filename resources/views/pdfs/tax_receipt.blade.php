<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="charset=utf-8" />
        <meta charset="UTF-8">
        <title>Tax receipt</title>

        <style type="text/css">
            * {
                font-family: "sans-serif";
                font-size: 13.7px;
                font-weight: lighter;
            }
            @page {
                size:  21.6cm 27.9cm;
                margin: 0.35cm 2.4cm;
            }

            /** Ayar */
            /* @font-face {
                font-family: "ayar";
                src: url({{ storage_path('fonts\ayar\Ayar.ttf') }}) format('truetype');
            } */

            .text-center {
                text-align: center;
            }

            .text-right {
                text-align: right;
            }

            .text-left {
                text-align: left;
                /* word-spacing: 1; */
            }

            p {
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .sign {
                font-size: 14px;
                margin-top: 98px;
            }

            .sign-underline {
                border-top: 1px solid #000;
                height: 0;
                width: 122px;
                margin-bottom: 3px;
            }

            #footer {
                margin-top: 20px;
                color: #B7B7BB;
            }
            #footer a {
                color: #B7B7BB;
                text-decoration: none;
            }
            #footer p {
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <div class="donation-certificate-pdf text-center">
            <div style="margin-top: 160px">
                <img src="{{ storage_path('img/RangrigYeshe_logo_final_gold7555_vector.jpg') }}" style="width: 4cm;">
            </div>
            <div style="float:right;font-size: 13px;margin-right: 30px;">{{ date('F d, Y') }}</div>
            <div class="text-left" style="margin-top: 70px;">
                <p style="text-align: justify;">Thank you for your gift. The amount you have given will make a difference and help to build <span style="font-weight: bold;">The Universal Peace Sanctuary</span>.</p>
                <p style="text-align: justify;">This receipt is an attestation that we have gratefully received your generous contribution to our humble
                organization. All contributions to Rangrig Yeshe are tax-deductible to the fullest extent allowed by law.
                Our tax-exempt number is 04-3054841. Goods or services received in return consisted solely of
                “intangible religious benefits.” You may use this letter for income tax reporting purposes.</p>
                <p>Keep this receipt for your tax deduction purposes.</p>
                <p class="text-right"><span style="font-weight: bold;float: left">Donor’s Name: </span>{{ $donor_name }}</p>
                <p class="text-right"><span style="font-weight: bold;float: left">Donor’s Address: </span>{{ $donor_address }}</p>
                <p class="text-right"><span style="font-weight: bold;float: left">Donation Amount: </span>{{ $donation_amount }}</p>
                <p class="text-right"><span style="font-weight: bold;float: left">Date Received: </span>{{ $date_received }}</p>
                <p>Sincerely,</p>

                <div class="sign">
                    <div class="sign-underline"></div>
                    Daniel Bernatowicz<br>Treasurer RYI
                </div>
            </div>

            <div id="footer" class="text-center">
                <p>Rangrig Yeshe Inc &nbsp;&nbsp;PO Box 1584 &nbsp;&nbsp;New York, NY 10009 &nbsp;&nbsp;| &nbsp;&nbsp;917-301-7782</p>
                <div class="footer-bottom">
                    <a href="https://www.buddhafield.us/" style="margin-right: 30px">www.buddhafield.us</a>
                    <a href="http://www.peacesanctuary.org/">www.peacesanctuary.org</a>
                </div>
            </div>
        </div>
    </body>
</html>