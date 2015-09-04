<?php
	$this->Html->addCrumb('Customer', array('action'=>'index'));
	$this->Html->addCrumb('<span>'.__('Admin View Customer').'</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin View Customer'); ?> </h3>

</div>
<div class="customers view panel-body">
	<div class="row">
		<div class="col-md-12">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Name'); ?></th>
		<td>
			<?php echo h($customer['Customer']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address'); ?></th>
		<td>
			<?php echo h($customer['Customer']['address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Media Id'); ?></th>
		<td>
			<?php echo h($customer['Customer']['media_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descriptions'); ?></th>
		<td>
			<?php echo h($customer['Customer']['descriptions']); ?>
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
	<h3><?php echo __('Related Customer Feedbacks'); ?></h3>
	<?php if (!empty($customer['CustomerFeedback'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Descriptions'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($customer['CustomerFeedback'] as $customerFeedback): ?>
		<tr>
			<td><?php echo $customerFeedback['id']; ?></td>
			<td><?php echo $customerFeedback['customer_id']; ?></td>
			<td><?php echo $customerFeedback['descriptions']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'customer_feedbacks', 'action' => 'view', $customerFeedback['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'customer_feedbacks', 'action' => 'edit', $customerFeedback['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'customer_feedbacks', 'action' => 'delete', $customerFeedback['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $customerFeedback['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Customer Feedback'), array('controller' => 'customer_feedbacks', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
