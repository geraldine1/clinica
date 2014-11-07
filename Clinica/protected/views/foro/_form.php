<?php
/* @var $this ForoController */
/* @var $model Foro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'foro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rut_consultante'); ?>
		<?php echo $form->textField($model,'rut_consultante',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'rut_consultante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_consultante'); ?>
		<?php echo $form->textField($model,'correo_consultante',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'correo_consultante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_consulta'); ?>
		<?php echo $form->textField($model,'fecha_consulta'); ?>
		<?php echo $form->error($model,'fecha_consulta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pregunta'); ?>
		<?php echo $form->textArea($model,'pregunta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pregunta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'respuesta'); ?>
		<?php echo $form->textArea($model,'respuesta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'respuesta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_consulta'); ?>
		<?php echo $form->dropDownList($model, 'estado_consulta', array('Pendiente'=>'Pendiente', 'Respondida'=>'Respondida')); ?>
		<?php echo $form->error($model,'estado_consulta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Listo!'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->