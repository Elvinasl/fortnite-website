<?php
    include_once 'core/settings.php';
    $assetsPath = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $settings['global']['website']['title']; ?></title>

        <link rel="stylesheet" href="<?php echo $settings['global']['assets_path']; ?>/css/bootstrap.min.css<?php echo $cache_prefix; ?>">
        <link rel="stylesheet" href="<?php echo $settings['global']['assets_path']; ?>/css/style.css<?php echo $cache_prefix; ?>">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.1/slick-theme.css"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo $settings['global']['assets_path']; ?>/js/popper.min.js<?php echo $cache_prefix; ?>"></script>
        <script src="<?php echo $settings['global']['assets_path']; ?>/js/bootstrap.min.js<?php echo $cache_prefix; ?>"></script>
        <script src="<?php echo $settings['global']['assets_path']; ?>/js/cloudcarousel.js<?php echo $cache_prefix; ?>"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="<?php echo $settings['global']['assets_path']; ?>/js/fortnite/base.js<?php echo $cache_prefix; ?>"></script>
    </head>
    <body>
        <header id="home">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="<?php echo $settings['global']['assets_path']; ?>/images/logov2.png" width="200px">
                                </a>
                            </div>
                            <div class="col-md-9 d-none d-md-block">
                                <ul class="header-top-navigation d-inline-flex navlinks">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#products">Buy Account</a></li>
                                    <li><a href="#features">Giveaway</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="header-title">GET EXCLUSIVE FORTNITE SKINS</h1>
                            <button type="button" class="button-orange">Pay now</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section id="products" class="py-5 black">
            <div class="container-fluid">
                <h1 class="text-center black text-uppercase">Pick your new skin</h1>
                <div class="d-flex justify-content-center mt-3">
                    <div class="form-check form-check-inline primary-products-buttons">
                        <input class="form-check-input" type="radio" name="productPlatform" id="productPlatform1" value="xbox" checked>
                        <label class="form-check-label" for="productPlatform1">
                            XBOX
                        </label>
                    </div>
                    <div class="form-check form-check-inline primary-products-buttons">
                        <input class="form-check-input" type="radio" name="productPlatform" id="productPlatform2" value="pc">
                        <label class="form-check-label" for="productPlatform2">
                            PC
                         </label>
                    </div>
                    <div class="form-check form-check-inline primary-products-buttons">
                        <input class="form-check-input" type="radio" name="productPlatform" id="productPlatform3" value="pc">
                        <label class="form-check-label" for="productPlatform3">
                            PSN
                         </label>
                    </div>
                    <div class="form-check form-check-inline primary-products-buttons">
                        <input class="form-check-input" type="radio" name="productPlatform" id="productPlatform4" value="pc">
                        <label class="form-check-label" for="productPlatform4">
                            ANDROID
                         </label>
                    </div>
                    <div class="form-check form-check-inline primary-products-buttons">
                        <input class="form-check-input" type="radio" name="productPlatform" id="productPlatform5" value="pc">
                        <label class="form-check-label" for="productPlatform5">
                            iOS
                         </label>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <div class="form-check form-check-inline secondary-products-buttons">
                        <input class="form-check-input categoryBtn" type="radio" name="skinCategory" id="skinCategory1" value="skinned" checked>
                        <label class="form-check-label" for="skinCategory1">
                            Skinned
                        </label>
                    </div>
                    <div class="form-check form-check-inline secondary-products-buttons">
                        <input class="form-check-input categoryBtn" type="radio" name="skinCategory" id="skinCategory2" value="rare" >
                        <label class="form-check-label" for="skinCategory2">
                            Rare skins
                         </label>
                    </div>
                </div>
                <div class="products-line">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="products-carousel rare" id="rare">
                                <?php for ($i = 0; $i < 6; $i++) { ?>
                                    <div class="cloud9-item">
                                        <div class="product-card  mx-auto">
                                            <h3 class="product-title">Renegade Raider</h3>
                                            <div class="product-body">
                                                <div class="product-photo">
                                                    <img class="img-fluid rare-skin-photo" src="<?php echo $settings['global']['assets_path']; ?>/images/products/rare/renegade-raider.png">
                                                    <table class="product-specs">
                                                        <tbody>
                                                        <tr>
                                                            <td>Skins:</td>
                                                            <td>10-20</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pickaxes:</td>
                                                            <td>5+</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pickaxes:</td>
                                                            <td>5+</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pickaxes:</td>
                                                            <td>5+</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pickaxes:</td>
                                                            <td>5+</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Level:</td>
                                                            <td>Random</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Warranty:</td>
                                                            <td>Lifetime</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="product-price">49.99$</div>
                                                    <!-- TODO: pass product id/price to product-button as a value attribute -->
                                                    <button type="button" class="product-button" data-toggle="modal" data-target="#buy-modal" value="id goes here">Pay</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="container">
                            <div class="d-flex justify-content-center flex-row">
                                <img class="prev slick-arrow" src="<?php echo $settings['global']['assets_path']; ?>/images/arrows/back-arrow.png">
                                <div class="col-lg-8">
                                    <div class="skinned-carousel skinned" id="skinned">
                                        <?php for ($i = 0; $i < 6; $i++) { ?>
                                            <div class="product-card">
                                                <h3 class="product-title">Shark pack</h3>
                                                <div class="product-body">
                                                    <div class="product-content">
                                                        <span class="text-center grey-light">Skins: 10-20</span>
                                                        <span class="text-center grey-light">Pickaxes: 5+</span>
                                                        <span class="text-center grey-light">Level: random</span>
                                                        <span class="text-center grey-light">Warranty: lifetime</span>
                                                    </div>
                                                    <div class="product-photo">
                                                        <img class="img-fluid" src="<?php echo $settings['global']['assets_path']; ?>/images/products/shark.png">
                                                        <div class="product-price">49.99$</div>
                                                        <button type="button" class="product-button" data-toggle="modal" data-target="#buy-modal" value="id goes here">Pay</button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <img class="next slick-arrow" src="<?php echo $settings['global']['assets_path']; ?>/images/arrows/next-arrow.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fortniteGuyVector"></div>
            <div class="fortniteGirlVector"></div>
        </section>
        <section id="features" class="py-5 black">
            <div class="container">
                <h1 class="text-center black text-uppercase">Our features</h1>
                <div class="row mt-5">
                    <div class="col-12 col-md-8 offset-0 offset-md-4 features-list">
                        <div class="row mt-4">
                            <div class="col-6">
                                <img src="<?php echo $settings['global']['assets_path']; ?>/images/icons/live-chat.png" width="45px">
                                <span class="feature-text">Live Chat</span>
                            </div>
                            <div class="col-6">
                                <img src="<?php echo $settings['global']['assets_path']; ?>/images/icons/lifetime-guarantee.png" width="45px">
                                <span class="feature-text">Lifetime Guarantee</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <img src="<?php echo $settings['global']['assets_path']; ?>/images/icons/trusted-service.png" width="45px">
                                <span class="feature-text">Trusted Service</span>
                            </div>
                            <div class="col-6">
                                <img src="<?php echo $settings['global']['assets_path']; ?>/images/icons/one-click-payment.png" width="45px">
                                <span class="feature-text">One Click Payment</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <img src="<?php echo $settings['global']['assets_path']; ?>/images/icons/247-support@2x.png" width="45px">
                                <span class="feature-text">24/7 Support</span>
                            </div>
                            <div class="col-6">
                                <img src="<?php echo $settings['global']['assets_path']; ?>/images/icons/lowest-price-deal@2x.png" width="45px">
                                <span class="feature-text">Lowest Price Deal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featuresVector"></div>
            <div class="statistic pt-4">
                <div class="row pt-5 px-5">
                    <div class="col-md-4 text-center">
                        <h1>643</h1>
                        <h2 class="stats-title">Skin pack solds</h2>
                    </div>
                    <div class="col-md-4 text-center">
                        <h1>2100+</h1>
                        <h2 class="stats-title">Satisfied customers</h2>
                    </div>
                    <div class="col-md-4 text-center">
                        <h1>3220+</h1>
                        <h2 class="stats-title">Hours played</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="faq">
            <div class="container">
                <h1 class="text-center text-uppercase">FAQ</h1>
                <div class="faq-section">
                    <div class="faq-block">
                        <a href="#faq1" data-toggle="collapse" data-target="#faq1">
                            <div class="faq-title active"><span>♦︎</span> Do I need Xbox Live Gold to play Fortnite Battle Royale?</div>
                        </a>
                        <div id="faq1" class="collapse">
                            <div class="faq-body">Yes. You do need Xbox Live Gold in order to play Fortnite Battle Royale on Xbox.</div>
                        </div>
                    </div>

                    <div class="faq-block">
                        <a href="#faq2" data-toggle="collapse" data-target="#faq2">
                            <div class="faq-title"><span>♦︎</span> I would like to report a player, where can I do so?</div>
                        </a>
                        <div id="faq2" class="collapse">
                            <div class="faq-body">
                                Yes. You do need Xbox Live Gold in order to play Fortnite Battle Royale on Xbox
                            </div>
                        </div>
                    </div>

                    <div class="faq-block">
                        <a href="#faq3" data-toggle="collapse" data-target="#faq3">
                            <div class="faq-title"><span>♦︎</span> How do you handle teamers in solo play?</div>
                        </a>
                        <div id="faq3" class="collapse">
                            <div class="faq-body">
                                Yes. You do need Xbox Live Gold in order to play Fortnite Battle Royale on Xbox.
                            </div>
                        </div>
                    </div>

                    <div class="faq-block">
                        <a href="#faq4" data-toggle="collapse" data-target="#faq4">
                            <div class="faq-title"><span>♦︎</span> I’m having a technical game issue, what should I do?</div>
                        </a>
                        <div id="faq4" class="collapse">
                            <div class="faq-body">
                                Yes. You do need Xbox Live Gold in order to play Fortnite Battle Royale on Xbox.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="feedback">
            <div class="container">
                <h1 class="pt-3 text-center black text-uppercase">CUSTOMERS FEEDBACK</h1>
                <div class="row d-flex mt-5">
                    <div class="col-md-6">
                        <h2 class="text-center black">"Fantastic, I'm totally blown away by FortniteAcc. Thumbs up!“</h2>
                        <img class="text-center d-block mx-auto mt-4" src="<?php echo $settings['global']['assets_path']; ?>/images/feedback-stars.png" width="170px">
                        <img class="text-center d-block mx-auto mt-4" src="<?php echo $settings['global']['assets_path']; ?>/images/feedback-author.png" width="100px">
                        <h2 class="text-center black text-uppercase mt-2">Ninja, 27</h2>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-end">
                        <img class="img-fluid" src="<?php echo $settings['global']['assets_path']; ?>/images/feedback-image.png">
                    </div>
                </div>
            </div>
            <div class="subscribe pt-4">
                <div class="pt-4 px-5 mx-4">
                    <h2 class="text-uppercase black">Follow updates</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="email" class="fortnite-input" placeholder="Your e-mail">
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="button-orange">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container-fluid py-5">
                <div class="col-md-12">
                    <div class="row pt-5">
                        <div class="col-6 col-md-5 d-flex align-items-end order-5 order-md-0">
                            <div>
                                <ul class="footer-navigation pl-0 navlinks">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#products">Buy Account</a></li>
                                    <li><a href="#features">Giveaway</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contacts</a></li>
                                    <li><a href="#">Terms of Services</a></li>
                                </ul>
                                <div class="h5">FORTNITEACC.COM © ALL RIGHTS RESERVED</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2 text-center d-flex align-items-end">
                            <div class="mt-0 text-center w-100">
                                <img src="<?php echo $settings['global']['assets_path']; ?>/images/logov2.png" width="170px">
                                <div class="h2 text-uppercase my-3">ForniteAcc.com</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-5 text-right d-flex align-items-end justify-content-end order-5 order-md-0">
                            <div class="mb-3">
                                <i class="fa fa-facebook-square pr-1 social-icon"></i>
                                <i class="fa fa-instagram social-icon"></i>
                                <div class="h4">HELLO@FORTNITEACC.COM</div>
                                <div class="h4">CALL US: +370 625 7227</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<?php include './buy-modal.php' ?>
    </body>
</html>
