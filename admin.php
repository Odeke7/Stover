<?php
// admin.php
include('includes/header.php');
include('includes/db.php');

if ($_SESSION['user_role'] != 'admin') {
    header("Location: index.php");
    exit();
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<main>
    <h1>Admin Dashboard</h1>
    <h2>Manage Products</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($product = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td>$<?php echo $product['price']; ?></td>
                    <td><a href="edit_product.php?id=<?php echo $product['id']; ?>">Edit</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<?php
include('includes/footer.php');
?>
