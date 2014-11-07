<?php
/* @var $this PiezaController */
/* @var $model Pieza */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pieza-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_pieza'); ?>
		<?php echo $form->textField($model,'nombre_pieza',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nombre_pieza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?php echo $form->textField($model,'imagen',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'imagen'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->