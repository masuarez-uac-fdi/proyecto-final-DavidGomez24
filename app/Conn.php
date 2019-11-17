<?php

  /**
   *
   */
  class Conn
  {
    private $servername = "localhost";
    private $username = "root";
    private $password = "natnatla";
    private $dbname = "Game";
    private $conn;

    public function getConnection()
    {
      $this->conn = new mysqli($this->servername, $this-> username, $this->password, $this->dbname);
      // Check connection
      if ($this->conn->connect_error) {
        return "Connection failed: " . $this->conn->connect_error;
          //die("Connection failed: " . $conn->connect_error);
      }else{
        return $this->conn;
      }
    }
# -------------- End Code ------------------
  }
 ?>
