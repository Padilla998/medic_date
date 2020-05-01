<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=calendar;charset=utf8', 'root', 'usbw');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
