<?php
$f=$_POST['first'];
$s=$_POST['sec'];

//echo $f;
//echo "<br>";
//echo $s;
 $c = mysqli_connect("localhost","root","");
 if(mysqli_select_db($c,"ab")){
 
 mysqli_query($c,"insert into name values('$f','$s')");
 
 $res=mysqli_query($c,"select * from users");
 
     echo "<table border='1'>
<tr>
<th>first</th>
<th>last</th>

</tr>";
while($row = mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>" . $row['first'] . "</td>";
echo "<td>" . $row['sec'] . "</td>";

echo "</tr>";
}
echo "</table>";
 }
 
?>