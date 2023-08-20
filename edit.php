<?php 
include_once("config.php");
   
if(isset($_POST["button"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"]; 
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $room = $_POST["room"];
    $Ext = $_POST["ext"];  
    $fileImage = $_FILES["fileImage"]["name"];
    // $id = $_GET["userid"];
    $id = $_GET["usermyuid"];
      

    if(empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($room) || empty($Ext) || empty($fileImage))
    {
        echo "<p style='color: red'> Please Enter Your Data</p>";
   
    }   
    else if ($password !== $confirmPassword) 
    {
       echo "<p style='color: red'> no matching passwords please refill same password </p>";
    }
    else
    {
        $SQL = "UPDATE users SET name='$name', email='$email', password='$password', room='$room', Ext=$Ext, fileImage='$fileImage' WHERE myuid=$id"; 
        // $SQL = "UPDATE users SET name='$name', email='$email', password='$password', room='$room', Ext=$Ext, fileImage='$fileImage' WHERE id=$id"; 
        $result = mysqli_query($connection, $SQL);
        echo "User Added Successfully";
        header("Location: list.php");
    }
}

// $id = $_GET["userid"];
// $SQL = "SELECT * FROM users WHERE id=$id";
$id = $_GET["usermyuid"];
$SQL = "SELECT * FROM users WHERE myuid=$id";
$result = mysqli_query($connection, $SQL);
$data = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
   <div><h1>Add User</h1></div>
      <form method="post" enctype="multipart/form-data"> 
         <table> 
            <tr>
                <td>Name</td>
                <td><input  type="text" name="name" value='<?php echo $data["Name"] ?>'/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input  type="email" name="email" value='<?php echo $data["email"] ?>' /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input  type="password" name="password" value='<?php echo $data["password"] ?>' /></td>
            </tr>
            <tr>
                <td>confirm Password</td>
                <td><input  type="password" name="confirmPassword" value='<?php echo $data["password"] ?>' /></td>
            </tr>
            <tr>
                <td>Room No.</td>
                <td><select name="room" id="room" value='<?php echo $data["room"] ?>'>
                        <option value="Application1">Application1</option>
                        <option value="Application2">Application2</option>
                        <option value="cloud">cloud</option>
                    </select></td>
            </tr>
            <tr>
                <td>Ext.</td>
                <td><input  type="text" name="ext" value='<?php echo $data["Ext"] ?>' /></td>
            </tr>
            <tr>
                <td>Profil Picture </td>
                <td> <input type="file" name="fileImage" value='<?php echo $data["fileImage"]   ?>' /></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Edit" name="button">
                </td>
            </tr>
        </table>        
        
              <?php
                //   ***First method*** validation of email by FILTER_VALIDATE_EMAIL Function
                $email = "email@email.com";

                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
                    {
                        // echo "Valid Email";
                    } else 
                    {
                        echo "Invalid Email";
                    }
                
                    // *** second method *** valid email by regular expression "&" preg_match function

                    $value = "email@email.com";
                    $pattern = '/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/i';
                    if (preg_match($pattern, $value)) 
                    {
                        // echo "Valid email";
                    } else 
                    {
                        echo "Invalid email";
                    }
                ?>
      </form>
</body>
</html>
     <?php
      
      ?>