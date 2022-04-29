<php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='jsrkf';

$conn= mysqli_connect('$dbhost','$dbuser','$dbpass','$dbname');

$sql= SELECT * FROM site_info;

$result=mysqli_query($conn,$sql);







?>