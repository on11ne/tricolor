<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Список показов', 'url'=>array('index')),
	array('label'=>'Создать пока', 'url'=>array('create')),
	array('label'=>'Просмотр показа', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление списком', 'url'=>array('admin')),
);
?>

<h1>Изменить показ #<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>