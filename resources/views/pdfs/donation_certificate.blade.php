<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="charset=utf-8" />
        <meta charset="UTF-8">
        <title>Certificate of donation</title>

        <style type="text/css">
            * {
                font-family: "khula-regular";
                font-size: 60px;
            }
            @page {
                size: 27.9cm 21.6cm;
                margin: 0.35cm;
            }

            /** JosefinSans */
            @font-face {
                font-family: "JosefinSans-SemiBold";
                src: url({{ storage_path('fonts\josefin-sans\JosefinSans-SemiBold.ttf') }}) format('truetype');
            }

            @font-face {
                font-family: "JosefinSans-Light";
                src: url({{ storage_path('fonts\josefin-sans\JosefinSans-Light.ttf') }}) format('truetype');
            }

            @font-face {
                font-family: "JosefinSans-Regular";
                src: url({{ storage_path('fonts\josefin-sans\JosefinSans-Regular.ttf') }}) format('truetype');
            }
            
            /** Khula */
            @font-face {
                font-family: "khula-regular";
                src: url({{ storage_path('fonts\khula\khula-regular.otf') }});
            }

            @font-face {
                font-family: "khula-semibold";
                src: url({{ storage_path('fonts\khula\khula-semibold.otf') }});
            }

            .text-center {
                text-align: center;
            }

            .donation-certificate-pdf {
                border: #BFB287 solid .35cm;
                height: 20.2cm;
            }

            .certificate-title {
                font-family: "JosefinSans-SemiBold";
                font-size: 63px;
                margin-top: 47.5px;
                margin-bottom: 35px;
                color: #BFB287;
            }

            #footer {
                position: relative;
                /* display: flex;
                justify-content: space-between; */
            }

            #footer .site-link {
                color: #000000;
                text-decoration: none;
                font-size: 18px;
                float: left;
                margin-top: 72.8px;
                margin-left: 105px;
            }

            #footer .authorized-signiture {
                float: right;
                position: relative;
            }

            #footer .signiture-underline {
                border-top: 1px solid #BFB287;
                height: 0;
                width: 435px;
                position: absolute;
                bottom: 47.3px;
                right: 70px;
            }

            #footer .authorized-signiture span {
                display: block;
                margin-top: 73.8px;
                margin-right: 200px;
            }
        </style>
    </head>
    <body>
        <div class="donation-certificate-pdf text-center">
            <div class="certificate-title">Lifetime Membership</div>
            <div style="font-family: JosefinSans-Light;font-size: 23px">On behalf of</div>
            <div style="font-family: JosefinSans-Regular;font-size: 32px">Rangrig Yeshe Inc</div>
            <div style="margin-top: 30px">
                <img src="{{ storage_path('img/RangrigYeshe_logo_final_gold7555_vector.jpg') }}" style="width: 4cm;">
            </div>
            <div style="font-family: khula-regular;font-size: 20px;margin-top: 15px">This certificate is awarded to</div>

            <!-- Name of a donor -->
            <div style="font-family: JosefinSans-SemiBold; color: #BFB287;font-size: 42px;margin-top:13px">{{ $donor_name }}</div>

            <div style="margin-top: 30px;line-height: 20px">
                <span style="font-size: 23.5px;display: block">In appreciation of your donation to help build</span>
                <span style="font-size: 23.5px;font-family: khula-semibold;display: block;">The Universal Peace Sanctuary</span>
            </div>

            <div id="footer">
                <a href="https://www.peacesanctuary.org/" class="site-link">www.peacesanctuary.org</a>
                <div class="authorized-signiture">
                    <div class="signiture-underline"></div>
                    <span style="font-size:18px;">Authorized Signature</span>
                </div>
            </div>
        </div>
    </body>
</html>