<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shrinika Choice | Dashboard</title>
    <link
      rel="shortcut icon"
      href="/img/logo1.jpg"
      type="image/x-icon"
      fa-solid="#fff"
    />

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f7f8;
        color: #333;
        margin: 0;
        display: flex;
      }

      .sidebar {
        width: 250px;
        height: 100vh;
        background-color: whitesmoke;
        color: black;
        position: fixed;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 20px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        transition: width 0.3s;
      }

      .logo {
        width: 150px;
        height: 140px;
        margin-bottom: 20px;
      }

      .nav {
        list-style: none;
        padding: 0;
        width: 100%;
      }

      .nav-item {
        width: 100%;
        position: relative;
      }

      .nav-link {
        display: block;
        color: black;
        padding: 15px;
        text-decoration: none;
        text-align: center;
        transition: background-color 0.3s, border-radius 0.3s;
        border-radius: 5px;
        font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
        font-size: 19px;
      }

      .nav-link:hover {
        background-color: #a53860;
        color: whitesmoke;
      }

      .dropdown-toggle::after {
        float: right;
      }

      .dropdown-menu {
        display: none;
        list-style: none;
        padding: 0;
        margin: 0;
        background-color: white;
        color: #a53860;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      }

      .dropdown-item {
        padding: 10px;
        color: #a53860;
        text-decoration: none;
        display: block;
        text-align: center;
        font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif,
          sans-serif;
        font-size: 19px;
      }

      .dropdown-item:hover {
        background-color: #f9f9f9;
        color: #a53860;
      }

      .nav-item.active .dropdown-menu {
        display: block;
      }

      .main-content {
        margin-left: 250px;
        padding: 20px;
        flex: 1;
        background-color: white;
        height: 100vh;
        font-size: 15px;
        transition: margin-left 0.3s;
        font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
        letter-spacing: 1px;
      }
      .nav-link:focus,
      .nav-link:hover {
        color: black;
      }

      .card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
      }
      .card-body {
        text-align: center;
        padding: 20px;
      }

      .card-title {
        font-size: 18px;
        font-weight: 550;
      }

      .card-text {
        font-size: 50px;
        font-weight: 700;
        color: #a53860;
      }

      .odometer {
        font-family: "Digital-7", monospace;
        font-size: 48px;
        color: #a53860;
        display: inline-block;
        width: 100%;
        text-align: center;
      }

      .table thead th {
        background-color: #a53860;
        color: #fff;
      }

      .table tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
        color: #333;
        font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
        font-size: 17px;
      }

      .table tbody tr td {
        vertical-align: middle;
      }

      .btn {
        background-color: #a53860;
        border: none;
        width: 60%;
        color: white;
        letter-spacing: 1px;
      }

      .btn:hover {
        background-color: #a53860;
        color: white;
      }

      .badge-warning {
        color: whitesmoke;
        background-color: #a53860;
        padding: 10px;
        font-size: 14px;
        letter-spacing: 1px;
      }
      .dashbord {
        font-size: 40px;
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <a href="dashbord.php">
        <img src="../img/1-png-removebg-preview.png" alt="Logo" class="logo"
      /></a>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link dropdown-toggle"
            href="category.php"
            data-toggle="dropdown"
            >Master</a
          >
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="category.php">Category</a></li>
            <li><a class="dropdown-item" href="colors.php">Color</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a
            class="nav-link dropdown-toggle"
            href="products.html"
            data-toggle="dropdown"
            >Products</a
          >
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="products.php">Product list</a>
            </li>
            <li>
              <a class="dropdown-item" href="products_add.php">Add Product</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="oders.php">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_register.php">Users</a>
        </li>
      </ul>
    </div>
    <div class="main-content">
      <h1 class="dashbord my-4">Dashboard</h1>
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Products</h5>
              <p class="card-text odometer" id="products">0</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Orders</h5>
              <p class="card-text odometer" id="orders">0</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Orders</h5>
              <p class="card-text odometer" id="total-orders">0</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total Inquiry</h5>
              <p class="card-text odometer" id="total-inquiry">0</p>
            </div>
          </div>
        </div>
      </div>

      <h2 class="my-4">Latest Orders</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>No</th>
              <th>ORDER ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Total Amount</th>
              <th>Order Status</th>
              <th>Date & Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>SC19/07/0001</td>
              <td>Parth Chauhan</td>
              <td>p@gmail.com</td>
              <td>₹ 1599</td>
              <td><span class="badge badge-warning">Pending</span></td>
              <td>19/07/2024 - 12:24 AM</td>
              <td>
                <a href="details.html"><button class="btn">Detail</button></a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>SC20/07/0001</td>
              <td>Shweta Godhani</td>
              <td>shweta@gmail.com</td>
              <td>₹ 2599</td>
              <td><span class="badge badge-warning">Pending</span></td>
              <td>20/07/2024 - 11:24 AM</td>
              <td>
                <a href="details.html"><button class="btn">Detail</button></a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>SC8/07/0001</td>
              <td>Darshita Mangukiya</td>
              <td>darshita@gmail.com</td>
              <td>₹ 1000</td>
              <td><span class="badge badge-warning">Pending</span></td>
              <td>29/06/2024 - 2:24 AM</td>
              <td>
                <a href="details.html"><button class="btn">Detail</button></a>
              </td>
            </tr>
            <!-- Additional rows can be added here -->
          </tbody>
        </table>
      </div>
    </div>

    <!-- JavaScript and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Function to simulate odometer effect
      function animateOdometer(id, start, end, duration) {
        const element = document.getElementById(id);
        let startTime = null;

        function updateCounter(timestamp) {
          if (!startTime) startTime = timestamp;
          const progress = timestamp - startTime;
          const value = Math.min(
            start + (end - start) * (progress / duration),
            end
          );
          element.textContent = Math.floor(value);

          if (progress < duration) {
            requestAnimationFrame(updateCounter);
          }
        }

        requestAnimationFrame(updateCounter);
      }

      // Initialize odometer animation
      window.onload = function () {
        animateOdometer("products", 0, 16, 2000);
        animateOdometer("orders", 0, 1, 2000);
        animateOdometer("total-orders", 0, 9, 2000);
        animateOdometer("total-inquiry", 0, 1, 2000);
      };

      document.querySelectorAll(".dropdown-toggle").forEach((item) => {
        item.addEventListener("click", function () {
          const parent = this.parentNode;
          const isActive = parent.classList.contains("active");

          document
            .querySelectorAll(".nav-item")
            .forEach((el) => el.classList.remove("active"));

          if (!isActive) {
            parent.classList.add("active");
          }
        });
      });
    </script>
  </body>
</html>
