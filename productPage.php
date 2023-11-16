<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script
      src="https://kit.fontawesome.com/ea3542be0c.js"
      crossorigin="anonymous"
    ></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Passion One", sans-serif;
      }
    </style>
  </head>
  <body>
  <?php
// Database connection parameters
$host = 'localhost';
$user = 'root';
$password = 'Tsukiiya15987463@@';
$database = 'ELECTRONACER';

// Create a connection to the database
$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Display each product
while ($row = $result->fetch_assoc()) {
    echo '!-- product card-->';
    echo '<img src="' . $row['image_url'] . '" alt="Product Image">';
    echo '<h2>' . $row['libelle'] . '</h2>';
    echo '<p><strong>Price:</strong> $' . $row['prix_unitaire'] . '</p>';
    echo '<p><strong>Minimum Quantity:</strong> ' . $row['quantite_min'] . '</p>';
    echo '<p><strong>Stock Quantity:</strong> ' . $row['quantite_stock'] . '</p>';
    echo '</div>';
}

// Close the database connection
$conn->close();
?>
    <nav class="bg-black text-white">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-5">
        <div class="relative flex h-16 items-center justify-between">
          <div
            class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start text-2xl"
          >
            <div class="flex flex-shrink-0 items-center">
              <h4>ElectroNacer</h4>
            </div>
          </div>
          <div class="flex items-end justify-end sm:items-stretch">
            <div class="flex flex-shrink-0 items-center">
              <h4 class="mr-6">NAME</h4>
              <a href="">
                <i
                  class="fa-solid fa-right-from-bracket"
                  style="color: #ffffff"
                ></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <section
      style="
        background: url(assets/imgs/Group\ 5.png);
        background-repeat: no-repeat;
        background-size: cover;
      "
      class="text-white h-[40vh] flex"
    >
      <div class="m-auto">
        <h1 class="font-bold text-8xl w-1/2 my-32">OUR PRODUCTS</h1>
      </div>
    </section>
    <section class="dark:bg-neutral-800">
      <nav class="bg-black text-white">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-5">
          <div class="relative flex h-16 items-center justify-between">
            <div
              class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start text-2xl"
            >
              <div class="flex flex-shrink-0 items-center">
                <span class="mr-2">CAT1</span>
                <span class="mr-2">CAT2</span>
                <span class="mr-2">CAT3</span>
                <span class="mr-2">CAT4</span>
              </div>
            </div>
            <div class="flex items-end justify-end sm:items-stretch">
              <div class="flex flex-shrink-0 items-center">
                <h4 class="mr-6">LOW ON STOCK</h4>
                <a href="">
                  <i
                    class="fa-solid fa-right-from-bracket"
                    style="color: #ffffff"
                  ></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="flex flex-wrap justify-center">
        
      </div>
    </section>
    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>
