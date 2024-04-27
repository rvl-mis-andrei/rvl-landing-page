<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <style>
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }

        /* Custom styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f9ff;
            margin: 0;
            padding: 0;
        }

        .email-wrapper {
            width: 100%;
            margin: 0;
            padding: 20px;
            background-color: #f4f9ff;
        }

        .email-content {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .email-header{
            text-align: center;
        }
        .email-footer {
            background-color: #f4f9ff;
            padding: 20px;
            text-align: center;
        }

        .email-header img {
            max-width: 100%;
        }

        .email-body {
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            margin-bottom: 15px;
        }

        ul {
            margin-left:0px;
            font-size: 16px;
            margin-bottom: 20px;
            list-style: none;
            padding-left:10px;
        }

        li {
            margin-bottom: 5px;
        }

        .email-footer {
            font-size: 12px;
            color: #999;
        }

        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <table class="email-wrapper" role="presentation" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td align="center">
                <table class="email-content" role="presentation" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td class="email-header">
                            <img width="250" height="160" src="https://www.rvlmovers.com/customer/logo/rvl_logo.png" class="img-fluid" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td class="email-body">
                            <h3>Hello {{ $fullname ?? 'Customer' }},</h3>
                            <p>
                                This is to confirm that we have successfully received your inquiry to us.
                                Our team will get back to you as we can.
                            </p>
                            <p>Thanks for considering RVL Movers Corporation. We'll be in touch shortly!</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="email-footer">
                            © {{ date('Y') }} RVL Movers Corporation. All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
