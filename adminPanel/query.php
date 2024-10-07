<?php
include('dbcon.php');
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the query
    $query = $pdo->prepare('SELECT * FROM user WHERE u_email = :u_email AND u_password = :u_password');
    $query->bindParam(':u_email', $email);
    $query->bindParam(':u_password', $password);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Extract initials
        $firstNameInitial = isset($user['name']) ? substr($user['name'], 0, 1) : '';

        $initials = $firstNameInitial;

        // Store user data in session
        if ($user['role_id'] == 1) {
            $_SESSION['adminname'] = $user['u_name'];
            $_SESSION['adminemail'] = $user['u_email'];
            $_SESSION['initials'] = $initials;
            echo "<script>location.assign('index.php');</script>";
        }
    } else {
        echo "<script>alert('Invalid First Name or Password');</script>";
    }
}
// ADD INDUSTRY

if (isset($_POST['addIndustry'])) {
    $IName = $_POST['Name'];
    $query = $pdo->prepare("insert into industries (name) values (:IName)");
    $query->bindParam('IName', $IName);
    $query->execute();
    echo "<script>alert('Industry added succesfully')
            location.assign('add-category.php')</script>";
}

if (isset($_POST['addStandard'])) {
    $IName = $_POST['Name'];
    $query = $pdo->prepare("insert into standard (name) values (:IName)");
    $query->bindParam('IName', $IName);
    $query->execute();
    echo "<script>alert('Standard Category added succesfully')
            location.assign('add-category.php')</script>";
}

// ADD MATERIAL

// if (isset($_POST['addMaterial'])) {
//     $IName = $_POST['Name'];
//     $query = $pdo->prepare("insert into material (name) values (:IName)");
//     $query->bindParam('IName', $IName);
//     $query->execute();
//     echo "<script>alert('Material added succesfully')
//             location.assign('add-category.php')</script>";
// }

// //  ADD STYLE

// if (isset($_POST['addStyle'])) {
//     $IName = $_POST['Name'];
//     $query = $pdo->prepare("insert into style (name) values (:IName)");
//     $query->bindParam('IName', $IName);
//     $query->execute();
//     echo "<script>alert('Style added succesfully')
//             location.assign('add-category.php')</script>";
// }

if (isset($_POST['addCustom'])) {
    $IName = $_POST['Name'];
    $query = $pdo->prepare("insert into Custom (name) values (:IName)");
    $query->bindParam('IName', $IName);
    $query->execute();
    echo "<script>alert('Custom Category added succesfully')
            location.assign('add-category.php')</script>";
}

// ADD PRODUCT

if (isset($_POST['add_product'])) {
    $Name = $_POST['Name'];
    $short_decs = $_POST['short_decs'];
    $long_decs = $_POST['long_decs'];
    $industry_id = $_POST['industry_id'];
    // $material_id = $_POST['material_id'];
    // $style_id = $_POST['style_id'];
    $imageName = $_FILES['productImage']['name'];
    $imageTempName =  $_FILES['productImage']['tmp_name'];
    $extension = pathinfo($imageName, PATHINFO_EXTENSION);
    $destination = "img/industries/" . $imageName;
    if ($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp") {
        if (move_uploaded_file($imageTempName, $destination)) {

            $query = $pdo->prepare("insert into products (product_name, product_short_desc, product_long_desc, product_industry, product_img ) values (:product_name, :product_short_desc, :product_long_desc, :product_industry, :product_img )");
            $query->bindParam('product_name', $Name);
            $query->bindParam('product_short_desc', $short_decs);
            $query->bindParam('product_long_desc', $long_decs);
            $query->bindParam('product_industry', $industry_id);
            // $query->bindParam('product_material', $material_id);
            // $query->bindParam('product_style', $style_id);
            $query->bindParam('product_img', $imageName);
            $query->execute();
            echo "<script>alert('Product added succesfully');
            location.assign('view-product.php')</script>";
        }
    }
}

// ADD CUSTOM PRODUCT

