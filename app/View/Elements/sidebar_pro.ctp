<div class="sidebar-widget widget_categories" id="categories-5">
    <h3 class="sidebar-header">Sản phẩm</h3>
    <ul>
        <li class="cat-item">
            <a href="<?php echo $this->Html->url('/'.$categories_menu['PostCategory']['slug']) ?>">Tất cả</a>
        </li>
        <?php foreach($categories_menu['ChildPostCategory'] as $pro):?>
            <li class="cat-item">
                <a href="<?php echo $this->Html->url('/'.$pro['slug']);?>"><?php echo $pro['name'];?></a>
            </li>
        <?php endforeach;?>
    </ul>
</div>