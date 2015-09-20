<?php
$this->Html->addCrumb('<span>' . __('Menu') . '</span>');
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="javascript:void(0);" class="toggle-sidebar">
            <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a>
        <?php echo __('Menus'); ?></h3>

</div>
<div class="menus index panel-body">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills nav-justified">
                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>'.__('New Admin Menu'), array('action' => 'add'), array('escape' => false)); ?></li>
            </ul>
        </div>
        <div class="col-md-12">
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Icon</th>
                    <th>Url</th>
                    <th>Parent</th>
                    <th class="actions"></th>
                </tr>
                </thead>
                <tbody class="text-left">
                <?php foreach ($menus as $menu): ?>
                    <tr>
                        <td><i class="<?php echo $menu['Menu']['icon']?>"></i> <?php echo h($menu['Menu']['name']); ?>&nbsp;</td>
                        <td><?php echo h($menu['Menu']['icon']); ?>&nbsp;</td>
                        <td><?php echo h($menu['Menu']['url']); ?>&nbsp;</td>
                        <td>
                            <?php echo $this->Html->link($menu['ParentMenu']['name'], array('controller' => 'menus', 'action' => 'view', $menu['ParentMenu']['id'])); ?>
                        </td>
                        <td class="actions">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $menu['Menu']['id']), array('escape' => false)); ?>
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $menu['Menu']['id']), array('escape' => false)); ?>
                            <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $menu['Menu']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?>
                        </td>
                    </tr>
                    <?php
                    $this->Menu->loopChildMenu($menu['ChildMenu'],$menu['Menu']['name']);
                    ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- end col md 9 -->
    </div>
    <!-- end row -->


</div><!-- end containing of content -->