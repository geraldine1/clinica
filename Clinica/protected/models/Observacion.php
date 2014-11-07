<?php

/**
 * This is the model class for table "observacion".
 *
 * The followings are the available columns in table 'observacion':
 * @property integer $id_observacion
 * @property integer $id_pieza_paciente
 * @property string $observacion
 *
 * The followings are the available model relations:
 * @property PiezaPaciente $idPiezaPaciente
 */
class Observacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'observacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pieza_paciente, observacion', 'required'),
			array('id_pieza_paciente', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_observacion, id_pieza_paciente, observacion', 'safe', 'on'=>'search'),
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
			'idPiezaPaciente' => array(self::BELONGS_TO, 'PiezaPaciente', 'id_pieza_paciente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_observacion' => 'Id Observacion',
			'id_pieza_paciente' => 'Id Pieza Paciente',
			'observacion' => 'Observacion',
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

		$criteria->compare('id_observacion',$this->id_observacion);
		$criteria->compare('id_pieza_paciente',$this->id_pieza_paciente);
		$criteria->compare('observacion',$this->observacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchByPieza($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
                $criteria->compare('id_pieza_paciente',$id);
		$criteria->compare('id_observacion',$this->id_observacion);
		$criteria->compare('id_pieza_paciente',$this->id_pieza_paciente);
		$criteria->compare('observacion',$this->observacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Observacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
