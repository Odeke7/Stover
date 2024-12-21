<?php
// shop.php
include('includes/header.php');
include('includes/db.php');

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<main>
    <h1>Shop</h1>
    <div class="products">
        <?php while ($product = $result->fetch_assoc()) : ?>
            <div class="product">
                <img src="assets/images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                <h2><?php echo $product['name']; ?></h2>
                <p><?php echo $product['description']; ?></p>
                <p>Price: $<?php echo $product['price']; ?></p>
                <form action="add_to_cart.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        <?php endwhile; ?>
    </div>
</main>

<?php
include('includes/footer.php');
?>
