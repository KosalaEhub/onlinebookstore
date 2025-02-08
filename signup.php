<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "university";

// Connect to the database
$conn = new mysqli($host, $user, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
    } else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (first_name, last_name, phone_number, address, email, password_hash) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $first_name, $last_name, $phone_number, $address, $email, $password_hash);

        if ($stmt->execute()) {
            // Redirect to login page after successful registration
            header("Location: login.php");
            exit(); // Ensure no further code is executed
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                    <div class="text-center mb-5">
                        <a href="#!">
                            <img src="./assets/img/bsb-logo.svg" alt="Logo" width="175" height="57">
                        </a>
                    </div>
                    <form action="signup.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                    </form>
                    <hr class="mt-5 mb-4 border-secondary-subtle">
                    <div class="d-flex gap-2 flex-column flex-md-row justify-content-md-center">
                        <a href="signup.php" class="link-secondary text-decoration-none">Create new account</a>
                        <a href="#!" class="link-secondary text-decoration-none">Forgot password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
