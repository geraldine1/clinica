<?php /* @var $this Controller */ ?>
<?php Yii::app()->bootstrap->register(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
        <?php echo Yii::app()->bootstrap->init();?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">


	
		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
                       'brandLabel' => '<img src ="' . Yii::app()->request->baseUrl . '/slider/marca_1.jpg" />',
                        'display' => null, // default is static to top
                        'items' => array(
                         array('class' => 'bootstrap.widgets.TbNav',                       
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about') , 'visible'=>Yii::app()->user->name!='Dentista' & Yii::app()->user->name!='Asistente'),
                                array('label'=>'Usuarios', 'url'=>array('/Usuario/index'),'visible'=>Yii::app()->user->name=='Dentista'),
                                array('label'=>'Foro' , 'url'=>array('/Foro/index'), 'visible'=>Yii::app()->user->name!='Dentista' & Yii::app()->user->name!='Asistente'),
                                array('label'=>'Reserva tu hora' , 'url'=>array('/Cita/solicitud'), 'visible'=>Yii::app()->user->name!='Dentista' & Yii::app()->user->name!='Asistente'),
                                array('label'=>'Foro' , 'url'=>array('/Foro/admin'), 'visible'=>Yii::app()->user->name=='Dentista'),
                                array('label'=>'Pacientes', 'url'=>array('/Paciente/index'),'visible'=>Yii::app()->user->name=='Dentista'||Yii::app()->user->name=='Asistente'),
                                array('label'=>'Reportes','items'=> array( 
                                    array('label'=>'Reporte 1','url'=>array('/Atencion/viewReporte'),'visible'=>Yii::app()->user->name=='Dentista'||Yii::app()->user->name=='Asistente'),
                                ),),    
                                array('label'=>'Tratamientos', 'url'=>array('/Tratamiento/index'),'visible'=>Yii::app()->user->name=='Dentista'||Yii::app()->user->name=='Asistente'),
                                array('label'=>'Agenda','items'=> array( 
                                    array('label'=>'Dia','url'=>array('/Dia/index'),'visible'=>Yii::app()->user->name=='Dentista'||Yii::app()->user->name=='Asistente'),
                                    array('label'=>'Bloque','url'=>array('/Bloque/bloquearPorDia'),'visible'=>Yii::app()->user->name=='Dentista'||Yii::app()->user->name=='Asistente'),
                                ),),
                                array('label'=>'Citas', 'url'=>array('/Cita/admin'),'visible'=>Yii::app()->user->name=='Dentista'||Yii::app()->user->name=='Asistente'),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
                             ),
                            ),
                 
		)); ?>
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <strong>Desarrollado por Jordan Arteaga - Geraldine Bustos</strong><br />
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
