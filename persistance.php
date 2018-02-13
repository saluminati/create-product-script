<?php
  include ('db-config.php');

  class Persistance
  {
    private $mysqli;

    public function create_product($product){

      $query = "INSERT into products (id, name, description, price) VALUES
      (NULL, '$product->name','$product->description','$product->price')";

      $this->open_connection();
      if ($this->mysqli->query($query) === FALSE) {
        echo 'Error: unable to create product';
        exit;
      }
      $this->close_connection();
    }

    private function open_connection(){
      $this->mysqli = new mysqli(DBHOST, DBUSER, DBPWD, DBNAME);
      if ($this->mysqli->connect_errno) {
        echo 'Error: failed to connect to the database';
        exit;
      }

    }

    private function close_connection(){
      $this->mysqli->close();
    }

  }
?>
