<!doctype html>
<html>
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="/assets/css/style.css">

<?php
    Yii::app()->clientScript->registerCoreScript('jquery');
    Yii::app()->clientScript->registerCoreScript('jqueryui');
    Yii::app()->clientScript->registerCoreScript('poshytip');
    Yii::app()->clientScript->registerCoreScript('jcarousel');
    Yii::app()->clientScript->registerScriptFile('/assets/js/script.js', CClientScript::POS_BEGIN);
    Yii::app()->clientScript->registerScriptFile('/assets/js/swfobject.js', CClientScript::POS_BEGIN);
    Yii::app()->clientScript->registerScriptFile('/assets/js/URI.js', CClientScript::POS_BEGIN);
?>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrap-all">
<!-- main -->
<div class="main">
<!--  header  -->
<header>
    <a href="/"><img class="logo" src="/assets/images/logo.png" width="425" height="87" alt=""></a>
    <ul class="tsoc">
        <li><a href="#"><img src="/assets/images/tsoc1.png" width="30" height="30" alt=""></a></li>
        <li><a href="#"><img src="/assets/images/tsoc2.png" width="30" height="30" alt=""></a></li>
        <li><a href="#"><img src="/assets/images/tsoc3.png" width="30" height="30" alt=""></a></li>
        <li><a href="#"><img src="/assets/images/tsoc4.png" width="30" height="30" alt=""></a></li>
    </ul>
    <a class="btn-set" href="#">Как настроить «Кинозалы «Триколор ТВ»?</a>
</header><!-- end header -->
<!--  content  -->

<?php echo $content; ?>


<div class="sub-footer"></div>
</div><!-- end main -->
</div>

<!--  footer -->
<footer><div class="foot-in">
    <div class="copyright">&copy; ЗАО "Национальная спутниковая компания"<br>г. Санкт-Петербург, 197022, а/я 170<br><a href="#">Служба поддержки абонентов</a></div>
    <div class="support">Служба поддержки абонентов: отправить заявку<br>Помощь дилерам: <a href="mailto:dealer@tricolor.tv">dealer@tricolor.tv</a><br>Ваши предложения и замечания: <a href="mailto:otzyv@tricolor.tv">otzyv@tricolor.tv</a></div>
    <div class="market">По вопросам размещения рекламы на ресурсах<br>«Триколор ТВ»: <a href="mailto:info@agency2.su">info@agency2.su</a></div>
</div></footer><!-- end footer -->

</body>
</html>