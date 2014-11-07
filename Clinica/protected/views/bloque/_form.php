<?php
/* @var $this BloqueController */
/* @var $model Bloque */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bloque-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_bloque'); ?>
		<?php echo $form->textField($model,'id_bloque'); ?>
		<?php echo $form->error($model,'id_bloque'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio'); ?>
		<?php echo $form->textField($model,'inicio'); ?>
		<?php echo $form->error($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fin'); ?>
		<?php echo $form->textField($model,'fin'); ?>
		<?php echo $form->error($model,'fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dia'); ?>
		<?php echo $form->textField($model,'id_dia'); ?>
		<?php echo $form->error($model,'id_dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->