if (isset($_POST['add_custom_product'])) {
    $Name = $_POST['Name'];
    $short_decs = $_POST['short_decs'];
    $long_decs = $_POST['long_decs'];
    $catid = $_POST['custom_id'];
    $imageName = $_FILES['productImage']['name'];
    $imageTempName =  $_FILES['productImage']['tmp_name'];
    $extension = pathinfo($imageName, PATHINFO_EXTENSION);
    $destination = "img/custom/" . $imageName;
    if ($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp") {
        if (move_uploaded_file($imageTempName, $destination)) {

            $query = $pdo->prepare("insert into customproduct (product_name, product_short_desc, product_long_desc, cat_id, product_img ) values (:product_name, :product_short_desc, :product_long_desc, :cat_id, :product_img )");
            $query->bindParam('product_name', $Name);
            $query->bindParam('product_short_desc', $short_decs);
            $query->bindParam('product_long_desc', $long_decs);
            $query->bindParam('cat_id', $catid);
            $query->bindParam('product_img', $imageName);
            $query->execute();
            echo "<script>alert('Product added succesfully');
            location.assign('viewcustomproduct.php')</script>";
        }
    }
}

if (isset($_POST['add_standard_product'])) {
    $Name = $_POST['Name'];
    $short_decs = $_POST['short_decs'];
    $long_decs = $_POST['long_decs'];
    $catid = $_POST['custom_id'];
    $imageName = $_FILES['productImage']['name'];
    $imageTempName =  $_FILES['productImage']['tmp_name'];
    $extension = pathinfo($imageName, PATHINFO_EXTENSION);
    $destination = "img/" . $imageName;
    if ($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp") {
        if (move_uploaded_file($imageTempName, $destination)) {

            $query = $pdo->prepare("insert into standardproduct (product_name, product_short_desc, product_long_desc, product_cat, product_img ) values (:product_name, :product_short_desc, :product_long_desc, :cat_id, :product_img )");
            $query->bindParam('product_name', $Name);
            $query->bindParam('product_short_desc', $short_decs);
            $query->bindParam('product_long_desc', $long_decs);
            $query->bindParam('cat_id', $catid);
            $query->bindParam('product_img', $imageName);
            $query->execute();
            echo "<script>alert('Product added succesfully');
            location.assign('viewstandard.php')</script>";
        }
    }
}

// PRODCUT DELETE

if (isset($_GET['dlt'])) {
    $id = $_GET['dlt'];
    $query = $pdo->prepare("delete from products where id = :id");
    $query->bindParam('id', $id);

    $dltquery = $pdo->prepare("delete from productreviews where product_id = :id");
    $query->execute();
    $dltquery->execute();

    echo "<script>alert('Product deleted succesfully');
    location.assign('view-product.php');</script>";
}

// CUSTOM PRODUCT DELETE

if (isset($_GET['dltcustom'])) {
    $id = $_GET['dltcustom'];
    $query = $pdo->prepare("delete from customproduct where id = :id");
    $query->bindParam('id', $id);
    $query->execute();

    $dltquery = $pdo->prepare("delete from customproductreviews where product_id = :id");
    $dltquery->bindParam('id', $id);
    $dltquery->execute();

    echo "<script>alert('Product deleted succesfully');
    location.assign('viewcustomproduct.php')</script>";
}

if (isset($_GET['dltstandard'])) {
    $id = $_GET['dltstandard'];
    $query = $pdo->prepare("delete from standardproduct where id = :id");
    $query->bindParam('id', $id);
    $query->execute();

    $dltquery = $pdo->prepare("delete from standardproductreviews where product_id = :id");
    $dltquery->bindParam('id', $id);
    $dltquery->execute();

    echo "<script>alert('Product deleted succesfully')
    location.assign('viewstandard.php')</script>";
}

// DELETE INDUSTRY

if (isset($_GET['dltindus'])) {
    $id = $_GET['dltindus'];
    $query = $pdo->prepare("delete from industries where id = :id");
    $query->bindParam('id', $id);
    $query->execute();
    echo "<script>alert('Industry Category deleted succesfully')
    location.assign('view-category.php')</script>";
}

