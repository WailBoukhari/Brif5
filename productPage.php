<?php
include 'connection.php'; // Include the connection script

// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Fetch categories from the database
$categoriesResult = $conn->query("SELECT * FROM categories");

// Fetch products based on the selected category filter
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : null;

if ($categoryFilter) {
  $sql = "SELECT * FROM products WHERE categorie_id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $categoryFilter);
  $stmt->execute();
  $result = $stmt->get_result();
  $stmt->close();
} else {
  // If no category filter is applied, show all products
  $result = $conn->query("SELECT * FROM products");
}
// Check if the "Show Low on Stock Products" button is pressed
if (isset($_GET['show_low_stock'])) {
  $lowStockThreshold = 10; // Set your desired threshold
  $sql = "SELECT * FROM products WHERE quantite_stock < ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $lowStockThreshold);
  $stmt->execute();
  $result = $stmt->get_result();
  $stmt->close();
} else {
  // If the button is not pressed, show products based on the selected category filter or all products
  if ($categoryFilter) {
    $sql = "SELECT * FROM products WHERE categorie_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $categoryFilter);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
  } else {
    // If no category filter is applied and "Show Low on Stock Products" is not pressed, show all products
    $result = $conn->query("SELECT * FROM products");
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://kit.fontawesome.com/ea3542be0c.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: "Passion One", sans-serif;
    }

    nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
    }

    nav li {
      margin-right: 10px;
    }

    nav a {
      text-decoration: none;
      color: white;
    }

    .active {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <nav class="bg-black text-white">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-5">
      <div class="relative flex h-16 items-center justify-between">
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start text-2xl">
          <div class="flex flex-shrink-0 items-center">
            <h4>ElectroNacer</h4>
          </div>
        </div>
        <div class="flex items-end justify-end sm:items-stretch">
          <div class="flex flex-shrink-0 items-center">
            <h4 class="mr-6"><?php echo $user; ?></h4>
            <a href="loginPage.php"> <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <section style="
        background: url(assets/imgs/Group\ 5.png);
        background-repeat: no-repeat;
        background-size: cover;
      " class="text-white h-[40vh] flex">
    <div class="m-auto">
      <h1 class="font-bold text-8xl w-1/2">OUR PRODUCTS</h1>
    </div>
  </section>
  <section class="dark:bg-neutral-800">
    <nav class="bg-black text-white">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-5">
        <div class="relative flex h-16 items-center justify-between">
          <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start text-2xl">
            <div class="flex flex-shrink-0 items-center">
              <!-- Add this inside your navigation section -->
              <ul>
                <li><a href='productPage.php'>Show All</a></li>
                <?php
                while ($category = $categoriesResult->fetch_assoc()) {
                  $categoryId = $category['categorie_id'];
                  $categoryName = $category['nom_categorie'];
                  $categoryLink = "productPage.php?category=$categoryId";
                  echo "<li><a href='$categoryLink' >$categoryName</a></li>";
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="flex items-end justify-end sm:items-stretch">
            <div class="flex flex-shrink-0 items-center">
              <form method="get" action="productPage.php">
                <input type="hidden" name="show_low_stock" />
                <button type="submit">Show Low on Stock Products</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="flex flex-wrap justify-center">

      <?php
      // Display each product
      while ($row = $result->fetch_assoc()) {
        echo '<!-- product card-->';
        echo '
                <div class="relative m-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                    <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="#">
                        <img class="object-cover" src="' . $row['image_url'] . '" alt="product image" />
                    </a>
                    <div class="mt-4 px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl tracking-tight text-slate-900">' . $row['libelle'] . '</h5>
                        </a>
                        <div class="mt-2 mb-5 flex items-center justify-between">
                            <p>
                                <span class="text-3xl font-bold text-slate-900">$' . $row['prix_unitaire'] . '</span>
                                <!-- Add more details as needed -->
                            </p>
                            <!-- Add more details as needed -->
                        </div>
                        <!-- Add more details as needed -->
                    </div>
                </div>';
      }

      // Close the database connection
      $conn->close();
      ?>
    </div>
  </section>
  <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>