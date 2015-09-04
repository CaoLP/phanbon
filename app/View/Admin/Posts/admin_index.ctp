<?php
	$this->Html->addCrumb('<span>'.__('Post').'</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Posts'); ?></h3>

</div>
<div class="posts index panel-body">
	<div class="row">
		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('title'); ?></th>
						<th><?php echo $this->Paginator->sort('slug'); ?></th>
						<th><?php echo $this->Paginator->sort('excert'); ?></th>
						<th><?php echo $this->Paginator->sort('descriptions'); ?></th>
						<th><?php echo $this->Paginator->sort('tags'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('created_by'); ?></th>
						<th><?php echo $this->Paginator->sort('updated'); ?></th>
						<th><?php echo $this->Paginator->sort('updated_by'); ?></th>
						<th><?php echo $this->Paginator->sort('post_category_id'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($posts as $post): ?>
					<tr>
						<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['slug']); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['excert']); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['descriptions']); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['tags']); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['created_by']); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['updated']); ?>&nbsp;</td>
						<td><?php echo h($post['Post']['updated_by']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($post['PostCategory']['name'], array('controller' => 'post_categories', 'action' => 'view', $post['PostCategory']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $post['Post']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $post['Post']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $post['Post']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->