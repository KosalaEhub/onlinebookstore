<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "university";

// Redirect to login if not authenticated
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli($host, $user, $password, $dbname);
$user_id = $_SESSION['user_id'];

// Fetch user details
$sql = "SELECT first_name, last_name, phone_number, address, email, updated_at FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Handle form submission to update details
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $update_sql = "UPDATE users SET first_name = ?, last_name = ?, phone_number = ?, address = ?, email = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("sssssi", $first_name, $last_name, $phone_number, $address, $email, $user_id);

    if ($update_stmt->execute()) {
        // Fetch the updated timestamp
        $updated_at = date("Y-m-d H:i:s");

        // After updating, display a success message and the time of the update
        $update_message = "Details updated successfully on " . $updated_at;
    } else {
        $error = "Failed to update details: " . $conn->error;
    }
}

// Handle account deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $delete_sql = "DELETE FROM users WHERE id = ?";
    $delete_stmt = $conn->prepare($delete_sql);
    $delete_stmt->bind_param("i", $user_id);

    if ($delete_stmt->execute()) {
        session_destroy();
        header("Location: signup.php");
        exit();
    } else {
        $error = "Failed to delete account: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container py-5">
    <h1>Welcome, <?= htmlspecialchars($user['first_name']) ?>!</h1>

    <?php if (isset($update_message)) : ?>
        <div class="alert alert-success"><?= $update_message ?></div>
    <?php elseif (isset($error)) : ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <h2>Your Details</h2>
    <form action="dashboard.php" method="POST" class="mb-4">
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" value="<?= htmlspecialchars($user['first_name']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" value="<?= htmlspecialchars($user['last_name']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phone_number" id="phone_number" value="<?= htmlspecialchars($user['phone_number']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address" value="<?= htmlspecialchars($user['address']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update Details</button>
    </form>

    <?php if (!empty($user['updated_at'])): ?>
        <p><strong>Last updated:</strong> <?= htmlspecialchars($user['updated_at']) ?></p>
    <?php endif; ?>

    <form action="dashboard.php" method="POST">
        <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete your account?');">Delete Account</button>
    </form>

    <a href="logout.php" class="btn btn-secondary mt-3">Logout</a>
</div>
</body>
</html>
