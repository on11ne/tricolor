<?php
/* @var $this ItemController */
/* @var $model Item */
/* @var $form CActiveForm */
?>

<style>

    .checkboxgroup span label {
        width: 200px;
        float: left;
        font-weight: normal;
    }
</style>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

	<p class="note">Поля, помеченные <span class="required">*</span>, обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'teaser_image'); ?>
		<?php echo $form->fileField($model, 'teaser_image'); ?>
		<?php echo $form->error($model, 'teaser_image'); ?>
	</div>

    <?php if($model->isNewRecord != '1') : ?>
    <div class="row">
        <?php echo CHtml::image('/images/items/teasers/' . $model->teaser_image, "image"); ?>
    </div>
    <?php endif; ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'index_teaser_image'); ?>
		<?php echo $form->fileField($model, 'index_teaser_image'); ?>
		<?php echo $form->error($model, 'index_teaser_image'); ?>
	</div>

    <?php if($model->isNewRecord != '1') : ?>
    <div class="row">
        <?php echo CHtml::image('/images/items/index_teasers/' . $model->index_teaser_image, "image"); ?>
    </div>
    <?php endif; ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'slider_teaser_image'); ?>
        <?php echo $form->fileField($model, 'slider_teaser_image'); ?>
        <?php echo $form->error($model, 'slider_teaser_image'); ?>
    </div>

    <?php if($model->isNewRecord != '1') : ?>
    <div class="row">
        <?php echo CHtml::image('/images/items/slider_teasers/' . $model->slider_teaser_image, "image"); ?>
    </div>
    <?php endif; ?>

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

    <div class="row checkboxgroup">
        <?php echo $form->labelEx($model,'genres'); ?>
        <?php echo $form->listBox($model, 'genres', CHtml::listData(Genre::model()->findAll(), 'id', 'title'), array('multiple' => 'multiple')); ?>
        <?php echo $form->error($model,'genres'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">

        <?php echo $form->labelEx($model, 'created'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'name' => 'Item[created]',
            'model' => $model,
            'language' => 'ru',
            'value' => $model->created,
            // additional javascript options for the date picker plugin
            'options'=>array(
                'showAnim' => 'fold',
                'dateFormat' => 'yy-mm-dd',
                'changeMonth' => 'true',
                'showButtonPanel' => 'true',
            ),
            'htmlOptions' => array(
                'maxlength' => 20,
                'style' => "width: 120px;"
            ),
        ));

        ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->