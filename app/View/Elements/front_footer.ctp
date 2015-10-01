<footer id="footer">
    <section class="section">
	    <div class="top-mask"></div>
        <div class="container">
            <div class="row element-top-60 element-bottom-40 footer-columns-4">
                <div class="col-sm-3">
                    <div class="sidebar-widget widget_text" id="text-2">
                        <h3 class="sidebar-header">Cty Cổ Phần Phân Bón BIOWAY-HITECH</h3>
					 <p><?php echo $global['address_center']['value']; ?>
					<br> <i class="fa fa-phone"></i> &nbsp; <?php echo $global['address_phone']['value']; ?>
					<br> <i class="fa fa-inbox"></i> &nbsp; <?php echo $global['address_fax']['value']; ?>
					<br> <i class="fa fa-headphones"></i> &nbsp; <?php echo $global['address_hotline']['value']; ?></p>
						
						
                       
                    </div>
                </div>
				<div class="col-sm-3">
                    <?php echo $this->element('sidebar_pro') ?>
                </div>
                <div class="col-sm-3">
                    <?php echo $this->element('sidebar_cat')?>
                </div>
                <div class="col-sm-3">
                    <?php echo $this->element('new_posts', array('data'=>$recents, 'limit'=>3))?>
                </div>
                
               
            </div>
        </div>
    </section>
    <section class="section subfooter">
        <div class="container">
            <div class="row element-top-10 element-bottom-10 footer-columns-2">
                <div class="col-sm-6">
                    <div class="sidebar-widget widget_text">
                        <div class="textwidget"> &copy; 2015</div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="sidebar-widget widget_social">
                        <ul class="unstyled inline social-icons social-simple social-normal">
                            <li>
                                <a data-iconcolor="#3b5998" href="<?php echo $global['facebook_page']['value'];?>"> <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a data-iconcolor="#E45135" href="<?php echo $global['google_plus']['value'];?>"> <i
                                        class="fa fa-google-plus"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>