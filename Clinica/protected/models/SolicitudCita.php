<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class SolicitudCita extends CActiveRecord{

    public $fecha;
    
    public function tableName()
	{
		return 'cita';
	}

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fecha', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'fecha' => 'Fecha',
        );
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}

?>
