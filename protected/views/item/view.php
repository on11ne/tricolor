<?php
?>

<div class="content">
    <div class="best-video-sub"><i>лучшие фильмы у себя дома</i>  подключай и смотри</div>
    <div class="kino-z-info-sub kzi-bord">«Кинозалы Триколор ТВ» превращают ваш телевизор в настоящий домашний кинотеатр. Каждый день на выбор 24 фильма на 24 экранах – это 288 киносеансов ежедневно! «Кинозалы Триколор ТВ» - это лучшие отечественные и зарубежные фильмы на экране вашего телевизора без перерывов на рекламу.</div>
    <article class="i-video">
        <aside class="col-left">
            <h1><?php echo $model->title; ?></h1>
            <div class="poster"><img src="<?php echo '/images/items/teasers/' . $model->teaser_image; ?>" width="326" height="488" alt=""></div>
            <div class="desc-big"><?php echo $model->description; ?>
        </aside>
        <aside class="col-right">
            <input type="text" value="Выбрать дату" class="date-select">
            <div class="cl"></div>
            <h2>Сеансы сегодня</h2>
            <div class="seans">
                <table>
                    <tr><td><img src="/assets/images/ps.png" width="22" height="25" alt=""></td><td class="tdtime">01:15</td><td>26.09.2012 </td><td class="tdname">Петля времени</td></tr>
                    <tr><td><img src="/assets/images/ps.png" width="22" height="25" alt=""></td><td class="tdtime">02:45</td><td>26.09.2012 </td><td class="tdname">Петля времени</td></tr>
                    <tr><td><img src="/assets/images/ps.png" width="22" height="25" alt=""></td><td class="tdtime">04:15</td><td>26.09.2012 </td><td class="tdname">Петля времени</td></tr>
                    <tr><td><img src="/assets/images/ps.png" width="22" height="25" alt=""></td><td class="tdtime">05:45</td><td>26.09.2012 </td><td class="tdname">Петля времени</td></tr>
                    <tr><td><img src="/assets/images/ps.png" width="22" height="25" alt=""></td><td class="tdtime">07:15</td><td>26.09.2012 </td><td class="tdname">Петля времени</td></tr>
                    <tr><td><img src="/assets/images/ps.png" width="22" height="25" alt=""></td><td class="tdtime">08:45</td><td>26.09.2012 </td><td class="tdname">Петля времени</td></tr>
                    <tr><td><img src="/assets/images/ps.png" width="22" height="25" alt=""></td><td class="tdtime">10:15</td><td>26.09.2012 </td><td class="tdname">Петля времени</td></tr>
                    <tr><td><img src="/assets/images/ps.png" width="22" height="25" alt=""></td><td class="tdtime">17:45</td><td>26.09.2012 </td><td class="tdname">Петля времени</td></tr>
                    <tr><td><img src="/assets/images/ps.png" width="22" height="25" alt=""></td><td class="tdtime">19:15</td><td>26.09.2012 </td><td class="tdname">Петля времени</td></tr>
                    <tr><td><img src="/assets/images/ps.png" width="22" height="25" alt=""></td><td class="tdtime">22:15</td><td>26.09.2012 </td><td class="tdname">Петля времени</td></tr>
                    <tr><td><img src="/assets/images/ps.png" width="22" height="25" alt=""></td><td class="tdtime">23:45</td><td>26.09.2012 </td><td class="tdname">Петля времени</td></tr>
                </table>
            </div>
            <h3>Трейлер</h3>
            <div class="trailer">

                <iframe style="width: 469px; height: 255px;" class="youtube-player" type="text/html" width="640" height="385" src="http://www.youtube.com/embed/<?php parse_str(parse_url($model->trailer, PHP_URL_QUERY)); echo $v; ?>" frameborder="0">
                </iframe>

            </div>
        </aside>
        <br class="cl">
    </article>
</div><!-- content -->