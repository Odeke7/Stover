<?php
// profile.php
include('includes/header.php');
include('includes/db.php');

$userId = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = $userId";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<main>
    <h1>Your Profile</h1>
    <p>Name: <?php echo $user['name']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
    <!-- Add other profile details and update form if needed -->
</main>

<?php
include('includes/footer.php');
?>
