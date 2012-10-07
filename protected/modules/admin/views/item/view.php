<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs = array(
	'Показы' => array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Список показов', 'url'=>array('index')),
	array('label'=>'Создать показ', 'url'=>array('create')),
	array('label'=>'Изменить показ', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить показ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы действительно хотите удалить Показ?')),
	array('label'=>'Управление списокм', 'url'=>array('admin')),
);
?>

<h1>Просмотр показа #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'id:number',
		'title',
        array(
            'label' => 'Изображение описания',
            'type' => 'raw',
            'value' => CHtml::image('/images/items/teasers/' . $model->teaser_image, "image")
        ),
        array(
            'label' => 'Изображение слайдера',
            'type' => 'raw',
            'value' => CHtml::image('/images/items/index_teasers/' . $model->index_teaser_image, "image")
        ),
        array(
            'label' => 'Изображение слайдера видео',
            'type' => 'raw',
            'value' => CHtml::image('/images/items/slider_teasers/' . $model->slider_teaser_image, "image")
        ),
		'teaser_text',
		'trailer:url',
		'description:html',
        array(
            'label' => 'Жанры',
            'type' => 'raw',
            'value' => $model->renderGenres($model->genres)
        ),
		'order:number',
		'created:datetime',
	),
)); ?>
