<?php
/* @var $this ScheduleUploaderController */
/* @var $model ScheduleUploader */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'schedule-uploader-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

	<p class="note">Поля, отмеченные <span class="required">*</span>, обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'filename'); ?>
		<?php echo $form->fileField($model, 'filename'); ?>
		<?php echo $form->error($model, 'filename'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model, 'type'); ?>
        <?php echo $form->listBox($model, 'type', array('schedule' => 'Расписание сеансов', 'premieres' => 'Премьеры')); ?>
        <?php echo $form->error($model, 'type'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Загрузка'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->