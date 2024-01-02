<?php
include 'connect.php';
?>

<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link href= "style.css" rel="stylesheet">              
<title> Employee Details </title>  
</head>   
<body>
    <button><a href="index.php">Home</a></button>
    <center> <h1> Employee Details </h1>   
    <table border="1px" >
        <tr>
            <th>Name</th>
            <th>Phone No.</th>
            <th>Age</th>
            <th>Photo</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php
        $query = "SELECT * FROM employee";
        $data = mysqli_query($conn,$query);
        $result = mysqli_num_rows($data);
        if($result)
        {
            while ($row=mysqli_fetch_array($data))
            {
                ?>
                <tr>
                    <td><?php echo $row ['Name'];?></td>
                    <td><?php echo $row ['PNo'];?></td>
                    <td><?php echo $row ['Age'];?></td>
                    <td><?php echo $row ['Image'];?></td>
                    <td><button><a href="update.php?id=<?php echo $row['Eid']; ?>">Update</a></button></td>
                    <td><button><a onclick="return confirm('Sure want to delete?')" href="delete.php?id=<?php echo $row['Eid']; ?>">Delete</a></button></td>
                </tr>
                <?php
            }
        }
        else{
            ?>
            <tr>
                <td>Nothing</td>
            </tr>

            <?php
        }
        
        ?>

    </table>
    </center> 
</body>
</html>