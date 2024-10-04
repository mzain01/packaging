<?php
include('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $pdo->prepare("SELECT * FROM customproduct WHERE id = :id");
    $query->bindParam('id', $id);
    $query->execute();
    $product = $query->fetch(PDO::FETCH_ASSOC);

    // Fetch related products excluding the current product
    $relatedQuery = $pdo->prepare("SELECT * FROM customproduct WHERE id != :id LIMIT 5"); // Fetch 8 related products
    $relatedQuery->bindParam(':id', $id);
    $relatedQuery->execute();
    $relatedProducts = $relatedQuery->fetchAll(PDO::FETCH_ASSOC);
}
?>

<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="index.html">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span>Product</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start product details section -->
    <section class="product__details--section section--padding">
        <div class="container">
            <div class="row row-cols-lg-2 row-cols-md-2">
                <div class="col-md-5 col-lg-5">
                    <div class="product__details--media">
                        <div class="single__product--preview  swiper mb-25">
                            <div class="swiper-wrapper">
                                <div class="">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link "><img class="product__media--preview__items--img" src="adminPanel/img/custom/<?php echo $product['product_img'] ?>" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <span class="visually-hidden">product view</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="features-container">
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                        <path id="Icon_ionic-md-checkmark-circle-outline" data-name="Icon ionic-md-checkmark-circle-outline" d="M10.75,13.5,9,15.25l5.625,5.625,12.5-12.5-1.75-1.75L14.625,17.312Zm15.125,2.375a9.957,9.957,0,1,1-7.25-9.625l1.937-1.938a11.627,11.627,0,0,0-4.687-.937,12.5,12.5,0,1,0,12.5,12.5Z" transform="translate(-3.375 -3.375)" fill="#0c3c56">
                                                        </path>
                                                    </svg> Custom Sizes & Styles
                                                </p>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                        <path id="Icon_ionic-md-checkmark-circle-outline" data-name="Icon ionic-md-checkmark-circle-outline" d="M10.75,13.5,9,15.25l5.625,5.625,12.5-12.5-1.75-1.75L14.625,17.312Zm15.125,2.375a9.957,9.957,0,1,1-7.25-9.625l1.937-1.938a11.627,11.627,0,0,0-4.687-.937,12.5,12.5,0,1,0,12.5,12.5Z" transform="translate(-3.375 -3.375)" fill="#0c3c56">
                                                        </path>
                                                    </svg> No Hidden Charges</p>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                        <path id="Icon_ionic-md-checkmark-circle-outline" data-name="Icon ionic-md-checkmark-circle-outline" d="M10.75,13.5,9,15.25l5.625,5.625,12.5-12.5-1.75-1.75L14.625,17.312Zm15.125,2.375a9.957,9.957,0,1,1-7.25-9.625l1.937-1.938a11.627,11.627,0,0,0-4.687-.937,12.5,12.5,0,1,0,12.5,12.5Z" transform="translate(-3.375 -3.375)" fill="#0c3c56">
                                                        </path>
                                                    </svg> Low Minimum to Start</p>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                        <path id="Icon_ionic-md-checkmark-circle-outline" data-name="Icon ionic-md-checkmark-circle-outline" d="M10.75,13.5,9,15.25l5.625,5.625,12.5-12.5-1.75-1.75L14.625,17.312Zm15.125,2.375a9.957,9.957,0,1,1-7.25-9.625l1.937-1.938a11.627,11.627,0,0,0-4.687-.937,12.5,12.5,0,1,0,12.5,12.5Z" transform="translate(-3.375 -3.375)" fill="#0c3c56">
                                                        </path>
                                                    </svg> Free Design Support</p>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                        <path id="Icon_ionic-md-checkmark-circle-outline" data-name="Icon ionic-md-checkmark-circle-outline" d="M10.75,13.5,9,15.25l5.625,5.625,12.5-12.5-1.75-1.75L14.625,17.312Zm15.125,2.375a9.957,9.957,0,1,1-7.25-9.625l1.937-1.938a11.627,11.627,0,0,0-4.687-.937,12.5,12.5,0,1,0,12.5,12.5Z" transform="translate(-3.375 -3.375)" fill="#0c3c56">
                                                        </path>
                                                    </svg> Fast Turnaround</p>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                        <path id="Icon_ionic-md-checkmark-circle-outline" data-name="Icon ionic-md-checkmark-circle-outline" d="M10.75,13.5,9,15.25l5.625,5.625,12.5-12.5-1.75-1.75L14.625,17.312Zm15.125,2.375a9.957,9.957,0,1,1-7.25-9.625l1.937-1.938a11.627,11.627,0,0,0-4.687-.937,12.5,12.5,0,1,0,12.5,12.5Z" transform="translate(-3.375 -3.375)" fill="#0c3c56">
                                                        </path>
                                                    </svg> Competitive Prices</p>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                        <path id="Icon_ionic-md-checkmark-circle-outline" data-name="Icon ionic-md-checkmark-circle-outline" d="M10.75,13.5,9,15.25l5.625,5.625,12.5-12.5-1.75-1.75L14.625,17.312Zm15.125,2.375a9.957,9.957,0,1,1-7.25-9.625l1.937-1.938a11.627,11.627,0,0,0-4.687-.937,12.5,12.5,0,1,0,12.5,12.5Z" transform="translate(-3.375 -3.375)" fill="#0c3c56">
                                                        </path>
                                                    </svg> Free Shipping</p>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <p><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25">
                                                        <path id="Icon_ionic-md-checkmark-circle-outline" data-name="Icon ionic-md-checkmark-circle-outline" d="M10.75,13.5,9,15.25l5.625,5.625,12.5-12.5-1.75-1.75L14.625,17.312Zm15.125,2.375a9.957,9.957,0,1,1-7.25-9.625l1.937-1.938a11.627,11.627,0,0,0-4.687-.937,12.5,12.5,0,1,0,12.5,12.5Z" transform="translate(-3.375 -3.375)" fill="#0c3c56">
                                                        </path>
                                                    </svg> High Quality Printing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single__product--nav swiper">
                        </div>

                    </div>
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="product__details--info">



                        <h2 class="product__details--info__title mb-15"><?php echo $product['product_name'] ?></h2>

                        <p class="product__details--info__desc mb-15"><?php echo $product['product_short_desc'] ?></p>

                        <div class="row">

                            <div class="col-md-8 col-sm-12">
                                <div class="form-container product-form">

                                    <h3 class="mb-4">Instant Quote</h3>
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-md-4 mb-3 cust-field">
                                                <input type="text" class="form-control" name="length" placeholder="Length" required>
                                            </div>
                                            <div class="col-md-4 mb-3 cust-field">
                                                <input type="text" class="form-control" name="width" placeholder="Width" required>
                                            </div>
                                            <div class="col-md-4 mb-3 cust-field">
                                                <input type="text" class="form-control" name="height" placeholder="Height" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3 cust-field">
                                                <input type="number" class="form-control" name="quantity1" placeholder="Quantity 1" required>
                                            </div>
                                            <!-- <div class="col-md-6 mb-3 cust-field">
                                                <input type="number" class="form-control" name="quantity2" placeholder="Quantity 2" required>
                                            </div> -->
                                            <div class="col-md-6 mb-3 cust-field">
                                                <select class="form-select" required name="color">
                                                    <option selected disabled>Select Color</option>
                                                    <option value="color1">Color 1</option>
                                                    <option value="color2">Color 2</option>
                                                    <option value="color1">Color 3</option>
                                                    <option value="color2">Color 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 ">
                                            <input type="text" class="form-control" name="user_name" placeholder="Enter Your Name" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" name="user_email" placeholder="Email Address" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="tel" class="form-control" name="user_number" placeholder="Phone Number" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="file" name="image" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control" rows="4" placeholder="Project Description" name="description" required></textarea>
                                        </div>
                                        <div class="text-center mb-3 ">
                                            <button type="submit" name="product_form" class="btn btn-dark w-100">Submit</button>
                                        </div>
                                        <!-- <p class="text-center text-muted small">
                                            This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.
                                        </p> -->
                                    </form>
                                </div>

                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="container form-img-container">
                                    <img src="assets/img/form.jpg" alt="Payment and Guarantee Icons">
                                </div>
                            </div>

                        </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details section -->

    <!-- Start product details tab section -->
    <section class="product__details--tab__section section--padding">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">

                    <ul class="product__tab--one product__details--tab d-flex mb-30">

                        <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">Description</li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#reviews">Product Reviews</li>
                        <!-- <li class="product__details--tab__list" data-toggle="tab" data-target="#information">Additional Info</li> -->

                    </ul>

                    <div class="product__details--tab__inner border-radius-10">

                        <div class="tab_content">

                            <div id="description" class="tab_pane active show">
                                <div class="product__tab--content">
                                    <div class="product__tab--content__step mb-30">
                                        <h2 class="product__tab--content__title h4 mb-10"><?php echo $product['product_name'] ?></h2>
                                        <p class="product__tab--content__desc"><?php echo $product['product_long_desc'] ?></p>
                                    </div>


                                </div>
                            </div>
                            <div id="reviews" class="tab_pane">
                                <div class="product__reviews">
                                    <div class="product__reviews--header">
                                        <h2 class="product__reviews--header__title h3 mb-20">Customer Reviews</h2>
                                        <a class="actions__newreviews--btn primary__btn" href="#writereview">Write A Review</a>
                                    </div>
                                    <div class="reviews__comment--area">
                                        <?php

                                        $query = $pdo->prepare("SELECT * FROM customproductreviews WHERE product_id = :pid AND status = 'approve'");
                                        $query->bindParam('pid', $id);
                                        $query->execute();
                                        $allreviews = $query->fetchAll(PDO::FETCH_ASSOC);

                                        function getInitials($name)
                                        {
                                            $parts = explode(' ', $name);
                                            $initials = '';

                                            foreach ($parts as $part) {
                                                $initials .= strtoupper($part[0]);
                                            }

                                            return $initials;
                                        }

                                        if ($allreviews) {
                                            foreach ($allreviews as $review) {
                                                $initials = getInitials($review['name']);
                                                $thumbUrl = "https://via.placeholder.com/50x50/cccccc/000000?text=" . urlencode($initials); // Placeholder URL with initials
                                        ?>
                                                <div class="reviews__comment--list d-flex">
                                                    <div class="reviews__comment--thumb">
                                                        <img src="<?php echo $thumbUrl; ?>" alt="comment-thumb" width="90%">
                                                    </div>
                                                    <div class="reviews__comment--content">
                                                        <div class="reviews__comment--top d-flex justify-content-between">
                                                            <div class="reviews__comment--top__left">
                                                                <h3 class="reviews__comment--content__title h4"><?php echo htmlspecialchars($review['name']); ?></h3>
                                                            </div>
                                                            <span class="reviews__comment--content__date">
                                                                <?php
                                                                // Assuming $review['created_at'] contains the date-time string
                                                                $dateString = $review['created_at'];
                                                                $timestamp = strtotime($dateString);  // Convert to timestamp
                                                                echo date('F j, Y, h:i A', $timestamp);  // Output formatted date and time: e.g., September 17, 2024, 02:56 AM
                                                                ?>

                                                            </span>

                                                        </div>
                                                        <p class="reviews__comment--content__desc"><?php echo htmlspecialchars($review['comment']); ?></p>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        } else {
                                            echo '<i>Be the first to review this product!</i>';
                                        }
                                        ?>
                                    </div>

                                    <div id="writereview" class="reviews__comment--reply__area">
                                        <form method="post" action="#writereview">

                                            <h3 class="reviews__comment--reply__title mb-15">Add a review </h3>

                                            <div class="row">

                                                <div class="col-12 mb-10">
                                                    <textarea class="reviews__comment--reply__textarea" name="comment" placeholder="Your Comments...." required></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-15">
                                                    <label>
                                                        <input class="reviews__comment--reply__input" name="name" placeholder="Your Name...." type="text" required>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 mb-15">
                                                    <label>
                                                        <input class="reviews__comment--reply__input" name="email" placeholder="Your Email...." type="email" required>

                                                    </label>
                                                </div>
                                            </div>
                                            <input type="hidden" value="<?php echo $product['id'] ?>" name="product-id">
                                            <button class="primary__btn text-white" data-hover="Submit" name="submitcustomreview" type="submit">SUBMIT</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details tab section -->

    <!-- Start product section -->
    <section class="product__section section--padding ">
        <div class="container">
            <div class="section__heading border-bottom mb-30">
                <h2 class="section__heading--maintitle">You <span>may also like</span></h2>
            </div>
            <div class="product__section--inner pb-15 product__swiper--activation swiper">
                <div class="swiper-wrapper">

                    <?php if (count($relatedProducts) > 0): ?>
                        <?php foreach ($relatedProducts as $related): ?>
                            <div class="swiper-slide">
                                <article class="product__card">
                                    <div class="product__card--thumbnail">
                                        <a class="product__card--thumbnail__link display-block" href="product-details.php?id=<?php echo $related['id'] ?>">
                                            <img class="product__card--thumbnail__img" src="adminPanel/img/custom/<?php echo $related['product_img']; ?>" alt="product-img">

                                        </a>


                                    </div>
                                    <div class="product__card--content">

                                        <h3 class="product__card--title"><a href="product-details.php?id=<?php echo $related['id'] ?>"><?php echo $related['product_name']; ?></a></h3>

                                        <div class="product__card--footer">
                                            <a class="product__card--btn primary__btn" href="product-details.php?id=<?php echo $related['id'] ?>">
                                                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z" fill="currentColor" />
                                                </svg>
                                                Order Now
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No related products found.</p>
                    <?php endif; ?>
                </div>
                <div class="swiper__nav--btn swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
                <div class="swiper__nav--btn swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- End product section -->

    <!-- Start shipping section -->
    <section class="shipping__section">
        <div class="container">
            <div class="shipping__inner style2 d-flex">
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="assets/img/other/shipping1.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Free Shipping</h2>
                        <p class="shipping__content--desc">Free shipping over $100</p>
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="assets/img/other/shipping2.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Support 24/7</h2>
                        <p class="shipping__content--desc">Contact us 24 hours a day</p>
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="assets/img/other/shipping3.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">100% Money Back</h2>
                        <p class="shipping__content--desc">You have 30 days to Return</p>
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="assets/img/other/shipping4.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Payment Secure</h2>
                        <p class="shipping__content--desc">We ensure secure payment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shipping section -->
</main>

<?php
include('footer.php');
?>