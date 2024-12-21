<?php
// process_login.php
include('includes/db.php');

$email = $_POST['email'];
$password = $_POST['password'];

// Query to check if user exists
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_role'] = $user['role']; // Assuming 'role' column exists (e.g., admin or user)
        header('Location: index.php');
        exit();
    } else {
        echo "Invalid password!";
    }
} else {
    echo "User not found!";
}
?>
