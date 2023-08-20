
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserFormInfo</title>
</head>
<body>
   <div><h1>Add User</h1></div>
      <form action="dataForm3.php" method="post" target="_blank" enctype="multipart/form-data">
          Name :  <input type="text" name="name"><br><br>
          Email :  <input type="email" name="email"><br><br>
          
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
        Password : <input type="password" name="password" required><br><br>
        confirm password : <input type="password" name="confirmPassword" require><br><br>
       
        Room No. :    <select name="room" id="room">
                        <option value="Application1">Application1</option>
                        <option value="Application2">Application2</option>
                        <option value="cloud">cloud</option>
                      </select><br><br> 
        Ext. : <input type="text" name="ext"><br><br>
        
        <label for="file">Profil Picture :</label>
            <input type="file" name="file"><br><br>   

            <input type="submit" value="Submit" name="submit">
                <input type="reset"value="Reset">
      </form>
</body>
</html>