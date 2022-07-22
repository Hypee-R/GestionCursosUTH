<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property string $USUARIO
 * @property string $PASSWORD
 * @property integer $DATOS_GENERALES
 * @property integer $PERFIL
 * @property integer $STATUS
 *
 * The followings are the available model relations:
 * @property Inscripciones[] $inscripciones
 * @property DatosGenerales $dATOSGENERALES
 * @property Perfiles $pERFIL
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USUARIO, PASSWORD, DATOS_GENERALES, PERFIL, STATUS', 'required'),
			array('DATOS_GENERALES, PERFIL, STATUS', 'numerical', 'integerOnly'=>true),
			array('USUARIO, PASSWORD', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('USUARIO, PASSWORD, DATOS_GENERALES, PERFIL, STATUS', 'safe', 'on'=>'search'),
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
			'inscripciones' => array(self::HAS_MANY, 'Inscripciones', 'PERSONA'),
			'dATOSGENERALES' => array(self::BELONGS_TO, 'DatosGenerales', 'DATOS_GENERALES'),
			'pERFIL' => array(self::BELONGS_TO, 'Perfiles', 'PERFIL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USUARIO' => 'Usuario',
			'PASSWORD' => 'Password',
			'DATOS_GENERALES' => 'Datos Generales',
			'PERFIL' => 'Perfil',
			'STATUS' => 'Status',
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

		$criteria->compare('USUARIO',$this->USUARIO,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('DATOS_GENERALES',$this->DATOS_GENERALES);
		$criteria->compare('PERFIL',$this->PERFIL);
		$criteria->compare('STATUS',$this->STATUS);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
