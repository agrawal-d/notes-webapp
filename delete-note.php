<?php 
include 'mysql_values.php';
if(isset($_POST["id"])){
  	$id = $_POST['id'];
    $sql = "DELETE FROM `notes` WHERE `notes`.`id` =$id";
    if($result = mysqli_query($conn, $sql)){
    	header('Location: notes.php?message=Note was deleted successfully.');
    }else{
        header('Location: notes.php?message=Unknown error : Note could not be deleted.');
    }
}

?>