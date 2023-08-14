<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Панель Администратора</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/admin_style.css.php">

</head>
<body>
<?php include 'admin_header.php'; ?>
<section class="dashboard">
   <h1 class="title">Информация о сайте</h1>
   <div class="box-container">
      <div class="box">
         <?php
            $connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );
            $select_products = mysqli_query($connect, "SELECT * FROM `image_table`");
            $number_of_products = mysqli_num_rows($select_products);
         ?>
         <h3><?php echo $number_of_products; ?></h3>
         <p>Добавленные картины</p>
      </div>

      <div class="box">
         <?php 
            $select_admins = mysqli_query($connect, "SELECT * FROM `users`");
            $number_of_admins = mysqli_num_rows($select_admins);
         ?>
         <h3><?php echo $number_of_admins; ?></h3>
         <p>Галерейщики</p>
      </div>
   </div>

</section>
<script src="js/admin_script.js"></script>

</body>
</html>