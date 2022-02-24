
<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>feedback forum</title>
<link href="feedback.css" rel="stylesheet"/>
</head>
<body>
<div class="main">


<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Comments</th>
		</tr>
	</thead>

	<?php
	include("config.php");

            

$sql = "SELECT name, comments FROM users ORDER BY id DESC";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0){
  // output data of each row
  while($row = $result->fetch_assoc()) {?>
<tr>
			<td><h4><?php echo $row['name']; ?></h4></td>
			<td><?php echo $row['comments']; ?></td>
			<td>
			<a name="edit" class="edit_btn" href='update.php?id=$res[id]'>Edit</a>       
			</td>
			<td>
			<a  name="delete" class="del_btn" href='delete.php?id=$id'>Delete</a>       
			</td>
		</tr>
	<?php } 
    }?>
</table>

</div>
