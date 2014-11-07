<?php

/**
 * This is the model class for table "anamnesis".
 *
 * The followings are the available columns in table 'anamnesis':
 * @property integer $id_anamnesis
 * @property integer $id_ficha
 * @property string $alergias
 * @property string $enfermedades
 * @property string $enfermedades_familia
 * @property string $medicamentos
 * @property string $otros
 *
 * The followings are the available model relations:
 * @property FichaDental $idFicha
 */
class Anamnesis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anamnesis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ficha, alergias, enfermedades, enfermedades_familia, medicamentos', 'required'),
			array('id_ficha', 'numerical', 'integerOnly'=>true),
			array('otros', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_anamnesis, id_ficha, alergias, enfermedades, enfermedades_familia, medicamentos, otros', 'safe', 'on'=>'search'),
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
			'idFicha' => array(self::BELONGS_TO, 'FichaDental', 'id_ficha'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_anamnesis' => 'Id Anamnesis',
			'id_ficha' => 'Id Ficha',
			'alergias' => 'Alergias',
			'enfermedades' => 'Enfermedades',
			'enfermedades_familia' => 'Enfermedades Familia',
			'medicamentos' => 'Medicamentos',
			'otros' => 'Otros',
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

		$criteria->compare('id_anamnesis',$this->id_anamnesis);
		$criteria->compare('id_ficha',$this->id_ficha);
		$criteria->compare('alergias',$this->alergias,true);
		$criteria->compare('enfermedades',$this->enfermedades,true);
		$criteria->compare('enfermedades_familia',$this->enfermedades_familia,true);
		$criteria->compare('medicamentos',$this->medicamentos,true);
		$criteria->compare('otros',$this->otros,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Anamnesis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
