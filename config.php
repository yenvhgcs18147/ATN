<?php 
    function getDB() {
        return $db = pg_connect("host=ec2-34-200-72-77.compute-1.amazonaws.com
                          dbname=d58oke6ofk8nhk
                          port=5432
                          user=gwvgokvrzcsmjo
                          password=762220269f462ac464b587649743b3b1b95a91b112f570e565702a8bfe8181ed")
                          or die("Connection failed!");
    }

    switch($db) {
        case '/':
            require __DIR__ . 'index.php';
            break;
        default:
            http_response_code(404);
            require __DIR__ . '/views/404.php';
            break;
    }
    header('Location:indexhtml.php');
 ?>
