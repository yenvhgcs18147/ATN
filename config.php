<?php

define('DB_SERVER', 'ec2-34-200-72-77.compute-1.amazonaws.com');
define('DB_USERNAME', 'gwvgokvrzcsmjo');
define('DB_PASSWORD', '762220269f462ac464b587649743b3b1b95a91b112f570e565702a8bfe8181ed');
define('DB_NAME', 'd58oke6ofk8nhk');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
