<?php

/**
 * This is the model class for table "cita".
 *
 * The followings are the available columns in table 'cita':
 * @property integer $id_cita
 * @property string $rut_paciente
 * @property string $estado_cita
 * @property string $fecha
 * @property integer $id_bloque
 *
 * The followings are the available model relations:
 * @property Bloque $idBloque
 * @property Paciente $rutPaciente
 */
class Cita extends CActiveRecord {

    public $hora;
    public $fin;
    public $paciente;
    public $apellidos;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'cita';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('rut_paciente, estado_cita, fecha, id_bloque, hora', 'required'),
            array('id_bloque', 'numerical', 'integerOnly' => true),
            array('rut_paciente', 'length', 'max' => 20),
            array('estado_cita', 'length', 'max' => 15),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id_cita, rut_paciente, estado_cita, fecha, id_bloque, hora, fin, paciente, apellidos', 'safe', 'on' => 'search'),
            array('rut_paciente','validatePaciente'),
        );
    }
    
    public function validatePaciente(){
        $modelPaciente = Paciente::model()->findByPk($this->rut_paciente);
        if(!$modelPaciente){
            $this->addError('rut_usuario', 'El rut ingresado no corresponde a ningún paciente.');
        }            
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idBloque' => array(self::BELONGS_TO, 'Bloque', 'id_bloque'),
            'rutPaciente' => array(self::BELONGS_TO, 'Paciente', 'rut_paciente'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_cita' => 'Id Cita',
            'rut_paciente' => 'Rut',
            'estado_cita' => 'Estado',
            'fecha' => 'Fecha',
            'id_bloque' => 'Id Bloque',
            'hora' => 'Inicio',
            'paciente' => 'Nombre',
            'apellidos' => 'Apellidos',
            'fin' => 'Fin',
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
        $criteria->with = array('idBloque', 'rutPaciente');
        $criteria->compare('idBloque.inicio', $this->hora, true);
        $criteria->compare('idBloque.fin', $this->fin, true);
        $criteria->compare('rutPaciente.nombre_paciente', $this->paciente, true);
        $criteria->compare('rutPaciente.apellidos_paciente', $this->apellidos, true);
        $criteria->compare('t.id_cita', $this->id_cita);
        $criteria->compare('t.rut_paciente', $this->rut_paciente, true);
        $criteria->compare('t.estado_cita', $this->estado_cita, true);
        $criteria->compare('t.fecha', $this->fecha, true);
        $criteria->compare('t.id_bloque', $this->id_bloque);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'defaultOrder'=>'fecha DESC',
            ),
        ));
    }

    public function getMenuHoras() {

        return CHtml::listData(Bloque::model()->findAllByAttributes(array('id_dia' => 1)), "inicio", "inicio");
    }

    public function getMenuHorasDisponibles($fecha) {
        $idDia = $this->diaSemana($fecha);
        return CHtml::listData(Bloque::model()->findAllBySql("select * from bloque,bloque_no_disponible where bloque.id_dia = "."'".$idDia."' and bloque.id_bloque not in (select id_bloque from bloque_no_disponible where fecha = "."'".$fecha."'".") and bloque.id_bloque not in(select id_bloque from cita where fecha = "."'".$fecha."'"." and estado_cita = 'Confirmada')") , "inicio", "inicio");
    }

    public function diaSemana($fecha) {
        $ano = substr($fecha, -10, 4);
        $mes = substr($fecha, -5, 2);
        $dia = substr($fecha, -2, 2);
        $valor = date("w", mktime(0, 0, 0, $mes, $dia, $ano));
        return $valor;
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Cita the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