if (isset($_GET['dltstadard'])) {
    $id = $_GET['dltstadard'];
    $query = $pdo->prepare("delete from standard where id = :id");
    $query->bindParam('id', $id);
    $query->execute();
    echo "<script>alert('Standard Category deleted succesfully')
    location.assign('view-category.php')</script>";
}


// //  DELETE STYLE
// if (isset($_GET['dltstyle'])) {
//     $id = $_GET['dltstyle'];
//     $query = $pdo->prepare("delete from style where id = :id");
//     $query->bindParam('id', $id);
//     $query->execute();
//     echo "<script>alert('Style Category deleted succesfully')
//     location.assign('view-category.php')</script>";
// }

// // DELETE MATERIAL

// if (isset($_GET['dltmat'])) {
//     $id = $_GET['dltmat'];
//     $query = $pdo->prepare("delete from material where id = :id");
//     $query->bindParam('id', $id);
//     $query->execute();
//     echo "<script>alert('Material Category deleted succesfully')
//     location.assign('view-category.php')</script>";
// }

//  DELETE STYLE
if (isset($_GET['dltcustomcat'])) {
    $id = $_GET['dltcustomcat'];
    $query = $pdo->prepare("delete from custom where id = :id");
    $query->bindParam('id', $id);
    $query->execute();
    echo "<script>alert('Custom Category deleted succesfully')
    location.assign('view-category.php')</script>";
}

// UPDATE PRODUCT

if (isset($_POST['update_product'])) {
    $id = $_GET['id'];
    $Name = $_POST['Name'];
    $short_decs = $_POST['short_decs'];
    $long_decs = $_POST['long_decs'];
    $industry_id = $_POST['industry_id'];
    // $material_id = $_POST['material_id'];
    // $style_id = $_POST['style_id'];

    $query = $pdo->prepare("update products set product_name = :product_name, product_short_desc = :product_short_desc, product_long_desc = :product_long_desc, product_industry = :product_industry where id = :id");

    if (isset($_FILES['productImage'])) {
        $productImageName = $_FILES['productImage']['name'];
        $productImageTmpName = $_FILES['productImage']['tmp_name'];
        $extension = pathinfo($productImageName, PATHINFO_EXTENSION);
        $destination = 'img/' . $productImageName;
        if ($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp") {
            if (move_uploaded_file($productImageTmpName, $destination)) {
                $query = $pdo->prepare("update products set product_name = :product_name, product_short_desc = :product_short_desc, product_long_desc = :product_long_desc, product_industry = :product_industry, product_img = :product_img where id = :id");
                $query->bindParam('product_img', $productImageName);
            }
        }
    }

    $query->bindParam('product_name', $Name);
    $query->bindParam('product_short_desc', $short_decs);
    $query->bindParam('product_long_desc', $long_decs);
    $query->bindParam('product_industry', $industry_id);
    // $query->bindParam('product_material', $material_id);
    // $query->bindParam('product_style', $style_id);
    $query->bindParam('id', $id);

    $query->execute();

    echo "<script>alert('Product Updated succesfully');
            location.assign('view-product.php');</script>";
}
// UPDATE CUSTOM PRODUCT

if (isset($_POST['update_custom_product'])) {
    $id = $_GET['id'];
    $Name = $_POST['Name'];
    $short_decs = $_POST['short_decs'];
    $long_decs = $_POST['long_decs'];
    $cat = $_POST['custom_id'];

    $query = $pdo->prepare("update customproduct set product_name = :product_name, product_short_desc = :product_short_desc, product_long_desc = :product_long_desc, cat_id = :cat_id where id = :id");

    if (isset($_FILES['productImage'])) {
        $productImageName = $_FILES['productImage']['name'];
        $productImageTmpName = $_FILES['productImage']['tmp_name'];
        $extension = pathinfo($productImageName, PATHINFO_EXTENSION);
        $destination = 'img/' . $productImageName;
        if ($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp") {
            if (move_uploaded_file($productImageTmpName, $destination)) {
                $query = $pdo->prepare("update products set product_name = :product_name, product_short_desc = :product_short_desc, product_long_desc = :product_long_desc, cat_id = :cat_id, product_img = :product_img where id = :id");
                $query->bindParam('product_img', $productImageName);
            }
        }
    }
    $query->bindParam('product_name', $Name);
    $query->bindParam('product_short_desc', $short_decs);
    $query->bindParam('product_long_desc', $long_decs);
    $query->bindParam('cat_id', $cat);
    $query->bindParam('id', $id);

    $query->execute();

    echo "<script>alert('Custom Product Updated succesfully')
            location.assign('viewcustomproduct.php');</script>";
}

