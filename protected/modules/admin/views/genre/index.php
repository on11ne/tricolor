<?php
/* @var $this GenreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Жанры',
);

$this->menu=array(
	array('label' => 'Создать жанр', 'url'=>array('create')),
	array('label' => 'Управление списком', 'url'=>array('admin')),
);
?>

<h1>Жанры</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
