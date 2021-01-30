<?php
echo "<p>Your address: " . $_SERVER['REMOTE_ADDR'] . "<p>"; 
?>
<?php
function logined()
{
	  ?>
	  Your token: <?php $_SERVER['auth_key']?> <br> <p>Here your messages!<br></p>
	  <form id="login">
	  	<input type="submit" name="submit">
	  </form>
	  <?php
}
?>
<?php
function not_logined()
{ 
	?>
	<form action="/" method="POST">
	<input type="text" name="key">
<input type="submit" name="submit" value = "ok">
	</form>

	<?php
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
if(!isset($_SERVER['auth_key']))
{
	if(!isset($_POST['key']))
	{
		not_logined();
	}
	else
	{
		$_SERVER['auth_key'] = $_POST['key'];
		logined();
	}
}
else
{
	logined();
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
            url: 'index.php',
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