// UPDATE STANDARD PRODUCT

if (isset($_POST['update_standatd_product'])) {
    $id = $_GET['id'];
    $Name = $_POST['Name'];
    $short_decs = $_POST['short_decs'];
    $long_decs = $_POST['long_decs'];
    $cat = $_POST['custom_id'];

    $query = $pdo->prepare("update standardproduct set product_name = :product_name, product_short_desc = :product_short_desc, product_long_desc = :product_long_desc, product_cat = :product_cat where id = :id");

    if (isset($_FILES['productImage'])) {
        $productImageName = $_FILES['productImage']['name'];
        $productImageTmpName = $_FILES['productImage']['tmp_name'];
        $extension = pathinfo($productImageName, PATHINFO_EXTENSION);
        $destination = 'img/' . $productImageName;
        if ($extension == "jpg" || $extension == "png" || $extension == "jpeg" || $extension == "webp") {
            if (move_uploaded_file($productImageTmpName, $destination)) {
                $query = $pdo->prepare("update products set product_name = :product_name, product_short_desc = :product_short_desc, product_long_desc = :product_long_desc, product_cat = :product_cat, product_img = :product_img where id = :id");
                $query->bindParam('product_img', $productImageName);
            }
        }
    }

    $query->bindParam('product_name', $Name);
    $query->bindParam('product_short_desc', $short_decs);
    $query->bindParam('product_long_desc', $long_decs);
    $query->bindParam('product_cat', $cat);
    $query->bindParam('id', $id);

    $query->execute();

    echo "<script>alert('Standard Product Updated succesfully')
            location.assign('viewstandard.php');</script>";
}

//UPDATE CATEGORY//

// update industry
if (isset($_POST['uptindustry'])) {
    $id = $_GET['id'];
    $iName = $_POST['Name'];
    $query = $pdo->prepare("update industries set name = :iName where id = :cId");
    $query->bindParam('iName', $iName);
    $query->bindParam('cId', $id);
    $query->execute();
    echo "<script>alert('category updated Successfully');
    location.assign('view-category.php');
    </script>";
}

if (isset($_POST['uptstandard'])) {
    $id = $_GET['id'];
    $iName = $_POST['Name'];
    $query = $pdo->prepare("update standard set name = :iName where id = :cId");
    $query->bindParam('iName', $iName);
    $query->bindParam('cId', $id);
    $query->execute();
    echo "<script>alert('Standard Category updated Successfully');
    location.assign('view-category.php');
    </script>";
}

// // update material
// if (isset($_POST['uptmaterial'])) {
//     $id = $_GET['id'];
//     $iName = $_POST['Name'];
//     $query = $pdo->prepare("update material set name = :iName where id = :cId");
//     $query->bindParam('iName', $iName);
//     $query->bindParam('cId', $id);
//     $query->execute();
//     echo "<script>alert('Material updated Successfully');
//     location.assign('view-category.php');
//     </script>";
// }

// // update style

// if (isset($_POST['uptstyle'])) {
//     $id = $_GET['id'];
//     $iName = $_POST['Name'];
//     $query = $pdo->prepare("update style set name = :iName where id = :cId");
//     $query->bindParam('iName', $iName);
//     $query->bindParam('cId', $id);
//     $query->execute();
//     echo "<script>alert('Style updated Successfully');
//     location.assign('view-category.php');
//     </script>";
// }

// update Custom

if (isset($_POST['uptcustom'])) {
    $id = $_GET['id'];
    $cName = $_POST['Name'];
    $query = $pdo->prepare("update custom set name = :cName where id = :cId");
    $query->bindParam('cName', $cName);
    $query->bindParam('cId', $id);
    $query->execute();
    echo "<script>alert('Custom category updated Successfully');
    location.assign('view-category.php');
    </script>";
}

