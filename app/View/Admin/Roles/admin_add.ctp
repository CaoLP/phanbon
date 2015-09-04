<?php
	$this->Html->addCrumb('Role', array('action'=>'index'));
	$this->Html->addCrumb('<span>'.__('Admin Add Role').'</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin Add Role'); ?> </h3>

</div>
<div class="roles form panel-body">
	<div class="row">
		<div class="col-md-12">
			<?php echo $this->Form->create('Role', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
