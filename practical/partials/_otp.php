<?php 
  if(isset($_POST['otpReq']))
  { 
          $name = $_POST['name'];
          $email = $_POST['email'];
          $random = rand(10000,999999);

          $subject = "STGB: RMS Registration OTP";
          $body = 'Hii '.$name.' your one time otp is '.$random;
          $headers = "From: dklyricsking@gmail.com";
          
        //   echo $email.$name.$subject.$body.$headers;

          if (mail($email, $subject, $body, $headers)) {
            //   echo "Email successfully sent to $email...";
              echo $random;
          } else {
              echo "Email sending failed...";
          }
    }
?>