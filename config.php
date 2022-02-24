
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
	
if (isset($_POST['comment'])){
$name=($_POST['name']);
$email=($_POST['email']);
$phone=($_POST['phone']);
$comments=($_POST['comments']);

$sql= "INSERT INTO users (name,email,phone,comments) VALUES ('$name','$email','$phone','$comments')";
$result= mysqli_query($con,$sql);
if($result){
    $_SESSION['message']='Thank you!'; 
       header('Location: feedback.php');
       

}else{
echo "something went wrong";
}
}





?>