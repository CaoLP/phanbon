<div class="top-bar">
    <div class="container">
        <div class="top top-left">
            <div class="sidebar-widget text-left small-screen-center widget_text">
                <div class="textwidget"><i class="fa fa-envelope"></i>&nbsp; <a
                        href="mailto:<?php echo $global['address_email']['value']; ?>"><?php echo $global['address_email']['value']; ?></a>
                </div>
            </div>
            <div class="sidebar-widget text-left small-screen-center widget_text">
                <div class="textwidget"><i class="fa fa-phone"></i>
                    &nbsp; <?php echo $global['address_hotline']['value']; ?> </div>
            </div>
        </div>
        <div class="top top-right">
            <div class="sidebar-widget text-right small-screen-center widget_social">
                <ul class="unstyled inline social-icons social-simple social-normal">
                    <li>
                        <a data-iconcolor="#3b5998" href="<?php echo $global['facebook_page']['value']; ?>"> <i
                                class="fa fa-facebook"></i> </a>
                    </li>
                    <li>
                        <a data-iconcolor="#E45135" href="<?php echo $global['google_plus']['value']; ?>"> <i
                                class="fa fa-google-plus"></i> </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="menu navbar navbar-static-top header-logo-left-menu-right oxy-mega-menu navbar-sticky" id="masthead">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $this->Html->url('/') ?>">
                <?php echo $this->Html->image('logo.png'); ?>
            </a></div>
        <div class="nav-container">
            <nav class="collapse navbar-collapse main-navbar logo-navbar navbar-right">
                <div class="menu-container">
                    <ul class="nav navbar-nav" id="menu-main">
                        <li class="menu-item <?php echo ($this->request->here == $this->Html->url('/')) ? 'active' : '' ;?>">
                            <a href="<?php echo $this->Html->url('/') ?>">Trang chủ</a>
                        </li>
                        <li class="menu-item <?php
                        echo ($this->request->here == $this->Html->url('/san-pham'))
                        || (!empty($this->request->params['type']) &&$this->request->params['type'] == 'san-pham')
                            ? 'active' : '' ;?>">
                            <a href="<?php echo $this->Html->url('/san-pham'); ?>">Sản
                                phẩm</a>
                        </li>
                        <li class="menu-item <?php
                        echo (in_array($this->request->here,
                            array($this->Html->url('/tin-tuc'),$this->Html->url('/hoat-dong-cong-ty'), $this->Html->url('/ban-nha-nong'))))
                        || (!empty($this->request->params['type'])
                            && in_array($this->request->params['type'], array('tin-tuc','hoat-dong-cong-ty', 'ban-nha-nong')) )
                            ? 'active' : '' ;?> dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Tin
                                tức và sự kiện</a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li class="menu-item"><a href="<?php echo $this->Html->url('/ban-nha-nong'); ?>">Bạn nhà nông</a></li>
                                <li class="menu-item"><a href="<?php echo $this->Html->url('/hoat-dong-cong-ty'); ?>">Hoạt động công ty</a></li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo ($this->request->here == $this->Html->url('/thu-vien')) ? 'active' : '' ;?>">
                            <a href="<?php echo $this->Html->url('/thu-vien') ?>">Thư
                                viện</a>

                        </li>
                        <li class="menu-item <?php echo ($this->request->here == $this->Html->url('/gioi-thieu')) ? 'active' : '' ;?>">
                            <a href="<?php echo $this->Html->url('/gioi-thieu') ?>">Giới
                                thiệu</a>
                        </li>
                        <li class="menu-item <?php echo ($this->request->here == $this->Html->url('/lien-he')) ? 'active' : '' ;?>">
                            <a href="<?php echo $this->Html->url('/lien-he') ?>">Liên
                                hệ</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-sidebar">
                    <div class="sidebar-widget widget_search" id="search-5">
                        <form action="" method="get" name="searchform">
                            <div class="input-group">
                                <input class="form-control" name="s" placeholder="Search" type="text"> <span
                                    class="input-group-btn">
                                    <button class="btn btn-primary" type="submit" value="Search">
                                        <span class="input-group-btn">
                                            <i class="fa fa-search"></i>
                                        </span></button>
                                    </span>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>