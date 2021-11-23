
<?php
  include "dbh.inc.php";
  $item = $_GET["item"];
  $region = $_GET["region"]?:'all';
  $price = $_GET["price"]?:'none';
  $min = $_GET["min"];
  $max = $_GET["max"];
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

    </style>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Money Saver</a>
      </nav>

      <div class="inner-container">
        <form action="">
          <div class="searchbar d-flex">
            <input
              class="form-control mr-sm-2"
              type="text"
              placeholder="Search Item"
              aria-label="Search"
              name="item"
              id="searchbar"
              value='<?php echo $item?>'
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </div>


          <div class="filters">
          <select
              class="price form-select align-self-end mt-2 mx-auto"
              name="price"
            >
              <option value="noFilter">No Filter</option>
              <option value="asc">Price: Low to High</option>
              <option value="desc">Price: High to Low</option>
            </select>

            <select
              class="region form-select align-self-end mt-2 mx-auto"
              name="region"
            >
              <option value="all" >All Regions</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Canada">Canada</option>
              <option value="India">India</option>
              <option value="Mexico">Mexico</option>
              <option value="Spain">Spain</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>

      
            <div class="priceRange input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">$</span>
              </div>
              <input type="text" class="form-control"  name="min" placeholder="Min" value='<?php echo $min?>'>
              
              <div class="input-group-prepend">
                <span class="input-group-text">$</span>
              </div>
              <input type="text" class="form-control" name="max" placeholder="Max" value='<?php echo $max?>'>
             
              
            </div>
          </div>
        </form>
      </div>
        <div class="itemsList">
          <?php
              /*
              echo $price . "<br>";
              echo $region . "<br>";
              echo $min . "<br>";
              echo $max . "<br>";
              */
              $item = "%$item%";

              if(strlen($item) > 2) {
                //create a template
                $sql="SELECT * FROM items WHERE item LIKE ?;";
                //create a prepared statement
                $stmt = mysqli_stmt_init($conn);
                //prepare the prepared statement
                if(!mysqli_stmt_prepare($stmt, $sql)){
                  echo "No items found.";
                } else{
                  //bind parameter to the placeholder
                  mysqli_stmt_bind_param($stmt, "s", $item);
                  //Run parameters inside database
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
                  $resultCheck = mysqli_num_rows($result);

                  if($resultCheck > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo $row["item"] . "<br>";
                        echo $row["vendor"] . "<br>";
                        echo $row["price"] . "<br>";
                        echo $row["rating"] . "<br>";
                        echo $row["weblink"] . "<br>";
                    }
                  } else "No items found!";
                }
              }
              
          ?>
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
