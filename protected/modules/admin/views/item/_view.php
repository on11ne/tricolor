<?php
/* @var $this ItemController */
/* @var $data Item */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teaser_image')); ?>:</b>
	<?php echo CHtml::encode($data->teaser_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('index_teaser_image')); ?>:</b>
	<?php echo CHtml::encode($data->index_teaser_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teaser_text')); ?>:</b>
	<?php echo CHtml::encode($data->teaser_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trailer')); ?>:</b>
	<?php echo CHtml::encode($data->trailer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	*/ ?>

</div>