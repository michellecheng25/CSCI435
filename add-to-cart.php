<?php
    include "dbh.inc.php";
    
    $id = $_GET['product_id'];

    $sql="INSERT INTO saved_items VALUES($id, 1)";
    $result = mysqli_query($conn, $sql);

?>