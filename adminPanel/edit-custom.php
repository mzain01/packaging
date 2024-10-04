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
    $query = $pdo->prepare(" SELECT * from custom where id = :id");
    $query->bindParam('id', $id);
    $query->execute();
    $custom = $query->fetch(PDO::FETCH_ASSOC);
}
?>

<div class="container add-category mt-5">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">EDIT CUSTOM</h6>

            <form method="post" enctype="multipart/form-data">


                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="Name" value="<?php echo $custom['name'] ?>" class="form-control">
                </div>

                <button type="submit" name="uptcustom" class="btn btn-primary">Update Custom</button>
            </form>

        </div>
    </div>
</div>


<?php
include('footer.php');

?>