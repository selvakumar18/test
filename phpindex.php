<html>
<head>
<body>
<?php
$Pname=$_POST['name'];
$Gender=$_POST['gender'];
$Bgroup=$_POST['bgroup'];
$City=$_POST['city'];
$Phnumber=$_POST['phono'];
$Age=$_POST['age'];
$Dname=$_POST['dname'];
$Disease=$_POST['disease'];
 
 
 echo $Pname;
 echo $Gender;
 echo $Bgroup;
 echo $City;
 echo $Phnumber;
 echo $Age;
 
 echo $Dname;
 

$c = mysqli_connect("localhost","root","");
 if(mysqli_select_db($c,"hospital")){
   $check = mysqli_query($c,"insert into patient values('$Pname','$gender','$Bgroup','$City','$Phnumber','$Age','$Dname','$Disease')");
 }





?>
</body>
</head>
</html>