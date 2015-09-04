<?php
	$this->Html->addCrumb('Post', array('action'=>'index'));
	$this->Html->addCrumb('<span>'.__('Admin View Post').'</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Admin View Post'); ?> </h3>

</div>
<div class="posts view panel-body">
	<div class="row">
		<div class="col-md-12">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Title'); ?></th>
		<td>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Slug'); ?></th>
		<td>
			<?php echo h($post['Post']['slug']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Excert'); ?></th>
		<td>
			<?php echo h($post['Post']['excert']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descriptions'); ?></th>
		<td>
			<?php echo h($post['Post']['descriptions']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tags'); ?></th>
		<td>
			<?php echo h($post['Post']['tags']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($post['Post']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created By'); ?></th>
		<td>
			<?php echo h($post['Post']['created_by']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated'); ?></th>
		<td>
			<?php echo h($post['Post']['updated']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Updated By'); ?></th>
		<td>
			<?php echo h($post['Post']['updated_by']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Post Category'); ?></th>
		<td>
			<?php echo $this->Html->link($post['PostCategory']['name'], array('controller' => 'post_categories', 'action' => 'view', $post['PostCategory']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

