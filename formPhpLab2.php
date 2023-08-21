
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormPhp</title>
</head>
<body>
    <form action="http://localhost/phpday2/dataform.php" method="post" target="_blank">"
        First Name : <input type="text" name="firstName"><br><br>
        Last Name :  <input type="text" name="lastName"><br><br>
        
        <label for="address">Address :</label><br>
        <textarea id="address" name="address" maxlength="300" style="width: 300px; height: 100px; overflow;"></textarea><br><br>
    
        Country :    <select name="country" name="country" id="country">
                        <option value="alex">Alex</option>
                        <option value="cairo">cairo</option>
                        <option value="assuit">Assuit</option>
                        <option value="aswan">Aswan</option>
                    </select><br><br>
                    
                <label>gender :</label><br>
                    <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br><br>
                
                <label>Skills:</label><br>
                    <input type="checkbox" id="skill1" name="skill[]" value="PHP"> 
                <label for="skill">PHP</label>
                    <input type="checkbox" id="skill2" name="skill[]" value="J2SE">
                <label for="skill">J2SE</label><br>
                    <input type="checkbox" id="skill3" name="skill[]" value="MySQL">
                <label for="skill">MySQL</label>
                    <input type="checkbox" id="skill4" name="skill[]" value="postgreeSQL">
                <label for="skill">PostgreeSQL</label><br><br>
                
        User Name : <input type="text" name="userName"><br><br>
        Password : <input type="password" name="password"><br><br>
        Department : <input type="text" name="department"><br><br>
                    
            <?php // using random function from searching  
                // echo rand(1000, 9999);  
                
                echo '<label for="verifiCode">Please Insert the Code  </label>';
                $array = range(1000, 9999); // h3ml array b function range // ezay a3mlo mix num w 7rof ?
                shuffle($array); // h5leh y change wkol mra a5od mno index 1 fe el print
                    echo"$array[0]";echo"<br>";
                    echo '<input type="text" id="verifiCode" name="verifiCode" required><br><br>';
            ?>

                <input type="submit" value="Submit">
                <input type="reset"value="Reset">





  </form>
</body>
</html>