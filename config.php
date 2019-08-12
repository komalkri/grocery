<?php
		$dbhost='localhost';
		$dbuser='root';
		$dbpass='';
		$dbname='grocery';
		$conn=mysql_connect($dbhost,$dbuser,$dbpass)or die(mysql_error());
		mysql_select_db($dbname)or die(mysql_error());
?>		