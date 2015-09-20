<?php
/**
 * Created by PhpStorm.
 * User: LePhan
 * Date: 3/23/15
 * Time: 6:38 AM
 */
App::uses('Helper', 'View');
class MenuHelper extends Helper
{
    public function loopChildMenu($data, $parent_name, $prefix = '__')
    {
        foreach ($data as $child):
            ?>
            <tr>
                <td><?php echo $prefix . h($child['name']); ?>&nbsp;</td>
                <td><?php echo h($child['icon']); ?>&nbsp;</td>
                <td><?php echo h($child['url']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->_View->Html->link($parent_name, array('controller' => 'admin_menus', 'action' => 'view', $child['parent_id'])); ?>
                </td>
                <td class="actions">
                    <?php echo $this->_View->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $child['id']), array('escape' => false)); ?>
                    <?php echo $this->_View->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $child['id']), array('escape' => false)); ?>
                    <?php echo $this->_View->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $child['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $child['id'])); ?>
                </td>
            </tr>
        <?php
        endforeach;
    }

    public function createMenu($menu)
    {
        foreach ($menu as $item):
            $submenu = false;
            if (count($item['ChildMenu']) > 0) $submenu = true;
            if (!$submenu):
                ?>
                <li>
                    <a href="<?php echo $item['Menu']['url']; ?>"  class="list-group-item <?php if ($item['Menu']['url'] == $this->request->here) echo 'active'; ?>"><i
                            class="<?php echo $item['Menu']['icon']; ?>"></i><?php echo $item['Menu']['name']; ?>
                    </a>
                </li>
            <?php
            else:
                $active = '';
                $in = '';
                $html = '<li>
                    <a href="#sub' . $item['Menu']['id'] . '" class="list-group-item {active}" data-toggle="collapse">
                        <i class="' . $item['Menu']['icon'] . '"></i>' . $item['Menu']['name'] . ' <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </li>';
                if($item['Menu']['url'] == $this->request->here){
                    $in = 'in';
                    $active = 'active';
                }
                $html .= '<li class="sub-menu collapse {flag}" id="sub' . $item['Menu']['id'] . '">
                    <a href="' . Router::url($item['Menu']['url']) . '" class="list-group-item '.$active.'">
                    <i class="' . $item['Menu']['icon'] . '"></i>' . $item['Menu']['name'] . '</a>';

                foreach ($item['ChildMenu'] as $child):
                    $subactive = '';
                    if ($child['url'] == $this->request->here) {
                        if($active == '') $active = 'active';
                        $subactive = 'active';
                        $in = 'in';
                    }
                    $html .= '<a href="' .  Router::url($child['url']) . '"
                       class="list-group-item ' . $subactive . '"><i
                            class="' . $child['icon'] . '"></i>' . $child['name'] . '</a>';
                endforeach;
                $html .= '</li>';
                $html = str_replace('{active}', $active, $html);
                $html = str_replace('{flag}', $in, $html);
                echo $html;
            endif;
        endforeach;
    }
}
