<?php
include('header.php');

// Set the number of products per page
$products_per_page = 8;

// Get the current page number from the query string, default to 1 if not set
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $products_per_page; // Calculate the offset for the SQL query

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
    // Prepare the query to count total products
    $count_query = "SELECT COUNT(*) FROM products WHERE 1=1";
    if (count($conditions) > 0) {
        $count_query .= " AND " . implode(" AND ", $conditions);
    }
    $count_stmt = $pdo->prepare($count_query);
    foreach ($parameters as $key => $value) {
        $count_stmt->bindValue($key, $value);
    }
    $count_stmt->execute();
    $total_products = $count_stmt->fetchColumn();

    // Calculate the total number of pages
    $total_pages = ceil($total_products / $products_per_page);

    // Add LIMIT and OFFSET for pagination directly in the query (no binding for LIMIT and OFFSET)
    $query .= " LIMIT $products_per_page OFFSET $offset";

    // Prepare the query for fetching products
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
?>
        <!-- Start shop section -->
        <div class="shop__section section--padding">
            <div class="container">
                <div class="row">

                    <div class="col-xl-12 col-lg-12 shop-col-width-lg-12">
                        <div class="shop__right--sidebar">



                            <!-- Start Product section -->

                            <!-- heading start -->
                            <div class="section__heading border-bottom mb-30">
                                <h2 class="section__heading--maintitle">Shop By <span>Product</span></h2>
                            </div>

                            <!-- heading end -->

                            <div class="shop__product--wrapper">

                                <!-- Filteration Start -->
                                <!-- <div class="shop__header d-flex align-items-center justify-content-between mb-30">
                                    <div class="product__view--mode d-flex align-items-center">

                                        <div class="product__view--mode__list product__short--by align-items-center d-flex ">
                                            <label class="product__view--label">Prev Page :</label>
                                            <div class="select shop__header--select">
                                                <select class="product__view--select">
                                                    <option selected value="1">65</option>
                                                    <option value="2">40</option>
                                                    <option value="3">42</option>
                                                    <option value="4">57 </option>
                                                    <option value="5">60 </option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <p class="product__showing--count">Showing 1–9 of 21 results</p>
                                </div> -->
                                <!-- Filteration end -->

                                <!-- Product Area Start -->
                                <div class="tab_content">
                                    <div id="product_grid" class="tab_pane active show">
                                        <div class="product__section--inner">
                                            <div class="row mb--n30">
                                                <?php foreach ($allProducts as $product) { ?>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 custom-col mb-30">
                                                        <article class="product__card">
                                                            <div class="product__card--thumbnail">
                                                                <a class="product__card--thumbnail__link display-block" href="product-details.php?id=<?php echo htmlspecialchars($product['id']); ?>">
                                                                    <img class="product__card--thumbnail__img" src="adminPanel/img/<?php echo $product['product_img']?>" alt="product-img">

                                                                </a>

                                                            </div>
                                                            <div class="product__card--content">

                                                                <h3 class="product__card--title"> <a href="product-details.php?id=<?php echo htmlspecialchars($product['id']); ?>"><?php echo htmlspecialchars($product['product_name']); ?></a></h3>

                                                                <div class="product__card--footer">
                                                                    <a class="product__card--btn primary__btn" href="product-details.php?id=<?php echo htmlspecialchars($product['id']); ?>">
                                                                        <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z" fill="currentColor" />
                                                                        </svg>
                                                                        Order Now
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                            <?php
                        } else {
                            echo '<div class="notice">
                                    <h2 class="no-product">No products found matching the selected Category.</h2>
                                    </div>';
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                            ?>



                                </div>
                                <!-- Product Area end -->

                                <!-- Pagination Start -->
                                <div class="pagination__area">
                                    <nav class="pagination justify-content-center">
                                        <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                            <!-- Preserve current filters in pagination links -->
                                            <?php
                                            // Build the base URL with the current filters
                                            $query_string = '';
                                            if (isset($_GET['industry'])) {
                                                $query_string .= '&industry=' . $_GET['industry'];
                                            }
                                            if (isset($_GET['materialid'])) {
                                                $query_string .= '&materialid=' . $_GET['materialid'];
                                            }
                                            if (isset($_GET['styleid'])) {
                                                $query_string .= '&styleid=' . $_GET['styleid'];
                                            }
                                            ?>

                                            <!-- Previous page link -->
                                            <?php if ($page > 1): ?>
                                                <li class="pagination__list">
                                                    <a href="?page=<?php echo $page - 1 . $query_string; ?>" class="pagination__item--arrow link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                            <!-- Page numbers -->
                                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                                <li class="pagination__list">
                                                    <a href="?page=<?php echo $i . $query_string; ?>" class="pagination__item<?php if ($i == $page) echo ' pagination__item--current'; ?>">
                                                        <?php echo $i; ?>
                                                    </a>
                                                </li>
                                            <?php endfor; ?>

                                            <!-- Next page link -->
                                            <?php if ($page < $total_pages): ?>
                                                <li class="pagination__list">
                                                    <a href="?page=<?php echo $page + 1 . $query_string; ?>" class="pagination__item--arrow link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Pagination End -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End shop section -->

        <?php
        include('footer.php');
        ?>