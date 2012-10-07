<?php
/* @var $this GenreController */
/* @var $model Genre */

$this->breadcrumbs=array(
	'Жанры'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Изменение',
);

$this->menu=array(
	array('label'=>'Список жанров', 'url'=>array('index')),
	array('label'=>'Создать жанр', 'url'=>array('create')),
	array('label'=>'Просмотр жанра', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление списком', 'url'=>array('admin')),
);
?>

<h1>Изменение жанра #<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>