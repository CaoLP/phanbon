<div class="menus view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Menu'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Menu'), array('action' => 'edit', $menu['Menu']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Menu'), array('action' => 'delete', $menu['Menu']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Menus'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Menu'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Menus'), array('controller' => 'menus', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Parent Menu'), array('controller' => 'menus', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($menu['Menu']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($menu['Menu']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Url'); ?></th>
		<td>
			<?php echo h($menu['Menu']['url']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Parent Menu'); ?></th>
		<td>
			<?php echo $this->Html->link($menu['ParentMenu']['name'], array('controller' => 'menus', 'action' => 'view', $menu['ParentMenu']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lft'); ?></th>
		<td>
			<?php echo h($menu['Menu']['lft']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rght'); ?></th>
		<td>
			<?php echo h($menu['Menu']['rght']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Menus'); ?></h3>
	<?php if (!empty($menu['ChildMenu'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($menu['ChildMenu'] as $childMenu): ?>
		<tr>
			<td><?php echo $childMenu['id']; ?></td>
			<td><?php echo $childMenu['name']; ?></td>
			<td><?php echo $childMenu['url']; ?></td>
			<td><?php echo $childMenu['parent_id']; ?></td>
			<td><?php echo $childMenu['lft']; ?></td>
			<td><?php echo $childMenu['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'menus', 'action' => 'view', $childMenu['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'menus', 'action' => 'edit', $childMenu['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'menus', 'action' => 'delete', $childMenu['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $childMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Child Menu'), array('controller' => 'menus', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
