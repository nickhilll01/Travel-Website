<?php
$firstname= filter_input(INPUT_POST, 'firstName');
$lastname = filter_input(INPUT_POST, 'lastName');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$password = md5($password);
if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($password)) {
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "itravel";
                // Create connection
                $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
            
            
                if (mysqli_connect_error()){
                    die('Connect Error ('. mysqli_connect_errno() .') '
                    . mysqli_connect_error());
                    }
                else{
                    $sql = "INSERT INTO layout (fname , lname , email, password)
                    values ('$firstname' , '$lastname' , '$email','$password')";
                        if ($conn->query($sql)){
                        echo "New record is inserted sucessfully";
                        }
                        else{
                        echo "Error: ". $sql ."
                        ". $conn->error;
                        }
                    $conn->close();
                    }
                   
                    header('Location: layout.html');
                    exit;
                }
                
              
else{
    echo "Fields should not be empty";
die();
}
?>