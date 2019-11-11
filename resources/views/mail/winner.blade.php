<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$model['event']['name']}} | GMI Events</title>

</head>
<body style="margin: 0; padding: 20px 0px 20px 0px; font-size: 16px; background-color: #F9F9F9">
    
        <table align="center" border="1px" bordercolor="#CCCCCC" cellspacing="0" width="800px" style="border-collapse: collapse; background-color: #FFFFFF;">
            <tbody>
                <tr>
                    <td style="padding: 0px 40px 0px 40px">

                        <table align="center" style="border-collapse: collapse;">
                            <tbody>
                            <tr>
                                <td colspan="2" style="vertical-align: middle; text-align: right; border-bottom: 1px solid #CCCCCC; padding: 24px 0px 24px 0px">
                                    <img src="{{ asset('static/logo/GMI-emblem.png') }}" height="60px" width="60px"/>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" style="padding: 40px 0px 20px 0px">
                                <p style="font-family: Arial, Helvetica, sans-serif; color: #289DCC; font-size: 36px; font-weight: 600; text-align: center; margin: 0px;">Congratulations {{$model['player']['full_name']}}!</p>
								    <p style="font-family: Arial, Helvetica, sans-serif; color: #289DCC; font-size: 18px; text-align: center; margin: 0px;">You are one of the winners in GMI Raffle Draw!</p>
                                </td>
                            </tr>

                            <tr>
                                <td align="left" colspan="1">
                                    <p style="color: #242424; font-size: 16px; font-weight: 600; margin: 12px 0px 4px 0px; font-family: Helvetica, Arial, sans-serif;">Event:</p>
                                </td>
                                <td align="left" colspan="1">
                                    <p style="color: #242424; font-size: 16px; font-weight: 300; margin: 12px 0px 4px 0px; font-family: Helvetica, Arial, sans-serif;">
                                    {{$model['event']['name']}}
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td align="left" colspan="1">
                                    <p style="color: #242424; font-size: 16px; font-weight: 600; margin: 12px 0px 4px 0px; font-family: Helvetica, Arial, sans-serif;">Draw Date:</p>
                                </td>
                                <td align="left" colspan="1">
                                    <p style="color: #242424; font-size: 16px; font-weight: 300; margin: 12px 0px 4px 0px; font-family: Helvetica, Arial, sans-serif;">
                                    {{now()->format('F d, Y h:iA')}}
                                    </p>
                                </td>
                            </tr>
                            
                            <tr>
                                <td align="left" colspan="1">
                                    <p style="color: #242424; font-size: 16px; font-weight: 600; margin: 12px 0px 4px 0px; font-family: Helvetica, Arial, sans-serif;">Prize:</p>
                                </td>
                                <td align="left" colspan="1">
                                    <p style="color: #242424; font-size: 16px; font-weight: 300; margin: 12px 0px 4px 0px; font-family: Helvetica, Arial, sans-serif;">
                                    {{$model['event']['prize'] ?: 'TBA'}}
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" style="color: #242424; font-size: 16px; font-weight: 300; margin: 18px 0px 4px 0px; font-weight: 300; font-family: Helvetica, Arial, sans-serif; text-align: center">
                                    <p>To claim your prize, message us on our <a href="https://www.facebook.com/GigaMare/">facebook page</a>.</p>
                                </td>
                            </tr>

                            <!-- Footer -->

                            <tr>
                                    <td colspan="2" align="center" style="padding: 40px 0px 40px 0px; border-top: 1px solid #cccccc;">
                                        <table align="center" style="border-collapse: collapse;">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: #666666; font-weight: 500; text-align: center; margin: 0px; padding: 0px 0px 4px 0px;">
                                                            Copyright © 2019 Gigamare Inc, All rights reserved
                                                        </p>
                                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #666666; font-weight: 500; text-align: center; margin: 0px; padding: 0px 0px 4px 0px;">
                                                            Bldg. 2082/2083 Corregidor Highway, Naval Magazine Area, SBFZ, 2222, Philippines.
                                                        </p>
                                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #666666; font-weight: 500; text-align: center; margin: 0px; padding: 0px 0px 4px 0px;">
                                                            Tel. Nos. +63 47 252-6402 / 6483 | Fax: +63 47 252 6482
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

</body>
</html>
