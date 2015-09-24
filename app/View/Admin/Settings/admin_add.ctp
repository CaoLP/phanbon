<?php
echo $this->Html->script(array('setting'),array('inline'=>false));
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Add Setting'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <?php echo $this->Form->create('Setting', array('role' => 'form')); ?>
        <div class="form-group">
            <?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('key', array('class' => 'form-control', 'placeholder' => 'Descriptions')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('use_media', array('class' => 'form-control', 'options'=>array('no','yes'))); ?>
        </div>
        <div id="data">

        </div>
        <a href="javascript:;" id="add-btn">mới</a>
        <hr>
        <div class="form-group">
            <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
        </div>

        <?php echo $this->Form->end() ?>


    </div>
</div>

