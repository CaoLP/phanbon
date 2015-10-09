<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php echo Configure::read('Site.title') . ' - '. $title_for_layout; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
    echo $this->Html->meta('icon');

    echo $this->fetch('meta');
    echo $this->fetch('css');

    ?>
    <!--    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,900%7CGentium+Basic:400italic&amp;subset=latin,latin" rel="stylesheet" type="text/css">-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic&subset=latin,vietnamese'
          rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <?php echo $this->Html->css(array('theme.min', 'corporate.min', 'extras.min', 'custom.front')); ?>

    <!-- Latest compiled and minified JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php
    if ($this->Session->check('Auth.User')) {
        ?>
        <script>
            var link_setting = '<?php echo $this->Html->url(
                array(
                'admin' => true,
                'controller' => 'settings',
                'action' => 'update_setting'
                )
                );?>';
            var link_gallery = '<?php echo $this->Html->url(
                array(
                'admin' => true,
                'controller' => 'galleries',
                'action' => 'gallery_lists'
                )
                );?>';
        </script>
        <?php
    }
    ?>
</head>

<body class="pace-on pace-counter">
<div class="pace-overlay"></div>
<?php echo $this->element('front_nav'); ?>
<div id="content" role="main">
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('front_footer'); ?>

</div>
<a class="go-top go-top-circle" href="javascript:void(0)"> <i class="fa fa-angle-up"></i> </a>
<?php
echo $this->Html->script(array('theme.min', 'revolution.min','openWeather.min', 'front'));
echo $this->fetch('script');
?>
</body>
</html>
