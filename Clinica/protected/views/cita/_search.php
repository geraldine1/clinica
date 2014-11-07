<?php
/* @var $this CitaController */
/* @var $model Cita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cita'); ?>
		<?php echo $form->textField($model,'id_cita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rut_paciente'); ?>
		<?php echo $form->textField($model,'rut_paciente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_cita'); ?>
		<?php echo $form->textField($model,'estado_cita',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_bloque'); ?>
		<?php echo $form->textField($model,'id_bloque'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->