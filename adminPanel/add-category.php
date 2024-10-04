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

<!-- Form Start -->
<div class="container pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary rounded h-100 p-4 text-center">
                <h6 class="mb-4">ADD INDUSTRY</h6>
                <form method="post" class="d-grid justify-content-center">
                    <div class="mb-3">
                        <label class="form-label">Add Industy Name</label>
                        <input type="text" class="form-control" name="Name">
                    </div>
                    <button type="submit" name="addIndustry" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>

        <!-- <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary rounded h-100 p-4 text-center">
                <h6 class="mb-4">ADD MATERIAL</h6>
                <form method="post" class="d-grid justify-content-center">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Add Material Name</label>
                        <input type="text" class="form-control" name="Name">
                    </div>
                    <button type="submit" name="addMaterial" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>

        <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary rounded h-100 p-4 text-center">
                <h6 class="mb-4">ADD STYLE</h6>
                <form method="post" class="d-grid justify-content-center">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Add Style Name</label>
                        <input type="text" class="form-control" name="Name">
                    </div>
                    <button type="submit" name="addStyle" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div> -->

        <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary rounded h-100 p-4 text-center">
                <h6 class="mb-4">ADD Custom Product List </h6>
                <form method="post" class="d-grid justify-content-center">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Add Product Name</label>
                        <input type="text" class="form-control" name="Name">
                    </div>
                    <button type="submit" name="addCustom" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>

        <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary rounded h-100 p-4 text-center">
                <h6 class="mb-4">ADD Standard Product List </h6>
                <form method="post" class="d-grid justify-content-center">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Add Product Name</label>
                        <input type="text" class="form-control" name="Name">
                    </div>
                    <button type="submit" name="addStandard" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- Form End -->

<?php
include('footer.php');
?>