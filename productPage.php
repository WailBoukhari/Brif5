<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Fetch user information or perform other authenticated actions here
$user_id = $_SESSION["user_id"];

?>
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
  echo '<!-- product card-->'; echo '
  <div
    class="relative m-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md"
  >
    '; echo '<a
      class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl"
      href="#"
      >'; echo '
      <img
        class="object-cover"
        src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
        alt="product image"
      />
      '; echo ' </a
    >'; echo '
    <div class="mt-4 px-5 pb-5">
      '; echo '<a href="#"
        >'; echo '
        <h5 class="text-xl tracking-tight text-slate-900">
          '; echo ' Nike Air MX Super 2500 - Red'; echo '
        </h5>
        '; echo '</a
      >'; echo '
      <div class="mt-2 mb-5 flex items-center justify-between">
        '; echo '
        <p>
          '; echo ' <span class="text-3xl font-bold text-slate-900">$449</span>';
          echo ' <span class="text-sm text-slate-900 line-through">$699</span>';
          echo '
        </p>
        '; echo '
        <div class="flex items-center">
          '; echo '<i class="fa-solid fa-star" style="color: #ffea00"></i>'; echo
          '<i class="fa-solid fa-star" style="color: #ffea00"></i>'; echo '
          <i class="fa-solid fa-star" style="color: #ffea00"></i>'; echo '<i
            class="fa-solid fa-star"
            style="color: #ffea00"
          ></i
          >'; echo '<i class="fa-solid fa-star" style="color: #ffea00"></i>'; echo
          '<span
            class="mr-2 ml-3 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold"
            >'; echo ' 5.0'; echo ' </span
          >'; echo '
        </div>
        '; echo '
      </div>
      '; echo '
      <a
        href="#"
        class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300"
        >'; echo '<i class="fa-solid fa-cart-shopping"></i>'; echo ' Add to cart';
        echo ' </a
      >'; echo '
    </div>
    '; echo '
  </div>
  ';
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
              <h4 class="mr-6"><?php echo $user_id; ?></h4>
              <a href="">
                <i
                  class="fa-solid fa-right-from-bracket"
                  style="color: #ffffff"
                > <a href="logout.php">Logout</a></i
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
