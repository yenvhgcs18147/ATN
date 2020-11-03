<?php 
    function getDB() {
        return $db = pg_connect("host=ec2-34-200-72-77.compute-1.amazonaws.com
                          dbname=d58oke6ofk8nhk
                          port=5432
                          user=gwvgokvrzcsmjo
                          password=762220269f462ac464b587649743b3b1b95a91b112f570e565702a8bfe8181ed")
                          or die("Connection failed!");
    }

    header('Location:indexhtml.php');
 ?>
