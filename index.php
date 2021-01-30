<?php
function logined()
{
	return "<p>Here your messages!<br></p>";
}
function not_logined()
{
	return "
	<input type=\"text\" name=\"auth_key\">
	<input type=\"button\" name=\"submit\" text = \"ok\">
	";
}
echo "<p>Your address: " . $_SERVER['HTTP_REMOTE_ADDR'] . "<p>";
if(!isset($_POST['']))
{
echo not_logined();
}
else
{
	echo logined();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>vk-web</title>
</head>
<body>
	
</body>
</html>
