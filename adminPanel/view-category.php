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

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">INDUSTRIES</h6>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $query = $pdo->query("select * from industries");
                    $allindustries = $query->fetchAll(PDO::FETCH_ASSOC);
                    $serial_number = 1; // Initialize serial number counter
                    foreach ($allindustries as $industry) {
                    ?>
                        <tbody>

                            <tr>
                                <th scope="row"><?php echo $serial_number++; ?></th>
                                <td><?php echo $industry['name'] ?></td>
                                <td><a href="edit-industry.php?id=<?php echo $industry['id'] ?>"><button class="btn btn-danger">Edit</button></a></td>
                                <td><a href="?dltindus=<?php echo $industry['id'] ?>"><button class="btn btn-primary">Delete</button></a></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>

            </div>
        </div>

        <!-- <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">STYLES</h6>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $query = $pdo->query("select * from style");
                    $allstyles = $query->fetchAll(PDO::FETCH_ASSOC);
                    $serial_number = 1; // Initialize serial number counter
                    foreach ($allstyles as $style) {
                    ?>
                        <tbody>

                            <tr>
                                <th scope="row"><?php echo $serial_number++; ?></th>
                                <td><?php echo $style['name'] ?></td>
                                <td><a href="edit-style.php?id=<?php echo $style['id'] ?>"><button class="btn btn-danger">Edit</button></a></td>
                                <td><a href="?dltstyle=<?php echo $style['id'] ?>"><button class="btn btn-primary">Delete</button></a></td>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>

            </div>
        </div>
        <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">MATERIAL</h6>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $query = $pdo->query("select * from material");
                    $allmaterials = $query->fetchAll(PDO::FETCH_ASSOC);
                    $serial_number = 1; // Initialize serial number counter
                    foreach ($allmaterials as $material) {
                    ?>
                        <tbody>

                            <tr>
                                <th scope="row"><?php echo $serial_number++; ?></th>
                                <td><?php echo $material['name'] ?></td>
                                <td><a href="edit-material.php?id=<?php echo $material['id'] ?>"><button class="btn btn-danger">Edit</button></a></td>
                                <td><a href="?dltmat=<?php echo $material['id']; ?>"><button class="btn btn-primary">Delete</button></a></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>

            </div>
        </div> -->
        <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Custom Products</h6>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $query = $pdo->query("select * from custom");
                    $allcustoms = $query->fetchAll(PDO::FETCH_ASSOC);
                    $serial_number = 1; // Initialize serial number counter
                    foreach ($allcustoms as $custom) {
                    ?>
                        <tbody>

                            <tr>
                                <th scope="row"><?php echo $serial_number++; ?></th>
                                <td><?php echo $custom['name'] ?></td>
                                <td><a href="edit-custom.php?id=<?php echo $custom['id'] ?>"><button class="btn btn-danger">Edit</button></a></td>
                                <td><a href="?dltcustomcat=<?php echo $custom['id']; ?>"><button class="btn btn-primary">Delete</button></a></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>

            </div>
        </div>

        <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Standard Products</h6>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $query = $pdo->query("select * from standard");
                    $allstandard = $query->fetchAll(PDO::FETCH_ASSOC);
                    $serial_number = 1; // Initialize serial number counter
                    foreach ($allstandard as $standard) {
                    ?>
                        <tbody>

                            <tr>
                                <th scope="row"><?php echo $serial_number++; ?></th>
                                <td><?php echo $standard['name'] ?></td>
                                <td><a href="edit-standard.php?id=<?php echo $standard['id'] ?>"><button class="btn btn-danger">Edit</button></a></td>
                                <td><a href="?dltstadard=<?php echo $standard['id']; ?>"><button class="btn btn-primary">Delete</button></a></td>
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
<!-- Table End -->



<?php
include('footer.php');
?>