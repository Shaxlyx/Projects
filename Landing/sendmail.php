<?php
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $subject = filter_var(trim($_POST['subject']),
    FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']),
    FILTER_SANITIZE_STRING);

    $bd = new mysqli ('127.0.0.1', 'mysql', 'mysql', 'scrband');
    $bd -> query("INSERT INTO `scrtabl` (name,email,subject,message) 
    VALUES('$name', '$email', '$subject', '$message')");
    
    mysqli_close($bd);
    header('Location: index.html');
?>