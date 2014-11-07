<?php
/* @var $this DiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dias',
);


?>

<h3 align="center">Bloques del Día <?php echo $modelDia->nombre_dia?></h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->searchByDia($modelDia->id_dia),
	'itemView'=>'_viewBloquesDia',
)); ?>