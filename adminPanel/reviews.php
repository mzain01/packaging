<?php
include('query.php');
include('header.php');
?>

<div class="container">
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4 mt-5">
            <h6 class="mb-4">Customer Reviews</h6>
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Email</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $query = $pdo->query("SELECT productreviews.*, products.product_name AS product_name 
                              FROM productreviews 
                              JOIN products ON productreviews.product_id = products.id");
                        $allreviews = $query->fetchAll(PDO::FETCH_ASSOC);
                        $serial_number = 1; // Initialize serial number counter
                        foreach ($allreviews as $review) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $serial_number++; ?></th>
                                <td><?php echo $review['name'] ?></td>
                                <td><?php echo $review['email'] ?></td>
                                <td><?php echo $review['comment'] ?></td>
                                <td><?php echo $review['product_name'] ?></td>
                                <td><?php echo $review['status'] ?></td>


                                <?php
                                if ($review['status'] == 'pending') {
                                ?>
                                    <td><a href="?approve=<?php echo $review['id'] ?>"><button class="btn btn-primary">Approve</button></a></td>
                                <?php
                                } else {
                                ?>
                                    <td><?php echo $review['status'] ?></td>
                                <?php
                                }
                                ?>
                                <td> <a href="?dltreview=<?= $review['id']; ?>" onclick="return confirmDelete();">
                                        <button class="btn btn-danger">Delete</button>
                                    </a></td>

                            </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function confirmDelete() {
        return confirm("Are you sure you want to delete this review?");
    }
</script>

<?php
include('footer.php');
?>