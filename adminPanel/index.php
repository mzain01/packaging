<?php
include('query.php');
include('header.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['adminname'])) {
    echo "<script>location.assign('signin.php');
</script>";
    exit;
}
?>

<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <hr>
        <div class="text-center">
            <h2 class=" text-primary">PRODUCTS OVERVIEW</h2>
            <div class="container">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore neque, beatae quisquam itaque, omnis maiores laudantium ad debitis tenetur ipsum est accusantium at nemo. Qui nostrum, sed, quas odit animi accusamus iusto vero fugiat consequuntur quasi voluptates, neque doloremque eligendi?</p>
            </div>
        </div>
        <hr>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <?php
                    $totalProductsQuery = $pdo->query("SELECT COUNT(*) as total_products FROM products");
                    $totalProducts = $totalProductsQuery->fetch(PDO::FETCH_ASSOC)['total_products'];
                    ?>
                    <h6 class="mb-2">Total Industries Products</h6>
                    <h2 class="mb-0 text-center"> <?php
                                                    // Display the total number of products
                                                    echo $totalProducts;
                                                    ?></h2>
                </div>
            </div>
        </div>
        <div class="col-sm-6 
        col-xl-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <?php
                    $totalProductsQuery = $pdo->query("SELECT COUNT(*) as total_products FROM customproduct");
                    $totalProducts = $totalProductsQuery->fetch(PDO::FETCH_ASSOC)['total_products'];
                    ?>
                    <h6 class="mb-2">Total Custom Products</h6>
                    <h2 class="mb-0 text-center"> <?php
                                                    // Display the total number of products
                                                    echo $totalProducts;
                                                    ?></h2>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                    <?php
                    $totalProductsQuery = $pdo->query("SELECT COUNT(*) as total_products FROM standardproduct");
                    $totalProducts = $totalProductsQuery->fetch(PDO::FETCH_ASSOC)['total_products'];
                    ?>
                    <h6 class="mb-2">Total Standard Products</h6>
                    <h2 class="mb-0 text-center"> <?php
                                                    // Display the total number of products
                                                    echo $totalProducts;
                                                    ?></h2>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <h2 class=" text-primary">CATEGORIES OVERVIEW</h2>
            <div class="container">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam ipsa est velit, sapiente asperiores corporis dignissimos culpa cupiditate optio vitae, sed repellat hic atque accusamus? Quas perferendis veniam explicabo, natus eaque iusto, magni cum, labore consequatur ipsam recusandae ex ad.</p>
            </div>
        </div>
        <hr>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <?php
                    $totalProductsQuery = $pdo->query("SELECT COUNT(*) as total_products FROM industries");
                    $totalProducts = $totalProductsQuery->fetch(PDO::FETCH_ASSOC)['total_products'];
                    ?>
                    <h6 class="mb-2">Total Industry Categories</h6>
                    <h2 class="mb-0 text-center"> <?php
                                                    // Display the total number of products
                                                    echo $totalProducts;
                                                    ?></h2>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <?php
                    $totalProductsQuery = $pdo->query("SELECT COUNT(*) as total_products FROM custom");
                    $totalProducts = $totalProductsQuery->fetch(PDO::FETCH_ASSOC)['total_products'];
                    ?>
                    <h6 class="mb-2">Total Custom Categories</h6>
                    <h2 class="mb-0 text-center"> <?php
                                                    // Display the total number of products
                                                    echo $totalProducts;
                                                    ?></h2>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                    <?php
                    $totalProductsQuery = $pdo->query("SELECT COUNT(*) as total_products FROM standard");
                    $totalProducts = $totalProductsQuery->fetch(PDO::FETCH_ASSOC)['total_products'];
                    ?>
                    <h6 class="mb-2">Total Standard Categories</h6>
                    <h2 class="mb-0 text-center"> <?php
                                                    // Display the total number of products
                                                    echo $totalProducts;
                                                    ?></h2>
                </div>
            </div>
        </div>
        <!-- <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Revenue</p>
                        <h6 class="mb-0">$1234</h6>
                    </div>
                </div>
            </div> -->

    </div>
</div>
<!-- Sale & Revenue End -->

<?php
include('footer.php');
?>