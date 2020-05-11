<?php
$email = filter_input(INPUT_POST, 'signemail');
$password = filter_input(INPUT_POST, 'signpassword');
$password = md5($password);
if (!empty($name) ||  !empty($email) ) {
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
                    $sql = "INSERT INTO sign_in ( email , password )
                    values (  '$email' , '$password' )";
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