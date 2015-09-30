<article>
    <section class="section">
	    <div class="background-overlay " style="background-color: #a00005;"></div>      
        <div class="container">
            <div class="row">
                <header class="blog-header small-screen-left text-light col-md-12">
					<h1 class="element-top-70 text-light os-animation normal default" data-os-animation="fadeIn"
                        data-os-animation-delay="0s">
                        <?php echo $category['PostCategory']['name'];?>
                    </h1>

                    <div class="divider-border divider-border-left element-top-10 element-bottom-10 os-animation"
                         data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                    </div>
					
					<p class="lead text-left center  text-light  element-bottom-70" data-os-animation="none"
                       data-os-animation-delay="0s"> Tổng hợp hoạt động sản xuất, thông tin khuyến mãi và thông tin hữu ích về nông/công nghiệp! </p>					                  
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
                                <div class="post-media media-left" >
                                   
                                        <a class="figure-image"
                                           href="<?php echo $this->Html->url('/' . $cat . '/' . $post['Post']['slug']); ?>">
                                            <?php echo $this->Media->image($post['Post']['thumb'], 555, 282); ?>
                                           
                                        </a>
                                  
                                </div>
                            <?php endif; ?>
							<div class="post-body">
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
                    
					<?php echo $this->element('sidebar_cat') ?>

                    <?php echo $this->element('new_posts', array('data' => $recents)) ?>

                    
                </div>
            </div>
        </div>
    </section>
</article>
