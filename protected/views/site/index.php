<?php

$this->pageTitle = Yii::app()->name;

$criteria = new CDbCriteria();
$criteria->addBetweenCondition('start_date_time',
    date("Y-m-d 00:00:00"),
    date("Y-m-d 23:59:59")
);

$actual_items = Schedule::model()->with('item', 'item.genres')->findAll($criteria);

$slider_items = array();

foreach($actual_items as $item)
    foreach($item->item->genres as $genre)
        $slider_items[$genre->title][] = $item->item;

$criteria = new CDbCriteria();

$criteria->addBetweenCondition('start_date_time',
    date("Y-m-d 00:00:00", strtotime('-1 day')),
    date("Y-m-d 23:59:59", strtotime('next Sunday'))
);

$actual_items = Schedule::model()->with('item')->findAll($criteria);

$premiering_items = SchedulePremiere::model()->with('item')->findAll();

?>

<div class="content">
    <div class="tb-info"><img src="/assets/images/tb-info.jpg" width="958" height="130" alt=""></div>
    <div class="best-video">
        <a class="go" href="#">Подключай</a>
        <div class="kino-z-info">
            <h3>лучшие фильмы у себя дома</h3>
            <p>&laquo;Кинозалы Триколор&nbsp;ТВ&raquo; превращают ваш телевизор в&nbsp;настоящий домашний кинотеатр. Каждый день на&nbsp;выбор 24&nbsp;фильма на&nbsp;24&nbsp;экранах&nbsp;&mdash; это 288 киносеансов ежедневно! &laquo;Кинозалы Триколор ТВ&raquo;&nbsp;&mdash; это лучшие отечественные и&nbsp;зарубежные фильмы на&nbsp;экране вашего телевизора без перерывов на&nbsp;рекламу.</p>
        </div>
        <div class="cl"></div>
    </div>

    <div class="today-in-kz">Сегодня в кинозалах</div>
    <div class="tv-tabs">
        <ul class="tvt-nav">

            <?php $i = 1; foreach($slider_items as $genre => $items): ?>

            <li <?php echo $i == count($slider_items) ? 'class="tvtn-last"' : '' ?>><a href="#tvt<?php echo $i; ?>"><?php echo $genre; ?></a></li>

            <?php $i++; endforeach; ?>

        </ul>

        <?php $i = 1; foreach($slider_items as $genre => $items): ?>

        <div class="tvt-item" id="tvt<?php echo $i; ?>">
            <div class="wrap-car">
                <ul class="tv-list">

                    <?php foreach($items as $item) : ?>

                    <li><a href="<?php echo Yii::app()->createUrl('item/view', array('id' => $item->id)); ?>" title="<?php echo $item->teaser_text; ?>"><img src="<?php echo '/images/items/index_teasers/' . $item->index_teaser_image; ?>" width="166" height="247" alt=""></a></li>

                    <?php endforeach; ?>
                </ul>
                <div class="cl"></div>
            </div>
        </div>

        <?php $i++; endforeach; ?>

    </div>

    <article class="i-video">
        <aside class="iv-vid">
            <div class="i-future">
                <ul class="j-future-list">

                    <?php $i=1; foreach($premiering_items as $item) : ?>

                    <li><a href="javascript:return false;" id="player-<?php echo $i; ?>" onclick="loadPlayer(<?php echo $i; ?>, '<?php echo $item->item->trailer; ?>')" title="<?php echo $item->item->teaser_text; ?>"><img src="<?php echo '/images/items/slider_teasers/' . $item->item->slider_teaser_image; ?>" width="426" height="233" alt=""></a></li>

                    <?php $i++; endforeach; ?>

                </ul>
            </div>
            <div class="know-future">Узнай какие премьеры тебя ждут на этой неделе</div>
            <div class="l-tmr">Смотри завтра</div>
        </aside>
        <aside class="iv-txt">
            <h1>ПРЕМЬЕРЫ</h1>

            <?php $i=1; foreach($premiering_items as $item) : ?>

            <div class="premiere-wrapper" id="premiere-wrapper-<?php echo $i; ?>">
                <h2><?php echo $item->item->title; ?></h2>
                <div class="soon-in-cin">Смотрите с <?php echo date('d.m.Y', strtotime($item->start_date_time)); ?> в кинозалах!</div>
                <p id="premiere-description"><?php echo $item->item->teaser_text; ?></p>
            </div>

            <?php $i++; endforeach; ?>

        </aside>
        <br class="cl">
    </article>
</div><!-- content -->