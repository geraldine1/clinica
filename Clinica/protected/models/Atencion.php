<?php

/**
 * This is the model class for table "atencion".
 *
 * The followings are the available columns in table 'atencion':
 * @property integer $id_atencion
 * @property integer $id_ficha
 * @property string $fecha
 * @property string $fecha_inicio
 * @property string $fecha_termino
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property FichaDental $idFicha
 * @property TratamientoRealizado[] $tratamientoRealizados
 */
class Atencion extends CActiveRecord
{
        public $inicio;
        public $fin;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'atencion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ficha, fecha, fecha_inicio, fecha_termino, estado', 'required'),
			array('id_ficha', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_atencion, id_ficha, fecha, fecha_inicio, fecha_termino, estado', 'safe', 'on'=>'search'),
                        array('fecha_termino','compare','compareAttribute'=>'fecha_inicio','operator'=>'>=','message'=>'Fecha de Término debe ser superior a Fecha de Inicio'),
                        
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
			'tratamientoRealizados' => array(self::HAS_MANY, 'TratamientoRealizado', 'id_atencion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_atencion' => 'Id Atencion',
			'id_ficha' => 'Id Ficha',
			'fecha' => 'Fecha',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_termino' => 'Fecha Termino',
			'estado' => 'Estado',
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

		$criteria->compare('id_atencion',$this->id_atencion);
		$criteria->compare('id_ficha',$this->id_ficha);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_termino',$this->fecha_termino,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchByPaciente($id){
                $criteria=new CDbCriteria;
                $criteria->with = array('idFicha');
                $criteria->compare('t.id_ficha',$id,true);
		$criteria->compare('id_atencion',$this->id_atencion);
		$criteria->compare('t.id_ficha',$this->id_ficha);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_termino',$this->fecha_termino,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Atencion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
