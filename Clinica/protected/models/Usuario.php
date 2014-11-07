<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $rut_usuario
 * @property integer $id_tipo
 * @property string $nombre_usuario
 * @property string $apellidos_usuario
 * @property string $direccion_usuario
 * @property integer $telefono_usuario
 * @property string $correo_usuario
 * @property integer $password
 *
 * The followings are the available model relations:
 * @property TipoUsuario $idTipo
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut_usuario, id_tipo, nombre_usuario, apellidos_usuario, direccion_usuario, telefono_usuario, correo_usuario, password', 'required'),
			array('id_tipo, telefono_usuario, password', 'numerical', 'integerOnly'=>true),
			array('rut_usuario, nombre_usuario', 'length', 'max'=>20),
			array('apellidos_usuario, direccion_usuario, correo_usuario', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rut_usuario, id_tipo, nombre_usuario, apellidos_usuario, direccion_usuario, telefono_usuario, correo_usuario, password', 'safe', 'on'=>'search'),
                        array('rut_usuario', 'validateRut'),
                        array('correo_usuario','email'),
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
			'idTipo' => array(self::BELONGS_TO, 'TipoUsuario', 'id_tipo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rut_usuario' => 'Rut Usuario',
			'id_tipo' => 'Tipo',
			'nombre_usuario' => 'Nombre',
			'apellidos_usuario' => 'Apellidos ',
			'direccion_usuario' => 'Direccion',
			'telefono_usuario' => 'Telefono ',
			'correo_usuario' => 'Email',
			'password' => 'Password',
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
        public function validateRut($attribute, $params) {
                $data = explode('-', $this->rut_usuario);
                $evaluate = strrev($data[0]);
                $multiply = 2;
                $store = 0;
                for ($i = 0; $i < strlen($evaluate); $i++) {
                    $store += $evaluate[$i] * $multiply;
                    $multiply++;
                    if ($multiply > 7)
                        $multiply = 2;
                }
                isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
                $result = 11 - ($store % 11);
                if ($result == 10)
                    $result = 'k';
                if ($result == 11)
                    $result = 0;
                if ($verifyCode != $result)
                    $this->addError('rut_usuario', 'Rut inválido.');
         }
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('rut_usuario',$this->rut_usuario,true);
		$criteria->compare('id_tipo',$this->id_tipo);
		$criteria->compare('nombre_usuario',$this->nombre_usuario,true);
		$criteria->compare('apellidos_usuario',$this->apellidos_usuario,true);
		$criteria->compare('direccion_usuario',$this->direccion_usuario,true);
		$criteria->compare('telefono_usuario',$this->telefono_usuario);
		$criteria->compare('correo_usuario',$this->correo_usuario,true);
		$criteria->compare('password',$this->password);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getMenuRoles() {
            
            return CHtml::listData(TipoUsuario::model()->findAll(), "id_tipo", "nombre_tipo");
            
        }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
