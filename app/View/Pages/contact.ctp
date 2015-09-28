<script>
    var lat = <?php echo $global['google_latitude']['value']; ?>;
    var long = <?php echo $global['google_longitude']['value']; ?>;
</script>
<?php
echo $this->Html->script(array('https://maps.googleapis.com/maps/api/js?sensor=false', 'contact.min', 'map.min'), array('inline' => false));
?>
<article>
    <section class="section">
		<div class="background-overlay " style="background-color: #a00005;"></div>
        <div class="container">
            <div class="row">
                <header class="blog-header small-screen-left text-light col-md-12">
					<h1 class="element-top-70 text-light os-animation normal default" data-os-animation="fadeIn"
                        data-os-animation-delay="0s">
                        Liên hệ với chúng tôi
                    </h1>

                    <div class="divider-border divider-border-left element-top-10 element-bottom-10 os-animation"
                         data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                    </div>
					
					<p class="lead text-left center  text-light  element-bottom-70" data-os-animation="none"
                       data-os-animation-delay="0s"> 
						<?php echo $global['address_center']['value']; ?>
					<br> <i class="fa fa-phone"></i> &nbsp; <?php echo $global['address_phone']['value']; ?>
					<br> <i class="fa fa-inbox"></i> &nbsp; <?php echo $global['address_fax']['value']; ?>
					<br> <i class="fa fa-headphones"></i> &nbsp; <?php echo $global['address_hotline']['value']; ?>
					</p>					                  
                </header>
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
                                <div class="text-right">
                                    <input type="submit" value="Send email" class="btn btn-primary"></div>
                                <div id="messages" class="text-right"></div>
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

</article>