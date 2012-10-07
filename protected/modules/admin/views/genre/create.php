<?php
/* @var $this GenreController */
/* @var $model Genre */

$this->breadcrumbs=array(
	'Жанры' => array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Список жанров', 'url'=>array('index')),
	array('label'=>'Управление списком', 'url'=>array('admin')),
);
?>

<h1>Создание жанра</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>