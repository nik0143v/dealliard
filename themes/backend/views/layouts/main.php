
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="<?php echo Yii::app()->theme->baseUrl . '/css/p3.css' ?>" rel="stylesheet">

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    </head>

    <body>

    <?php $this->renderFile(Yii::getPathOfAlias('application.themes.frontend.views.layouts').DIRECTORY_SEPARATOR.'_menu.php') ?>

        <div class="container">
            <div class="subwrapper">
                <?php echo $content; ?>
            </div>
            <hr>
            <footer>
                <?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'footer')) ?>
            </footer>
        </div> <!-- /container -->
    </body>
</html>