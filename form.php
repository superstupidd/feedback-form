<?php
/* Template name: form */
?>
<form id="demo" method="post">
<label for="fname">First name:</label><br>
<input id="fname" name="fname" type="text" value="John"><br>
<label for="lname">Last name:</label><br>
<input id="lname" name="lname" type="text" value="Doe">

 <button name="submit" type="submit">Submit</button>
</form>

<?php

if (isset($_POST['submit'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
global $wpdb;
$sql=$wpdb->insert("my_form", array("firstname"=>$fname,"lastname"=>$lname));
if($sql==true){
echo("ok");
}else
{
echo("not ok");
}
}
?>
