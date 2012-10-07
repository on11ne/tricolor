<?php
/* @var $this SchedulePremiereController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Schedule Premieres',
);

$this->menu=array(
	array('label'=>'Create SchedulePremiere', 'url'=>array('create')),
	array('label'=>'Manage SchedulePremiere', 'url'=>array('admin')),
);
?>

<h1>Schedule Premieres</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
