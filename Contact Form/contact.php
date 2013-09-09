<html>
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="Test.io" content="Contact Form">
  <meta name="Mobin" content="Contact Box">

  <link rel="stylesheet" href="assets/css/style.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<?php
error_reporting(E_STRICT);
require_once "phpmailer/class.phpmailer.php";

$mail             = new PHPMailer();

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$address = "bghswildebeest@gmail.com";

$mail->IsSMTP();
$mail->SMTPDebug  = 0;
$mail->SMTPAuth   = true;
$mail->SMTPSecure = "ssl";
$mail->Host       = "smtp.gmail.com";
$mail->Port       = 465;
$mail->Username   = "bghswildebeest1@gmail.com";
$mail->Password   = "loganq2689";
$mail->SetFrom($email, $name);
$mail->AddReplyTo($email, $name);
$mail->AddAddress($address, "MF And Fran");
$mail->Subject    = $name;
$mail->MsgHTML($message);

if(!$mail->Send()) {
	echo'
	<script type="text/javascript">
	alert("There seems to be a problem. Please check your information and try again.");
	history.back();
	</script>
	';
    } else {
	echo'
	<script type="text/javascript">
	alert("Thank you for your submision. We will contact you shortly.");
	location = "index.html";
	</script>
	';
	}

?>
</body>
</html>