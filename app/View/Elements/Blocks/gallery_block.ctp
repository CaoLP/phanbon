<div class="portfolio-container element-bottom-60">
    <div class="row">
        <div class="col-md-12">
            <div class="portfolio-header clearfix">
                <div class="portfolio-filters pull-right"></div>
            </div>
        </div>
    </div>
	
	<style>
		.border_red_radius img{
			padding:0px!important;
			border: 1px solid #a00005 !important;
			-webkit-border-radius: 7px;
			-moz-border-radius: 7px;
			 border-radius: 7px;
		}
	</style>	
	
    <div class="portfolio masonry no-transition magnific-all" data-col-lg="4" data-col-md="4"
         data-col-sm="4" data-col-xs="2" data-layout="fitRows" data-padding="15"
         data-type="can-edit" data-key="home_medias" data-edit-type="media" data-id="<?php echo $data['Gallery']['id']?>">
		 
        <?php foreach($data['Media'] as $k=>$d):?>
            <div class="masonry-item portfolio-item" data-title="<?php echo $data['Gallery']['name']?>">
			
                <div
                    class="figure
                    portfolio-os-animation
                    image-filter-blur
                    image-filter-onhover
                    fade-in
                    from-right
                    text-center
                    figcaption-middle
                    normalwidth border_red_radius"
                    data-os-animation="bounceInDown" data-os-animation-delay="0.<?php echo $k;?>s">
                    <a class="figure-image" href="<?php echo $this->Html->url($d['file']);?>"
                       target="_self">
                        <?php echo $this->Media->image($d['file'], 600, 400, array('class' => 'normalwidth')); ?>
                    </a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>