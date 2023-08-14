<?php
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ploch.css.php">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>scr Band</title>
</head>
<body>
<header>
    <div class="flex">
        <a href="about.php" class="logo">Art<span>Gallery</span></a>
        <div class="header__group">
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
<!--        <div class="header__group">-->
<!--            <div class="header__icon">-->
<!--                <form action="search.php" method="post">-->
<!--                    <input type="text" name="search" id="search" class="search" placeholder="Поиск">-->
<!--                    <input type="submit" name="submit" class="pusk" value=" ">-->
<!--                    <div id="list"></div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
        </div>
        <div class="container">
            <div class="genshtab">
        <?php

        $res  = mysqli_query($connect, "SELECT * FROM image_table WHERE id='".$_GET['id']."'");

        $raz = mysqli_fetch_array($res);
            echo "<img onclick='showImage(this)' id='myImg' src='".$raz['imagePath']."'/>";
            echo '<div class="mod__text" id=' . $raz['id'] . '>'. '<h1>Информация о картине</h1>'. '<p>Название: ' . $raz['picture'] . '</p>' . '<p>Автор: ' . $raz['avtor'] . '</p>' . '<p>Стиль живописи: ' . $raz['direct'] . '</p>' . '<p>Жанр живописи: ' . $raz['genre'] . '</p>' . '<p>Техника написания: ' . $raz['techn'] . '</p>' . '<p>Год создания: ' . $raz['date'] . '</p>' . '<p>Описание: ' . $raz['message'] . '</p>';// выводим данны

        $wer = mysqli_query($connect, "SELECT * ");
        $inf  = mysqli_query($connect, "SELECT * FROM reg_info WHERE id_author = '".$raz['id_author']."'");
        $mus = mysqli_fetch_array($inf);

        echo '<div class="inf__text">' . '<h1>Информация о музее</h1>'.'<p>Название музея: ' . $mus['namemus'] . '</p>' . '<p>Адрес: ' . $mus['adres'] . '</p>' . '<p>Телефонный номер : ' . $mus['number'] . '</p>' . '<p>Информация о музее: ' . $mus['infomus'] . '</p>'.'</div>';
        echo '</div>';
        ?>
            </div>
        </div>

</main>

<script src="js/main.js"></script>
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
<script>
    var modal = document.getElementById('myModal');
    var modalImg = document.getElementById('img01');

    function showImage(imgElement) {
        var src = imgElement.getAttribute("src");
        modal.style.display = "block";
        modalImg.src = src;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
</body>
</html>
