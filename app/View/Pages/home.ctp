<?php
echo $this->Html->css(array('dynamic-captions.css','static-captions.css'),array('inline'=>false));
?>
<article>
    <section class="section">
        <div class="container-fullwidth">
            <div class="row">
                <div class="col-md-12">
                    <div class="tp-banner-container">
                       
                            <?php echo html_entity_decode($slide['slide']['value']);?>
                      
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
                    <h1 style="color:#a00005 !important" class="text-center element-top-70 os-animation big"
                        data-os-animation="fadeIn"
                        data-os-animation-delay="0s"
                        data-type="can-edit"
                        data-key="home_title"
                        data-edit-type="<?php echo $global['home_title']['type'];?>">
                        <?php echo $global['home_title']['value'];?>
                    </h1>
					<div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation"
						 data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
						<div class="divider-border-inner" style="width:60px;"></div>
					</div>
                    <div class="lead text-center center element-bottom-40"
                       data-os-animation="none" style="font-family: sans-serif;" "
                       data-os-animation-delay="0s"  data-type="can-edit" data-key="home_des"
                         data-edit-type="<?php echo $global['home_des']['type'];?>" >
                        <?php echo nl2br($global['home_des']['value']);?>
                    </div>

                    <?php echo $media_block_html;?>

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
//    $(document).ready(function() {
//        $('#myCarousel').carousel({
//            interval: 5000
//        });
//
//        $('#myCarousel').on('slid.bs.carousel', function() {
//            //alert("slid");
//        });
//
//
//    });

</script>