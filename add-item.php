<?php

    $id = $_GET["insert"];

    $sql="INSERT INTO saved_items VALUES($id, 1)";
    echo $sql . "<br>";
    $result = mysqli_query($conn, $sql);

    
?>