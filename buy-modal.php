<div class="modal" tabindex="-1" role="dialog" id="buy-modal">
    <div class="modal-dialog h-100 d-flex flex-column justify-content-center my-0" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <input type="hidden" id="modal-product-id" />


                <div class="modal-body">
                    <div class="col-md-12 py-4">
                        <div class="carousel-indicators">
                            <span class="dot dot-active" data-slide="0"></span>
                            <span class="dot" data-slide="1"></span>
                            <span class="dot" data-slide="2"></span>
                        </div>
                        <button type="button" class="close-payment-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div class="col-md-12  py-2">
                        <div id="buyNowCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <h1 class="text-center black">SELECT PAYMENT METHOD</h1>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item grey modal-list-row">
                                                <div class="payment-icons">
                                                    <img src="<?php echo $settings['global']['assets_path']; ?>/images/payments/bitpay.png" />
                                                </div>
                                                <span class="payment-type-text">Pay with Cryptocurrency</span>
                                            </li>
                                            <li class="list-group-item grey modal-list-row">
                                                <div class="payment-icons">
                                                    <img src="<?php echo $settings['global']['assets_path']; ?>/images/payments/paypal.png" />
                                                </div>
                                                <span class="payment-type-text">Pay with PayPal</span>
                                            </li>
                                            <li class="list-group-item grey modal-list-row">
                                                <div class="payment-icons">
                                                    <img class="credit-card-icons" src="<?php echo $settings['global']['assets_path']; ?>/images/payments/american-express.png" />
                                                    <img class="credit-card-icons" src="<?php echo $settings['global']['assets_path']; ?>/images/payments/mastercard.png" />
                                                    <img class="credit-card-icons" src="<?php echo $settings['global']['assets_path']; ?>/images/payments/visa.png" />
                                                </div>
                                                <span class="payment-type-text">Pay with Credit Card</span>
                                            </li>
                                        </ul>
                                    </div>
                                <div class="carousel-item">
                                    <h1 class="text-center black">SUMMARY</h1>
                                    <div class="container-fluid">
                                       <div class="row summary-modal-row">
                                           <div class="col-sm-8">
                                               <h1 class="text-center">SHARK PACK</h1>
                                           </div>
                                           <div class="col-sm-4">
                                               <span>Skins: 10-15</span><br />
                                               <span>Skins: 10-15</span><br />
                                               <span>Skins: 10-15</span><br />
                                               <span>Skins: 10-15</span><br />
                                           </div>
                                       </div>
                                        <img src="<?php echo $settings['global']['assets_path']; ?>/images/products/shark.png" class="img-fluid w-100 summary-img" />
                                    </div>
                                    <div class="container col-md-10 col-md-offset-1">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item black no-border">
                                                Price
                                                <span class="pull-right font-weight-bold">25 EUR</span>
                                            </li>
                                            <li class="list-group-item black">
                                                Discount code
                                                <input class="pull-right discount-field no-border" placeholder="Enter discount code">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <h1 class="text-center black">CONFIRMATION</h1>
                                    <p class="text-center grey">You have chosen Europe West region. After the approval of your payment, the account information will be sent to your email immediately.</p>
                                    <p class="text-center grey">By pressing continue, you agree with Terms of Services and that you know that you cannot change the password or email on the account. This is done due to your own safety.</p>
                                    <p class="text-center grey">By purchasing you understand and agree not to be trying to bypass our Terms of Service by any means.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pay-modal-footer">
                    <div class="col-sm-3">
                        <button id="buy-modal-back-btn" type="button" class="modal-pay-btn-cancel ml-3">BACK</button>
                    </div>

                    <div class="col-sm-5">

                    </div>

                    <div class="col-sm-4">
                        <button id="buy-modal-next-btn" type="button" class="modal-pay-btn-next ml-3">NEXT STEP</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
