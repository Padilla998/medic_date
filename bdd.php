<?php
try
{
	$bdd = new PDO('mysql:host=35.222.8.186;dbname=calendar;charset=utf8', 'root', '132546');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
