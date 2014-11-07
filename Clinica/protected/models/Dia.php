<?php

/**
 * This is the model class for table "dia".
 *
 * The followings are the available columns in table 'dia':
 * @property integer $id_dia
 * @property string $nombre_dia
 * @property string $estado_dia
 *
 * The followings are the available model relations:
 * @property Bloque[] $bloques
 * @property DiaNoDisponible[] $diaNoDisponibles
 */
class Dia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_dia, nombre_dia, estado_dia', 'required'),
			array('id_dia', 'numerical', 'integerOnly'=>true),
			array('nombre_dia, estado_dia', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_dia, nombre_dia, estado_dia', 'safe', 'on'=>'search'),
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
			'bloques' => array(self::HAS_MANY, 'Bloque', 'id_dia'),
			'diaNoDisponibles' => array(self::HAS_MANY, 'DiaNoDisponible', 'id_dia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_dia' => 'Id Dia',
			'nombre_dia' => 'Nombre Dia',
			'estado_dia' => 'Estado Dia',
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

		$criteria->compare('id_dia',$this->id_dia);
		$criteria->compare('nombre_dia',$this->nombre_dia,true);
		$criteria->compare('estado_dia',$this->estado_dia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
