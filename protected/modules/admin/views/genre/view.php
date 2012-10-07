<?php
/* @var $this GenreController */
/* @var $model Genre */

$this->breadcrumbs=array(
	'Жанры'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Список жанров', 'url'=>array('index')),
	array('label'=>'Создать жанр', 'url'=>array('create')),
	array('label'=>'Изменить жанр', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить жанр', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление списком', 'url'=>array('admin')),
);
?>

<h1>Просмотр жанра #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
	),
)); ?>
