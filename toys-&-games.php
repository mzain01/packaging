<?php
include('header.php');
?>

<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="index.php">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span>Toys & Games</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->
    <!-- Start about section -->
    <section class="about__section section--padding mb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about__thumb d-flex">
                        <div class="about__thumb--items">
                            <img class="about__thumb--img border-radius-5" src="assets/img/other/about-thumb-list1.webp"
                                alt="about-thumb">
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about__content">
                        <!-- <span class="about__content--subtitle text__secondary mb-20"> Why Choose us</span> -->
                        <h2 class="about__content--maintitle mb-25">Toys & Games</h2>
                        <p class="about__content--desc mb-20">At Need Packaging, we know the importance of providing high-quality toys and games that are both fun and safe for children. Our toy sourcing services connect you with leading manufacturers who produce engaging, educational, and safe products for children of all ages. Whether you're looking for action figures, board games, puzzles, or outdoor toys, we carefully select items that meet stringent safety standards and pass quality control inspections. We focus on sourcing products that inspire creativity, critical thinking, and physical activity, ensuring that each toy offers value to both children and parents. From eco-friendly toys made with sustainable materials to the latest tech-based games, our sourcing process is tailored to meet your business’s specific needs. We also offer customization options such as branding and packaging to help your toy products stand out in the competitive market. Trust Need Packaging to handle your toy and game sourcing with the same attention to detail and commitment to quality that your customers expect.</p>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about section -->


    <!-- Start contact section -->
    <section class="contact__section section--padding">
        <div class="container">
            <div class="contact__section--heading text-center mb-40">
                <h2 class="contact__section--heading__maintitle">Cutom Order</h2>
                <p class="contact__section--heading__desc">Beyond more stoic this along goodness this sed wow manatee mongos flusterd impressive man farcrud opened.</p>
            </div>
            <div class="main__contact--area position__relative">
                <div class="contact__form cutm-form">
                    <h3 class="contact__form--title mb-30">Contact Me</h3>
                    <form class="contact__form--inner" action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="input1">First Name <span class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" name="name" id="input1" placeholder="Your First Name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="input2">Last Name <span class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" name="lastname" id="input2" placeholder="Your Last Name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="input3">Phone Number <span class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" name="number" id="input3" placeholder="Phone number" type="number">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="input4">Email <span class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" name="email" id="input4" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="input1">Quantity<span class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" name="qty" id="input1" placeholder="Quantity" type="number">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="input2">Budget<span class="contact__form--label__star">*</span></label>
                                    <input class="contact__form--input" name="budget" id="input2" placeholder="Budget" type="number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact__form--list mb-15">
                                    <label class="contact__form--label" for="input5">Write Your Message <span class="contact__form--label__star">*</span></label>
                                    <textarea class="contact__form--textarea" name="msg" id="input5" placeholder="Write Your Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="hiddencapcha" value="">
                        <input type="hidden" name="ftype" value="Popup Form">
                        <input type="hidden" name="ip2loc_ip" value="<?= $ip ?>">
                        <input type="hidden" name="ip2loc_isp" value="">
                        <input type="hidden" name="ip2loc_org" value="">
                        <input type="hidden" name="ip2loc_country" value="<?= $country ?>">
                        <input type="hidden" name="ip2loc_region" value="<?= $region ?>">
                        <input type="hidden" name="ip2loc_city" value="<?= $city ?>">
                        <input type="hidden" name="fullpageurl" value="<?= "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>">
                        <button class="contact__form--btn primary__btn" name="cta" type="submit"> <span>Submit Now</span></button>
                    </form>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- End contact section -->


  
    <!-- Start shipping section -->
    <section class="shipping__section ">
        <div class="container">
            <div class="shipping__inner style2 d-flex">
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="assets/img/other/shipping2.webp" alt="icon-img">

                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Get Instant Quote</h2>
                        <!-- <p class="shipping__content--desc">Free shipping over $100</p> -->
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="assets/img/other/shipping1.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Fast, Reliable Shipping</h2>
                        <!-- <p class="shipping__content--desc">Contact us 24 hours a day</p>  -->
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="assets/img/other/shipping3.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Eco-Friendly Packaging</h2>
                        <!-- <p class="shipping__content--desc">You have 30 days to Return</p> -->
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="assets/img/other/shipping4.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Custom Designs Ready</h2>
                        <!-- <p class="shipping__content--desc">We ensure secure payment</p> -->
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