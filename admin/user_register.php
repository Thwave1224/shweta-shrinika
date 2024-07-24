<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shrinika Choice | Registered User List</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
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
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
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
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif,
                sans-serif;
            font-size: 19px;
        }

        .dropdown-item:hover {
            background-color:#f9f9f9;
            color: #a53860;
        }

        .nav-item.active .dropdown-menu {
            display: block;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            background-color: #ecf0f1;
            height: 100vh;
            transition: margin-left 0.3s;
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
            transition: width 0.3s, margin-left 0.3s;
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

        .table {
            margin-top: 20px;
            border-radius: 8px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #a53860;
            color: #fff;
            font-weight: 600;
        }

        .table tbody tr:nth-child(odd) {
            background-color: #e9ecef;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table tbody tr td {
            vertical-align: middle;
        }

        .badge-success {
            background-color: #28a745;
            color: #fff;
        }

        .badge-warning {
            background-color: #ffc107;
            color: #212529;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: static;
                box-shadow: none;
            }

            .top-nav {
                width: 100%;
                margin-left: 0;
            }

            .content {
                margin-left: 0;
            }
        }

        @media (max-width: 576px) {
            .nav-link {
                font-size: 14px;
                padding: 10px;
            }

            .top-nav {
                padding: 5px 10px;
            }

            .user-icon {
                width: 35px;
                height: 35px;
            }

            .os-toolbar {
                padding: 5px 10px;
                font-size: 12px;
            }
        }
        .heyy{
            background-color: #a53860;
color: #e9ecef;
font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="dashbord.php"><img src="../img/1-png-removebg-preview.png" alt="Logo" class="logo" /></a>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashbord.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown"
              >Master</a
            >
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="category.php">Category</a></li>
              <li><a class="dropdown-item" href="colors.php">Color</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="products.php" data-toggle="dropdown"
              >Products</a
            >
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="products.php">Product list</a></li>
              <li><a class="dropdown-item" href="products_add.php">Add Product</a></li>
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
        <h1 class="my-4">Registered User List</h1>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Username</th>
                        <th>Phone Number</th>
                        <th>Email ID</th>
                        <th>Registration Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>user1</td>
                        <td>1234567890</td>
                        <td>user1@example.com</td>
                        <td>01/01/2023</td>
                        <td><button class="btn btn-sm heyy toggle-status-btn">Deactivate</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>user2</td>
                        <td>2345678901</td>
                        <td>user2@example.com</td>
                        <td>01/02/2023</td>
                        <td><button class="btn btn-sm heyy toggle-status-btn">Deactivate</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>user3</td>
                        <td>3456789012</td>
                        <td>user3@example.com</td>
                        <td>01/03/2023</td>
                        <td><button class="btn btn-sm heyy toggle-status-btn">Deactivate</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>user4</td>
                        <td>4567890123</td>
                        <td>user4@example.com</td>
                        <td>01/04/2023</td>
                        <td><button class="btn btn-sm heyy toggle-status-btn">Deactivate</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>user5</td>
                        <td>5678901234</td>
                        <td>user5@example.com</td>
                        <td>01/05/2023</td>
                        <td><button class="btn btn-sm heyy toggle-status-btn">Deactivate</button></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>user6</td>
                        <td>6789012345</td>
                        <td>user6@example.com</td>
                        <td>01/06/2023</td>
                        <td><button class="btn btn-sm heyy toggle-status-btn">Deactivate</button></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>user7</td>
                        <td>7890123456</td>
                        <td>user7@example.com</td>
                        <td>01/07/2023</td>
                        <td><button class="btn btn-sm heyy toggle-status-btn">Deactivate</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.dropdown-toggle').forEach(item => {
            item.addEventListener('click', function(event) {
                event.preventDefault();
                const parent = this.parentNode;
                const isActive = parent.classList.contains('active');
                document.querySelectorAll('.nav-item').forEach(el => el.classList.remove('active'));
                if (!isActive) {
                    parent.classList.add('active');
                }
            });
        });
 

        const toggleButtons = document.querySelectorAll('.toggle-status-btn');
        toggleButtons.forEach(button => {
            button.addEventListener('click', function () {
                const isActive = this.classList.contains('btn-success');
                if (isActive) {
                    this.classList.remove('btn-success');
                    this.classList.add('btn-danger');
                    this.textContent = 'Activate';
                } else {
                    this.classList.remove('btn-danger');
                    this.classList.add('btn-success');
                    this.textContent = 'Deactivate';
                }
            });
        });
    });
</script>
</body>
</html>
