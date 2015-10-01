<div class="sidebar-widget widget_categories" id="categories-5">
    <h3 class="sidebar-header">Danh mục</h3>
    <ul>
        <?php foreach($news_menu['ChildPostCategory'] as $new):?>
            <li class="cat-item">
                <a href="<?php echo $this->Html->url('/'.$new['slug']);?>"><?php echo $new['name'];?></a>
            </li>
        <?php endforeach;?>
    </ul>
</div>