<?php
$connect = mysqli_connect('localhost', 'root', '', 'test' );

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <meta name="viewport" content="width=445, initial-scale=1.0">-->
    <link rel="stylesheet" href="css/style.css.php">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>about</title>
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
            <div class="hi_group">
                <div class="hi_title"><h1>Art<span>Gallery</span></h1></div>
                <div class="hi_info"><p>Здесь собраны картины <br>из различных коллекцей!</p>
                </div>
            </div>
    </header>
    <main>
        <div class="container">
            <div class="header__group">

                <div class="header__menu" id="#infblock">
                    <form action="#" class="form" method="post">
                        <select name="direct">
                            <option disabled selected>Выберите стиль</option>
                            <?php
                            $dir  = mysqli_query($connect, "SELECT * FROM direction");
                            while($bab=mysqli_fetch_array($dir))
                            {
                                echo "<option>";
                                echo $bab['name'];
                                echo "</option>";
                            }
                            ?>
                        </select>
                        <select name="genre">
                                    <option disabled selected>Выберите жанр</option>
                                    <option value="Портрет">Портрет</option>
                                    <option value="Пейзаж">Пейзаж</option>
                                    <option value="Марина">Марина</option>
                                    <option value="Исторический">Исторический</option>
                                    <option value="Батальный">Батальный</option>
                                    <option value="Анималистика">Анималистика</option>
                                    <option value="Бытовой">Бытовой</option>
                                    <option value="Натюрморт">Натюрморт</option>
                                    <option value="Архитектурный">Архитектурный</option>
                                    <option value="Жанр Ню">Жанр Ню</option>
                        </select>
                        <select name="techn">
                            <option disabled selected>Выберите технику</option>
                            <option value="Масляная">Масляная</option>
                            <option value="Акриловая">Акриловая</option>
                            <option value="Акварель">Акварель</option>
                            <option value="Темпера">Темпера</option>
                            <option value="Гуашь">Гуашь</option>
                            <option value="Тушь">Тушь</option>
                            <option value="Пастель">Пастель</option>
                            <option value="Энкаустика">Энкаустика</option>
                            <option value="Аэрография">Аэрография</option>
                            <option value="Смешанная">Смешанная</option>
                        </select>
                        <input type="text" class="date" name="date" placeholder="Год" minlength="3" maxlength="4" max="2022" title="Введите корректную дату">
                        <button class="filter" type="submit" name="submit" value="Фильтр">Фильтр</button>
                        <a href="about.php">Очистить</a>
                    </form>
                </div>
            </div>
        </div>
    <div class="wrap" >
        <div class="informBlock" >
            <?php
            require_once 'vendor/connect.php';
            $connect = mysqli_connect('localhost', 'root', '', 'test' );




            if (isset($_POST['submit'])) {
                $direct = $_POST['direct'];
                $genre = $_POST['genre'];
                $techn = $_POST['techn'];
                $date = $_POST['date'];
                mysqli_report(MYSQLI_REPORT_ERROR);
                $res = mysqli_query($connect, "SELECT * FROM image_table WHERE direct LIKE '%$direct%' AND genre LIKE '%$genre%' AND techn LIKE '%$techn%' AND date LIKE '%$date%'");

                foreach ($res as $value) {
                    echo '<a href="ploch.php?id=' . $value['id'] . '">' . '<div class="otstyp" id=' . $value['id'] . '>';
                    echo "<img onclick='showImage(this)' src='" . $value['imagePath'] . "'/>";
                    echo '<div class="main__text" id=' . $value['id'] . '>' . '<h5>' . $value['picture'] . '</h5>' . '<p>' . $value['avtor'] . '</p>' . '</div>';// выводим данные
                    echo "</div>" . '</a>';
                }
            }
            else{
                $res = mysqli_query($connect, "SELECT * FROM image_table");
                foreach ($res as $value) {
                    echo '<a href="ploch.php?id=' . $value['id'] . '">' . '<div class="otstyp" id=' . $value['id'] . '>';
                    echo "<img onclick='showImage(this)' src='" . $value['imagePath'] . "'/>";
                    echo '<div class="main__text" id=' . $value['id'] . '>' . '<h5>' . $value['picture'] . '</h5>' . '<p>' . $value['avtor'] . '</p>' . '</div>';// выводим данные
                    echo "</div>" . '</a>';
                }
            }
            echo '</div>';
            echo '</div>';
            ?>

</main>
</body>
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
</html>