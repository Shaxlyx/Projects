<?php
session_start();
require_once 'connect.php';
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );

if(isset($_POST['submit']) and $_FILES){
    move_uploaded_file($_FILES['file']['tmp_name'], "../uploades/".$_FILES['file']['name']);

}

$id = $_SESSION['user']['id'];
$picture = $_POST['picture'];
$avtor = $_POST['avtor'];
$direct = $_POST['direct'];
$genre = $_POST['genre'];
$techn = $_POST['techn'];
$date = $_POST['date'];
$message = $_POST['message'];
$image = "../uploades/".$_FILES['file']['name'];
mysqli_query($connect, "INSERT INTO `image_table`
(id, imagePath, id_author, picture, avtor, direct, genre, techn, date, message)
VALUES (NULL, '$image', '$id', '$picture', '$avtor', '$direct', '$genre', '$techn', '$date', '$message')");
header('Location: ../gallery.php');

?>