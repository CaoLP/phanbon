<div class="menu navbar navbar-static-top header-logo-left-menu-right oxy-mega-menu navbar-sticky" id="masthead">
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
            <div class="top top-right weather-wrapper hidden">
                <img id="temp-icon">
                <span id="temp"></span>
                <span id="place"></span>
                <span id="humidity">Độ ẩm: <span id="h"></span></span>
                <span id="wind">Gió: <span id="w"></span></span>
            </div>
        </div>
    </div>
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
                        echo (in_array($this->request->here,
                            array($this->Html->url('/san-pham'),$this->Html->url('/huu-co-huu-co-khoang'), $this->Html->url('/huu-co-vi-sinh'), $this->Html->url('/huu-co-sinh-hoc'))))
                        || (!empty($this->request->params['type'])
                            && in_array($this->request->params['type'], array('san-pham','huu-co-huu-co-khoang', 'huu-co-vi-sinh', 'huu-co-sinh-hoc')) )
                            ? 'active' : '' ;?> dropdown" data-event="hover-toggle">
                            <a href="<?php echo $this->Html->url('/san-pham');?>" class="pc-menu">Sản phẩm</a>
                            <a href="#" class="dropdown-toggle sm-menu" data-toggle="dropdown" aria-expanded="false">Sản phẩm</a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <?php foreach($categories_menu['ChildPostCategory'] as $cat):?>
                                    <li class="menu-item">
                                        <a href="<?php echo $this->Html->url('/'.$cat['slug']);?>"><?php echo $cat['name'];?></a>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        </li>
                        <li class="menu-item <?php
                        echo (in_array($this->request->here,
                            array($this->Html->url('/tin-tuc'),$this->Html->url('/hoat-dong-cong-ty'), $this->Html->url('/ban-nha-nong'))))
                        || (!empty($this->request->params['type'])
                            && in_array($this->request->params['type'], array('tin-tuc','hoat-dong-cong-ty', 'ban-nha-nong')) )
                            ? 'active' : '' ;?> dropdown" data-event="hover-toggle">
                            <a href="<?php echo $this->Html->url('/tin-tuc');?>" class="pc-menu">Tin
                                tức và sự kiện</a>
                            <a href="#" class="dropdown-toggle sm-menu" data-toggle="dropdown" aria-expanded="false">Tin
                                tức và sự kiện</a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <?php foreach($news_menu['ChildPostCategory'] as $new):?>
                                    <li class="menu-item">
                                        <a href="<?php echo $this->Html->url('/'.$new['slug']);?>"><?php echo $new['name'];?></a>
                                    </li>
                                <?php endforeach;?>
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
                
            </nav>
        </div>
    </div>
</div>