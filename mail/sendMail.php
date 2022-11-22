<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8",true);
include('PHPMailer.php');
include('Exception.php');
include('SMTP.php');
include('OAuth.php');
include('POP3.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];
// $services = $_POST['services'];        // Services checkbox values

$result=false;
try{
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'm.athulchandran@gmail.com';                 // SMTP username
    $mail->Password = 'ATHULCHANDRAN@googl123';                          // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('m.athulchandran@gmail.com', 'abcd Website');
    $mail->addAddress('athul8246athu@gmail.com','abcd buzz');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Inquiry Letter From Website';
    $mail->Body    ="<table style='border-collapse:separate;width:100%;background:linear-gradient(45deg, #dcdcdc, #ececec);'>
                       <tr>
                          <td>&nbsp;</td>
                          <td style='display:block;margin:0 auto!important;max-width:200px!important;padding: 15px 0 15px;'>
                             <div style='box-sizing:border-box;display : block;text-align:center;'>
                                <img src='https://test.sanesquare.com/img/sanesquare.png' alt='Logo' width='100%' height='auto' style='max-width:100%;'/>
                             </div>
                          </td>
                          <td>&nbsp;</td>
                       </tr>
                     </table>
                    <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse :separate;background:linear-gradient(45deg, #002d3e, #1a5375);'>
                       <tr>
                          <td style='font-family:sans-serif;font-size: 14px;vertical-align: top;background:linear-gradient(to top, #d3d3d4, #dcdcdc);height: 100px;width: 25px;margin: 0px;float: left;'>&nbsp;</td>
                          <td style='width:100%;font-family: sans-serif; font-size: 14px;vertical-align: top;'>
                             <div style='margin: 0 auto;max-width: 100%;background: #fff;box-shadow: 0 30px 60px -12px rgb(1 166 209 / 10%), 0 18px 36px -18px rgb(0 0 0 / 0%), 0 -12px 36px -8px rgb(0 0 0 / 3%), 0 1px 23px #0cb9c71c;display : block;'>
                                <table role='presentation' style='border-collapse:separate;width:100%;background:#ffffff;box-shadow: 0px 0px 5px 0px #0000006b;'>
                                   <tr>
                                      <td style='font-family:sans-serif;font-size: 14px;vertical-align: top;box-sizing:border-box; padding: 20px 8px;'>
                                         <table role='presentation' border='0' cellpadding='0' cellspacing='0' style='border-collapse : separate;width : 100%;'>
                                            <tr>
                                               <td style='font-family:sans-serif;font-size: 14px;vertical-align: top;box-sizing:border-box; padding: 20px 8px;'>
                                                  <table role='presentation' border='0' cellpadding='0' cellspacing='0' style='border-collapse : separate;width : 100%;'>
                                                     <tr>
                                                        <td style='font-family:sans-serif;font-size: 14px;vertical-align: top;'  colspan='3'>
                                                           <h4 style='color : #000000;font-family : sans-serif;line-height : 1.4;margin : 0;letter-spacing : 0.5px;margin-bottom : 15px;font-size : initial;'>Greetings,</h4>
                                                           <p style='font-family : sans-serif;font-weight : normal;margin : 0;margin-bottom : 15px;color : #464646;font-size : smaller;letter-spacing : 0.6px;'>This mail is regarding to the Enquiry of consultation from Mr./Mrs./Ms. " . $name . ". You can contact the client from the below resources.<br/><br/>Mobile&nbsp; : <a href='tel:+91" . $mobile . "'> " . $mobile . "</a><br/>Email &nbsp;&nbsp; : <a href='mailto:" . $email . "'>" . $email . "</a><br/></p>
                                                           <p style='font-family : sans-serif;font-weight : normal;margin : 0;margin-bottom : 15px;color : #464646;font-size : smaller;letter-spacing : 0.6px;'><b>Here is the Message from client:</b><br/><i>". $message ."</i></p>
                                                           <p style='font-family : sans-serif;font-weight : normal;margin : 0;margin-bottom : 15px;color : #464646;font-size : smaller;letter-spacing : 0.6px;'><b>Selected Services for consultation:</b><br/><i>". $services ."</i></p>
                                                        </td>
                                                     </tr>
                                                  </table>
                                               </td>
                                            </tr>
                                         </table>
                                      </td>
                                   </tr>
                                </table>
                             </div>
                          </td>
                          <td style='font-family:sans-serif;font-size: 14px;vertical-align: top;background:linear-gradient(to top, #d4d4d4, #ebebeb);height: 100px; width: 25px;margin:0px;float:right;'>&nbsp;</td>
                       </tr>
                       <tr>
                          <td style='font-family:sans-serif;font-size: 14px;vertical-align: top;'>&nbsp;</td>
                          <td style='max-width : calc(100% - 40px);padding : 10px;font-family:sans-serif;font-size: 14px;vertical-align: top;'>
                             <div class='footer'>
                                <table role='presentation' border='0' cellpadding='0' cellspacing='0'  style='padding : 0 15px;border-collapse : separate;width : 100%;'>
                                   <tr>
                                      <td style='font-family:sans-serif;font-size: 14px;vertical-align: top;text-align: center;padding-bottom : 10px;padding-top : 10px;' >
                                      </td>
                                   </tr>
                                   <tr>
                                      <td style='font-family:sans-serif;font-size: smaller;vertical-align: top;padding-bottom: 10px;padding-top : 10px;text-align:center;    letter-spacing: 0.6px;color: #7b7b7b !important;' class='content-block powered-by'>
                                         Copyright © 2021 <b>Sanesquare.com</b>.All right reserved.
                                      </td>
                                   </tr>
                                </table>
                             </div>
                          </td>
                          <td style='font-family:sans-serif;font-size: 14px;vertical-align: top;'>&nbsp;</td>
                       </tr>
                    </table>";

   $result= $mail->send();
}catch(Exception $e){
	$result = $e -> getMessage();
}
echo $result;
?>
 