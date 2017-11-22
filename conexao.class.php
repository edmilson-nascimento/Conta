<?php

Class Conexao {

    private $host;
    private $username;
    private $password;
    private $dbname;
    private static $connection;

    public function __construct() {

        $this->setHost("localhost");
        $this->setUsername("root");
        $this->setPassword("1234");
        $this->setDbname("conta");

        $conn = $this->conecta();

        return $conn;
    }

    /*
     * Colocar trataivas de excecoes
     */

    private function conecta() {


        try {

            $conn = new PDO('mysql:host=' . $this->getHost() . ';dbname=' .
                    $this->getDbname(), $this->getUsername(), $this->getPassword());
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->setConnection($conn);
            
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function disconnect() {
        $this->setConn(NULL);
    }

    private function getHost() {
        return $this->host;
    }

    private function getUsername() {
        return $this->username;
    }

    private function getPassword() {
        return $this->password;
    }

    private function getDbname() {
        return $this->dbname;
    }

    private function setHost($host) {
        $this->host = $host;
    }

    private function setUsername($username) {
        $this->username = $username;
    }

    private function setPassword($password) {
        $this->password = $password;
    }

    private function setDbname($dbname) {
        $this->dbname = $dbname;
    }

    function getConnection() {
        return $this->connection;
    }

    function setConnection($connection) {
        $this->connection = $connection;
    }

}
