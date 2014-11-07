<?php

/**
 * This is the model class for table "pieza_paciente".
 *
 * The followings are the available columns in table 'pieza_paciente':
 * @property integer $id_odontograma
 * @property integer $id_pieza
 * @property integer $id_pieza_paciente
 *
 * The followings are the available model relations:
 * @property Observacion[] $observacions
 * @property Pieza $idPieza
 * @property Odontograma $idOdontograma
 * @property TieneTratamiento[] $tieneTratamientos
 */
class PiezaPaciente extends CActiveRecord
{
        public $numero;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pieza_paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_odontograma, id_pieza', 'required'),
			array('id_odontograma, id_pieza', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_odontograma, id_pieza, id_pieza_paciente,numero', 'safe', 'on'=>'search'),
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
			'observacions' => array(self::HAS_MANY, 'Observacion', 'id_pieza_paciente'),
			'idPieza' => array(self::BELONGS_TO, 'Pieza', 'id_pieza'),
			'idOdontograma' => array(self::BELONGS_TO, 'Odontograma', 'id_odontograma'),
			'tieneTratamientos' => array(self::HAS_MANY, 'TieneTratamiento', 'id_pieza_paciente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_odontograma' => 'Id Odontograma',
			'id_pieza' => 'Id Pieza',
			'id_pieza_paciente' => 'Id Pieza Paciente',
                        'numero' => 'Numero',
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
                $criteria->with = array('idPieza');
                $criteria->compare('idPieza.nombre_pieza' , $this->numero);
		$criteria->compare('id_odontograma',$this->id_odontograma);
		$criteria->compare('id_pieza',$this->id_pieza);
		$criteria->compare('id_pieza_paciente',$this->id_pieza_paciente);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PiezaPaciente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
