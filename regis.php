<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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

    @media (max-width: 320px) {
   .card {
        width: 100%;
        max-width: 300px;
    }
    /* Add any other styles you want to apply for mobile view */

    }
</style>

<?php
// Include the database configuration file
include "config.php";

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Initialize error messages array
$errorMessages = [
    'name' => '',
    'email' => '',
    'address' => '',
    'phone' => '',
    'password' => '',
    'confirm_password' => ''
];

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate form data
    if (empty($name)) {
        $errorMessages['name'] = "Name is required.";
    }
    if (empty($email)) {
        $errorMessages['email'] = "Email is required.";
    }
    if (empty($address)) {
        $errorMessages['address'] = "Address is required.";
    }
    if (empty($phone)) {
        $errorMessages['phone'] = "Phone number is required.";
    } elseif (!preg_match('/^\d{10}$/', $phone)) {
        $errorMessages['phone'] = "Phone number must be exactly 10 digits.";
    }
    if (empty($password)) {
        $errorMessages['password'] = "Password is required.";
    }
    if (empty($confirm_password)) {
        $errorMessages['confirm_password'] = "Confirm password is required.";
    } elseif ($password !== $confirm_password) {
        $errorMessages['confirm_password'] = "Passwords do not match.";
    }

    if (empty($errorMessages['name']) && empty($errorMessages['email']) && empty($errorMessages['address']) && empty($errorMessages['phone']) && empty($errorMessages['password']) && empty($errorMessages['confirm_password'])) {
        $password = md5($password); // Hash the password
        $user_type = 'U';

        // Prepare the SQL query
        $sql = "INSERT INTO mno (name, email, address, phone, password, user_type) VALUES ('$name', '$email', '$address', '$phone', '$password', '$user_type')";
        // Execute the query and check for errors
        if (mysqli_query($conn, $sql)) {
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>

<body>
    <div class="container">
        <div class="card">
            <h2 class="title">Register</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validateForm()">
                <input type="text" name="name" placeholder="Username*" value="<?php echo isset($name) ? $name : ''; ?>">
                <span class="error"><?php echo $errorMessages['name']; ?></span>
                <input type="email" name="email" placeholder="Email*"
                    value="<?php echo isset($email) ? $email : ''; ?>">
                <span class="error"><?php echo $errorMessages['email']; ?></span>
                <input type="number" name="phone" placeholder="Phone*"
                    value="<?php echo isset($phone) ? $phone : ''; ?>" oninput="limitPhoneLength(this)">
                <span class="error"><?php echo $errorMessages['phone']; ?></span>
                <input type="text" name="address" placeholder="Address*"
                    value="<?php echo isset($address) ? $address : ''; ?>">
                <span class="error"><?php echo $errorMessages['address']; ?></span>
                <input type="password" name="password" placeholder="Password*">
                <span class="error"><?php echo $errorMessages['password']; ?></span>
                <input type="password" name="confirm_password" placeholder="Confirm Password*">
                <span class="error"><?php echo $errorMessages['confirm_password']; ?></span>
                <div class="buttons">
                    <input type="submit" name="submit" value="Register">
                </div>
                <p class="dont">Already a member? <a style="color: green; text-decoration: none;" href="login.php">Sign
                        in</a></p>
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

            // Validate Name
            const name = document.forms[0]["name"].value;
            if (name == "") {
                document.querySelector('input[name="name"] + .error').textContent = "Name is required.";
                valid = false;
            }

            // Validate Email
            const email = document.forms[0]["email"].value;
            if (email == "") {
                document.querySelector('input[name="email"] + .error').textContent = "Email is required.";
                valid = false;
            }

            // Validate Address
            const address = document.forms[0]["address"].value;
            if (address == "") {
                document.querySelector('input[name="address"] + .error').textContent = "Address is required.";
                valid = false;
            }

            // Validate Phone
            const phone = document.forms[0]["phone"].value;
            if (phone == "") {
                document.querySelector('input[name="phone"] + .error').textContent = "Phone number is required.";
                valid = false;
            } else if (!/^\d{10}$/.test(phone)) {
                document.querySelector('input[name="phone"] + .error').textContent = "Phone number must be exactly 10 digits.";
                valid = false;
            }

            // Validate Password
            const password = document.forms[0]["password"].value;
            if (password == "") {
                document.querySelector('input[name="password"] + .error').textContent = "Password is required.";
                valid = false;
            }

            // Validate Confirm Password
            const confirm_password = document.forms[0]["confirm_password"].value;
            if (confirm_password == "") {
                document.querySelector('input[name="confirm_password"] + .error').textContent = "Confirm password is required.";
                valid = false;
            } else if (password !== confirm_password) {
                document.querySelector('input[name="confirm_password"] + .error').textContent = "Passwords do not match.";
                valid = false;
            }

            return valid;
        }

        function limitPhoneLength(input) {
            if (input.value.length > 10) {
                input.value = input.value.slice(0, 10);
            }
        }
    </script>


</body>

</html>