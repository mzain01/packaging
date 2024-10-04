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

<style>
    @media (MAX-width: 992px) {
        .content {
            width: max-content !important;
        }
    }
</style>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
            <div class="d-flex justify-content-between mb-5">
                <h6 class="mb-4">PRODUCTS</h6>
                <a href="add-product.php"><button class="btn btn-primary">Add Product</button></a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Short Desc</th>
                            <th scope="col">Long Desc</th>
                            <!-- <th scope="col">Style</th> -->
                            <th scope="col">Industry</th>
                            <!-- <th scope="col">Material</th> -->
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
            //         $query = $pdo->query("
            //       SELECT p.id AS product_id, 
            //              p.product_name, 
            //              p.product_short_desc, 
            //              p.product_long_desc, 
            //              CASE 
            //                  WHEN p.product_style = 0 THEN 'Not Selected'
            //                  ELSE s.name
            //              END AS style_name, 
            //              CASE 
            //                  WHEN p.product_industry = 0 THEN 'Not Selected'
            //                  ELSE i.name
            //              END AS industry_name, 
            //              CASE 
            //                  WHEN p.product_material = 0 THEN 'Not Selected'
            //                  ELSE m.name
            //              END AS material_name, 
            //              p.product_img
            //       FROM products p
            //       LEFT JOIN style s ON p.product_style = s.id
            //       LEFT JOIN industries i ON p.product_industry = i.id
            //       LEFT JOIN material m ON p.product_material = m.id;
            //   ");

              $query = $pdo->query("
              SELECT p.id AS product_id, 
                     p.product_name, 
                     p.product_short_desc, 
                     p.product_long_desc,                
                     i.name
                     AS industry_name, 
                     p.product_img
              FROM products p
             
              LEFT JOIN industries i ON p.product_industry = i.id
             ;
          ");


                    $allproducts = $query->fetchAll(PDO::FETCH_ASSOC);
                    $serial_number = 1; // Initialize serial number counter

                    foreach ($allproducts as $product) {
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $serial_number++; ?></th>
                                <td><?php echo $product['product_name'] ?></td>
                                <td><textarea name="" readonly style="resize: none; background: transparent; border: none; color: #6C7293; height:150px; width:200px; focus:none;"><?php echo $product['product_short_desc'] ?></textarea></td>
                                <td><textarea name="" readonly style="resize: none; background: transparent; border: none; color: #6C7293; width:200px; height:190px;"><?php echo $product['product_long_desc'] ?></textarea></td>
                                <!-- <td><?php echo $product['style_name'] ?></td> Display style name -->
                                <td><?php echo $product['industry_name'] ?></td> <!-- Display industry name -->
                                <!-- <td><?php echo $product['material_name'] ?></td> Display material name -->
                                <td><img src="img/<?php echo $product['product_img']; ?>" width="200px" height="200px" alt=""></td>
                                <td><a href="edit-product.php?id=<?php echo $product['product_id'] ?>"><button class="btn btn-danger">Edit</button></a></td>
                                <td><a href="?dlt=<?php echo $product['product_id'] ?>"><button class="btn btn-primary">Delete</button></a></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>

            </div>
        </div>

    </div>
</div>


<?php
include('footer.php');
?>