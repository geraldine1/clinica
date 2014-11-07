<?php
/* @var $this PacienteController */
/* @var $model Paciente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-form',
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
		<?php echo $form->labelEx($model,'nombre_paciente'); ?>
		<?php echo $form->textField($model,'nombre_paciente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nombre_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos_paciente'); ?>
		<?php echo $form->textField($model,'apellidos_paciente',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'apellidos_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_paciente'); ?>
		<?php echo $form->textField($model,'direccion_paciente',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'direccion_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad_paciente'); ?>
		<?php echo $form->textField($model,'ciudad_paciente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ciudad_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_paciente'); ?>
		<?php echo $form->textField($model,'telefono_paciente'); ?>
		<?php echo $form->error($model,'telefono_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_paciente'); ?>
		<?php echo $form->textField($model,'correo_paciente',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'correo_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo_paciente'); ?>
		<?php echo $form->dropDownList($model, 'sexo_paciente', array('F'=>'Femenino', 'M'=>'Masculino')); ?>
		<?php echo $form->error($model,'sexo_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nac_paciente'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'attribute'=>"fecha_nac_paciente",
                'model'=>$model,
                'language'=>'es',
                'value'=>$model->fecha_nac_paciente,
                'language' => 'es',
               
                    'options'=>array(
                        'autoSize'=>true,
                        'buttonImage'=>Yii::app()->baseUrl.'/images/calendar.png',
                        'buttonImageOnly'=>true,
                        'dateFormat'=>'yy-mm-dd',
                        'showButtonPanel'=>true,
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        'defaultDate'=>'+1w',
                        'showOtherMonths'=>true,
                        'changeMonth' => 'true',
                        'changeYear' => 'true',
                        'yearRange'=>'-80',
                ),
            ))?>
		<?php echo $form->error($model,'fecha_nac_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesion_paciente'); ?>
		<?php echo $form->textField($model,'profesion_paciente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'profesion_paciente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_trabajo'); ?>
		<?php echo $form->textField($model,'lugar_trabajo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'lugar_trabajo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->