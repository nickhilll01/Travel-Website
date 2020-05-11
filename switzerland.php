<?php
$name= filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
if(isset($_POST['comments'])){
    $message = filter_input(INPUT_POST, "comments", FILTER_DEFAULT);
}
// if(isset($_POST['checkbox'])) {
//        $checkbox = $_POST['checkbox'];
//        echo $checkbox;
//    }
//    else{
//        $checkbox = 0;
//    }
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
                    $sql = "INSERT INTO switzerland (name , email , comments )
                    values ('$name'  , '$email' , '$message' )";
                        if ($conn->query($sql)){
                        echo "New record is inserted sucessfully";
                        }
                        else{
                        echo "Error: ". $sql ."
                        ". $conn->error;
                        }
                    $conn->close();
                    }
                    header('Location: switzerland.html');
                    exit;
                }
                 
else{
    echo "Fields should not be empty";
die();
}
?>