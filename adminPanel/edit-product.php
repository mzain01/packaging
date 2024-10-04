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

    $query = $pdo->prepare("
    SELECT p.id AS product_id, 
           p.product_name, 
           p.product_short_desc, 
           p.product_long_desc, 
           COALESCE(s.name, 'Not Selected') AS style_name, 
           COALESCE(i.name, 'Not Selected') AS industry_name, 
           COALESCE(m.name, 'Not Selected') AS material_name, 
           p.product_img
    FROM products p
    LEFT JOIN style s ON p.product_style = s.id
    LEFT JOIN industries i ON p.product_industry = i.id
    LEFT JOIN material m ON p.product_material = m.id
    WHERE p.id = :id
");

    $query->bindParam('id', $id);
    $query->execute();
    $product = $query->fetch(PDO::FETCH_ASSOC);
}
?>

<div class="container add-category mt-5">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">EDIT PRODUCT</h6>

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
                        <label for="">Add Industry Field</label>
                        <select class="form-control" name="industry_id" id="">
                            <option value="">Add Industry Field</option>
                            <?php
                            $query = $pdo->query("SELECT * FROM industries");
                            $allIndustries = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($allIndustries as $industry) {
                                $selected = ($industry['id'] == $product['product_industry']) ? 'selected' : '';
                                echo "<option value='{$industry['id']}' {$selected}>{$industry['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <!-- <div class="mb-3">
                    <div class="form-group">
                        <label for="">Add Material Field</label>
                        <select class="form-control" name="material_id" id="">
                            <option value="">Add Material Field</option>
                            <?php
                            $query = $pdo->query("SELECT * FROM material");
                            $allMaterials = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($allMaterials as $material) {
                                $selected = ($material['id'] == $product['product_material']) ? 'selected' : '';
                                echo "<option value='{$material['id']}' {$selected}>{$material['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <label for="">Add Style Field</label>
                        <select class="form-control" name="style_id" id="">
                            <option value="">Add Style Field</option>
                            <?php
                            $query = $pdo->query("SELECT * FROM style");
                            $allStyles = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($allStyles as $style) {
                                $selected = ($style['id'] == $product['product_style']) ? 'selected' : '';
                                echo "<option value='{$style['id']}' {$selected}>{$style['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div> -->

                <div class="mb-3">
                    <label class="form-label">Upload Image</label>
                    <input type="file" name="productImage" class="form-control">

                    <div class="form-text">Previous Image</div>
                    <div class="form-text"><img src="img/<?php echo htmlspecialchars($product['product_img']); ?>" width="100px" alt=""></div>
                    <div class="form-text"><?php echo htmlspecialchars($product['product_img']); ?></div>
                </div>

                <button type="submit" name="update_product" class="btn btn-primary">Update Product</button>
            </form>




        </div>
    </div>
</div>


<?php
include('footer.php');
?>