<?php

$this->breadcrumbs=array(
    'Показы' => array('index'),
    'Загрузка расписания',
);

$this->menu=array(
    array('label'=>'Список показов', 'url'=>array('index')),
    array('label'=>'Создать показ', 'url'=>array('create')),
    array('label'=>'Просмотр показа', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Управление показами', 'url'=>array('admin')),
);
?>

<h1>Загрузка расписания</h1>

<div class="form">

    <?php CHtml::beginForm('CActiveForm', array(
        'id' => 'schedule-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
    )); ?>

    <?php echo CHtml::errorSummary($model); ?>

    <div class="row">
        <?php echo CHtml::errorSummary($model,'schedule'); ?>
        <?php echo CHtml::fileField('schedule'); ?>
        <?php echo CHtml::error($model,'schedule'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Сохранить'); ?>
    </div>

    <?php CHtml::endForm(); ?>

</div><!-- form -->