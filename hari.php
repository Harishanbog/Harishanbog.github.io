 

<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
<?php  
$connection=mysqli_connect("localhost","root","","hari");
//form details
if($connection == false){
    echo "connection not possible"
}
$Email=$_REQUEST['Email'];
$Password=$_REQUEST['Password'];


$sql="INSERT  into gagan values('$Email','$Password')";

?>
 


</body>
  
</html>