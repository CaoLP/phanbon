<div class="customerFeedbacks view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Customer Feedback'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Customer Feedback'), array('action' => 'edit', $customerFeedback['CustomerFeedback']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Customer Feedback'), array('action' => 'delete', $customerFeedback['CustomerFeedback']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $customerFeedback['CustomerFeedback']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Customer Feedbacks'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Customer Feedback'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Customers'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Customer'), array('controller' => 'customers', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($customerFeedback['CustomerFeedback']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Customer'); ?></th>
		<td>
			<?php echo $this->Html->link($customerFeedback['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $customerFeedback['Customer']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descriptions'); ?></th>
		<td>
			<?php echo h($customerFeedback['CustomerFeedback']['descriptions']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

