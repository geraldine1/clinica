<?php

/**
 * This is the model class for table "bloque".
 *
 * The followings are the available columns in table 'bloque':
 * @property integer $id_bloque
 * @property string $inicio
 * @property string $fin
 * @property integer $id_dia
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property Dia $idDia
 * @property BloqueNoDisponible[] $bloqueNoDisponibles
 * @property CitaBloque[] $citaBloques
 */
class Bloque extends CActiveRecord {
    
    public $nombreDia;
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bloque';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('inicio, fin, id_dia, estado', 'required'),
            array('id_dia', 'numerical', 'integerOnly' => true),
            array('estado', 'length', 'max' => 20),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_bloque, inicio, fin, id_dia, estado', 'safe', 'on' => 'search'),
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
            'bloqueNoDisponibles' => array(self::HAS_MANY, 'BloqueNoDisponible', 'id_bloque'),
            'citas' => array(self::HAS_MANY, 'Cita', 'id_bloque'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_bloque' => 'Id Bloque',
            'inicio' => 'Inicio',
            'fin' => 'Fin',
            'id_dia' => 'Id Dia',
            'estado' => 'Estado',
            'nombreDia' => 'Dia',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_bloque', $this->id_bloque);
        $criteria->compare('inicio', $this->inicio, true);
        $criteria->compare('fin', $this->fin, true);
        $criteria->compare('id_dia', $this->id_dia);
        $criteria->compare('estado', $this->estado, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function searchByDia($id) {
        $criteria = new CDbCriteria;
        $criteria->with = array('idDia');
        $criteria->compare('idDia.nombre_dia',$this->nombreDia);
        $criteria->compare('id_bloque', $this->id_bloque);
        $criteria->compare('inicio', $this->inicio, true);
        $criteria->compare('fin', $this->fin, true);
        $criteria->compare('t.id_dia', $this->id_dia);
        $criteria->compare('t.id_dia', $id);
        $criteria->compare('estado', $this->estado, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Bloque the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
