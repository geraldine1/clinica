<?php
$ficha = FichaDental::model()->findByAttributes(array('rut_paciente' => $model->rut_paciente));
$odontograma = Odontograma::model()->findByAttributes(array('id_ficha' => $ficha->id_ficha));

$this->menu=array(
	array('label'=>'Volver a datos del paciente', 'url'=>array('view','id'=>$model->rut_paciente)),
);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Odontograma</title>
</head>

<body>
<div align="center">
<table width="50%">
	<tr>
    	<td><img src="imagenes/18.png" width="47" height="72" /></td>
        <td><img src="imagenes/17.png" width="57" height="102" /></td> 
        <td><img src="imagenes/16.png" width="57" height="102" /></td> 
        <td><img src="imagenes/15.png" width="37" height="92" /></td> 
        <td><img src="imagenes/14.png" width="37" height="102" /></td> 
        <td><img src="imagenes/13.png" width="37" height="102" /></td> 
        <td><img src="imagenes/12.png" width="37" height="92" /></td>
        <td><img src="imagenes/11.png" width="37" height="102" /></td> 
        <td></td> 
        <td><img src="imagenes/21.png" width="37" height="102" /></td>  
        <td><img src="imagenes/22.png" width="37" height="92" /></td>
        <td><img src="imagenes/23.png" width="37" height="102" /></td> 
        <td><img src="imagenes/24.png" width="37" height="102" /></td> 
        <td><img src="imagenes/25.png" width="37" height="102" /></td> 
        <td><img src="imagenes/26.png" width="57" height="92" /></td>
        <td><img src="imagenes/27.png" width="57" height="92" /></td> 
        <td><img src="imagenes/28.png" width="47" height="72" /></td>             
    </tr>
    <tr align="center">
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 18));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('18', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 17));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('17', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 16));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('16', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 15));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('15', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 14));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('14', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 13));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('13', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 12));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('12', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 11));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('11', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        <td></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 21));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('21', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 22));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('22', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 23));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('24', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 24));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('24', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 25));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('25', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 26));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('26', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 27));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('27', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 28));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('28', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
    </tr>    
    <tr align="center">
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 48));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('48', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 47));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('47', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 46));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('46', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 45));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('45', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 44));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('44', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 43));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('43', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 42));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('42', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 41));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('41', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        <td></td>
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 31));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('31', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 32));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('32', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 33));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('33', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 34));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('34', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 35));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('35', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 36));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('36', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 37));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('37', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 38));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('38', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
    </tr>
    <tr>
    	<td><img src="imagenes/48.png" width="47" height="72" /></td>
        <td><img src="imagenes/47.png" width="57" height="102" /></td> 
        <td><img src="imagenes/46.png" width="57" height="102" /></td> 
        <td><img src="imagenes/45.png" width="37" height="112" /></td> 
        <td><img src="imagenes/44.png" width="37" height="102" /></td> 
        <td><img src="imagenes/43.png" width="37" height="102" /></td> 
        <td><img src="imagenes/42.png" width="37" height="92" /></td>
        <td><img src="imagenes/41.png" width="37" height="92" /></td> 
        <td></td> 
        <td><img src="imagenes/31.png" width="37" height="92" /></td>  
        <td><img src="imagenes/32.png" width="37" height="92" /></td>
        <td><img src="imagenes/33.png" width="37" height="102" /></td> 
        <td><img src="imagenes/34.png" width="37" height="102" /></td> 
        <td><img src="imagenes/35.png" width="37" height="112" /></td> 
        <td><img src="imagenes/36.png" width="57" height="102" /></td>
        <td><img src="imagenes/37.png" width="57" height="102" /></td> 
        <td><img src="imagenes/38.png" width="47" height="72" /></td>             
    </tr>
    </table>
    </div>
    <div align="center">
    <table>
    <tr>
    	<td><img src="imagenes/17.png" width="37" height="92" /></td>
        <td><img src="imagenes/16.png" width="37" height="92" /></td> 
        <td><img src="imagenes/15.png" width="37" height="92" /></td> 
        <td><img src="imagenes/14.png" width="37" height="92" /></td> 
        <td><img src="imagenes/13.png" width="37" height="92" /></td>
        <td></td>
        <td><img src="imagenes/23.png" width="37" height="92" /></td> 
        <td><img src="imagenes/24.png" width="37" height="92" /></td> 
        <td><img src="imagenes/25.png" width="37" height="92" /></td>
        <td><img src="imagenes/26.png" width="37" height="92" /></td> 
        <td><img src="imagenes/27.png" width="37" height="92" /></td>  
     </tr>
     <tr align="center">
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 55));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('55', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
         
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 54));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('54', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
         
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 53));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('53', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
         
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 52));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('52', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
         
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 51));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('51', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        <td></td>
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 61));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('61', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 62));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('62', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 63));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('63', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 64));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('64', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 65));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('65', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
      </tr>
       <tr align="center">
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 85));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('85', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
           
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 84));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('84', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
           
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 83));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('83', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
           
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 82));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('82', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); ?></td>
           
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 81));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('81', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        <td></td>
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 71));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('71', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 72));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('72', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 73));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('73', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 74));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('74', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente));
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
        
        <td><?php 
                $pieza = Pieza::model()->findByAttributes(array('nombre_pieza' => 75));
                $id = PiezaPaciente::model()->findByAttributes(array('id_odontograma' => $odontograma->id_odontograma, 'id_pieza' => $pieza->id_pieza));                
                echo CHtml::link('75', array('tieneTratamiento/tratamientosPieza', 'id_pieza_paciente' => $id->id_pieza_paciente)); 
                $tiene = TieneTratamiento::model()->findByAttributes(array('id_pieza_paciente' => $id->id_pieza_paciente));
                if($tiene){
                    echo TbHtml::icon(TbHtml::ICON_OK);
                }?></td>
      </tr>
      <tr>
      	<td><img src="imagenes/47.png" width="37" height="92" /></td> 
        <td><img src="imagenes/46.png" width="37" height="92" /></td> 
        <td><img src="imagenes/45.png" width="37" height="92" /></td> 
        <td><img src="imagenes/44.png" width="37" height="92" /></td> 
        <td><img src="imagenes/43.png" width="37" height="92" /></td> 
        <td></td>
        <td><img src="imagenes/33.png" width="37" height="92" /></td> 
        <td><img src="imagenes/34.png" width="37" height="92" /></td> 
        <td><img src="imagenes/35.png" width="37" height="92" /></td> 
        <td><img src="imagenes/36.png" width="37" height="92" /></td>
        <td><img src="imagenes/37.png" width="37" height="92" /></td> 
      </tr>
</table>   
</div>
</body>
</html>



