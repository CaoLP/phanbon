<div class="media form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Media'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Media'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Media', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('ref', array('class' => 'form-control', 'placeholder' => 'Ref'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ref_id', array('class' => 'form-control', 'placeholder' => 'Ref Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('file', array('class' => 'form-control', 'placeholder' => 'File'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('position', array('class' => 'form-control', 'placeholder' => 'Position'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
