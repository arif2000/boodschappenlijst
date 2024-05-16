<?php
    class Database {
        private $conn;

        public function __construct($host, $dbname, $username, $password) {
            $dsn = "mysql:dbname=$dbname;host=$host";
            $this->conn = new PDO($dsn, $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        }

        public function query($query, $params = []) {
            $statement = $this->conn->prepare($query);
            $statement->execute($params);

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    };
?>