<?php

/**
 * This is the model class for table "foro".
 *
 * The followings are the available columns in table 'foro':
 * @property integer $id_foro
 * @property string $rut_consultante
 * @property string $correo_consultante
 * @property string $fecha_consulta
 * @property string $pregunta
 * @property string $respuesta
 * @property string $estado_consulta
 */
class Foro extends CActiveRecord {

    public $respondida = "Respondida";

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'foro';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('rut_consultante, correo_consultante, fecha_consulta, pregunta, respuesta, estado_consulta', 'required'),
            array('rut_consultante, estado_consulta', 'length', 'max' => 20),
            array('correo_consultante', 'length', 'max' => 35),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_foro, rut_consultante, correo_consultante, fecha_consulta, pregunta, respuesta, estado_consulta', 'safe', 'on' => 'search'),
            array('rut_consultante', 'validateRut'),
            array('correo_consultante', 'email'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_foro' => 'Id Foro',
            'rut_consultante' => 'Rut Consultante',
            'correo_consultante' => 'Correo Consultante',
            'fecha_consulta' => 'Fecha Consulta',
            'pregunta' => 'Pregunta',
            'respuesta' => 'Respuesta',
            'estado_consulta' => 'Estado Consulta',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function validateRut($attribute, $params) {
        $data = explode('-', $this->rut_consultante);
        $evaluate = strrev($data[0]);
        $multiply = 2;
        $store = 0;
        for ($i = 0; $i < strlen($evaluate); $i++) {
            $store += $evaluate[$i] * $multiply;
            $multiply++;
            if ($multiply > 7)
                $multiply = 2;
        }
        isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
        $result = 11 - ($store % 11);
        if ($result == 10)
            $result = 'k';
        if ($result == 11)
            $result = 0;
        if ($verifyCode != $result)
            $this->addError('rut_consultante', 'Rut inválido.');
    }

    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_foro', $this->id_foro);
        $criteria->compare('rut_consultante', $this->rut_consultante, true);
        $criteria->compare('correo_consultante', $this->correo_consultante, true);
        $criteria->compare('fecha_consulta', $this->fecha_consulta, true);
        $criteria->compare('pregunta', $this->pregunta, true);
        $criteria->compare('respuesta', $this->respuesta, true);
        $criteria->compare('estado_consulta', $this->estado_consulta, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function searchRespondidas() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_foro', $this->id_foro);
        $criteria->compare('rut_consultante', $this->rut_consultante, true);
        $criteria->compare('correo_consultante', $this->correo_consultante, true);
        $criteria->compare('fecha_consulta', $this->fecha_consulta, true);
        $criteria->compare('pregunta', $this->pregunta, true);
        $criteria->compare('respuesta', $this->respuesta, true);
        $criteria->compare('estado_consulta', $this->estado_consulta, true);
        $criteria->compare('estado_consulta', $this->respondida, true);
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder'=>'id_foro DESC',
            ),
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Foro the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
