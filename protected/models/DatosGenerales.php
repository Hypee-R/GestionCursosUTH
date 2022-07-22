<?php

/**
 * This is the model class for table "datos_generales".
 *
 * The followings are the available columns in table 'datos_generales':
 * @property integer $ID_DATO_GENERAL
 * @property string $NOMBRE
 * @property string $APELLIDO_PATERNO
 * @property string $APELLIDO_MATERNO
 * @property string $CORREO
 * @property string $CURP
 * @property string $DOMICILIO
 * @property string $CODIGO_POSTAL
 * @property string $CIUDAD
 * @property string $MUNICIPIO
 * @property string $LOCALIDAD
 * @property string $TELEFONO
 * @property string $CELULAR
 *
 * The followings are the available model relations:
 * @property Usuarios[] $usuarioses
 */
class DatosGenerales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'datos_generales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOMBRE, APELLIDO_PATERNO, APELLIDO_MATERNO, CURP, CORREO, DOMICILIO, CODIGO_POSTAL, CIUDAD, MUNICIPIO, LOCALIDAD', 'required'),
			array('NOMBRE, APELLIDO_PATERNO, APELLIDO_MATERNO', 'length', 'max'=>25),
			array('CORREO, DOMICILIO, CIUDAD, MUNICIPIO, LOCALIDAD', 'length', 'max'=>30),
			array('CURP', 'length', 'max'=>18),
			array('CODIGO_POSTAL', 'length', 'max'=>5),
			array('TELEFONO, CELULAR', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_DATO_GENERAL, NOMBRE, APELLIDO_PATERNO, APELLIDO_MATERNO, CORREO, CURP, DOMICILIO, CODIGO_POSTAL, CIUDAD, MUNICIPIO, LOCALIDAD, TELEFONO, CELULAR', 'safe', 'on'=>'search'),
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
			'usuarioses' => array(self::HAS_MANY, 'Usuarios', 'DATOS_GENERALES'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_DATO_GENERAL' => 'Id Dato General',
			'NOMBRE' => 'Nombre',
			'APELLIDO_PATERNO' => 'Apellido Paterno',
			'APELLIDO_MATERNO' => 'Apellido Materno',
			'CORREO' => 'Correo',
			'CURP' => 'Curp',
			'DOMICILIO' => 'Domicilio',
			'CODIGO_POSTAL' => 'Codigo Postal',
			'CIUDAD' => 'Ciudad',
			'MUNICIPIO' => 'Municipio',
			'LOCALIDAD' => 'Localidad',
			'TELEFONO' => 'Telefono',
			'CELULAR' => 'Celular',
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

		$criteria->compare('ID_DATO_GENERAL',$this->ID_DATO_GENERAL);
		$criteria->compare('NOMBRE',$this->NOMBRE,true);
		$criteria->compare('APELLIDO_PATERNO',$this->APELLIDO_PATERNO,true);
		$criteria->compare('APELLIDO_MATERNO',$this->APELLIDO_MATERNO,true);
		$criteria->compare('CORREO',$this->CORREO,true);
		$criteria->compare('CURP',$this->CURP,true);
		$criteria->compare('DOMICILIO',$this->DOMICILIO,true);
		$criteria->compare('CODIGO_POSTAL',$this->CODIGO_POSTAL,true);
		$criteria->compare('CIUDAD',$this->CIUDAD,true);
		$criteria->compare('MUNICIPIO',$this->MUNICIPIO,true);
		$criteria->compare('LOCALIDAD',$this->LOCALIDAD,true);
		$criteria->compare('TELEFONO',$this->TELEFONO,true);
		$criteria->compare('CELULAR',$this->CELULAR,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DatosGenerales the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
