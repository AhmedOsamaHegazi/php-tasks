<?php 
    include_once("config.php");
    $SQL = "SELECT Name, email, room, Ext, fileImage, myuid FROM users"; // zy el id kda 
    // $SQL = "select * from users";
    $result = mysqli_query($connection, $SQL);
    $data = mysqli_fetch_array($result);
    // print_r($data);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list Page</title>
</head>
<body>
    <a href="formPhpLab4.php">Create Account</a>
 <center>
    <div>
        <h1>Users list</h1>
    </div>
</center>
      <form method="post" enctype="multipart/form-data">
          <center>
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Room No.</th>
                    <th>Ext</th>
                    <th>Profile Picture</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>  
                
                <?php 
    // **Q**  Ask eng mariem >> awl user b3mlo by7slo save in database but not appear in list page 
    // leh while() m4 naf3a wnf3t foreach()     & thanks in advance eng.    
        // by searching and helping my friend mohamed abdel_mohsen in same track i got it 
            // while($data = mysqli_fetch_array($result))
            foreach($result as $data)
            {
                echo "<tr>";
                echo "<td>".$data["Name"]."</td>";
                echo "<td>".$data["email"]."</td>";
                echo "<td>".$data["room"]."</td>";
                echo "<td>".$data["Ext"]."</td>";
                echo "<td>".$data["fileImage"]."</td>";

                echo "<td> <a href='edit.php?usermyuid=$data[myuid]'> Edit </a>";
                echo "<td> <a href='delete.php?usermyuid=$data[myuid]'> Delete </a>";
                // echo "<td> <a href='edit.php?userid=$data[id]'> Edit </a>";
                // echo "<td> <a href='delete.php?userid=$data[id]'> Delete </a>";
                
                echo "</tr>";
            }
            ?> 
            </table> 
        </center>
    </form>
</body>
</html>

