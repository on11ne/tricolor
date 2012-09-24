<?php
/* @var $this ScheduleUploaderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Schedule Uploaders',
);

$this->menu=array(
	array('label'=>'Create ScheduleUploader', 'url'=>array('create')),
	array('label'=>'Manage ScheduleUploader', 'url'=>array('admin')),
);
?>

<h1>Schedule Uploaders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
