<html>
<body>
<?php
include 'conn.php';
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
    header(location:view11.php);
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
