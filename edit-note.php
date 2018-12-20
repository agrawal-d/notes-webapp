<?php include 'mysql_values.php';
$id=$_GET["id"];
$query = "SELECT * FROM `notes` WHERE `id` = $id";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$title = $row["title"];
		$note = $row["note"];
		$tag = $row["tag"];
		$date = $row["date"];
	}
}
else{
	echo "Error\n";
}
?>
<form method="POST">
<div class="form-group">
  <div class="form-group">
  	<label>Title</label>
    <input required name="title" type="text" class="form-control" id="exampleFormControlInput required1" value="<?php echo $title; ?>">
  </div>
  <div class="form-group">
  	<input name="ID" class=" hidden form-control" style="display:none" id="exampleFormControlInput required1" value="<?php echo $_GET['id']; ?>">
  </div>
  <div class="form-group">
  	<label>Note</label>
    <textarea name="note" class="form-control" id="exampleFormControlInput required1">
    	<?php echo $note; ?>
    </textarea>
  </div>
    <div class="form-group">
  	<label>Date</label>
    <input required type="date" name="date" class="form-control" id="exampleFormControlInput required1" value="<?php echo $date; ?>">
  </div>
  <div class="form-group">
  	<label>Tag ( Optional )</label>
    <input type="text" name="tag" class="form-control" id="exampleFormControlInput required1" value="<?php echo $tag; ?>">
  </div>
    <div class="form-group">
  	<label>Color</label>
  	<select name="color" id="color">
  		<option default>White</option>
  		<option default>Yellow</option>
  		<option default>Green</option>
  		<option default>Pink</option>
  	</select>
  </div>
  <hr>
    <div class="form-group">
    <button type="submit" class="btn btn-primary" id="exampleFormControlInput required1"><i class="fa fa-save"></i>Save</button> 
</form>   
<form action="delete-note.php" method="POST" style="display: inline">
	<input type="text" hidden  name="id" value="<?php echo $_GET['id'] ?>">
    <button type="submit" class="btn btn-danger" id="exampleFormControlInput required1"><i class="fa fa-times-circle"></i>Delete</button>
</form>

  </div>
</div>
