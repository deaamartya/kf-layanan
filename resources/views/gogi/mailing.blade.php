@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div>
            <h3>Email Templates</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Email Templates</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Email template (Basic) -->
    <table class="body-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
            <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
            <td class="container" width="600" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;"
                valign="top">
                <div class="content" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto;">
                    <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px dashed #4d79f6;"
                           bgcolor="#fff">
                        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                            <td class="content-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
                                <meta itemprop="name" content="Confirm Email" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                <table width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <tr>
                                        <td><a href="#"><img src="{{ url('assets/media/image/logo.png') }}" alt="image" style="margin-left: auto; margin-right: auto; display:block; margin-bottom: 10px; height: 30px;"></a></td>
                                    </tr>
                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; color: #bc4677; font-size: 24px; font-weight: 700; text-align: center; vertical-align: top; margin: 0; padding: 10px 0"
                                            valign="top">Welcome To Muson</td>
                                    </tr>
                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; color: #3f5db3; font-size: 14px; vertical-align: top; margin: 0; padding: 10px 10px;" valign="top">Please confirm your email address by clicking the link below.</td>
                                    </tr>
                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 10px 10px;" valign="top">We may need to send you critical information about our service and it is important that we have an accurate email address.</td>
                                    </tr>
                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" itemprop="handler" itemscope itemtype="http://schema.org/HttpActionHandler" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 10px 10px;"
                                            valign="top"><a href="#" itemprop="url" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: block; border-radius: 5px; text-transform: capitalize; background-color: #bc4677; margin: 0; border-color: #bc4677; border-style: solid; border-width: 10px 20px;">Confirm email address</a></td>
                                    </tr>
                                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; padding-top: 5px; vertical-align: top; margin: 0; text-align: right;" valign="top"><b>Muson</b> - Admin & Dashboard Template</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <!-- ./ Email template (Basic) -->

    <!-- Email template (Alert) -->
    <table class="body-wrap" style=" font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
        <tr>
            <td class="container" style="display: block !important; max-width: 600px !important; clear: both !important;" valign="top">
                <div class="content">
                    <table class="main" width="100%" cellpadding="0" cellspacing="0" style="border: 1px solid #e9e9e9;" bgcolor="#fff">
                        <tr>
                            <td style="padding: 20px; border-radius: 0;" align="center" valign="top"><img src="{{ url('assets/media/image/notification-icon.png') }}" alt="image" style="margin-left: auto; margin-right: auto; display:block;width: 60px;"></td>
                        </tr>
                        <tr>
                            <td style="color:#ffffff; background-color: #ffbb33; padding: 20px; border-radius: 0;" align="center" valign="top">Warning: You're approaching your limit. Please upgrade.</td>
                        </tr>
                        <tr>
                            <td class="content-wrap" style="padding: 20px;" valign="top">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; padding: 10px" valign="top">You have <strong style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">1 free report</strong> remaining.</td>
                                    </tr>
                                    <tr>
                                        <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; padding: 10px 10px 20px;" valign="top">Add your credit card now to upgrade your account to a premium plan to ensure you don't miss out on any reports.</td>
                                    </tr>
                                    <tr>
                                        <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; padding: 0 0 20px;" valign="top"><a href="#" class="btn-primary" style="font-size: 14px; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: block; border-radius: 5px; text-transform: capitalize; background-color: #bc4677; border-color: #bc4677; padding: 8px 0;">Upgrade my account</a></td>
                                    </tr>
                                    <tr>
                                        <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; text-align: center;" valign="top">Thanks for choosing <b>Muson</b> Admin.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
            <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
        </tr>
    </table>
    <!-- ./ Email template (Alert) -->

    <!-- Email template (Billing) -->
    <table class="body-wrap"
           style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
        <tr>
            <td valign="top"></td>
            <td class="container" width="600"
                style="display: block !important; max-width: 600px !important; clear: both !important;"
                valign="top">
                <div class="content">
                    <table class="main" width="100%" cellpadding="0" cellspacing="0"
                           style="border: 1px dashed #4d79f6;">
                        <tr>
                            <td class="content-wrap aligncenter" style="padding: 20px; background-color: #fff;"
                                align="center" valign="top">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="padding-bottom: 20px; "><a href="#"><img src="{{ url('assets/media/image/logo.png') }}" alt="image"
                                                                                            style="height: 30px; margin-left: auto; margin-right: auto; display:block;"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="content-block" style="padding: 0 0 20px;" valign="top">
                                            <h2 class="aligncenter"
                                                style="font-family: 'Helvetica Neue',Helvetica,Arial,'Lucida Grande',sans-serif;font-size: 24px; color:black; line-height: 1.2em; font-weight: 600; text-align: center;"
                                                align="center">Thanks for using <span
                                                    style="color: #bc4677; font-weight: 700;">Muson</span>.
                                            </h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="content-block aligncenter" style="padding: 0 0 20px;"
                                            align="center" valign="top">
                                            <table class="invoice" style="width: 80%;">
                                                <tr>
                                                    <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; padding: 5px 0;"
                                                        valign="top">Mannatthemes<br>Invoice #12345<br>01 Sep
                                                        2018
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 5px 0;" valign="top">
                                                        <table class="invoice-items" cellpadding="0"
                                                               cellspacing="0" style="width: 100%;">
                                                            <tr>
                                                                <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;"
                                                                    valign="top">Apple iphone X
                                                                </td>
                                                                <td class="alignright"
                                                                    style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;"
                                                                    align="right" valign="top">$ 1499.99
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;"
                                                                    valign="top">Data cable
                                                                </td>
                                                                <td class="alignright"
                                                                    style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;"
                                                                    align="right" valign="top">$ 20.00
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;"
                                                                    valign="top">Phone Cover
                                                                </td>
                                                                <td class="alignright"
                                                                    style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 1px; border-top-color: #eee; border-top-style: solid; margin: 0; padding: 10px 0;"
                                                                    align="right" valign="top">$ 40.00
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="alignright" width="80%"
                                                                    style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 2px; border-top-color: #50649c; border-top-style: solid; border-bottom-color: #50649c; border-bottom-width: 2px; border-bottom-style: solid; font-weight: 700; margin: 0; padding: 10px 0;"
                                                                    align="right" valign="top">Total
                                                                </td>
                                                                <td class="alignright"
                                                                    style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: right; border-top-width: 2px; border-top-color: #50649c; border-top-style: solid; border-bottom-color: #50649c; border-bottom-width: 2px; border-bottom-style: solid; font-weight: 700; margin: 0; padding: 10px 0;"
                                                                    align="right" valign="top">$ 1559.99
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="content-block aligncenter"
                                            style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;"
                                            align="center" valign="top"><a href="#"
                                                                           style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; color: #4d79f6; text-decoration: underline; margin: 0;">View
                                                in browser</a></td>
                                    </tr>
                                    <tr>
                                        <td class="content-block aligncenter"
                                            style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; font-size: 14px; vertical-align: top; text-align: center; margin: 0; padding: 0 0 20px;"
                                            align="center" valign="top">Muson Inc. 123 my street, And my
                                            Country
                                        </td>
                                    </tr>
                                </table>
                                <!--end table-->
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <!-- ./ Email template (Billing) -->
@endsection
