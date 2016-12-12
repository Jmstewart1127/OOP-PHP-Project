<?php

require_once 'new_config.php';



class Database {

  public $conn;   //connection variable

  function __construct() {
    $this->open_db_connection();
  }

  public function open_db_connection() {                                 //Methods Start HERE.
    $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($this->conn->connect_errno) {
      die("connection failed" . $this->conn->connect_error);
    }
  }

  public function query($sql) {
    $result = $this->conn->query($sql);
    $this->confirm_query($result);
    if (!$result) {
      die("query failed");
    }
    return $result;
  }

  private function confirm_query($result) {
    if (!$result) {
      die("query failed" . $this->conn->error);
    }
  }

  public function escape_string($string) {
    $escaped_string = $this->conn->real_escape_string($string);
    return $escaped_string;
  }


  public function the_insert_id() {
    return $this->conn->insert_id;
  }


}

$database = new Database();









 ?>
