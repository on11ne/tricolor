<?php
/* @var $this SchedulePremiereController */
/* @var $model SchedulePremiere */

$this->breadcrumbs=array(
	'Schedule Premieres'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SchedulePremiere', 'url'=>array('index')),
	array('label'=>'Manage SchedulePremiere', 'url'=>array('admin')),
);
?>

<h1>Create SchedulePremiere</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>