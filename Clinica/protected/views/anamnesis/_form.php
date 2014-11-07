<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anamnesis-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ficha'); ?>
		<?php echo $form->textField($model,'id_ficha',array('readonly'=>true)); ?>
		<?php echo $form->error($model,'id_ficha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alergias'); ?>
		<?php echo $form->textArea($model,'alergias',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alergias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enfermedades'); ?>
		<?php echo $form->textArea($model,'enfermedades',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'enfermedades'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enfermedades_familia'); ?>
		<?php echo $form->textArea($model,'enfermedades_familia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'enfermedades_familia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicamentos'); ?>
		<?php echo $form->textArea($model,'medicamentos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'medicamentos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otros'); ?>
		<?php echo $form->textArea($model,'otros',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'otros'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->