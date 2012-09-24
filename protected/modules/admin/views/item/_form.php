<?php
/* @var $this ItemController */
/* @var $model Item */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teaser_image'); ?>
		<?php echo $form->textField($model,'teaser_image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'teaser_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'index_teaser_image'); ?>
		<?php echo $form->textField($model,'index_teaser_image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'index_teaser_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teaser_text'); ?>
		<?php echo $form->textArea($model,'teaser_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'teaser_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trailer'); ?>
		<?php echo $form->textField($model,'trailer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'trailer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'genres'); ?>
        <?php echo $form->checkBoxList($model,'genres', array()); ?>
        <?php echo $form->error($model,'genres'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

    <div class="row">
    <?php $this->widget('application.extensions.appendo.JAppendo',array(
        'id' => 'schedule',
        'model' => $model,
        'maxRows' => 10,
        'labelAdd' => 'Добавить показ',
        'allowDelete' => true,
        'viewName' => 'application.modules.admin.views.item._schedule_item',
    )); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->