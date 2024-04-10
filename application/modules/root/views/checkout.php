<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php $this->load->view('partials/stylesheets'); ?>

<body>
    <!-- Start Header Area -->
    <?php $this->load->view('partials/headers'); ?>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <?php $this->load->view('partials/banner'); ?>
    <!-- End Banner Area -->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="order_box">
                            <h3>Billing Details</h3>
                            <form class="row contact_form" action="<?= base_url('root/checkout_Orders'); ?>" method="post" novalidate="novalidate">
                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" name="name" value="<?= $orders[0]->first_name ?>">
                                </div>
                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" name="name" value="<?= $orders[0]->last_name ?>">
                                </div>
                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" name="name" value="<?= $orders[0]->phone ?>">
                                </div>
                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" name="name" value="<?= $orders[0]->email ?>">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" name="name" value="<?= $orders[0]->address ?>">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="name" value="<?= $orders[0]->zipcode ?>">
                                </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li><a href="#">Product <span>Total</span></a></li>
                                <?php
                                $totalAmount = 0; // Initialize total amount variable
                                foreach ($orders as $order) {
                                    $itemTotal = $order->amount * $order->order_qty; // Calculate total for each item considering quantity
                                    $totalAmount += $itemTotal; // Add item total to the overall total
                                ?>
                                    <li><a href="#"><?= $order->shoes_name ?> <span class="middle">x <?= $order->order_qty ?></span> <span class="last">$<?= $itemTotal ?></span></a></li>
                                <?php } ?>
                            </ul>
                            <?php
                            $shippingFee = isset($order->shipping_fee) ? $order->shipping_fee : 0;
                            $total = $totalAmount + $shippingFee; // Calculate total
                            ?>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>$<?= $totalAmount ?></span></a></li>
                                <li><a href="#">Shipping <span>$<?= $shippingFee ?></span></a></li>
                                <li><a href="#">Total <span>$<?= number_format($total, 2) ?></span></a></li>
                            </ul>



                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="cod" value="Cash on Delivery(COD)">
                                    <label for="f-option5">Cash on Delivery(COD)</label>
                                    <div class="check"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="payment_item active">
                                        <div class="radion_btn">
                                            <input type="radio" id="f-option6" name="paypal">
                                            <label for="f-option6">Paypal </label>
                                            <img src="img/product/card.jpg" alt="">
                                            <div class="check"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="payment_item active">
                                        <div class="radion_btn">
                                            <input type="radio" id="f-option7" name="gcash">
                                            <label for="f-option6">GCASH </label>
                                            <img src="img/product/card.jpg" alt="">
                                            <div class="check"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="total_amount" value="<?= number_format($total, 2) ?>">
                            <button type="submit" class=" btn btn-block primary-btn">Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start footer Area -->
    <?php $this->load->view('partials/footer'); ?>
    <!-- End footer Area -->
</body>
<?php $this->load->view('partials/scripts'); ?>

</html>