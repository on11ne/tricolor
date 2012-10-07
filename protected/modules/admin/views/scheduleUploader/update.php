<?php
/* @var $this ScheduleUploaderController */
/* @var $model ScheduleUploader */

$this->breadcrumbs=array(
	'Schedule Uploaders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ScheduleUploader', 'url'=>array('index')),
	array('label'=>'Create ScheduleUploader', 'url'=>array('create')),
	array('label'=>'View ScheduleUploader', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ScheduleUploader', 'url'=>array('admin')),
);
?>

<h1>Изменить  <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>