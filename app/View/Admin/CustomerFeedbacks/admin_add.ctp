<?php
	$this->Html->addCrumb('Customer Feedback', array('action'=>'index'));
	$this->Html->addCrumb('<span>'.__('Admin Add Customer Feedback').'</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin Add Customer Feedback'); ?> </h3>

</div>
<div class="customerFeedbacks form panel-body">
	<div class="row">
		<div class="col-md-12">
			<?php echo $this->Form->create('CustomerFeedback', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('customer_id', array('class' => 'form-control', 'placeholder' => 'Customer Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('descriptions', array('class' => 'form-control', 'placeholder' => 'Descriptions'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
