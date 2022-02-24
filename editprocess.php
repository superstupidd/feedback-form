<?php



$server = 'localhost';
$username = 'root';
$pass = '';
$db="user_feedback";
            

$con=mysqli_connect('localhost','root','','user_feedback');
if(!$con){
    echo "connection failed";   

}
    $id = 0;    
    $name = "";
	$email = "";
    $phone = "";
    $comments = "";

if(isset($_POST['update']))
{	
$id =($_POST['id']);
$name =($_POST['name']);
$comments = ($_POST['comments']);

$sql= "UPDATE users SET name ='$name',comments='$comments' WHERE id=$id";
$result = mysqli_query($con,$sql);}
else{
    echo "something went wrong ";
}
if($result){
    $_SESSION['message']='Updated Successfully!';

header("Location: list.php");
}


?>