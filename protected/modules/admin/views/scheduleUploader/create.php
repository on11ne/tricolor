<?php
/* @var $this ScheduleUploaderController */
/* @var $model ScheduleUploader */

$this->breadcrumbs=array(
	'Загрузка расписания'=>array('index'),
	'Форма загрузки',
);

$this->menu=array(
	array('label'=>'Список расписаний', 'url'=>array('index')),
	array('label'=>'Управление списком', 'url'=>array('admin')),
);
?>

<h1>Загрузить расписание</h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>