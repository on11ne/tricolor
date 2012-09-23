<?php
/* @var $this ScheduleController */
/* @var $data Schedule */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_id')); ?>:</b>
	<?php echo CHtml::encode($data->item_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hall_id')); ?>:</b>
	<?php echo CHtml::encode($data->hall_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date_time')); ?>:</b>
	<?php echo CHtml::encode($data->start_date_time); ?>
	<br />


</div>