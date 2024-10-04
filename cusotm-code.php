<?php
include('header.php');

// Initialize the query and conditions array
$query = "SELECT * FROM products WHERE 1=1"; // Default query to fetch all products
$conditions = [];
$parameters = [];

// Check if 'industry' is in the query string and add it to the conditions
if (isset($_GET['industry'])) {
    $conditions[] = "product_industry = :industry";
    $parameters[':industry'] = $_GET['industry'];
}

// Check if 'materialid' is in the query string and add it to the conditions
if (isset($_GET['materialid'])) {
    $conditions[] = "product_material = :materialid";
    $parameters[':materialid'] = $_GET['materialid'];
}

// Check if 'styleid' is in the query string and add it to the conditions
if (isset($_GET['styleid'])) {
    $conditions[] = "product_style = :styleid";
    $parameters[':styleid'] = $_GET['styleid'];
}

// If any conditions exist, append them to the query
if (count($conditions) > 0) {
    $query .= " AND " . implode(" AND ", $conditions);
}

try {
    // Prepare the query
    $stmt = $pdo->prepare($query);
    
    // Bind parameters
    foreach ($parameters as $key => $value) {
        $stmt->bindValue($key, $value);
    }

    // Execute the query
    $stmt->execute();
    $allProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Check if products exist
    if (count($allProducts) > 0) {
        echo '<div class="row mb--n30">';
        foreach ($allProducts as $product) {
            ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 custom-col mb-30">
                <article class="product__card">
                    <div class="product__card--thumbnail">
                        <a class="product__card--thumbnail__link display-block" href="product-details.php">
                            <img class="product__card--thumbnail__img" src="assets/img/product/main-product/product5.webp" alt="product-img">
                        </a>
                    </div>
                    <div class="product__card--content">
                        <h3 class="product__card--title">
                            <a href="product-details.php"><?php echo htmlspecialchars($product['name']); ?></a>
                        </h3>
                        <div class="product__card--footer">
                            <a class="product__card--btn primary__btn" href="product-details.php">
                                Order Now
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            
            <?php
        }
        echo '</div>';
    } else {
        echo '<p class="no-product">No products found matching the selected criteria.</p>';
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
