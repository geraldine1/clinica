<?php

/**
 * This is the model class for table "tratamiento_realizado".
 *
 * The followings are the available columns in table 'tratamiento_realizado':
 * @property integer $id_realizado
 * @property integer $id_atencion
 * @property integer $id_tratamiento
 * @property string $comentario
 *
 * The followings are the available model relations:
 * @property TieneTratamiento[] $tieneTratamientos
 * @property Tratamiento $idTratamiento
 * @property Atencion $idAtencion
 */
class TratamientoRealizado extends CActiveRecord {
    
    public $Nombre_Tratamiento;
    
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tratamiento_realizado';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_atencion, id_tratamiento, comentario', 'required'),
            array('id_atencion, id_tratamiento', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_realizado, id_atencion, id_tratamiento, Nombre_Tratamiento, comentario', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'tieneTratamientos' => array(self::HAS_MANY, 'TieneTratamiento', 'id_realizado'),
            'idTratamiento' => array(self::BELONGS_TO, 'Tratamiento', 'id_tratamiento'),
            'idAtencion' => array(self::BELONGS_TO, 'Atencion', 'id_atencion'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_realizado' => 'Id Realizado',
            'id_atencion' => 'Id Atencion',
            'id_tratamiento' => 'Id Tratamiento',
            'comentario' => 'Comentario',
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

        $criteria->compare('id_realizado', $this->id_realizado);
        $criteria->compare('id_atencion', $this->id_atencion);
        $criteria->compare('id_tratamiento', $this->id_tratamiento);
        $criteria->compare('comentario', $this->comentario, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function searchByAtencion($id) {
        $criteria = new CDbCriteria;
        $criteria->with = array('idTratamiento');
        $criteria->compare('id_atencion', $id, true);
        $criteria->compare('id_realizado', $this->id_realizado);
        $criteria->compare('id_atencion', $this->id_atencion);
        $criteria->compare('id_tratamiento', $this->id_tratamiento);
        $criteria->compare('comentario', $this->comentario, true);
        $criteria->compare('idTratamiento.nombre' , $this->Nombre_Tratamiento,true);
        
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    
    public function getMenuTratamientos() {
            
            return CHtml::listData(Tratamiento::model()->findAll(), "id_tratamiento", "nombre");
            
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return TratamientoRealizado the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
