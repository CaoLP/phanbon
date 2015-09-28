<div class="sidebar-widget widget_recent_entries">
    <h3 class="sidebar-header">Bài viết mới</h3>
    <ul>
        <?php
        foreach($data as $i=>$post):
            if(!empty($limit) && $limit == $i) break;
        ?>
        <li class="clearfix">
            <div class="post-icon">
                <a href="<?php echo $this->Html->url('/'. $post['PostCategory']['slug'] . '/' . $post['Post']['slug']) ?>"
                   title="The know how of branding">
                    <?php if(!empty($post['Post']['thumb'])) : ?>
                        <?php echo $this->Media->image($post['Post']['thumb'], 150, 150, array(
                            'class' => 'attachment-thumbnail',
                        ))?>
                    <?php else: ?>
                        <img
                            class="attachment-thumbnail" height="150"
                            src="<?php echo $this->Html->url('/img/logo.png')?>" width="150">
                    <?php endif; ?>
                </a>
            </div>
            <a href="<?php echo $this->Html->url('/'. $post['PostCategory']['slug'] . '/' . $post['Post']['slug']) ?>"
               title="<?php echo $post['Post']['title']?>"><?php echo $post['Post']['title']?></a>
            <small class="post-date"><?php echo date('\N\g\à\y d \t\h\á\n\g m \n\ă\m Y', strtotime($post['Post']['created']))?></small>
        </li>
    <?php endforeach; ?>
    </ul>
</div>