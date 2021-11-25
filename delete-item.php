<?php

    include "dbh.inc.php";
    
    $id = $_GET['remove'];

    $sql="DELETE FROM saved_items WHERE product_id = $id";

    $result = mysqli_query($conn, $sql);

?>