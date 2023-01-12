<!DOCTYPE html>
<html lang="fa">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>send contact notification from developerband</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <style type="text/css">

        /**
   * Avoid browser level font resizing.
   * 1. Windows Mobile
   * 2. iOS / OSX
   */
        body,
        table,
        td,
        a {
            -ms-text-size-adjust: 100%;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
        }

        /**
   * Remove extra space added to tables and cells in Outlook.
   */
        table,
        td {
            mso-table-rspace: 0pt;
            mso-table-lspace: 0pt;
        }

        /**
   * Better fluid images in Internet Explorer.
   */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /**
   * Remove blue links for iOS devices.
   */
        a[x-apple-data-detectors] {
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            color: inherit !important;
            text-decoration: none !important;
        }

        /**
   * Fix centering issues in Android 4.4.
   */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }

        body {
            width: 100% !important;
            height: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        /**
   * Collapse table borders to avoid space between cells.
   */
        table {
            border-collapse: collapse !important;
        }

        a {
            color: #1a82e2;
        }

        hr.solid {
            border-top: 3px solid #fbfbfb;
        }

        img {
            height: auto;
            line-height: 100%;
            text-decoration: none;
            border: 0;
            outline: none;
        }
    </style>

</head>

<body style="background-color: #e9ecef;color: black !important;">

<!-- start preheader -->
<div class="preheader"
     style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">

    <span>{{$admin->fullName}}</span>
    عزیز،


</div>
<!-- end preheader -->

<!-- start body -->
<table border="0" cellpadding="0" style=" direction: rtl!important;" cellspacing="0" width="100%">

    <!-- start logo -->
    <tr>
        <td align="center" bgcolor="#e9ecef">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td align="center" valign="top" style="padding: 36px 24px;">
                        <a href="{{route('home')}}" target="_blank" style="display: inline-block;">
                            <img src="{{asset('assets/frontend/images/DEVELOPERBAND.png')}}" alt="Logo" border="0"
                                 width="68" style="display: block; width: 100px; max-width: 100px; min-width: 68px;">
                        </a>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- end logo -->

    <!-- start hero -->
    <tr>
        <td align="center" bgcolor="#e9ecef">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; direction: rtl">
                <tr>
                    <td align="left" bgcolor="#ffffff"
                        style="padding: 12px; border-top: 3px solid #d4dadf;">
                        <h1
                            style="margin: 0; font-size: 28px; font-weight: bolder; line-height: 48px;direction: rtl;color:#181c32;  text-align:center;">
                            {{$admin->fullName}} عزیز </h1>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- end hero -->

    <!-- start copy block -->
    <tr>
        <td align="center" bgcolor="#e9ecef">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; ">

                <!-- start copy -->
                <tr>
                    <td align="center" bgcolor="#ffffff"
                        style="padding: 5px 24px; font-size: 16px; line-height: 30px; ">
                        <p style="margin: 0;">
                        <div style="color:black!important ; text-align: justify;font-weight: bold;">

                            تماسی از طرف
                            <span id="full_name">{{$contact->fullName}}</span>

                            <br>

                            با ایمیل
                            <span id="email">{{$contact->email}}</span>

                            <br>

                            با تلفن همراه
                            <span id="mobile">{{$contact->mobile}}</span>

                            <br>

                            با موضوع
                            <span id="subject">{{$contact->subject}}</span>

                            <br>

                            <span
                                id="message">در وبسایت دولوپربند ثبت شد لطفا برای مشاهده پیام به پنل مدیریت وارد شوید</span>

                        </div>

                    </td>
                </tr>
                <!-- end copy -->


                <!-- start copy -->
                <tr>
                    <td align="left" bgcolor="#ffffff"
                        style="padding: 5px 24px 24px 24px; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
                        <hr class="solid">
                        <p style="margin: 0;color: black;font-weight: bold">با آرزوی موفقیت</p>
                    </td>
                </tr>
                <!-- end copy -->

            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- end copy block -->

    <!-- start footer -->
    <tr>
        <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
                <tr>
                    <td align="center" valign="top" width="600">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

                <!-- start permission -->
                <tr>
                    <td align="center" bgcolor="#e9ecef"
                        style="padding: 12px 24px;  font-size: 14px; line-height: 20px; color: #666;">
                        <p style="margin: 0;color: black;font-weight: bold">
                            دولوپربند || DEVELOPERBAND
                        </p>
                    </td>
                </tr>
                <!-- end permission -->

                <!-- start unsubscribe -->
                <tr>
                    <td align="center" bgcolor="#e9ecef"
                        style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
                        <p style="margin: 0;">

                            .</p>
                    </td>
                </tr>
                <!-- end unsubscribe -->

            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <!-- end footer -->

</table>
<!-- end body -->

</body>

</html>
