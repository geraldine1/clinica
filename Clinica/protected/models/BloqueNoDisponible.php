<?php

/**
 * This is the model class for table "bloque_no_disponible".
 *
 * The followings are the available columns in table 'bloque_no_disponible':
 * @property integer $id_no_disponible
 * @property string $fecha
 * @property integer $id_bloque
 *
 * The followings are the available model relations:
 * @property Bloque $idBloque
 */
class BloqueNoDisponible extends CActiveRecord
{
        public $inicio;
        public $fin;
        public $nombre;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bloque_no_disponible';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, id_bloque, inicio', 'required'),
			array('id_bloque', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_no_disponible, fecha, id_bloque, inicio, fin, nombre', 'safe', 'on'=>'search'),
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
			'idBloque' => array(self::BELONGS_TO, 'Bloque', 'id_bloque'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_no_disponible' => 'Id No Disponible',
			'fecha' => 'Fecha',
			'id_bloque' => 'Id Bloque',
                        'inicio' => 'Hora de Inicio',
                        'fin' => 'Hora de Fin',
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
                $criteria->with = array('idBloque','idBloque.idDia');
                $criteria->compare('idDia.nombre_dia', $this->nombre,true);
                $criteria->compare('idBloque.inicio', $this->inicio,true);
                $criteria->compare('idBloque.fin', $this->fin, true);
		$criteria->compare('id_no_disponible',$this->id_no_disponible);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('t.id_bloque',$this->id_bloque);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        /*public function searchByBloque($bloque)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
                $criteria->with = array('idBloque');
                $criteria->compare('idBloque.id_bloque', $bloque);
                $criteria->compare('idBloque.inicio', $this->inicio);
                $criteria->compare('idBloque.fin', $this->fin);
		$criteria->compare('id_no_disponible',$this->id_no_disponible);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('t.id_bloque',$this->id_bloque);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}*/
        
        public function getMenuHoras() {
            
            return CHtml::listData(Bloque::model()->findAllByAttributes(array('id_dia'=>1)), "inicio", "inicio");
            
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BloqueNoDisponible the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
