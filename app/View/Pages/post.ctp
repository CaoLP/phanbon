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
                        <div class="post" style="float:left">
                            <?php if (isset($post['Post']['thumb'])) : ?>
                                <div class="post-media media-left"  style="float:left!important;padding:5px;" >
                                   
                                        <a 
                                           href="<?php echo $this->Html->url('/' . $cat . '/' . $post['Post']['slug']); ?>">
                                            <?php echo $this->Media->image($post['Post']['thumb'], 360, 220); ?>
                                           
                                        </a>
                                  
                                </div>
                            <?php endif; ?>
							<div class="small-screen-center post-more" style="padding-left:5px!important;">
                       
                                <h2 class="post-title" style="color:#a00005">
                                    <a class="figure-image"
                                       href="<?php echo $this->Html->url('/' . $cat . '/' . $post['Post']['slug']); ?>"
                                       rel="bookmark"
                                       title="<?php echo $post['Post']['title']; ?>"><?php echo $post['Post']['title']; ?></a>
                                </h2>
								<p><?php echo $post['Post']['excert']; ?></p>   
                                <div class="post-details" style="margin:5px 0!important"> <span class="post-date" style="margin-bottom:5px!important">
                <i class="icon-clock"></i> <?php echo date('\N\g\à\y d \t\h\á\n\g m \n\ă\m Y', strtotime($post['Post']['created'])) ?></span>
				<br>
                                    <span class="post-category"><i class="icon-clipboard"></i>
                <a href="<?php echo $this->Html->url('/' . $post['PostCategory']['slug']); ?>" rel="tag">
                    <?php echo $post['PostCategory']['name'] ?></a>
            </span></div>
                        
                            
                            
                            </div>
							
                            <div class="small-screen-center post-more" >
                                <a
                                    class="post-more-link btn btn-primary" style="margin-left:5px!important;"
                                    href="<?php echo $this->Html->url('/' . $cat . '/' . $post['Post']['slug']); ?>">
                                    xem thêm</a>
							</div>
                        </div>
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
