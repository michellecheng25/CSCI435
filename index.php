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

    <script src="search.js"></script>

    <title>Money Saver</title>

    <style type="text/css">
      .inner-container {
        max-width: 800px;
        margin: 0 auto;
      }
      .main {
        margin: 0 auto;
        margin-top: 150px;
        font-size: 2.5rem;
        text-align: center;
        font-family: Garamond, serif;
      }

      .searchbar {
        margin: 0 auto;
        margin-top: 100px;
      }

      .filters {
        display: flex;
        flex-wrap: wrap;
      }

      .region {
        max-width: 150px;
      }

      .active {
        background-color: green !important;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="inner-container">
        <div class="main">
          <b>Money Saver</b>
        </div>
        <div class="inner-container">
        <form class="searchbar d-flex" action="inventory.php">
          <input
            class="form-control mr-sm-2"
            type="text"
            placeholder="Search Item"
            aria-label="Search"
            name="item"
            id="searchbar"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="filters">
          <div class="priceFilter mt-2">
            <button
              type="button"
              class="btn btn-outline-success active"
              id="noFilter"
            >
              No Filter
            </button>
            <button
              type="button"
              class="btn btn-outline-success"
              id="cheapToExpensive"
            >
              $ to $$$
            </button>
            <button
              type="button"
              class="btn btn-outline-success"
              id="expensiveToCheap"
            >
              $$$ to $
            </button>
          </div>

          <select
            class="region form-select align-self-end mt-2 mx-auto"
            aria-label="Default select example"
          >
            <option selected value="all">All Regions</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Canada">Canada</option>
            <option value="India">India</option>
            <option value="Mexico">Mexico</option>
            <option value="Spain">Spain</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
          </select>
        </div>
        
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
