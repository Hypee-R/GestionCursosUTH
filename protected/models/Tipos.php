<?php

/**
 * This is the model class for table "tipos".
 *
 * The followings are the available columns in table 'tipos':
 * @property integer $ID_TIPO
 * @property string $TIPO_INSCRIPCION
 *
 * The followings are the available model relations:
 * @property Inscripciones[] $inscripciones
 */
class Tipos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TIPO_INSCRIPCION', 'required'),
			array('TIPO_INSCRIPCION', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_TIPO, TIPO_INSCRIPCION', 'safe', 'on'=>'search'),
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
			'inscripciones' => array(self::HAS_MANY, 'Inscripciones', 'TIPO_INSCRIPCION'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_TIPO' => 'Id Tipo',
			'TIPO_INSCRIPCION' => 'Tipo Inscripcion',
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

		$criteria->compare('ID_TIPO',$this->ID_TIPO);
		$criteria->compare('TIPO_INSCRIPCION',$this->TIPO_INSCRIPCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tipos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
