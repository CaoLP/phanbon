<div class="media view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Media'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Media'), array('action' => 'edit', $media['Media']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Media'), array('action' => 'delete', $media['Media']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $media['Media']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Media'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Media'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($media['Media']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ref'); ?></th>
		<td>
			<?php echo h($media['Media']['ref']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ref Id'); ?></th>
		<td>
			<?php echo h($media['Media']['ref_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('File'); ?></th>
		<td>
			<?php echo h($media['Media']['file']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Position'); ?></th>
		<td>
			<?php echo h($media['Media']['position']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

