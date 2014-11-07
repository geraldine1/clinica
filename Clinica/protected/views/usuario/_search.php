<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rut_usuario'); ?>
		<?php echo $form->textField($model,'rut_usuario',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo'); ?>
		<?php echo $form->textField($model,'id_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_usuario'); ?>
		<?php echo $form->textField($model,'nombre_usuario',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellidos_usuario'); ?>
		<?php echo $form->textField($model,'apellidos_usuario',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_usuario'); ?>
		<?php echo $form->textField($model,'direccion_usuario',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_usuario'); ?>
		<?php echo $form->textField($model,'telefono_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo_usuario'); ?>
		<?php echo $form->textField($model,'correo_usuario',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->