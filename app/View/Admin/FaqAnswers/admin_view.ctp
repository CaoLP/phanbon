<?php
	$this->Html->addCrumb('Faq Answer', array('action'=>'index'));
	$this->Html->addCrumb('<span>'.__('Admin View Faq Answer').'</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin View Faq Answer'); ?> </h3>

</div>
<div class="faqAnswers view panel-body">
	<div class="row">
		<div class="col-md-12">			
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

