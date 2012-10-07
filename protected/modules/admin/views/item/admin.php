<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Показы'=>array('index'),
	'Управление списком',
);

$this->menu=array(
	array('label' => 'Список показов', 'url'=>array('index')),
	array('label' => 'Создать показ', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('item-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление списком</h1>

<p>
Возможно использование операторов сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
или <b>=</b>).
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'item-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'teaser_image',
		'index_teaser_image',
		'teaser_text',
		'trailer',
		/*
		'description',
		'order',
		'created',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
