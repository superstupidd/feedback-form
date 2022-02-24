
<?php
// including the database connection file
include("config.php");
include("list.php");



?>
<?php
//getting id from url
$id = $_GET['id'];


//selecting data associated with this particular id
$sql= "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($con,$sql);
if(!empty($result)){
while($row = $result->fetch_assoc())
    {
	$name = $row['name'];
	$comments = $row['comments'];
}
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="list.php">Comments..</a>
	<br><br>
	
	<form name="form1" method="post" action="editprocess.php">
		<table >
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>comments</td>
				<td><input type="text" name="comments" value="<?php echo $comments;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><button type="submit" name="update" value="Update">Update </button></td>
			</tr>
		</table>
	</form>
</body>
</html>
