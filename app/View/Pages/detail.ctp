<article>
    <section class="section">
        <div class="background-overlay " style="background-color: #a00005;"></div> 
        <div class="container">
            <div class="row">
                <header class="blog-header small-screen-left text-light col-md-12">
					<h1 class="element-top-70 text-light os-animation normal default" data-os-animation="fadeIn"
                        data-os-animation-delay="0s">
                        <?php echo $post['Post']['title'] ?>
                    </h1>
					<div class="divider-border divider-border-left element-top-10 element-bottom-10 os-animation"
                         data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                    </div>
					<p class="lead text-left center  text-light  element-bottom-70" data-os-animation="none"
                       data-os-animation-delay="0s"> <?php echo $post['Post']['excert'] ;?> <br>
							<span class="post-date">
								<i class="icon-clock"></i> <?php echo date('\N\g\à\y d \t\h\á\n\g m \n\ă\m Y', strtotime($post['Post']['created']))?>
                            </span>
							<span class="post-category">
                                <i class="icon-clipboard"></i><a href="<?php echo $this->Html->url('/' . $post['PostCategory']['slug']); ?>" rel="tag">
                                        <?php echo $post['PostCategory']['name'] ?></a>
								</span>								
					</p>					                  
                    </div>
					
					
                    
                </header>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row element-top-50 element-bottom-50">
                <div class="col-md-9 blog-list-layout-normal">
                    <article class="post">
                        
                        <div class="post-body">
                            <?php echo $post['Post']['description']?>
                        </div>
                        
                    </article>
                    <!-- nav-below -->
                </div>
                <div class="col-md-3 sidebar ">                   
                    <?php echo $this->element('new_posts', array('data' => $recents)) ?>

                    <?php echo $this->element('sidebar_cat') ?>
                </div>
            </div>
        </div>
    </section>
</article>