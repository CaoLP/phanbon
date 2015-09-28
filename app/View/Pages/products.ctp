<article>
    <section class="section">
        <div class="background-media"
             style="background-image: url('img/bg3.jpg'); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;"
             data-start="background-position: 50% -31px"
             data-0-top-bottom="background-position: 50% 50px"></div>
        <div class="background-overlay grid-overlay-0" style="background-color:  rgba(255, 0, 0, 0.81);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center"></div>
                <div class="col-md-8 text-center">
                    <h1 class="element-top-70 text-light os-animation normal default" data-os-animation="fadeIn"
                        data-os-animation-delay="0s">
                        Sản phẩm của chúng tôi
                    </h1>

                    <div class="divider-border divider-border-center element-top-10 element-bottom-10 os-animation"
                         data-os-animation="fadeIn" data-os-animation-delay="0.1s" style="height:3px;">
                        <div class="divider-border-inner" style="background:#ffffff; width:60px;"></div>
                    </div>
                    <p class="lead text-center center  text-light  element-bottom-70" data-os-animation="none"
                       data-os-animation-delay="0s"> Sản phẩm mang lại hiệu quả kinh tế cao cho nhà nông, đám ứng yêu
                        cầu bảo vệ môi trường </p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="background-overlay grid-overlay-0" style="background-color: rgba(0,0,0,0);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="list-container row element-top-60 element-bottom-60 os-animation"
                         data-os-animation="fadeIn" data-os-animation-delay="0s">
                        <?php foreach ($posts as $k => $post) : ?>
                            <div class="col-md-6 element-bottom-20 text-center os-animation" data-os-animation="fadeIn"
                                 data-os-animation-delay="0.<?php echo $k; ?>s"> <span class="service-simple-image">
                                    <a href="<?php
                                        echo $this->Html->url('/san-pham/' . $post['Post']['slug']);
                                    ?>">
                                        <?php echo $this->Media->image($post['Post']['thumb'], 555, 282); ?>
                                    </a>
                            </span>

                                <a href="<?php
                                echo $this->Html->url('/san-pham/' . $post['Post']['slug']);
                                ?>">
                                    <h2>
                                        <?php echo $post['Post']['title']; ?>
                                    </h2>
                                </a>
                                <p><?php echo $post['Post']['excert']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <?php
                    $params = $this->Paginator->params();
                    if ($params['pageCount'] > 1) {
                        ?>
                        <ul class="pagination pagination-sm">
                            <?php
                            echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
                            echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
                            echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
                            ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</article>