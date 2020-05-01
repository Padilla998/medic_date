<?php
try
{
	$bdd = new PDO('mysql:host=35.237.47.250;dbname=medicdate;charset=utf8', 'admin', 'usbw');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
