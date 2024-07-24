



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shrinika Choice | Categories</title>
  <link rel="shortcut icon" href="/img/logo1.jpg" type="image/x-icon" fa-solid="#fff" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style> 
    body {
      font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
      overflow-x: hidden;
      background-color: #e9ecef;
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

    .btn:hover {
      background-color: #a53860;
      color: white;
    }

    .content {
      margin-left: 250px;
      padding: 20px;
      flex: 1;
      background-color: #ecf0f1;
      height: 100%;
      transition: margin-left 0.3s;
    }

    .main-content {
      padding: 20px;
      display: flex;
      border-radius: 10px;
      box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px,
        rgba(17, 17, 26, 0.05) 0px 8px 32px;
    }

    .table thead th {
      background-color: #a53860;
      color: #fff;
      font-weight: 600;
    }

    .table tbody tr:nth-child(odd) {
      background-color: #e9ecef;
    }

    .table tbody tr td {
      vertical-align: middle;
    }

    .badge-success {
      color: #fff;
    }

    .badge-warning {
      background-color: #ffc107;
      color: #212529;
    }

    .top-nav {
      width: calc(100% - 250px);
      margin-left: 250px;
      padding: 10px 20px;
      background-color: #343a40;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: margin-left 0.3s;
    }

    .user-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #6c757d;
    }

    .os-toolbar {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #343a40;
      color: #fff;
      display: flex;
      justify-content: space-between;
      padding: 5px 20px;
      border-top: 2px solid #495057;
    }

    .create {
      background-color: #a53860;
      color: #e9ecef;
      font-size: 20px;
    }

    .hi {
      width: 40%;
      padding-top: 20px;

      margin: 20px;
    }

    .table-responsive {
      width: 60%;
      margin: 150px 0px 0px 30px;
    }

    textarea {
      width: 100%;
      padding: 12px 20px;
      margin: 10px 0;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      resize: vertical;
      background-color: #f8f9fa;
      color: #495057;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    textarea:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
      outline: none;
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <a href="dashbord.php"> <img src="../img/1-png-removebg-preview.png" alt="Logo" class="logo" /></a>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="dashbord.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">Master</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="category.php">Category</a></li>
          <li><a class="dropdown-item" href="colors.php">Color</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="products.php" data-toggle="dropdown">Products</a>
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



  <div class="content">
    <div class="main-content">
      <div class="hi">
        <h1 class="my-4">Categories</h1>

        <form class="mb-4">
          <div class="mb-3">
            <label for="categoryName" class="form-label">Name</label>
            <input type="text" class="form-control" id="categoryName" />
          </div>
          <div class="mb-3">
            <label for="categoryDescription" class="form-label">Description</label>
            <textarea name="form-control" id="categoryDescription" rows="8" cols="50"></textarea>
          </div>
          <button type="submit" class="btn create">Create Category</button>
        </form>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Category 1</td>
              <td>Description for category 1</td>
              <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Category 3</td>
              <td>Description for category 3</td>
              <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Category 4</td>
              <td>Description for category 4</td>
              <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>5</td>
              <td>Category 5</td>
              <td>Description for category 5</td>
              <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Category 6</td>
              <td>Description for category 6</td>
              <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>Category 7</td>
              <td>Description for category 7</td>
              <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>Category 8</td>
              <td>Description for category 8</td>
              <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>Category 9</td>
              <td>Description for category 9</td>
              <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            </tr>

            <!-- Additional rows can be added here -->
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- <div class="os-toolbar">
      <div>Application Icons</div>
      <div>Date | Time | Weather</div>
    </div> -->

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
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
  </script>
</body>

</html>