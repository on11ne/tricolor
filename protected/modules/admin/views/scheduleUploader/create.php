<?php
/* @var $this ScheduleUploaderController */
/* @var $model ScheduleUploader */

$this->breadcrumbs=array(
	'Schedule Uploaders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ScheduleUploader', 'url'=>array('index')),
	array('label'=>'Manage ScheduleUploader', 'url'=>array('admin')),
);
?>

<h1>Create ScheduleUploader</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>