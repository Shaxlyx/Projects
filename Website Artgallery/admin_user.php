<?php
session_start();
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );
if(isset($_POST['add_product'])){

   $firstName = mysqli_real_escape_string($connect, $_POST['firstName']);
   $secondName = $_POST['secondName'];
   $number = $_POST['number'];
   $password = $_POST['password'];


   $add_product_query = mysqli_query($connect, "INSERT INTO `users`(firstName, secondName, number, password) VALUES('$firstName', '$secondName', '$number', '$password')");
//    mysqli_query($connect, "INSERT INTO `reg_info` (`id`, `id_author`, `namemus`, `adres`, `number`, `infomus`)
//    VALUES (NULL, '22', '0', '0', '0', '0')" );
}
if(isset($_POST['update_product'])){

    $update_p_id = $_POST['update_p_id'];
    $update_firstName = $_POST['update_firstName'];
    $update_secondName = $_POST['update_secondName'];
    $update_number = $_POST['update_number'];
    $update_password = $_POST['update_password'];

    mysqli_query($connect, "UPDATE `users` SET firstName = '$update_firstName', secondName = '$update_secondName', number = '$update_number', password = '$update_password' WHERE id = '$update_p_id'");


    header('location:admin_user.php');

}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_image_query = mysqli_query($connect, "SELECT * FROM users WHERE id = '$delete_id'");
   $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
   mysqli_query($connect, "DELETE FROM `users` WHERE id = '$delete_id'");
   mysqli_query($connect, "DELETE FROM `image_table` WHERE id_author = '$delete_id'");
   header('location:admin_user.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/admin_style.css.php">
</head>
<body>
<?php include 'admin_header.php'; ?>
<section class="add-products">
   <form action="" method="post" enctype="multipart/form-data">
      <h3>Добавление администратора</h3>
      <input type="text" name="firstName" pattern="[а-яА-Я]+" class="box" placeholder="Имя" required title="Имя может содержат только русские буквы.">
       <input type="text" name="secondName" pattern="[а-яА-Я]+" class="box" placeholder="Фамилия" required title="Фамилия может содержат только русские буквы.">
       <input type="text" name="number" class="box" maxlength="11" placeholder="Телефонный номер" required pattern="[0-9+]+">
       <input type="text" name="password" class="box" placeholder="Пароль" required>
      <input type="submit" value="Добавить администратора" name="add_product" class="btn">
   </form>
</section>

<section class="users">
    <h1 class="title">Галерейщики</h1>
   <div class="box-container">
      <?php
         $select_products = mysqli_query($connect, "SELECT * FROM `users` WHERE id > 1");
      if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
      <div class="box">
         <p><span><?php echo $fetch_products['firstName']; ?></span></p>
          <p><span><?php echo $fetch_products['secondName']; ?></span></p>
       <p><span><?php echo $fetch_products['number']; ?></span></p>
    <p><span><?php echo $fetch_products['password']; ?></span></p>
         <a href="admin_user.php?update=<?php echo $fetch_products['id']; ?>" class="option-btn">Изменить</a>
         <a href="admin_user.php?delete=<?php echo $fetch_products['id']; ?>" class="delete-btn" onclick="return confirm('delete this product?');">Удалить</a>
<!--         <a href="gallery.php?=--><?php //echo $fetch_products['id'];?><!--" class="option-btn">Войти как</a>-->
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">Нет администраторов</p>';
      }
      ?>
   </div>

</section>

<section class="edit-product-form">

   <?php
      if(isset($_GET['update'])){
         $update_id = $_GET['update'];
         $update_query = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '$update_id'") or die('query failed');
         if(mysqli_num_rows($update_query) > 0){
            while($fetch_update = mysqli_fetch_assoc($update_query)){
   ?>
   <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_update['id']; ?>">
      <input type="text" name="update_firstName" pattern="[а-яА-Я]+" value="<?php echo $fetch_update['firstName']; ?>" class="box" required placeholder="Изменить Имя">
      <input type="text" name="update_secondName" pattern="[а-яА-Я]+" value="<?php echo $fetch_update['secondName']; ?>" class="box" required placeholder="Изменить Фамилию">
       <input type="text" name="update_number" min="0" maxlength="11" pattern="[0-9+]+" value="<?php echo $fetch_update['number']; ?>" class="box" required placeholder="Изменить Номер">
       <input type="password" name="update_password" min="0" value="<?php echo $fetch_update['password']; ?>" class="box" required placeholder="Изменить Пароль">
      <input type="submit" value="update" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close-update" class="option-btn">
   </form>
   <?php
         }
      }
      }else{
         echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
      }
   ?>
</section>
<script src="js/admin_script.js"></script>
</body>
</html>