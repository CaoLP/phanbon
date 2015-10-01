<article>
    <section class="section">
        <div class="background-overlay " style="background-color: #a00005;"></div>
        <div class="container">
            <div class="row">
                <header class="blog-header small-screen-left text-light col-md-12">
					<h1 class="element-top-70 text-light os-animation normal default" data-os-animation="fadeIn"
                        data-os-animation-delay="0s">
                        Thư Viện Hình Ảnh Bioway Hitech
                    </h1>

                    <div class="divider-border divider-border-left element-top-10 element-bottom-10 os-animation"
                         data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                    </div>
					
					<p class="lead text-left center  text-light  element-bottom-70" data-os-animation="none"
                       data-os-animation-delay="0s"> Thư viện hình ảnh các hoạt động của công ty phân bón Bioway Hitech</p>					                  
                </header>
            </div>
        </div>
    </section>
    <section class="section">
        
        <div class="container-fullwidth">
            <div class="row element-top-20 element-bottom-50">
                <div class="col-md-12">
                    <?php $no = 0;?>
                    <?php foreach ($galleries as $gallery) :?>
                        <div class="portfolio-container">
                     
						<h3 style="color:#a00005 !important" class="text-center element-top-0 os-animation big"
									data-os-animation="fadeIn"
									data-os-animation-delay="0s"><?php echo $gallery['Gallery']['name'] ;?>				 
								</h3>

								<div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation"
									 data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
									<div class="divider-bo  rder-inner" style="width:60px;"></div>
						</div>
						
                        <div class="portfolio masonry no-transition use-masonry" data-col-lg="6" data-col-md="4" data-col-sm="2" data-col-xs="1" data-layout="masonry" data-padding="0">

                                <?php foreach ($gallery['Media'] as $media) : $no++;?>
                                    <div class="masonry-item portfolio-item filter-nature masonry-wide"
                                         data-comments="0"
                                         data-date=""
                                         data-menu-order="1"
                                         data-title="Freshquote co">
                                        <div class="figure portfolio-os-animation image-filter-grayscale image-filter-onhover fade-in text-center figcaption-middle normalwidth"
                                             data-os-animation="fadeInUp"
                                             data-os-animation-delay="0.<?php echo $no;?>s">
                                            <a class="figure-image magnific" href="<?php echo $this->Html->url($media['file']);?>" target="_self">
                                                <?php echo $this->Media->image($this->Html->url($media['file']), 634, 357, array('class'=>'normalwidth')); ?>
                                                <div class="figure-overlay">
                                                    <div class="figure-overlay-container">
                                                        <div class="figure-caption">
                                                            <h3 class="figure-caption-title bordered bordered-small">
                                                            <?php echo $gallery['Gallery']['name'];?>
                                                            </h3>
                                                            <p class="figure-caption-description"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</article>
