<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .card {
        width: 300px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        border-top: 4px solid #a53860;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    input {
        padding: 10px;
        border: none;
        background-color: transparent;
        border-bottom: 1px solid #ccc;
        color: #333;
    }

    .buttons {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .login-button {
        padding: 10px 20px;
        background-color: #f6226f;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type='submit'] {
        padding: 10px 20px;
        background-color: #a53860;
        color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    .title {
        color: #a53860;
        text-align: center;
        font-size: 35px;
    }

    .dont {
        font-size: 17px;
    }

    .error {
        color: red;
        font-size: 16px;
    }

    @media (max-width: 480px) {
        .card {
            width: 100%;
            max-width: 300px;
        }
    }
</style>


<?php
include "config.php";

$errorMessages =
 [
    'email' => '',
    'password' => ''
];

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data
    if (empty($email)) {
        $errorMessages['email'] = "Email is required.";
    }
    if (empty($password)) {
        $errorMessages['password'] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errorMessages['password'] = "Password must be at least 6 characters.";
    }

    if (empty($errorMessages['email']) && empty($errorMessages['password'])) {
        $password = md5($password);
        $sql = "SELECT * FROM mno WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION['user_name'] = $row['name'];
                header("location:index.php");
            }
        } else {
            $errorMessages['general'] = "Invalid email or password.";
        }
    }
}
?>

<body>
    <div class="container">
        <div class="card">
            <h2 class="title">Login</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
                <input type="email" name="email" placeholder="Email" value="<?php echo isset($email) ? $email : ''; ?>">
                <span class="error"><?php echo $errorMessages['email']; ?></span>
                <input type="password" name="password" placeholder="Password">
                <span class="error"><?php echo $errorMessages['password']; ?></span>
                <div class="buttons">
                    <input type="submit" name="submit" value="Login">
                </div>
                <p class="dont"> Don't have an account? <a style="color: green; text-decoration:none;"
                        href="regis.php">Sign Up</a></p>
                <span
                    class="error"><?php echo isset($errorMessages['general']) ? $errorMessages['general'] : ''; ?></span>
            </form>
        </div>
    </div>


    <script>
        function validateForm() {
            let valid = true;

            // Clear previous error messages
            document.querySelectorAll('.error').forEach((element) => {
                element.textContent = '';
            });

            // Validate Email
            const email = document.forms[0]["email"].value;
            if (email == "") {
                document.querySelector('input[name="email"] + .error').textContent = "Email is required.";
                valid = false;
            }

            // Validate Password
            const password = document.forms[0]["password"].value;
            if (password == "") {
                document.querySelector('input[name="password"] + .error').textContent = "Password is required.";
                valid = false;
            } else if (password.length < 6) {
                document.querySelector('input[name="password"] + .error').textContent = "Password must be at least 6 characters.";
                valid = false;
            }

            return valid;
        }
    </script>


</body>
</html>