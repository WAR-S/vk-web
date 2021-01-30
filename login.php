<?php
if(!isset($_SERVER['auth_key']))
{
	$_SERVER['auth_key'] = $_POST['key'];
} 
 ?>