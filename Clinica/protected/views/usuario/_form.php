<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rut_usuario'); ?>
		<?php echo $form->textField($model,'rut_usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'rut_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo Usuario'); ?>
		<?php echo $form->dropDownList($model,'id_tipo',$model->getMenuRoles()); ?>
		<?php echo $form->error($model,'id_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_usuario'); ?>
		<?php echo $form->textField($model,'nombre_usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nombre_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos_usuario'); ?>
		<?php echo $form->textField($model,'apellidos_usuario',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'apellidos_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_usuario'); ?>
		<?php echo $form->textField($model,'direccion_usuario',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'direccion_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_usuario'); ?>
		<?php echo $form->textField($model,'telefono_usuario'); ?>
		<?php echo $form->error($model,'telefono_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_usuario'); ?>
		<?php echo $form->textField($model,'correo_usuario',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'correo_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->