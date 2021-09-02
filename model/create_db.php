<?php

include "start_db.php";






// Create database
function createDatabase(){
  include "start_db.php";
  $sql = "CREATE DATABASE IF Not Exists hospital_system";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();
}


// Finish improving auto table creation still broken needs to check if table exists
function createUserTable(){
  include "start_db.php";

  $dbname = "hospital_system";



 // Select 1 from table_name will return false if the table does not exist.
$val = mysql_query('select 1 from `Users` LIMIT 1');

if($val !== FALSE)
{
   echo 'table exists';
}
else
{
  echo 'new table created';
    // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
    // sql to create table
    $sql = "CREATE TABLE Users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    user_name VARCHAR(30) NOT NULL,
    password VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table Users created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
}



}


createDatabase();
// createUserTable();


?>