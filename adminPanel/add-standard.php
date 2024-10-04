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


<div class="container add-category mt-5">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">UPLOAD STANDARD PRODUCT</h6>

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
                        <label for="">Select Category</label>
                        <select class="form-control" name="custom_id" id="">
                            <option value="">Select Category</option>
                            <?php
                            $query = $pdo->query("select * from standard");
                            $allcustomcat = $query->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($allcustomcat as $custumcat) {
                            ?>
                                <option value="<?php echo $custumcat['id'] ?>"> <?php echo $custumcat['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload Image</label>
                    <input type="file" name="productImage" class="form-control" required>
                </div>

                <button type="submit" name="add_standard_product" class="btn btn-primary">Add Product</button>
            </form>

        </div>
    </div>
</div>

<?php
include('footer.php');
?>