
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{$mail_title}}</title>
</head>
<body style="margin:0px; background: #f8f8f8; ">
<div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
    <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
            <tbody>
            <tr>
                <td style="vertical-align: top; padding-bottom:30px;" align="center"><a href="{{url('/')}}" target="_blank"><img src="{{url('/')}}/plugins/images/eliteadmin-logo-dark.png" style="border:none"><br/>
                        <img src="{{url('/')}}/plugins/images/eliteadmin-text-dark.png" style="border:none"></a> </td>
            </tr>
            </tbody>
        </table>
        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
            <tbody>
            <tr>
                <td style="background:#fb9678; padding:20px; color:#fff; text-align:center;">{{$mail_desc}}</td>
            </tr>
            </tbody>
        </table>
        <div style="padding: 40px; background: #fff;">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                <tbody>
                <tr>
                    <td style="border-bottom:1px solid #f6f6f6;"><h1 style="font-size:14px; font-family:arial; margin:0px; font-weight:bold;">{{$mail_dear}}</h1>
                        <h1 style="margin:0;font-weight:400;font-size:28px;color:#1faece;line-height:34px">{{$mail_welcome}}</h1>
                    </td>
                </tr>
                <tr>
                    <td style="padding:10px 0 30px 0;"><p>{{$mail_body}}</p>
                        <p>{{$mail_expired_text}} <b>{{$mail_expired_date}}</b></p>
                        <center>
                            <a target="_blank" href="{{$mail_button_link}}" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #00c0c8; border-radius: 60px; text-decoration:none;">{{$mail_button_text}}</a>
                        </center>
                        <b>{{$mail_thanks}}</b> </td>
                </tr>
                <tr>
                    <td  style="border-top:1px solid #f6f6f6; padding-top:20px; color:#777">{{$mail_notes}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>