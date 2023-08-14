<?php
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );
                if(isset($_POST["query"]))
                {
                    $output = '';
                    $query = "SELECT * FROM image_table WHERE picture LIKE '%".$_POST["query"]."%' OR avtor LIKE '%".$_POST["query"]."%'";
                    $result = mysqli_query($connect, $query);
                    $output = '<ul class="list-unstyled">';
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            $output .= '<li style="color:black">'.$row["picture"].'</li>';
                        }
                    }
                    else
                    {
                        $output .= '<li>Картина не найдена 404</li>';
                    }
                    $output .= '</ul>';
                    echo $output;
                } ?>
