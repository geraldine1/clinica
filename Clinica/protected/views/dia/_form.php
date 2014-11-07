<?php
/* @var $this DiaController */
/* @var $model Dia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'id_dia'); ?>
		<?php echo $form->hiddenField($model,'id_dia'); ?>
		<?php //echo $form->error($model,'id_dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_dia'); ?>
		<?php echo $form->textField($model,'nombre_dia',array('readonly'=>true,'size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nombre_dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_dia'); ?>
		<?php echo $form->dropDownList($model, 'estado_dia', array('Activo'=>'Activo', 'Inactivo'=>'Inactivo')); ?>
		<?php echo $form->error($model,'estado_dia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->