<?php

        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "my_DB";
                
        //creating connection
        $link = mysqli_connect($servername, $username, $password, $dbname);

        if (!$link) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
        echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL ;
        
        //SQL to create a database       
        /*$sql = "CREATE DATABASE my_DB";
        if (mysqli_query($link, $sql)){
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . mysqli_error($link);
        }
        */
        
        //SQL to create a table
        /*$sql = "CREATE TABLE MyGuest (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                reg_date TIMESTAMP)";
        
        if(mysqli_query($link, $sql)){
            echo "Table MyGuest created successfully";
        } else {
            echo "Error creating table: " . mysqli_error($link);
        }       
        */
        
        /*$sql = "INSERT INTO MyGuest (firstname, lastname, email)
            VALUES ('Devian', 'Kapp', 'devian@example.com');";
        $sql .= "INSERT INTO MyGuest (firstname, lastname, email)
            VALUES ('Mary', 'Moe', 'mary@example.com');";
        $sql .= "INSERT INTO MyGuest(firstname, lastname, email)
            VALUES ('Juhinn', 'Neels', 'juhinn@example.com');";
        */                                     
            /*if(mysqli_query($link, $sql)){
                //echo "New record created successfully";
                $last_id = mysqli_insert_id($link);
                echo "New record created successfully. Last inserted ID is: " . $last_id;
            } else {
                //echo "Error " . $sql . "<br>" . mysqli_error($link);
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
            */
        /*if (mysqli_multi_query($link, $sql)){
            echo "New records created successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }                         
        */
        
        /*
        //Prepare to bind
        $stmt = $link->prepare("INSERT INTO MyGuest (firstname, lastname, email) Values(?, ?, ?)");
        $stmt -> bind_param("sss", $firstname, $lastname, $email);
        
        $firstname = "John";
        $lastname = "Doe";
        $email = "john@example.com";
        $stmt -> execute();
        
        $firstname = "Billy";
        $lastname = "Dilly";
        $email = "mary@example.com";
        $stmt -> execute();
        
        $firstname = "Julie";
        $lastname = "Dooley";
        $email = "julie@example.com";
        $stmt -> execute();
        
        echo "New records created successfully";
        
        $stmt -> close();
        */
        
        /*$sql = "SELECT id, firstname, lastname FROM MyGuest";
        $result = mysqli_query($link,$sql);
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
            } else {
                echo "0 results";
            }
        */
        
        
        
        /*if (mysqli_num_rows($result)> 0){
            while ($row = mysql_fetch_assoc($result)) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " ". $row["lastname"]. "<br>";
            
            } else {
                echo "0 results";
            }
        }
        */
        
        /*$sql = "DELETE FROM MyGuest WHERE id = 47";
        
        if(mysqli_query($link, $sql)){
            echo "Record deleted successfully";
        } else {
            echo"Error deleting record: " . mysqli_err($link);
        }
        */
        
        $sql = "UPDATE MyGuest SET lastname = 'Doe' WHERE id = 48";
        
        if(mysqli_query($link, $sql)){
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($link);
        }
        
        
        mysqli_close($link);
?>
