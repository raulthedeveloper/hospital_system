<?php

include "start_db.php";


class Register_User {
  public $first_name;
  public $last_name;
  public $user_name;
  public $password;

  function __construct($first_name,$last_name,$user_name,$password) {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->user_name = $user_name;
    $this->password = $password;
  }
  function add_to_db() {
    include "start_db.php";
    $sql = "INSERT INTO Users(first_name, last_name, user_name, password)
    VALUES ('{$this->first_name}', '{$this->last_name}', '{$this->user_name}', '{$this->password}')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
      }

  function test(){
    echo "<br>". $this->first_name . $this->last_name;
  }
}


?>