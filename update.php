<?php
include 'connect.php';
$id=$_GET['id'];
$select="SELECT * FROM employee WHERE Eid='$id'";
$data = mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>

<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link href= "style.css" rel="stylesheet">              
<title> Employee Details </title>  
</head>  
<body>
<center> <h1> Employee Details </h1>  
    <form action="" method="POST">  
        <div class="container">     
            <input type="text" placeholder="Enter Name" name="name" value="<?php echo $row['Name'] ?>" ><br><br>

            <input type="number" placeholder="Enter PhoneNo" name="pno" maxlength="10" value="<?php echo $row['PNo'] ?>" > <br><br>

            <input type="number" placeholder="Enter Age" name="age" value="<?php echo $row['Age'] ?>">   <br><br> 

            <button type="submit" name="update">Update</button>     
            <button><a href="view.php">Cancel</a></button>   
        </div>   
    </form> 
            
    </body>
    </html>
    <?php
    if(isset($_POST['update']))
    {
        $name = $_POST['name'];
        $pno = $_POST['pno'];
        $age = $_POST['age'];

        $update = "UPDATE employee SET Name= '$name', PNo='$pno', Age='$age' WHERE Eid='$id';";
        $data = mysqli_query($conn,$update);
        if($data)
        {
            ?>
            <script type="text/javascript">
                alert("Data Updated");
                window.open("http://localhost/employee/view.php", "_self");
            </script>
            <?php
        }
    
    } 
    ?>
</center>

