<div class="faqAnswers view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Faq Answer'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Faq Answer'), array('action' => 'edit', $faqAnswer['FaqAnswer']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Faq Answer'), array('action' => 'delete', $faqAnswer['FaqAnswer']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $faqAnswer['FaqAnswer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Faq Answers'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Faq Answer'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Faqs'), array('controller' => 'faqs', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Faq'), array('controller' => 'faqs', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($faqAnswer['FaqAnswer']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Faq'); ?></th>
		<td>
			<?php echo $this->Html->link($faqAnswer['Faq']['title'], array('controller' => 'faqs', 'action' => 'view', $faqAnswer['Faq']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descriptions'); ?></th>
		<td>
			<?php echo h($faqAnswer['FaqAnswer']['descriptions']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

