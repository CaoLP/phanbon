<article>
    <section class="section">
        <div class="background-overlay " style="background-color: #a00005;"></div>
        <div class="container">
            <div class="row">
                <header class="blog-header small-screen-left text-light col-md-12">
                    <h1 class="element-top-70 text-light os-animation normal default" data-os-animation="fadeIn"
                        data-os-animation-delay="0s">
                        Sản phẩm của chúng tôi
                    </h1>

                    <div class="divider-border divider-border-left element-top-10 element-bottom-10 os-animation"
                         data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                    </div>


                    <p class="lead text-left center  text-light  element-bottom-70" data-os-animation="none"
                       data-os-animation-delay="0s"> Sản phẩm mang lại hiệu quả kinh tế cao cho nhà nông, đám ứng yêu
                        cầu bảo vệ môi trường </p>
                </header>
            </div>
        </div>
    </section>
    <section class="section">
	<style>
		.border_red_radius{
			border: 3px solid #a00005 !important;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			 border-radius: 5px;
		}
		
		.list-container:after {
			content: "";
			box-sizing: border-box;
			-moz-box-sizing: border-box;
			position: absolute;
			bottom: -48px;
			left: 0;
			right: 0;
			height: 1px;
					}
	</style>
	
        <div class="background-overlay grid-overlay-0" style="background-color: rgba(0,0,0,0);"></div>
        <div class="container">
            <div class="row element-top-20 element-bottom-50">
                <div class="col-md-9">
                    <?php $posts = Set::combine($posts, '{n}.Post.id', '{n}', '{n}.Post.post_category_id');?>
                    <?php foreach ($cat_ids as $ky => $cat): ?>
                        <?php if (isset($posts[$ky])): ?>
                        <div class="row ">
                            <div class="col-md-12 ">
								<h3 style="color:#a00005 !important " class="text-center border_red_radius element-top-0 os-animation big"
									data-os-animation="fadeIn"
									data-os-animation-delay="0s"><?php echo $cat; ?>					 
								</h3>

								<div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation"
									 data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
									<div class="divider-bo  rder-inner" style="width:60px;"></div>
								</div>
								
							   
                                
                                    <div class="list-container row os-animation "
                                         data-os-animation="fadeIn" data-os-animation-delay="0s ">
                                        <?php
                                        $no = 0;
                                        foreach ($posts[$ky] as $k => $post) :
                                            $no++;
                                            ?>
                                            <div class="col-md-4 element-bottom-20 text-left os-animation"
                                                 data-os-animation="fadeIn"
                                                 data-os-animation-delay="0.<?php echo $no; ?>s"> <span
                                                    class="service-simple-image">
                                    <a href="<?php
                                    echo $this->Html->url('/san-pham/' . $post['Post']['slug']);
                                    ?>">
                                        <?php echo $this->Media->image($post['Post']['thumb'], 555, 282); ?>
                                    </a>
                            </span>
                                                <a href="<?php
                                                echo $this->Html->url('/san-pham/' . $post['Post']['slug']);
                                                ?>">
                                                    <h3 class="text-center" style="color:#a00005">
                                                        <?php echo substr($post['Post']['title'], 0, 73); ?>
                                                        <br>
                                                        <?php echo $post['Post']['label']; ?>
                                                    </h3>
                                                </a>

                                                <p class="text-center"><?php echo $post['Post']['excert']; ?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <div class="row">
                        <div class="col-md-12 text-right">
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
                </div>
                <div class="col-md-3 sidebar ">
                    <?php echo $this->element('sidebar_pro') ?>        

                </div>
            </div>
        </div>
    </section>
</article>