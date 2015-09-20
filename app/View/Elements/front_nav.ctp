<div class="top-bar">
    <div class="container">
        <div class="top top-left">
            <div class="sidebar-widget text-left small-screen-center widget_text">
                <div class="textwidget"> <i class="fa fa-envelope"></i>&nbsp; <a href="mailto:info@biowayhitech.com">info@biowayhitech.com</a> </div>
            </div>
            <div class="sidebar-widget text-left small-screen-center widget_text">
                <div class="textwidget"> <i class="fa fa-phone"></i> &nbsp; 0962 979 966 </div>
            </div>
        </div>
        <div class="top top-right">
            <div class="sidebar-widget text-right small-screen-center widget_social">
                <ul class="unstyled inline social-icons social-simple social-normal">
                    <li>
                        <a data-iconcolor="#3b5998" href="corporate-index.html"> <i class="fa fa-facebook"></i> </a>
                    </li>
                    <li>
                        <a data-iconcolor="#E45135" href="corporate-index.html"> <i class="fa fa-google-plus"></i> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="menu navbar navbar-static-top header-logo-left-menu-right oxy-mega-menu navbar-sticky" id="masthead">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="corporate-index.html">
                <?php echo $this->Html->image('logo.png');?>
            </a> </div>
        <div class="nav-container">
            <nav class="collapse navbar-collapse main-navbar logo-navbar navbar-right">
                <div class="menu-container">
                    <ul class="nav navbar-nav" id="menu-main">
                        <li class="menu-item active  ">
                            <a href="<?php echo $this->Html->url('/') ?>">Trang chủ</a>
                        </li>
                        <li class="menu-item   "> <a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=> 'post', 'products')) ?>">Sản phẩm</a> </li>
                        <li class="menu-item   "> <a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=> 'post')) ?>">Tin tức và sự kiện</a> </li>
                        <li class="menu-item   "> <a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=> 'gallery')) ?>">Thư viện</a> </li>
                        <li class="menu-item   "> <a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=> 'post', 'gioi-thieu')) ?>">Giới thiệu</a> </li>
                        <li class="menu-item   "> <a href="<?php echo $this->Html->url(array('controller'=>'pages','action'=> 'contact')) ?>">Liên hệ</a> </li>
                    </ul>
                </div>
                <div class="menu-sidebar">
                    <div class="sidebar-widget widget_search" id="search-5">
                        <form action="" method="get" name="searchform">
                            <div class="input-group">
                                <input class="form-control" name="s" placeholder="Search" type="text"> <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit" value="Search">
                                        <span class="input-group-btn">
                                            <i class="fa fa-search"></i>
                                        </span> </button>
                                    </span>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>