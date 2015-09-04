<?php
	$this->Html->addCrumb('Role Menu', array('action'=>'index'));
	$this->Html->addCrumb('<span>'.__('Admin View Role Menu').'</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin View Role Menu'); ?> </h3>

</div>
<div class="roleMenus view panel-body">
	<div class="row">
		<div class="col-md-12">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($roleMenu['RoleMenu']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Role'); ?></th>
		<td>
			<?php echo $this->Html->link($roleMenu['Role']['name'], array('controller' => 'roles', 'action' => 'view', $roleMenu['Role']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Menu'); ?></th>
		<td>
			<?php echo $this->Html->link($roleMenu['Menu']['name'], array('controller' => 'menus', 'action' => 'view', $roleMenu['Menu']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

