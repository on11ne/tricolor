<?php
/* @var $this SchedulePremiereController */
/* @var $model SchedulePremiere */

$this->breadcrumbs=array(
	'Schedule Premieres'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SchedulePremiere', 'url'=>array('index')),
	array('label'=>'Create SchedulePremiere', 'url'=>array('create')),
	array('label'=>'Update SchedulePremiere', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SchedulePremiere', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SchedulePremiere', 'url'=>array('admin')),
);
?>

<h1>View SchedulePremiere #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_id',
		'start_date_time',
	),
)); ?>
