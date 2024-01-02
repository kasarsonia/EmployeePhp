<?php

include 'connect.php';
$id=$_GET['id'];
$query="DELETE FROM employee WHERE Eid='$id'";
$data = mysqli_query($conn,$query);
if($data)
{
    ?>
    <script type="text/javascript">
        alert("Deleted");
        window.open("http://localhost/employee/view.php", "_self");
    </script>
    <?php
}
else{
    ?>
    <script type="text/javascript">
       alert("Try Again");
    </script>
    <?php
}
?>

