<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center element-top-70 os-animation big" data-os-animation="fadeIn"
                    data-os-animation-delay="0s">
                    Sản phẩm tiêu biểu
                    <?php if ($this->Session->check("Auth.User")) echo $this->Html->link(
                        '<i class="glyphicon glyphicon-remove"></i>',
                        'javascript:;',
                        array(
                            'class' => 'btn btn-danger remove-block',
                            'escape' => false
                        )) ?>
                </h1>

                <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation"
                     data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                    <div class="divider-border-inner" style="width:60px;"></div>
                </div>
                <div class="row staff-list-container list-container element-bottom-50">
                    <div id="myCarousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <?php foreach($data as $k=>$d) :?>
                                <?php if($k == 0):?>
                                    <div class="item active">
                                        <div class="row">
                                <?php endif;?>
                                <div
                                    class="figure col-md-4 fade-in element-bottom-20 figcaption-bottom text-left fade-in os-animation"
                                    data-os-animation="fadeIn" data-os-animation-delay="0.1s">
                                    <div class="figure-image">
                                        <a href="<?php
                                        echo $this->Html->url('/san-pham/' . $d['Post']['slug']);
                                        ?>">
                                            <?php
                                            if(isset($d['Post']['thumb']))
                                                echo $this->Media->image($d['Post']['thumb'], 555, 282);
                                            else
                                                echo '<img alt="'.$d['Post']['title'].'" src="'. $this->Html->url('/img/product1.jpg').'">';
                                            ?>

                                        </a>

                                        <div class="figure-overlay">
                                            <div class="figure-overlay-container">
                                                <div class="figure-caption text-center">
                                                    <a href="<?php
                                                    echo $this->Html->url('/san-pham/' . $d['Post']['slug']);
                                                    ?>" title="<?php echo $d['Post']['title'];?>">
                                                    <h3 class="figure-caption-title bordered bordered-small">
                                                        <?php echo $d['Post']['title'];?>
                                                    </h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-caption text-left">
                                        <a href="<?php
                                        echo $this->Html->url('/san-pham/' . $d['Post']['slug']);
                                        ?>" title="<?php echo $d['Post']['title'];?>">
                                            <h3 class="figure-caption-title">
                                                <?php echo $d['Post']['title'];?>
                                            </h3>
                                        </a>

                                        <p class="figure-caption-description"> <?php echo $d['Post']['excert'];?> </p>
                                    </div>
                                </div>
                                <?php if(($k+1)%3 == 0 && ($k+1) < count($data)):?>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                <?php endif;?>
                                <?php if($k == (count($data)-1)):?>
                                        </div>
                                    </div>
                                <?php endif;?>

                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>