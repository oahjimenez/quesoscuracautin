<?php
require_once('./wp-config.php'); 
if(isset($_POST['send_email'])) {
    
//user posted variables
  $email = sanitize_email($_POST['email']);
  $telephone = $_POST['telephone'];
  if($telephone == '') $telephone=" **No se especificó número de contacto**\r\n";
  $message = "Recibiste el siguiente mensaje de " . $email . " desde sitio web www.quesoscuracautin.cl:\r\n\r\n**** Mensaje:\r\n\r\n" . 
			$_POST['message'] . "\r\n\r\nNúmero de contacto: " . $telephone . "\r\n\r\n**** Fin del Mensaje:\r\nwww.quesoscuracautin.cl";

//php mailer variables
  $to =  [ "carlos.mardonesm14@gmail.com","gmariamardones@gmail.com", sanitize_email(get_option('admin_email')) ];
  $subject = "Buzón Quesos Curacautin";
  $headers = 'De: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";	
	
//Here put your Validation and send mail
//$sent = wp_mail($to, $subject, strip_tags($message), $headers);
$sent = wp_mail($to, $subject, strip_tags($message), $headers);
 }
exit();
?> 