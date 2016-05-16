<html>
    <head>
        <meta charset="UTF-8">
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
        
        
        
        <?php        
                
        $firstnameErr = $lastnameErr = $usernameErr = $pswErr = $genderErr = $emailErr = $websiteErr = "";
        $firstname = $lastname = $username = $psw = $email = $gender = $website = "";
        
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            if (empty($_POST["firstname"])){
                $firstnameErr = "Name is required";
            } else {
                $firstname = test_input($_POST["firstname"]);
                    if(!preg_match("/^[a-zA-Z ]*$/", $firstname)){
                        $firstnameErr = "Only letters and white spaces allowed.";
                    }
            }
            if (empty($_POST["lastname"])){
                $lastnameErr = "Last name is required";
            } else {
                $lastname = test_input($_POST["lastname"]);
                    if (!preg_match("/^[a-zA-Z ]*$/", $lastname)){
                        $lastnameErr = "Only letters and white spaces allowed.";
              }
            }
            if (empty($_POST["username"])){
                $usernameErr = "User name is required";
            } else {
                $username = test_input($_POST["username"]);
            }
            if (empty($_POST["psw"])){
                $pswErr = "Password is required";
            } else {
                $psw = test_input($_POST["psw"]);
            }
            if (empty($_POST["email"])){
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $emailErr = "Invalid Email";
                    }
            }
            if (empty($_POST["website"])){
                $websiteErr = "Please enter a web address";
            } else {
                $website = test_input($_POST["website"]);
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
                        $websiteErr = "Invalid URL";
                    }
            }
            if (empty($_POST["gender"])){
                $genderErr = "Gender selection is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
            
        }
        
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        
        <p><span class="error">* required field.</span></p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            First name:<br>
                <input type="text" name="firstname" value="<?php echo $firstname?>">
                    <span class="error">*<?php echo $firstnameErr;?></span>
                    <br><br>
            Last name:<br>
                <input type="text" name="lastname" value="<?php echo $lastname?>">
                    <span class="error">*<?php echo $lastnameErr;?></span>
                <br><br>
            User name:<br>
                <input type="text" name="username" value="<?php echo $username?>">
                    <span class="error">*<?php echo $usernameErr;?></span>
                    <br><br>
            User password:<br>
                <input type="password" name="psw" value="<?php echo $psw?>">
                <span class="error">*<?php echo $pswErr;?></span>
                <br><br>
            Email:<br>
            <input type="text" name="email" value="<?php echo $email?>">
                <span class="error">*<?php echo $emailErr;?></span>
            <br><br>
            Web site:<br>
            <input type="text" name="website" value="<?php echo $website?>">
            <span class="error">*<?php echo $websiteErr;?></span>
            <br><br>
            Gender:
            <span class="error">*<?php echo $genderErr;?></span><br>   
            <input type="radio" name="gender" <?php if(isset($gender)&& $gender == "male") echo "checked";?>value="male">Male<br>
            <input type="radio" name="gender" <?php if(isset($gender)&& $gender == "female")echo "checked";?>value="female">Female;
                    
                <br><br>
                <input type="submit" value="Submit">                
        </form> 
        
        <?php
            echo "<h2>Your input:</h2>";
            echo $firstname;
            echo "<br>";
            echo $lastname;
            echo "<br>";
            echo $username;
            echo "<br>";
            echo $psw;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $gender;
            echo "<br>";
            echo $website;
        ?>
        
        
        
        
    </body>
</html>
