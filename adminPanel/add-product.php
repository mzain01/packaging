<?php
include('query.php');
include('header.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['adminname'])){
echo "<script>location.assign('signin.php');
</script>";
exit;
}
?>


<div class="container add-category mt-5">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">UPLOAD PRODUCT</h6>

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="Name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <textarea class="form-control" placeholder="Short Description" name="short_decs" required
                        style="height: 100px;"></textarea>
                </div>

                <div class="mb-3">
                    <textarea class="form-control" placeholder="Long Description" name="long_decs" required
                        id="floatingTextarea" style="height: 150px;"></textarea>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        <label for="">Add Industry Field</label>
                        <select class="form-control" name="industry_id" id="">
                            <option value="">Add Industry Field</option>
                            <?php
                            $query = $pdo->query("select * from industries");
                            $allIndustries = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($allIndustries as $industry) {
                            ?>
                                <option value="<?php echo $industry['id'] ?>"> <?php echo $industry['name'] ?></option>
                            <?php
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
                            $query = $pdo->query("select * from material");
                            $allMaterials = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($allMaterials as $Material) {
                            ?>
                                <option value="<?php echo $Material['id'] ?>"> <?php echo $Material['name'] ?></option>
                            <?php
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
                            $query = $pdo->query("select * from style");
                            $allStyles = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($allStyles as $style) {
                            ?>
                                <option value="<?php echo $style['id'] ?>"> <?php echo $style['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div> -->

                <div class="mb-3">
                    <label class="form-label">Upload Image</label>
                    <input type="file" name="productImage" class="form-control" required>
                </div>

                <button type="submit" name="add_product" class="btn btn-primary">Add Product</button>
            </form>

        </div>
    </div>
</div>

<?php
include('footer.php');
?>