<article>
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(1,192,225,1);"></div>
        <div class="container">
            <div class="row">
                <header class="blog-header small-screen-center text-light col-md-12">
                    <h1 class="text-left element-top-70 element-bottom-70 text-light big">Thư viện hình ảnh</h1>
                    <ol class="breadcrumb breadcrumb-blog text-lowercase element-top-70">
                        <li> <a href="<?php echo $this->Html->url('/'); ?>">
                                Trang chủ</a>
                        </li>
                        <li class="active">Thư viện</li>
                    </ol>
                </header>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="background-overlay" style="background-color: rgba(48,60,64,1);"></div>
        <div class="container-fullwidth">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-header clearfix">
                                    <div class="portfolio-filters pull-right"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio masonry no-transition use-masonry" data-col-lg="6" data-col-md="4" data-col-sm="2" data-col-xs="1" data-layout="masonry" data-padding="0">
                            <?php $no = 0;?>
                            <?php foreach ($galleries as $gallery) :?>
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
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
