<footer id="footer">
    <section class="section">
        <div class="container">
            <div class="row element-top-40 element-bottom-40 footer-columns-4">
                <div class="col-sm-3">
                    <div class="sidebar-widget widget_text" id="text-2">
                        <h3 class="sidebar-header"><?php echo $global['home_title']['value'];?></h3>

                        <div class="textwidget">
                            <?php echo nl2br($global['address_des']['value']);?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <?php echo $this->element('new_posts', array('data'=>$recents, 'limit'=>3))?>
                </div>
                <div class="col-sm-3">
                    <?php echo $this->element('sidebar_cat')?>
                </div>
                <div class="col-sm-3">
                    <div class="sidebar-widget widget_text">
                        <h3 class="sidebar-header">Trụ sở chính</h3>

                        <div class="textwidget">
                            <img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $global['google_latitude']['value']; ?>,<?php echo $global['google_longitude']['value']; ?>&zoom=14&size=270x198&maptype=roadmap&markers=color:green%7Clabel:C%7C<?php echo $global['google_latitude']['value']; ?>,<?php echo $global['google_longitude']['value']; ?>&sensor=false&key=AIzaSyC1MsSYQVcTF9NDJBrdlWyxK01h4tHqrXQ">
                        </div>
                    </div>
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