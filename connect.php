<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //Database connection
    $conn = new mysqli('localhost','root','','layout');
    if($conn->connect_error){
        die('Connection Failed:' .$conn->connect_error);
    }
    else{
        $stmt = $conn -> prepare("insert into layout_reg(firstName , lastName, email , password)
        values(?,?,?,?)");
        $stmt->bind_param("ssss",$firstName,$lastName,$email,$password);
        $stmt->execute();
        echo "registration successfully ";
        $stmt->close();
        $conn->close();
    }
?>