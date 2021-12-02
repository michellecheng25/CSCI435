
<?php
  include "dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="filters.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Money Saver</title>

    <style type="text/css">
      .inner-container {
        max-width: 800px;
        margin: 0 auto;
      }

      .searchbar {
        margin: 0 auto;
        margin-top: 15px;
      }

      .filters {
        display: flex;
        flex-wrap: wrap;
      }

      .active {
        background-color: green !important;
      }
      
      .remove{
        color: red;
        cursor: pointer;
      }

    </style>

    
    <script>
        $(document).ready(function(){
            $(".remove").click(function(){
                var id = $(this).attr("value")
                $("#items").load("delete_item.php", {
                    product_id: id,
                });
            });
        });
    </script>

  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand" href="index.php">Money Saver</a>
      </nav>

      <br>

        <div class="itemsList">
            <form id="myform" action='shopping-cart.php'></form>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Link</th>
                    </tr>
                </thead>
                <tbody id="items">
                    <?php

                        include "add-item.php";
                        include "delete-item.php";

                        $sql="SELECT *, TRUNCATE(price*quantity, 2) as 'total' FROM saved_items INNER JOIN items ON saved_items.product_id = items.product_id;";
                        
                        echo $sql . "<br>";
                        
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                            
                        if($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td> <button form='myform' class='material-icons remove' name='remove' value='" . $row["product_id"] . "'>close</button> " . $row["item"] . "</td>";
                                echo "<td>" . $row["quantity"] . "</td>";
                                echo "<td>" . $row["total"] . "</td>";
                                echo "<td><a href='" . $row["weblink"] . "'>Go to Product Page</a>";
                                echo "</tr>";
                            }
                        }
                                            
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
