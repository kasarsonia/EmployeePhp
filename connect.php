<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db = "demo";
$conn = mysqli_connect($host,$user,$pwd,$db);

if($conn)
{
    echo "";
}
else{
    echo "Not Connected";
}
?>