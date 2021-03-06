<?php
$this->Html->addCrumb('Post', array('action' => 'index'));
$this->Html->addCrumb('<span>' . __('Admin Edit Post') . '</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin Edit Post'); ?> </h3>

</div>
<div class="posts form panel-body">
    <div class="row">
        <div class="col-md-12">
            <?php echo $this->Form->create('Post', array('role' => 'form')); ?>
            <?php echo $this->Form->hidden('id'); ?>
            <div class="form-group">
                <?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('label', array('class' => 'form-control', 'placeholder' => 'Label')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('slug', array('class' => 'form-control', 'placeholder' => 'Slug')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('excert', array('class' => 'form-control', 'placeholder' => 'Excert')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Media->ckeditor('description', array('label' => __('Description'))); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('tags', array('class' => 'form-control', 'placeholder' => 'Tags')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('post_category_id', array('class' => 'form-control', 'placeholder' => 'Post Category Id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Media->iframe('Post', $this->request->data('Post.id')); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
            </div>

            <?php echo $this->Form->end() ?>

        </div>
        <!-- end col md 12 -->
    </div>
    <!-- end row -->
</div>
