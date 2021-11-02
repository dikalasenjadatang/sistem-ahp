<?php
class Config {
  private $host = "localhost";
  private $db_name = "ahpds";
  private $username = "root";
  private $password = "4kuS4y4ngN4nd4";
  public $conn;

  public function getConnection() {
    $this->conn = null;
    try {
      $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
    } catch (PDOException $exception) {
      echo "Connection error: " . $exception->getMessage();
    }
    return $this->conn;
  }
}
