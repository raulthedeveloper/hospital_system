<!-- uses model to create and routes to dashboard if data is good or routes back to register -->


<?php 
include '../model/register_user.php';

var_dump($_POST) . "<br>";

$new_user = new Register_User($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['password']);

$new_user->add_to_db();




echo "Location: http://" . $_SERVER[HTTP_HOST] ."/view/dashboard.php";



//if exists or form fields not filled out

//header("Location: http://" . $_SERVER[HTTP_HOST] ."/view/register.php");
// die();

//else 
// header("Location: http://" . $_SERVER[HTTP_HOST] ."/view/dashboard.php");
// die();
?>



