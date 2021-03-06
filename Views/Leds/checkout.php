<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Mua Hàng</h4>
    </div>
</div>
<!-- Page info end -->


<?php if(isset($_SESSION['cart'])) { ?>
    <?php if(count($led) > 0) { ?>

    <section class="checkout-section spad">
        <div class="container">
            <div class="back-link">
                <a href="/bshop/leds/cart/all/0"> &lt;&lt; Trở lại trang giỏ hàng</a>
            </div>
            <form action="" class="checkout-form" method="POST">
                <div class="row">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <div class="cf-title">Địa Chỉ Thanh Toán</div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Xác Nhận Mua Hàng (*)</p>
                            </div>
                        </div>
                        <div class="row address-inputs">
                            <div class="col-md-12">
                                <input name="name" type="text" placeholder="Họ Tên" require>
                                <input name="village" type="text" placeholder="Sô nhà - Xhường / Thôn - Xã" require>
                                <input name="district" type="text" placeholder="Quận / Huyện" require>
                                <input name="city" type="text" placeholder="Tỉnh / Thành Phố" require>
                            </div>
                            <div class="col-md-6">
                                <input name="shipcode" type="text" placeholder="Mã Bưu Điện">
                            </div>
                            <div class="col-md-6">
                                <input name="tell" type="text" placeholder="Số Điện Thoại" require>
                            </div>
                        </div>
                        <div class="cf-title">Thông Tin Giao Hàng</div>
                        <div class="row shipping-btns">
                            <div class="col-6">
                                <h4>Tiêu Chuẩn</h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" name="shipping" id="ship-1">
                                        <label for="ship-1">Miễn Phí</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h4>Giao Hàng Nhanh</h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" name="shipping" id="ship-2">
                                        <label for="ship-2">20.000đ</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cf-title">Thanh Toán</div>
                        <ul class="payment-list">
                            <li>Paypal<a href="#"><img src="/bshop/views/layouts/img/paypal.png" alt=""></a></li>
                            <li>Thẻ tín dụng / thẻ ghi nợ<a href="#"><img src="/bshop/views/layouts/img/mastercart.png" alt=""></a></li>
                            <li>Thanh toán khi bạn nhận được gói hàng (Mặc định)</li>
                        </ul>
                        <!-- <button class="site-btn submit-order-btn">Place Order</button> -->
                        <input type="submit" class="site-btn submit-order-btn" value="Đặt Hàng">
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2">
                        <div class="checkout-cart">
                            <h3 class="d-flex justify-content-between">
                                <span>Đã Chọn</span>
                                <span>Quay Lại</span>
                            </h3>
                            <!-- <h3>Đã Chọn</h3> -->

                            <ul class="product-list">

                                <?php $totalpriceAll = 0 ?>

                                <?php foreach ($led as $rowLed) { ?>
                                    <?php $totalprice = $rowLed['price'] * $_SESSION['quantity'][$rowLed['id']]; ?>

                                    <?php $totalpriceAll += $totalprice; ?>


                                    <?php $arrImg = []; ?>
                                    <?php foreach ($img as $key => $rowImg) {

                                        if ($rowLed['id'] == $rowImg['led_id']) {

                                            $arrImg[] = $rowImg['name'];
                                        }
                                    }
                                    ?>
                                    <li>
                                        <input id="ledId" type="hidden" name="quantity[<?php echo $rowLed['id']; ?>]" value="<?php echo $_SESSION['quantity'][$rowLed['id']]; ?>">
                                        <div class="pl-thumb">
                                            <img src="/bshop/views/layouts/img/<?php echo $arrImg['0']; ?>" alt="<?php echo $arrImg['0']; ?>">
                                        </div>
                                        <h6><?php echo $rowLed['name']; ?></h6>
                                        <input id="priceId" type="hidden" name="price[<?php echo $rowLed['id']; ?>]" value="<?php echo $totalprice; ?>">

                                        <p><?php echo number_format($totalprice, 0, ',', '.'); ?><sup>đ</sup></p>
                                    </li>

                                <?php } ?>

                            </ul>

                            <ul class="price-list">
                                <li>Tổng tiền<span><?php echo number_format($totalpriceAll, 0, ',', '.'); ?><sup>đ</sup></span></li>
                                <li>Vận chuyển<span>Miễn phí</span></li>
                                <li class="total">Tổng tiền<span><?php echo number_format($totalpriceAll, 0, ',', '.'); ?><sup>đ</sup></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>

    <?php } else { ?> 
        <div class="page-top-info">
            <div class="container">
                <h5>Chưa Chọn Sản Phẩm Nào</h5>
            </div>
        </div>

    <?php } ?>
<?php } ?>

<section class="related-product-section">
    <div class="container">
        <div class="section-title text-uppercase">
            <h2>Sản Phẩm Khác</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img src="./img/product/2.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Black and White Stripes Dress</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/product/5.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/product/9.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/product/1.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
