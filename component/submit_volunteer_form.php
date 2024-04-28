<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];//an associative array to access all the sent information using POST method.
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    if (empty($name) || empty($email) || empty($message)) {
       
        echo "<script>alert('Please fill out all fields.'); window.location.href = '../pages/GetInvolved.php';</script>";
        exit();
    }

    
    echo "<script>alert('Name: $name\\nEmail: $email\\nMessage: $message'); window.location.href = '../pages/GetInvolved.php';</script>";
    exit();
} else {
    
    //send raw HTTP pages to client
    header("Location: ../pages/GetInvolved.php");
    exit();
}
?>
