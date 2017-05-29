<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
		$email = 'email@yahoo.com';
		$domai = strstr($email, '@');
		echo $domain."<br>"; // prints yahoo.com
		$mail = strstr($email, 'm');
		echo $mail; // prints mailmu@yahoo.com
echo"</b>";
?>
</body>
</html>