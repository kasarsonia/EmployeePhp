<?php

include 'connect.php'?>

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
            
            <input type="text" placeholder="Enter Name" name="name" required><br><br>  
            <input type="number" placeholder="Enter PhoneNo" name="pno" > <br><br>
            <input type="number" maxlength="10" placeholder="Enter Age" name="age" > <br> <br>
            <input type="file" name="image" ><br><br>
            <button type="submit" name="save" value="add">Add</button>  
            <button><a href="view.php">View</a></button><br> 
        </div>   
    </form> 
    <?php
    if(isset($_POST['save']))
    {
        $name = $_POST['name'];
        $pno = $_POST['pno'];
        $age = $_POST['age'];
        $img = $_FILES['image']['temp'];
        $query = "INSERT INTO employee(Name,PNo,Age,Image) VALUES('$name','$pno','$age','$img')";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            ?>
            <script type="text/javascript">
                alert("Datasaved");
            </script>
            <?php
        }
    
    } 
    ?>
    </center>       
</body>     
</html>  