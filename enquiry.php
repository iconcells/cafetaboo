<?php
$toAdmin ='info@cafetaboo.net';

$subjectAdmin = "Customer SignUp";

$UserSubject = "Greetings from Cafe Taboo Team";
$UserEmail=$_POST['email'];


$UserMessage = "";

$UserMessage .= "Dear User,\n\r";
$UserMessage .= "Thank you for your enquiry. CafeTaboo's experienced advisor will get back to reply to you shortly.\n\r";

$UserMessage .= "Note : This is a auto generated E-mail. please do not reply.\n\r ";
$UserMessage .= "Xplotica Team";

$body = "";
$body.= '<html><body><p>Dear Team,</p>';
$body.= "A new User <B>".$_POST['name']."</B> has enquired , please get in touch with him\her on his\her email ->" .$_POST['email'] . " and Conact Number: ->".$_POST['phone']."..";
$body.= '<p> Please find below details of enquired User </p>';


  $body.="<table width='500' bgcolor='#FFFFFF' border='0' cellspacing='1' cellpadding='6'>";
  $body.="<tr bgcolor='#666666' style='color:#FFFFFF' >";
  $body.="<th> - </th>";
  $body.="<th>User Details</th>";
  $body.="</tr>";

 
	$body.="<tr bgcolor='#E4E4E4'>";
	$body.="<td width='100'>Name</td>";
	$body.="<td> ". $_POST['name'] ."</td></tr>";
		
	$body.="<tr bgcolor='#E4E4E4'>";
	$body.="<td width='100'>Phone No.</td>";
	$body.="<td> ". $_POST['phone'] ."</td></tr>";
	
	$body.="<tr bgcolor='#E4E4E4'>";	
	$body.="<td width='100'>E-mail</td>";
	$body.="<td> ". $_POST['mail'] ."</td></tr>";
	
	$body.="<tr bgcolor='#E4E4E4'>";
	$body.="<td width='100'>Message</td>";
	$body.="<td> ". $_POST['message'] ."</td></tr>";
  
  
  $body.="</table>";
  $body.="</body>";
  $body.="</html>";



// To send HTML mail, the Content-type header must be set
$Adminheaders = 'MIME-Version: 1.0' . "\r\n";
$Adminheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$Adminheaders .= 'From: CafeTaboo Team<post@cafetaboo.net>' . "\r\n";

$Userheaders .= 'From: CafeTaboo Team<post@cafetaboo.net>' . "\r\n";


// Mail it
$sendMailtoAdmin=mail($toAdmin, $subjectAdmin , $body , $Adminheaders );
$sendMailtoUser=mail($UserEmail, $UserSubject , $UserMessage , $Userheaders);


$URL="index.html";
header ("Location: $URL");

?>



