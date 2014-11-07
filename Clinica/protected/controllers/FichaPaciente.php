<?php

/**
 * This is the model class for table "ficha_dental".
 *
 * The followings are the available columns in table 'ficha_dental':
 * @property integer $id_ficha
 * @property string $rut_paciente
 * @property string $fecha_creacion
 *
 * The followings are the available model relations:
 * @property Anamnesis[] $anamnesises
 * @property Paciente $rutPaciente
 * @property Odontograma[] $odontogramas
 * @property TratamientoRealizado[] $tratamientoRealizados
 */
class FichaDental extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ficha_dental';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut_paciente, fecha_creacion', 'required'),
			array('rut_paciente', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ficha, rut_paciente, fecha_creacion', 'safe', 'on'=>'search'),
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
			'anamnesises' => array(self::HAS_MANY, 'Anamnesis', 'id_ficha'),
			'rutPaciente' => array(self::BELONGS_TO, 'Paciente', 'rut_paciente'),
			'odontogramas' => array(self::HAS_MANY, 'Odontograma', 'id_ficha'),
			'tratamientoRealizados' => array(self::HAS_MANY, 'TratamientoRealizado', 'id_ficha'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ficha' => 'Id Ficha',
			'rut_paciente' => 'Rut Paciente',
			'fecha_creacion' => 'Fecha Creacion',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_ficha',$this->id_ficha);
		$criteria->compare('rut_paciente',$this->rut_paciente,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FichaDental the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

?>