<article>
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(225,0,0,0.8);"></div>
        <div class="container">
            <div class="row">
                <header class="blog-header small-screen-center text-light col-md-12">
                    <h1 class="text-left element-top-70 element-bottom-70 text-light big skrollable"><?php echo $category['PostCategory']['name'];?></h1>
                    <ol class="breadcrumb breadcrumb-blog text-lowercase element-top-70">
                        <li> <a href="<?php echo $this->Html->url('/'); ?>">
                                Trang chủ</a>
                        </li>
                        <li class="active"><?php echo $category['PostCategory']['name'];?></li>
                    </ol>
                </header>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row element-top-50 element-bottom-50">
                <div class="col-md-9 blog-list-layout-normal">
                    <?php foreach ($posts as $post) : ?>
                        <article class="post">
                            <?php if (isset($post['Post']['thumb'])) : ?>
                                <div class="post-media">
                                    <div class="figure fade-in text-center figcaption-middle">
                                        <a class="figure-image"
                                           href="<?php echo $this->Html->url('/' . $cat . '/' . $post['Post']['slug']); ?>">
                                            <?php echo $this->Media->image($post['Post']['thumb'], 847, 400); ?>
                                            <div class="figure-overlay">
                                                <div class="figure-overlay-container">
                                                    <div class="figure-caption">
                                                        <span class="figure-overlay-icons"><i
                                                                class="icon-link"></i></span></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <header class="post-head small-screen-center">
                                <h2 class="post-title">
                                    <a class="figure-image"
                                       href="<?php echo $this->Html->url('/' . $cat . '/' . $post['Post']['slug']); ?>"
                                       rel="bookmark"
                                       title="<?php echo $post['Post']['title']; ?>"><?php echo $post['Post']['title']; ?></a>
                                </h2>

                                <div class="post-details"> <span class="post-date">
                <i class="icon-clock"></i> <?php echo date('\N\g\à\y d \t\h\á\n\g m \n\ă\m Y', strtotime($post['Post']['created'])) ?></span>
                                    <span class="post-category">
                <i class="icon-clipboard"></i>
                <a href="<?php echo $this->Html->url('/' . $post['PostCategory']['slug']); ?>" rel="tag">
                    <?php echo $post['PostCategory']['name'] ?></a>
            </span></div>
                            </header>
                            <div class="post-body">
                                <?php echo $post['Post']['excert']; ?>
                            </div>
                            <div class="small-screen-center post-more">
                                <a
                                    class="post-more-link btn btn-primary"
                                    href="<?php echo $this->Html->url('/' . $cat . '/' . $post['Post']['slug']); ?>">
                                    xem thêm</a></div>
                        </article>
                    <?php endforeach; ?>
                    <div class="text-right">
                        <?php
                        $params = $this->Paginator->params();
                        if ($params['pageCount'] > 1) {
                            ?>
                            <ul class="pagination pagination-sm">
                                <?php
                                echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
                                echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a'));
                                echo $this->Paginator->next('Next &rarr;', array('class' => 'next', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled', 'tag' => 'li', 'escape' => false));
                                ?>
                            </ul>
                        <?php } ?>
                    </div>
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
