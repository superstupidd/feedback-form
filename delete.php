<?php
include("config.php");
include("list.php");

if(!$con){
    echo "connection failed";   

}
if(isset ($_POST['delete']))
$sql = "DELETE FROM users WHERE id='$id" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);
?>