<?php
        echo "<table border= 1px solid black>";   
    foreach ($_POST as $key => $value) {
        if(is_array($value)){
            foreach ($value as $item) {
                echo "<tr><td>$key</td><td>$item</td></tr>";
            }
        }else{
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
    }
    echo "</table>";
?>