<?php
echo "<p>Your address: " . $_SERVER['REMOTE_ADDR'] . "<p>"; 

function logined()
{
	return "<p>Here your messages!<br></p>";
}
function not_logined()
{
	return "
	<form id=\"login\" method=\"POST\">
	<input type=\"text\" name=\"auth_key\">
<input type=\"button\" name=\"submit\" value = \"ok\">
	</form>	
	";
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>vk-web</title>
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
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


<script type="text/javascript">
$(document).ready(function() 
{
    $('#login').submit(function(e) 
    {
        e.preventDefault();
        $.ajax
        ({
            type: "POST",
            url: 'login.cgi',
            data: $(this).serialize(),
            success: function(res) 
            {
                alert("ok");
            }
        });
     });
});
</script>

	
</body>
</html>




