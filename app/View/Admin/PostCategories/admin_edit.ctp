<?php
	$this->Html->addCrumb('Post Category', array('action'=>'index'));
	$this->Html->addCrumb('<span>'.__('Admin Edit Post Category').'</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin Edit Post Category'); ?> </h3>

</div>
<div class="postCategories form panel-body">
	<div class="row">
		<div class="col-md-12">
			<?php echo $this->Form->create('PostCategory', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => 'Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('slug', array('class' => 'form-control', 'placeholder' => 'Slug'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('parent_id', array('class' => 'form-control', 'placeholder' => 'Parent Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('lft', array('class' => 'form-control', 'placeholder' => 'Lft'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rght', array('class' => 'form-control', 'placeholder' => 'Rght'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('created_by', array('class' => 'form-control', 'placeholder' => 'Created By'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('update_by', array('class' => 'form-control', 'placeholder' => 'Update By'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
