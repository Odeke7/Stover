<?php
// cart.php
include('includes/header.php');
include('includes/db.php');

// Fetch user's cart from session
$userId = $_SESSION['user_id'];
$sql = "SELECT * FROM cart WHERE user_id = $userId";
$result = $conn->query($sql);
?>

<main>
    <h1>Your Cart</h1>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            while ($row = $result->fetch_assoc()) :
                $productId = $row['product_id'];
                $productSql = "SELECT * FROM products WHERE id = $productId";
                $productResult = $conn->query($productSql);
                $product = $productResult->fetch_assoc();
            ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td>$<?php echo $product['price']; ?></td>
                    <td>$<?php echo $row['quantity'] * $product['price']; ?></td>
                </tr>
                <?php $total += $row['quantity'] * $product['price']; ?>
            <?php endwhile; ?>
        </tbody>
    </table>
    <p>Total: $<?php echo $total; ?></p>
    <a href="checkout.php">Proceed to Checkout</a>
</main>

<?php
include('includes/footer.php');
?>
