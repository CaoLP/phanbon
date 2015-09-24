<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Edit Setting'); ?>    </h3>
</div>
<div class="panel-body">
    <div class="col-md-12">
        <?php echo $this->Form->create('Setting', array('role' => 'form')); ?>
        <?php echo $this->Form->hidden('id'); ?>
        <div class="form-group">
            <?php echo $this->Form->input('name', array('class' => 'form-control', 'readonly'=>true, 'placeholder' => 'Name')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('key', array('class' => 'form-control', 'readonly'=>true, 'placeholder' => 'Key')); ?>
        </div>
        <?php if($this->request->data('Setting.use_media') == 1){?>
            <div class="form-group">
                <?php echo $this->Media->iframe('Setting', $this->request->data('Setting.id')); ?>
            </div>
        <?php }?>
        <?php foreach ($this->request->data('Setting.data') as $key => $setting) {
            ?>
            <div class="form-group">
                <?php echo $this->Form->input('Setting.data.' . $key .'.value',
                    array(
                        'type' => $setting['type'],
                        'class' => 'form-control',
                        'value' => $setting['value'],
                        'row'=>'30',
                        'label'=>array('text' => $key )
                    )
                );
                echo $this->Form->hidden('Setting.data.' . $key .'.key',array('value' => $key));
                echo $this->Form->hidden('Setting.data.' . $key .'.type',array('value' => $setting['type']));
                ?>
            </div>
            <?php
        } ?>
        <div class="form-group">
            <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
        </div>

        <?php echo $this->Form->end() ?>


    </div>
</div>

