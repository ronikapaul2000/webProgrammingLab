<html>
<?php
include "conn.php";
if(isset($_POST['submit']))
{
    $SlNo=$_POST['SlNo'];
    $name=$_POST['name'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
 
$sql = "INSERT INTO `jancy`(`SlNo`, `name`, `Email`, `Password`) VALUES ( '$SlNo','$name', '$Email', '$Password')";
$result=$conn->query($sql);
if($result==TRUE)
{
   echo "new record create successefully";
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<body>
<h2> Signup Form </h2>
<form method="POST">
<fieldset>
<legend> Personal Information </legend>
SlNO:<br>
<input type="text" name="SlNo">
<br>
First Name:<br>
<input type="text" name="name">
<br>
Email:
<br>
<input type="email" name="Email">
<br>
Password:<br>
<input type="password" name="Password">
<br><br>
<input type="submit" name="submit" value="submit">
</fieldset>
</body>
</html>
