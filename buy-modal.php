<div class="modal" tabindex="-1" role="dialog" id="buy-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <input type="hidden" id="modal-product-id" />


                <div class="modal-body">
                    <div class="col-md-12 pt-4">
                        <ol class="carousel-indicators">
                            <li data-target="#buyNowCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#buyNowCarousel" data-slide-to="1"></li>
                            <li data-target="#buyNowCarousel" data-slide-to="2"></li>
                        </ol>
                        <button type="button" class="close-payment-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                        </button>
                    </div>
                    <div id="buyNowCarousel" class="carousel slide" data-ride="carousel">
                        <div class="col-md-12 px-5">
                            <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <h1 class="text-center black">SELECT PAYMENT METHOD</h1>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item grey modal-list-row">
                                                <div class="payment-icons">
                                                    <img src="/assets/images/payments/bitpay.png" />
                                                </div>
                                                <span>Pay with Cryptocurrency</span>
                                            </li>
                                            <li class="list-group-item grey modal-list-row">
                                                <div class="payment-icons">
                                                    <img src="/assets/images/payments/paypal.png" />
                                                </div>
                                                <span>Pay with PayPal</span>
                                            </li>
                                            <li class="list-group-item grey modal-list-row">
                                                <div class="payment-icons">
                                                    <img class="credit-card-icons" src="/assets/images/payments/american-express.png" />
                                                    <img class="credit-card-icons" src="/assets/images/payments/mastercard.png" />
                                                    <img class="credit-card-icons" src="/assets/images/payments/visa.png" />
                                                </div>
                                                <span>Pay with Credit Card</span>
                                            </li>
                                        </ul>
                                    </div>
                                <div class="carousel-item">
                                    <h1 class="text-center black">SUMMARY</h1>
                                    <img src="/assets/images/products/shark.png" />
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item black">
                                            Price
                                            <span class="pull-right font-weight-bold">25 EUR</span>
                                        </li>
                                        <li class="list-group-item black">
                                            Discount code
                                            <input class="form-group pull-right discount-field no-border" placeholder="Enter discount code">
                                        </li>
                                    </ul>
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
                    <div class="col-sm-4">
                        <button id="buy-modal-back-btn" type="button" class="btn modal-pay-btn-cancel btn-md btn-block pull-right">BACK</button>
                    </div>

                    <div class="col-sm-4">

                    </div>

                    <div class="col-sm-4">
                        <button id="buy-modal-next-btn" type="button" class="btn modal-pay-btn-next btn-md btn-block pull-right">NEXT STEP</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
