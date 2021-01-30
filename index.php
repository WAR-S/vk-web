<?php
echo "<p>Your address: " . $_SERVER['REMOTE_ADDR'] . "<p>"; 

function logined()
{
	return "<p>Here your messages!<br></p>";
}
function not_logined()
{
	return "
	<form action=\"script.cgi\" method=\"POST\">
	<input type=\"text\" name=\"auth_key\">
	<input type=\"button\" name=\"submit\" text = \"ok\">
	</form>
	";
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>vk-web</title>
</head>
<body>

		<?php
if(!isset($_POST['auth_key']))
{
echo not_logined();
}
else
{
	echo logined();
}
?>


	
</body>
</html>




