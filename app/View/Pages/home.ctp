<?php
echo $this->Html->css(array('dynamic-captions.css','static-captions.css'),array('inline'=>false));
?>
<article>
    <section class="section">
        <div class="container-fullwidth">
            <div class="row">
                <div class="col-md-12">
                    <div class="tp-banner-container">
                        <div id="rev_slider_2_1" class="tp-banner">
                            <?php echo $slide['slide']['value'];?>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <?php if($this->Session->check("Auth.User")) echo $this->Html->link(
            '<i class="glyphicon glyphicon-edit"></i>',
            'javascript:;',
            array(
                'class' => 'btn btn-primary edit-block pull-right',
                'escape' => false
            ))?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center element-top-70 os-animation big"
                        data-os-animation="fadeIn"
                        data-os-animation-delay="0s">
                        <?php echo $global['home_title']['value'];?>
                    </h1>

                    <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation"
                         data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-bo  rder-inner" style="width:60px;"></div>
                    </div>
                    <div class="lead text-center center element-bottom-40"
                       data-os-animation="none"
                       data-os-animation-delay="0s">
                        <?php echo nl2br($global['home_des']['value']);?>
                    </div>


                    <div class="portfolio-container element-bottom-60">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-header clearfix">
                                    <div class="portfolio-filters pull-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio masonry no-transition magnific-all" data-col-lg="4" data-col-md="4"
                             data-col-sm="4" data-col-xs="2" data-layout="fitRows" data-padding="15">
                            <div class="masonry-item portfolio-item filter-drinks filter-people"
                                 data-title="Corporate animation">
                                <div
                                    class="figure portfolio-os-animation image-filter-blur image-filter-onhover fade-in from-right text-center figcaption-middle normalwidth"
                                    data-os-animation="bounceInDown" data-os-animation-delay="0s">
                                    <a class="figure-image magnific-vimeo" href="#"
                                       target="_self"> <img alt="Corporate animation" class="normalwidth"
                                                            src="img/hinh1.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-drinks filter-people"
                                 data-title="Corporate animation">
                                <div
                                    class="figure portfolio-os-animation image-filter-blur image-filter-onhover fade-in from-right text-center figcaption-middle normalwidth"
                                    data-os-animation="bounceInDown" data-os-animation-delay="0.1s">
                                    <a class="figure-image magnific-vimeo" href="#"
                                       target="_self"> <img alt="Corporate animation" class="normalwidth"
                                                            src="img/hinh2.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-drinks filter-people"
                                 data-title="Corporate animation">
                                <div
                                    class="figure portfolio-os-animation image-filter-blur image-filter-onhover fade-in from-right text-center figcaption-middle normalwidth"
                                    data-os-animation="bounceInDown" data-os-animation-delay="0.2s">
                                    <a class="figure-image magnific-vimeo" href="#"
                                       target="_self"> <img alt="Corporate animation" class="normalwidth"
                                                            src="img/hinh3.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-drinks filter-people"
                                 data-title="Corporate animation">
                                <div
                                    class="figure portfolio-os-animation image-filter-blur image-filter-onhover fade-in from-right text-center figcaption-middle normalwidth"
                                    data-os-animation="bounceInDown" data-os-animation-delay="0.3s">
                                    <a class="figure-image magnific-vimeo" href="#"
                                       target="_self"> <img alt="Corporate animation" class="normalwidth"
                                                            src="img/hinh4.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-drinks filter-people"
                                 data-title="Corporate animation">
                                <div
                                    class="figure portfolio-os-animation image-filter-blur image-filter-onhover fade-in from-right text-center figcaption-middle normalwidth"
                                    data-os-animation="bounceInDown" data-os-animation-delay="0.4s">
                                    <a class="figure-image magnific-vimeo" href="#"
                                       target="_self"> <img alt="Corporate animation" class="normalwidth"
                                                            src="img/hinh5.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-drinks filter-people"
                                 data-title="Corporate animation">
                                <div
                                    class="figure portfolio-os-animation image-filter-blur image-filter-onhover fade-in from-right text-center figcaption-middle normalwidth"
                                    data-os-animation="bounceInDown" data-os-animation-delay="0.5s">
                                    <a class="figure-image magnific-vimeo" href="#"
                                       target="_self"> <img alt="Corporate animation" class="normalwidth"
                                                            src="img/hinh6.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-drinks filter-people"
                                 data-title="Corporate animation">
                                <div
                                    class="figure portfolio-os-animation image-filter-blur image-filter-onhover fade-in from-right text-center figcaption-middle normalwidth"
                                    data-os-animation="bounceInDown" data-os-animation-delay="0.6s">
                                    <a class="figure-image magnific-vimeo" href="#"
                                       target="_self"> <img alt="Corporate animation" class="normalwidth"
                                                            src="img/hinh7.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="masonry-item portfolio-item filter-drinks filter-people"
                                 data-title="Corporate animation">
                                <div
                                    class="figure portfolio-os-animation image-filter-blur image-filter-onhover fade-in from-right text-center figcaption-middle normalwidth"
                                    data-os-animation="bounceInDown" data-os-animation-delay="0.7s">
                                    <a class="figure-image magnific-vimeo" href="#"
                                       target="_self"> <img alt="Corporate animation" class="normalwidth"
                                                            src="img/hinh8.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if($this->Session->check("Auth.User")) echo $this->Html->link(
        '<i class="glyphicon glyphicon-plus"></i>',
        'javascript:;',
        array(
            'class' => 'btn btn-primary add-block pull-right',
            'escape' => false
    ))?>
    <?php echo $block_html;?>
</article>

<script>
    var oxyThemeData = {
        navbarHeight: 100,
        navbarScrolled: 90,
        navbarScrolledPoint: 20,
        menuClose: 'off',
        scrollFinishedMessage: 'No more items to load.',
        hoverMenu: {
            hoverActive: false,
            hoverDelay: 1,
            hoverFadeDelay: 200
        },
        siteLoader: 'on'
    };
    $(document).ready(function() {
        $('#myCarousel').carousel({
            interval: 5000
        });

        $('#myCarousel').on('slid.bs.carousel', function() {
            //alert("slid");
        });


    });

</script>