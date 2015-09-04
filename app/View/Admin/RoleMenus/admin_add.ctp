<?php
	$this->Html->addCrumb('Role Menu', array('action'=>'index'));
	$this->Html->addCrumb('<span>'.__('Admin Add Role Menu').'</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin Add Role Menu'); ?> </h3>

</div>
<div class="roleMenus form panel-body">
	<div class="row">
		<div class="col-md-12">
			<?php echo $this->Form->create('RoleMenu', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('role_id', array('class' => 'form-control', 'placeholder' => 'Role Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('menu_id', array('class' => 'form-control', 'placeholder' => 'Menu Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
