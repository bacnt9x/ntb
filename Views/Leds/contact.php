<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Liên Hệ</h4>
        <!-- <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">Contact</a>
        </div> -->
    </div>
</div>
<!-- Page info end -->


<!-- Contact section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 contact-info">
                <h3>Thông Tin Liên Hệ !</h3>
                <p>54 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</p>
                <p>+123 4567890</p>
                <p>ntbaccntt@gmail.com</p>
                <div class="contact-social">
                    <a href="https://www.facebook.com/nguyen.thebac.ntb/"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
                <h3 class="send-mail">Gửi Mail cho chúng tôi !</h3>

                <?php if (isset($error)) { ?>
                    <?php if($error == 'true') { ?>
                        <h5 class="text-danger">Gửi Mail thành công !</h5>
                        <!-- <div class="back-link mt-2">
                            <a href="/bshop/leds/contact"> &lt;&lt; Gửi thêm Mail !</a>
                        </div> -->

                    <?php } else { ?>
                        <h5 class="text-warning"><?php echo $error;?></h5>
                        <!-- <div class="back-link mt-2">
                            <a href="/bshop/leds/contact"> &lt;&lt; Gửi lại Mail !</a>
                        </div> -->

                    <?php } ?>
                <?php } ?>

                <form class="contact-form" method="post">
                    <input name="toAddress" type="hidden" value="ntbaccntt@gmail.com" require>
                    <input name="addReplyTo" type="email" placeholder="Email của bạn ..." require>
                    <input name="title" type="text" placeholder="Tiêu đề ..." require>
                    <textarea name="content" placeholder="Nội dung tin nhắn ..." require></textarea>
                    <button class="site-btn">GỬI TIN</button>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7347224252085!2d105.8472392144542!3d21.00326829402504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad58455db2ab%3A0x9b3550bc22fd8bb!2zNTQgTMOqIFRoYW5oIE5naOG7iywgQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1603028146236!5m2!1svi!2s" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Contact section end -->


<!-- Related product section -->
<section class="related-product-section spad">
    <div class="container">
        <div class="section-title">
            <h2>SẢN PHẨM NỔI BẬT</h2>
        </div>
        <div class="product-slider owl-carousel">

            <?php foreach ($top as $rowTop) { ?>
                <?php $arrImg = []; ?>
                <?php foreach ($img as $key => $rowImg) { ?>

                    <?php if ($rowTop['id'] == $rowImg['led_id']) { ?>

                        <?php $arrImg[] = $rowImg['name']; ?>

                    <?php } ?>
                <?php } ?>
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img class="product-big-img" src="/bshop/views/layouts/img/<?php echo $arrImg['0']; ?>" class="thumbnail" alt="<?php echo $arrImg['0']; ?>">

                        <div class="pi-links">
                            <a href="/bshop/leds/cart/<?php echo $rowTop['id']; ?>/1" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6><?php echo number_format($rowTop['price'], 0, ',', '.'); ?><sup>đ</sup></h6>
                        <p><?php echo $rowTop['name']; ?></p>
                    </div>
                </div>

            <?php } ?>
        </div>

    </div>
</section>
<!-- Related product section end -->