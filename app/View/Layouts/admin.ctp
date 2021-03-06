<?php //debug($this->request)?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->Html->css(array('site.min','custom'));
    echo $this->Html->css(array('//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic'));
    ?>

</head>

<body>

<?php
if (AuthComponent::user()) {
    echo $this->Element('navigation');
}
?>

<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas">
            <?php echo $this->Element('sidebar'); ?>
        </div>
        <div class="col-xs-12 col-sm-9 content">
            <?php
            echo $this->Html->getCrumbList(
                array(
                    'class'=>'breadcrumb breadcrumb-arrow',
                    'lastClass' => 'active'
                ),
                array(
                    'text'=>'<i class="glyphicon glyphicon-home"></i>',
                    'escape' =>false,
                    'url' => array('controller'=>'dashboard','action'=>'index','admin'=>true)
                )
            );
            ?>
        </div>
        <div class="col-xs-12 col-sm-9 content">
            <?php echo $this->Session->flash(); ?>
            <div class="panel panel-default">
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
    </div>


</div>
<!-- /.container -->

<?php
echo $this->Html->script(array('site.min'));
echo $this->fetch('script');
echo $this->Html->script(array('action'));
?>
</body>
</html>
