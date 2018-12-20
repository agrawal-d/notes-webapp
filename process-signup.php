<?php 
include 'mysql_values.php';
$email = $_GET["email"];
$password = md5($_GET["password"]);
$fname = $_GET["fname"];
$lname=$_GET["lname"];
$sql = "INSERT INTO `users` (`id`, `email`, `fname`, `lname`, `account_status`, `password`) VALUES (NULL, '$email', '$fname', '$lname', '0', '$password');";

$sql2 = "INSERT INTO `notes` (`id`, `note`, `date`, `tag`, `color`, `title`, `email`) VALUES (NULL, 'Hello.Welcome to notes - your new note taking application. This is a sample note, to fill up space. you can delete it anytime you want!\r\n\r\nWhat is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2018-12-05', 'Special', 'Yellow', 'Welcome', '$email');";
$sql3 = "INSERT INTO `notes` (`id`, `note`, `date`, `tag`, `color`, `title`, `email`) VALUES (NULL, 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2018-12-05', 'Another Category', 'Green', 'My Scribble', '$email');";
$sql4 = "INSERT INTO `notes` (`id`, `note`, `date`, `tag`, `color`, `title`, `email`) VALUES (NULL, 'Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2018-12-05', 'Grocery', 'Pink', 'Fun Fact', '$email');";
if($result = mysqli_query($conn, $sql)){
	$result2 = mysqli_query($conn, $sql2);
	$result3= mysqli_query($conn, $sql3);
	$result4= mysqli_query($conn, $sql4);
}else{
	die("Fuck you");
}


?>


<h5 class="text-center text-primary">Please check your inbox ( <?php echo $_GET['email'] ; ?> ) for account activation steps.</h5>
<hr>

<p class="text-center text-info">A hereisdx creation.</p>
