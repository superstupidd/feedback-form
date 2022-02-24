<?php
include('config.php');
?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_connect($db, "SELECT * FROM users WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_assoc()($record);
			$name = $n['name'];
			$address = $n['comments'];
		}
	}


?>

<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>feedback forum</title>
<link href="feedback.css" rel="stylesheet"/>
</head>
<body>
<div class="main">

<div class="sign">
          <div class="fsign"><h2 class="ssign">Feedback</h2></div>

         
            <form name = "feedback" action="config.php" method="POST" >
                <div class="form group">
    
                <label class="lable">Name:</label>
                <input class="for" type="name" placeholder=" name" name="name" required>
            </div>
            
            <div class="form-group">
                <label class="lable">Email:</label>
                <input class="for" type="email" placeholder=" email" name="email"required >
            </div>
            
            <div class="form-group">
                <label class="lable">Phone:</label>
                <input class="for" type="Phone" placeholder=" Phone" name="phone" required>
            </div>

            <div class="form-group">
                <label class="lable">Comments:</label>
                <input class="for" type="comments" placeholder="comments" name="comments" required>
            </div>
            
                <button type="comments" name="comment" class="butnn">Comments</button>
            
                

        </form>
       
<a href='list.php' class="list">comments...</a>

</div>
</div>

</div>
</body>
	</div>




<script
    src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script
    src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/pooper.min.cs"></script>
</script>
<script
    src="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" >
</script>

</html>