// reviews

if (isset($_POST['submitreview'])) {
    $IName = $_POST['name'];
    $emial = $_POST['email'];
    $comment = $_POST['comment'];
    $P_id = $_POST['product-id'];

    $query = $pdo->prepare("insert into productreviews (name, email, comment, product_id) values (:name, :email, :comment, :pid)");
    $query->bindParam('name', $IName);
    $query->bindParam('email', $emial);
    $query->bindParam('comment', $comment);
    $query->bindParam('pid', $P_id);
    $query->execute();
    echo '<script>location.assign("product-details.php?id=' . $P_id . '");</script>';
    exit();
}

if (isset($_GET['approve'])) {
    $id = $_GET['approve'];
    $query = $pdo->prepare("UPDATE productreviews SET status = 'approve' WHERE id = :id ");
    $query->bindParam('id', $id);
    $query->execute();
    echo '<script>location.assign("reviews.php");</script>';
    exit();
}

if (isset($_GET['dltreview'])) {
    $id = $_GET['dltreview'];
    $query = $pdo->prepare("DELETE FROM productreviews WHERE id = :id ");
    $query->bindParam('id', $id);
    $query->execute();
    echo '<script>location.assign("reviews.php");</script>';
    exit();
}

// custom reviews

if (isset($_POST['submitcustomreview'])) {
    $IName = $_POST['name'];
    $emial = $_POST['email'];
    $comment = $_POST['comment'];
    $P_id = $_POST['product-id'];

    $query = $pdo->prepare("insert into customproductreviews (name, email, comment, product_id) values (:name, :email, :comment, :pid)");
    $query->bindParam('name', $IName);
    $query->bindParam('email', $emial);
    $query->bindParam('comment', $comment);
    $query->bindParam('pid', $P_id);
    $query->execute();
    echo '<script>location.assign("custom-product-details.php?id=' . $P_id . '");</script>';
    exit();
}

if (isset($_GET['dltcustomreview'])) {
    $id = $_GET['dltcustomreview'];
    $query = $pdo->prepare("DELETE FROM customproductreviews WHERE id = :id ");
    $query->bindParam('id', $id);
    $query->execute();
    echo '<script>location.assign("reviews.php");</script>';
    exit();
}

if (isset($_GET['approvereview'])) {
    $id = $_GET['approvereview'];
    $query = $pdo->prepare("UPDATE customproductreviews SET status = 'approve' WHERE id = :id ");
    $query->bindParam('id', $id);
    $query->execute();
    echo '<script>location.assign("custom-reviews.php");</script>';
    exit();
}

if (isset($_POST['submitstandardreview'])) {
    $IName = $_POST['name'];
    $emial = $_POST['email'];
    $comment = $_POST['comment'];
    $P_id = $_POST['product-id'];

    $query = $pdo->prepare("insert into standardproductreviews (name, email, comment, product_id) values (:name, :email, :comment, :pid)");
    $query->bindParam('name', $IName);
    $query->bindParam('email', $emial);
    $query->bindParam('comment', $comment);
    $query->bindParam('pid', $P_id);
    $query->execute();
    echo '<script>location.assign("standard-product-details.php?id=' . $P_id . '");</script>';
    exit();
}

if (isset($_GET['dltstandardreview'])) {
    $id = $_GET['dltstandardreview'];
    $query = $pdo->prepare("DELETE FROM standardproductreviews WHERE id = :id ");
    $query->bindParam('id', $id);
    $query->execute();
    echo '<script>location.assign("standard-reviews.php");</script>';
    exit();
}

if (isset($_GET['approvestandardreview'])) {
    $id = $_GET['approvestandardreview'];
    $query = $pdo->prepare("UPDATE standardproductreviews SET status = 'approve' WHERE id = :id ");
    $query->bindParam('id', $id);
    $query->execute();
    echo '<script>location.assign("standard-reviews.php");</script>';
    exit();
}
