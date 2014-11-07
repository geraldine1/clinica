<?php
/* @var $this CitaController */
/* @var $model Cita */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cita-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        
	<div class="row">
		<?php echo $form->labelEx($model,'rut_paciente'); ?>
		<?php echo $form->textField($model,'rut_paciente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'rut_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->dropDownList($model,'hora',$model->getMenuHorasDisponibles($fecha)); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->