<article>
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(225,0,0,0.8);"></div>
        <div class="container">
            <div class="row">
                <header class="blog-header small-screen-center text-light col-md-12">
                    <h1 class="text-left element-top-70 element-bottom-70 text-light big"><?php echo $post['PostCategory']['name'] ?></h1>
                    <ol class="breadcrumb breadcrumb-blog text-lowercase element-top-70">
                        <li> <a href="<?php echo $this->Html->url('/'); ?>">
                                Trang chủ </a></li>
                        <li> <a href="<?php echo $this->Html->url('/' . $post['PostCategory']['slug']); ?>">
                                <?php echo $post['PostCategory']['name'] ?></a>
                        </li>
                        <li class="active"><?php echo $post['Post']['title'] ?></li>
                    </ol>
                </header>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row element-top-50 element-bottom-50">
                <div class="col-md-9 blog-list-layout-normal">
                    <article class="post">
                        <?php if (isset($post['Post']['thumb'])) : ?>
                        <div class="post-media">
                            <div class="figure fade-in text-center figcaption-middle">
                                <a class="figure-image magnific" href="<?php echo $this->Html->url($post['Post']['thumb']);?>">
                                    <?php echo $this->Media->image($post['Post']['thumb'], 847, 400); ?>
                                    <div class="figure-overlay">
                                        <div class="figure-overlay-container">
                                            <div class="figure-caption"> <span class="figure-overlay-icons">
                                                    <i class="icon-link"></i>
                                                </span> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <header class="post-head small-screen-center">
                            <h1 class="post-title"><?php echo $post['Post']['title']?></h1>
                            <div class="post-details"> <span class="post-date">
                                    <i class="icon-clock"></i> <?php echo date('\N\g\à\y d \t\h\á\n\g m \n\ă\m Y', strtotime($post['Post']['created']))?>
                                </span>
                                <span class="post-category">
                                    <i class="icon-clipboard"></i>
                                    <a href="<?php echo $this->Html->url('/' . $post['PostCategory']['slug']); ?>" rel="tag">
                                        <?php echo $post['PostCategory']['name'] ?></a>

                            </div>
                        </header>
                        <div class="post-body">
                            <?php echo $post['Post']['description']?>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="small-screen-center post-extras">
                                    <div class="post-tags">
                                        <?php
                                        $tags = $post['Post']['tags'];
                                        echo $tags;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-right small-screen-center post-share">
                                    <ul class="social-icons social-sm social-simple social-circle">
                                        <li>
                                            <a href="#" target="_blank" data-iconcolor="#00acee"> <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" data-iconcolor="#dd1812"> <i class="fa fa-google-plus"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" data-iconcolor="#3b5998"> <i class="fa fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" data-iconcolor="#C92228"> <i class="fa fa-pinterest"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- nav-below -->
                </div>
                <div class="col-md-3 sidebar ">
                    <div class="sidebar-widget widget_search">
                        <form action="" id="searchform" method="get"
                              name="searchform">
                            <div class="input-group">
                                <input class="form-control" name="s" placeholder="Search" type="text" value=""> <span
                                    class="input-group-btn">
                    <button class="btn btn-primary" type="submit" value="Search">
                        <i class="fa fa-search"></i>
                    </button>
                </span></div>
                        </form>
                    </div>
                    <div class="sidebar-widget widget_text">
                        <h3 class="sidebar-header"><?php echo Configure::read('Site.title') ?></h3>

                        <div class="textwidget">
                            <?php echo nl2br($global['home_des']['value']); ?>
                        </div>
                    </div>


                    <?php echo $this->element('new_posts', array('data' => $recents)) ?>

                    <?php echo $this->element('sidebar_cat') ?>
                </div>
            </div>
        </div>
    </section>
</article>