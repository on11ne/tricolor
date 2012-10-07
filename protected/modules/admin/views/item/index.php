<?php
/* @var $this ItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Items',
);

$this->menu=array(
	array('label'=>'Создать показ', 'url'=>array('create')),
	array('label'=>'Управление списком', 'url'=>array('admin')),
);
?>

<h1>Показы</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
