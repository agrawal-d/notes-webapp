<?php
session_start();
?>
<b>Account settings of
<?php
echo $_SESSION["fname"]." ".$_SESSION["lname"];

?>
</b><br><br>
<table class="table">
	<tr>
		<td>First Name</td>
		<td><?php echo $_SESSION['fname'] ?></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><?php echo $_SESSION['lname'] ?></td>
	</tr>
	<tr>
		<td>Email Id.</td>
		<td><?php echo $_SESSION['email'] ?></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><span class="text-info">Hidden</span></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>Online now</td>
	</tr>
</table>