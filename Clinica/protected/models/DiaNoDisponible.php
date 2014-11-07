<?php

/**
 * This is the model class for table "dia_no_disponible".
 *
 * The followings are the available columns in table 'dia_no_disponible':
 * @property integer $id_dia_no_disponible
 * @property string $fecha
 * @property integer $id_dia
 *
 * The followings are the available model relations:
 * @property Dia $idDia
 */
class DiaNoDisponible extends CActiveRecord
{
        public $nombre;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dia_no_disponible';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, id_dia', 'required'),
			array('id_dia', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_dia_no_disponible, fecha, id_dia, nombre', 'safe', 'on'=>'search'),
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
			'idDia' => array(self::BELONGS_TO, 'Dia', 'id_dia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_dia_no_disponible' => 'Id Dia No Disponible',
			'fecha' => 'Fecha',
			'id_dia' => 'Id Dia',
                        'nombre' => 'Día',
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
                $criteria->with = array('idDia');
                $criteria->compare('idDia.nombre_dia', $this->nombre,true);
		$criteria->compare('id_dia_no_disponible',$this->id_dia_no_disponible);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('id_dia',$this->id_dia);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DiaNoDisponible the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
