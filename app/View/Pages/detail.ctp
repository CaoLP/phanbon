<article>
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(225,0,0,0.8);"></div>
        <div class="container">
            <div class="row">
                <header class="blog-header small-screen-center text-light col-md-12">
                    <h1 class="text-left element-top-70 element-bottom-70 text-light big"><?php echo $post['Post']['title'] ?></h1>
					<div class="breadcrumb breadcrumb-blog text-lowercase element-top-70"> 
								<span class="post-date">
                                    <i class="icon-clock"></i> <?php echo date('\N\g\à\y d \t\h\á\n\g m \n\ă\m Y', strtotime($post['Post']['created']))?>
                                </span>
                                <span class="post-category">
                                    <i class="icon-clipboard"></i>
                                    <a href="<?php echo $this->Html->url('/' . $post['PostCategory']['slug']); ?>" rel="tag">
                                        <?php echo $post['PostCategory']['name'] ?></a>

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