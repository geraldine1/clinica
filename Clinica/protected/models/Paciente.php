<?php

/**
 * This is the model class for table "paciente".
 *
 * The followings are the available columns in table 'paciente':
 * @property string $rut_paciente
 * @property string $nombre_paciente
 * @property string $apellidos_paciente
 * @property string $direccion_paciente
 * @property string $ciudad_paciente
 * @property integer $telefono_paciente
 * @property string $correo_paciente
 * @property string $sexo_paciente
 * @property string $fecha_nac_paciente
 * @property string $profesion_paciente
 * @property string $lugar_trabajo
 *
 * The followings are the available model relations:
 * @property FichaDental[] $fichaDentals
 * @property Cita $rutPaciente
 */
class Paciente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut_paciente, nombre_paciente, apellidos_paciente, direccion_paciente, ciudad_paciente, telefono_paciente, correo_paciente, sexo_paciente, fecha_nac_paciente, profesion_paciente, lugar_trabajo', 'required'),
			array('telefono_paciente', 'numerical', 'integerOnly'=>true),
			array('rut_paciente, nombre_paciente, ciudad_paciente, profesion_paciente', 'length', 'max'=>20),
			array('apellidos_paciente, direccion_paciente, correo_paciente, lugar_trabajo', 'length', 'max'=>30),
			array('sexo_paciente', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rut_paciente, nombre_paciente, apellidos_paciente, direccion_paciente, ciudad_paciente, telefono_paciente, correo_paciente, sexo_paciente, fecha_nac_paciente, profesion_paciente, lugar_trabajo', 'safe', 'on'=>'search'),
                        array('rut_paciente', 'validateRut'),
                        array('correo_paciente','email'),
                    );
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'fichaDentals' => array(self::HAS_MANY, 'FichaDental', 'rut_paciente'),
			'rutPaciente' => array(self::BELONGS_TO, 'Cita', 'rut_paciente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rut_paciente' => 'Rut Paciente',
			'nombre_paciente' => 'Nombre',
			'apellidos_paciente' => 'Apellidos',
			'direccion_paciente' => 'Direccion',
			'ciudad_paciente' => 'Ciudad',
			'telefono_paciente' => 'Telefono',
			'correo_paciente' => 'Email',
			'sexo_paciente' => 'Sexo',
			'fecha_nac_paciente' => 'Fecha nacimiento',
			'profesion_paciente' => 'Profesion',
			'lugar_trabajo' => 'Lugar de trabajo',
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
                $data = explode('-', $this->rut_paciente);
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
                    $this->addError('rut_paciente', 'Rut inválido.');
         }
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('rut_paciente',$this->rut_paciente,true);
		$criteria->compare('nombre_paciente',$this->nombre_paciente,true);
		$criteria->compare('apellidos_paciente',$this->apellidos_paciente,true);
		$criteria->compare('direccion_paciente',$this->direccion_paciente,true);
		$criteria->compare('ciudad_paciente',$this->ciudad_paciente,true);
		$criteria->compare('telefono_paciente',$this->telefono_paciente);
		$criteria->compare('correo_paciente',$this->correo_paciente,true);
		$criteria->compare('sexo_paciente',$this->sexo_paciente,true);
		$criteria->compare('fecha_nac_paciente',$this->fecha_nac_paciente,true);
		$criteria->compare('profesion_paciente',$this->profesion_paciente,true);
		$criteria->compare('lugar_trabajo',$this->lugar_trabajo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paciente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
