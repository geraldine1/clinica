<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rut_paciente'); ?>
		<?php echo $form->textField($model,'rut_paciente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_paciente'); ?>
		<?php echo $form->textField($model,'nombre_paciente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellidos_paciente'); ?>
		<?php echo $form->textField($model,'apellidos_paciente',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_paciente'); ?>
		<?php echo $form->textField($model,'direccion_paciente',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad_paciente'); ?>
		<?php echo $form->textField($model,'ciudad_paciente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_paciente'); ?>
		<?php echo $form->textField($model,'telefono_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo_paciente'); ?>
		<?php echo $form->textField($model,'correo_paciente',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexo_paciente'); ?>
		<?php echo $form->textField($model,'sexo_paciente',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_nac_paciente'); ?>
		<?php echo $form->textField($model,'fecha_nac_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesion_paciente'); ?>
		<?php echo $form->textField($model,'profesion_paciente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar_trabajo'); ?>
		<?php echo $form->textField($model,'lugar_trabajo',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->