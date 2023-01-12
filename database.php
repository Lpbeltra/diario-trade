<?php
class Database {
    private $connection;

    public function connect() {
        $dbhost = "localhost";
        $dbuser = "root";
        $db = "diario-trade";
        $connection = mysqli_connect($dbhost, $dbuser, '',$db) or die("Connect failed: %s\n". $conn -> error);

        return $connection;
    }
    public function close() {
        return $connection->close();
    }
}
?>