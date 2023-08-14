<?php
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );


    if (isset($_POST['submit'])){
        $direct = $_POST['direct'];

        $str = mysqli_query($connect, "SELECT * FROM image_table WHERE direct LIKE '%$direct%'");
        while ($value = mysqli_fetch_assoc($str)) {
            echo '<a href="ploch.php?id=' . $value['id'] . '">' . '<div class="otstyp" id=' . $value['id'] . '>';
            echo "<img onclick='showImage(this)' src='" . $value['imagePath'] . "'/>";
            echo '<div class="main__text" id=' . $value['id'] . '>' . '<h5>Название: ' . $value['picture'] . '</h5>' . '<p>Автор: ' . $value['avtor'] . '</p>' . '</div>';// выводим данные
            echo "</div>" . '</a>';
        }
    }

?>