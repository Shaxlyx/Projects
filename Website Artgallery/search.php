<?php
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/search.css.php">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>search</title>
</head>
<body>
<header class="header">
            <div class="flex">
                <a href="about.php" class="logo">Art<span>Gallery</span></a>
                <div class="header__icon">
                    <form action="search.php" method="post">
                        <input type="text" name="search" id="search" class="search" placeholder="Поиск">
                        <input type="submit" name="submit" class="pusk" value=" ">
                        <div id="list"></div>
                    </form>
                </div>
            </div>
    </header>
<main>
    <div class="container">

        <div class="wrap">
            <h1>Результы поиска:</h1>
            <div class="informBlock">

            <?php
            if (isset($_POST['submit'])){
            $search = $_POST['search'];

            $str = mysqli_query($connect, "SELECT * FROM image_table WHERE picture LIKE '%$search%' OR avtor LIKE '%$search%'");
            while ($value = mysqli_fetch_assoc($str)) {
                echo '<a href="ploch.php?id=' . $value['id'] . '">' . '<div class="otstyp" id=' . $value['id'] . '>';
                echo "<img onclick='showImage(this)' src='" . $value['imagePath'] . "'/>";
                echo '<div class="main__text" id=' . $value['id'] . '>' . '<h5>Название: ' . $value['picture'] . '</h5>' . '<p>Автор: ' . $value['avtor'] . '</p>' . '</div>';// выводим данные
                echo "</div>" . '</a>';
                }
            }
            ?>
            </div>
        </div>
</main>
<script src="js/main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#search').keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
                $.ajax({
                    url:"src.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data)
                    {
                        $('#list').fadeIn();
                        $('#list').html(data);
                    }
                });
            }
        });
        $(document).on('click', 'li', function(){
            $('#search').val($(this).text());
            $('#list').fadeOut();
        });
    });
</script>
</body>
</html>
