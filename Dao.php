<?php

require_once KLogger.php;

class Dao {

    public $dsn = 'mysql:dbname=collaborate;host=127.0.0.1';
    public $user = "root";
    public $password = "workSQL88Mj";
    protected $logger;

    private function__construct {
        $this->logger = new KLogger("log.txt", KLogger::DEBUG);
    }

    private function getConnection(){
        try {
            $connection = new PDO($this->dsn, $this->user, $this->password);
            $this->logger->LogDebig("Got a connection");
        } catch(PDOException $e){
            $error = 'Connection failed' . $e->getMessage();
            $this->logger->LogError($error);
        }
        
        return $connection;

    }

    public function userExist ($email, $password) {
        $connection = $this->getConnection();
        try {

            $q = $connection->prepare("select count(*) as total from users where email = :email and password = :password");
            $q->bindParam(":email", $email);
            $q->bindParam(":password", $password);
            $q->execute();
            $row = $q->fetch();

            if ($row['total'] == 1) {
               $this->logger->LogInfo("user found!" . print_r($row,1));
               return true;
            } else {
               return false;
            }

        } catch(Exception $e) {
          echo print_r($e,1);
          exit;
        }

    }

}


?>