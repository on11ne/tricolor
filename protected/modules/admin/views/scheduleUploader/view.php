<?php
/* @var $this ScheduleUploaderController */
/* @var $model ScheduleUploader */

$this->breadcrumbs=array(
	'Schedule Uploaders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ScheduleUploader', 'url'=>array('index')),
	array('label'=>'Create ScheduleUploader', 'url'=>array('create')),
	array('label'=>'Update ScheduleUploader', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ScheduleUploader', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ScheduleUploader', 'url'=>array('admin')),
);
?>

<h1>View ScheduleUploader #<?php echo $model->id; ?></h1>

<?php
foreach(Yii::app()->user->getFlashes() as $key => $message) {
    echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
}
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'filename',
		'created',
	),
)); ?>
