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

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = $pdo->prepare(" SELECT * from standardproduct where id = :id");
    $query->bindParam('id', $id);
    $query->execute();
    $product = $query->fetch(PDO::FETCH_ASSOC);
}
?>

<div class="container add-category mt-5">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">EDIT CUSTOM PRODUCT</h6>

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="Name" value="<?php echo htmlspecialchars($product['product_name']); ?>" class="form-control">
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name="short_decs" style="height: 100px;"><?php echo htmlspecialchars($product['product_short_desc']); ?></textarea>
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name="long_decs" id="floatingTextarea" style="height: 150px;"><?php echo htmlspecialchars($product['product_long_desc']); ?></textarea>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <label for="">Add Category</label>
                        <select class="form-control" name="custom_id" id="">
                            <option value="">Add Category</option>
                            <?php
                            $query = $pdo->query("SELECT * FROM standard");
                            $allMaterials = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($allMaterials as $material) {
                                $selected = ($material['id'] == $product['name']) ? 'selected' : '';
                                echo "<option value='{$material['id']}' {$selected}>{$material['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload Image</label>
                    <input type="file" name="productImage" class="form-control">

                    <div class="form-text">Previous Image</div>
                    <div class="form-text"><img src="img/<?php echo htmlspecialchars($product['product_img']); ?>" width="100px" alt=""></div>
                    <div class="form-text"><?php echo htmlspecialchars($product['product_img']); ?></div>
                </div>

                <button type="submit" name="update_standatd_product" class="btn btn-primary">Update Product</button>
            </form>




        </div>
    </div>
</div>


<?php
include('footer.php');
?>