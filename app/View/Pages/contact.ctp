<script>
    var lat = <?php echo $global['google_latitude']['value']; ?>;
    var long = <?php echo $global['google_longitude']['value']; ?>;
</script>
<?php
echo $this->Html->script(array('https://maps.googleapis.com/maps/api/js?sensor=false', 'contact.min', 'map.min'), array('inline' => false));
?>
<article>
    <section class="section">
        <div class="background-media" data-0-top-bottom="background-position: 50% 50px"
             data-start="background-position: 50% -31px"
             style="background-image: url(images/corporate/p03.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;">
        </div>
        <div class="background-overlay" style="background-color: rgba(255,0,0,0.8);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center"></div>
                <div class="col-md-8 text-center">
                    <h1 class="element-top-70 text-light os-animation big" data-os-animation="fadeIn"
                        data-os-animation-delay="0s">
                        Liên hệ</h1>

                    <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation"
                         data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                    </div>
                    <p class="lead text-center center text-light element-bottom-70" data-os-animation="none"
                       data-os-animation-delay="0s">
                        <?php echo $global['address_center']['value']; ?>
                        <br> <strong>Điện thoại: <?php echo $global['address_phone']['value']; ?> -
                            Fax: <?php echo $global['address_fax']['value']; ?></strong>
                        <br> <strong>Hotline: <?php echo $global['address_hotline']['value']; ?></strong>
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(255,255,255,0);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center col-border-bottom">
                    <div class="row">
                        <div class="col-md-6 text-left small-screen-center os-animation" data-os-animation="fadeInLeft"
                             data-os-animation-delay="0.3s">
                            <div class="divider-wrapper">
                                <div class="visible-xs element-height-60"></div>
                                <div class="visible-sm element-height-60"></div>
                                <div class="visible-md element-height-60"></div>
                                <div class="visible-lg element-height-60"></div>
                            </div>
                            <form id="contactForm" action="" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-icon-group"><i class="fa fa-user"></i>
                                            <input class="form-control" id="name" name="name" placeholder="Tên bạn *"
                                                   type="text" required=""></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-icon-group"><i class="fa fa-phone"></i>
                                            <input class="form-control" id="phone" name="phone"
                                                   placeholder="Số điện thoại *" type="tel" required=""></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-icon-group"><i class="fa fa-envelope"></i>
                                            <input class="form-control" id="email" name="email"
                                                   placeholder="Địa chỉ email *" type="email" required=""></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-icon-group"><i class="fa fa-info"></i>
                                            <input class="form-control" id="address" name="address"
                                                   placeholder="Địa chỉ" type="text"></div>
                                    </div>
                                </div>
                                <div class="form-group form-icon-group"><i class="fa fa-pencil"></i>
                                    <textarea class="form-control" id="message" name="message"
                                              placeholder="Nội dung liên hệ" rows="10" required=""></textarea>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Send email" class="btn btn-primary"></div>
                                <div id="messages" class="text-center"></div>
                            </form>
                            <div class="divider-wrapper">
                                <div class="visible-xs element-height-60"></div>
                                <div class="visible-sm element-height-60"></div>
                                <div class="visible-md element-height-60"></div>
                                <div class="visible-lg element-height-60"></div>
                            </div>
                        </div>
                        <div class="col-md-6 text-left small-screen-left os-animation" data-os-animation="fadeInRight"
                             data-os-animation-delay="0.3s">
                            <div class="divider-wrapper">
                                <div class="visible-xs element-height-60"></div>
                                <div class="visible-sm element-height-60"></div>
                                <div class="visible-md element-height-60"></div>
                                <div class="visible-lg element-height-60"></div>
                            </div>
                            <div class="google-map" data-os-animation="none" data-os-animation-delay="0s" id="map"
                                 style="height:355px"
                                 data-lat="<?php echo $global['google_latitude']['value']; ?>"
                                 data-lon="<?php echo $global['google_longitude']['value']; ?>"></div>
                            <div class="divider-wrapper">
                                <div class="visible-xs element-height-60"></div>
                                <div class="visible-sm element-height-60"></div>
                                <div class="visible-md element-height-60"></div>
                                <div class="visible-lg element-height-60"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="background-media" data-0-top-bottom="background-position: 50% 50px"
             data-start="background-position: 50% -31px"
             style="background-image: url(images/corporate/blog06.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;">
        </div>
        <div class="background-overlay grid-overlay-0" style="background-color: rgba(255, 0, 0, 0.81);"></div>
        <div class="container-fullwidth container-vertical-middle">
            <div class="row vertical-middle">
                <div class="col-md-3 text-center" style="background:rgba(0, 0, 0, 0.2);">
                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-40"></div>
                        <div class="visible-sm element-height-40"></div>
                        <div class="visible-md element-height-40"></div>
                        <div class="visible-lg element-height-40"></div>
                    </div>
                    <i class="fa fa-home text-light" style="font-size:24px"></i>

                    <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation"
                       data-os-animation="fadeIn" data-os-animation-delay="0.1s"> Công ty Cổ Phần BIOWAY HITECH
                        <?php echo $global['address_center']['value']; ?></p>

                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-30"></div>
                        <div class="visible-sm element-height-30"></div>
                        <div class="visible-md element-height-30"></div>
                        <div class="visible-lg element-height-30"></div>
                    </div>
                </div>
                <div class="col-md-3 text-center small-screen-default" style="background:rgba(0, 0, 0, 0.15);">
                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-40"></div>
                        <div class="visible-sm element-height-40"></div>
                        <div class="visible-md element-height-40"></div>
                        <div class="visible-lg element-height-40"></div>
                    </div>
                    <i class="fa fa-envelope text-light" style="font-size:24px"></i>

                    <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation"
                       data-os-animation="fadeIn" data-os-animation-delay="0.2s"> info@biowayhitech.com
                        <br> Liên hệ với chúng tôi</p>

                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-30"></div>
                        <div class="visible-sm element-height-30"></div>
                        <div class="visible-md element-height-30"></div>
                        <div class="visible-lg element-height-30"></div>
                    </div>
                </div>
                <div class="col-md-3 text-center small-screen-default" style="background:rgba(0, 0, 0, 0.1);">
                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-40"></div>
                        <div class="visible-sm element-height-40"></div>
                        <div class="visible-md element-height-40"></div>
                        <div class="visible-lg element-height-40"></div>
                    </div>
                    <i class="fa fa-phone text-light" style="font-size:24px"></i>

                    <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation"
                       data-os-animation="fadeIn" data-os-animation-delay="0.3s">
                        <strong>
                            Điện thoại: <?php echo $global['address_phone']['value']; ?>
                            <br>Fax: <?php echo $global['address_fax']['value']; ?>
                            <br>Hotline: <?php echo $global['address_hotline']['value']; ?>
                        </strong>
                    </p>

                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-30"></div>
                        <div class="visible-sm element-height-30"></div>
                        <div class="visible-md element-height-30"></div>
                        <div class="visible-lg element-height-30"></div>
                    </div>
                </div>
                <div class="col-md-3 text-center small-screen-default" style="background:rgba(0, 0, 0, 0.05);">
                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-40"></div>
                        <div class="visible-sm element-height-40"></div>
                        <div class="visible-md element-height-40"></div>
                        <div class="visible-lg element-height-40"></div>
                    </div>
                    <i class="fa fa-facebook text-light" style="font-size:24px"></i>

                    <p class="lead text-center center text-light element-top-20 element-bottom-20 os-animation"
                       data-os-animation="fadeIn" data-os-animation-delay="0.4s">
                        <a href="<?php echo $global['facebook_page']['value']; ?>">
                            Cập nhật tin tức mới nhất tại facebook
                        </a>
                    </p>

                    <div class="divider-wrapper">
                        <div class="visible-xs element-height-30"></div>
                        <div class="visible-sm element-height-30"></div>
                        <div class="visible-md element-height-30"></div>
                        <div class="visible-lg element-height-30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>