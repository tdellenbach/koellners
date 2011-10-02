<?php
 require_once 'Mail.php';
 
 $from = "<aov_ghostdog@gmx.net>";
 $to = "<tobias.dellenbach@gmx.ch>";
 
 //@TODO
 //0. Captcha erruieren und einbauen vor senden
 //1. subject und body noch mit richtigem Inhalt vom Vorhergehenden Formular befuellen
 //2. Anzeige eines dankes
 //3. Automatische (5s spaeter) wieder zurueck zu "einer seite"
 
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 //$host = "ssl://mail.gmx.net";
 $host = "mail.gmx.net";
// $port = "465"; //25 465
 $username = "aov_ghostdog@gmx.net";
 $password = ".td147865";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
//     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password,
     'debug' => true));
//     'localhost' => "160.85.147.74"));
 
// $mail = $smtp->send($to, $headers, $body);
 
//auskommentiert weil noch nicht als r&uuml;ckmeldung gedacht funktioniert aber alles bis hierhin
// if (PEAR::isError($mail)) {
//   echo("<p>" . $mail->getMessage() . "</p>");
//  } else {
   echo("<p>Message successfully sent!</p>");
//  }
 ?>