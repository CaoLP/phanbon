<?php
	$this->Html->addCrumb('Gallery', array('action'=>'index'));
	$this->Html->addCrumb('<span>'.__('Admin Edit Gallery').'</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin Edit Gallery'); ?> </h3>

</div>
<div class="galleries form panel-body">
	<div class="row">
		<div class="col-md-12">
			<?php echo $this->Form->create('Gallery', array('role' => 'form')); ?>
			<?php echo $this->Form->hidden('id');?>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('descriptions', array('class' => 'form-control', 'placeholder' => 'Descriptions'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Media->iframe('Gallery', $this->request->data('Gallery.id')); ?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
