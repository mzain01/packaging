<?php
include('dbcon.php');

if (isset($_POST['inp'])) {
    $inp = $_POST['inp'];


    $query = $pdo->prepare("  SELECT customproduct.*, custom.name AS custom_name
    FROM customproduct
    JOIN custom ON customproduct.cat_id = custom.id 
    WHERE customproduct.product_name LIKE :val OR custom.name LIKE :val");

    $inp = "%$inp%";
    $query->bindParam(':val', $inp);
    $serial_number = 1;
    $query->execute();
    $allcat = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($allcat as $product) {
?>
        <tr>
            <th scope="row"><?php echo $serial_number++; ?></th>
            <td><?php echo $product['product_name'] ?></td>
            <td><textarea name="" readonly style="resize: none; background: transparent; border: none; color: #6C7293; height:150px; width:200px; focus:none;"><?php echo $product['product_short_desc'] ?></textarea></td>
            <td><textarea name="" readonly style="resize: none; background: transparent; border: none; color: #6C7293; width:200px; height:190px;"><?php echo $product['product_long_desc'] ?></textarea></td>
            <td><?php echo $product['custom_name'] ?></td>
            <td><img src="img/<?php echo $product['product_img']; ?>" width="200px" height="200px" alt=""></td>
            <td><a href="editcustomproduct.php?id=<?php echo $product['id'] ?>"><button class="btn btn-danger">Edit</button></a></td>
            <td><a href="?dltcustom=<?php echo $product['id'] ?>"><button class="btn btn-primary">Delete</button></a></td>
        </tr>
<?php
    }
}
?>