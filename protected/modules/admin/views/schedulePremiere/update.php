<?php
/* @var $this SchedulePremiereController */
/* @var $model SchedulePremiere */

$this->breadcrumbs=array(
	'Schedule Premieres'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SchedulePremiere', 'url'=>array('index')),
	array('label'=>'Create SchedulePremiere', 'url'=>array('create')),
	array('label'=>'View SchedulePremiere', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SchedulePremiere', 'url'=>array('admin')),
);
?>

<h1>Update SchedulePremiere <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>