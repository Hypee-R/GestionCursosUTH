<?php

/**
 * This is the model class for table "cede".
 *
 * The followings are the available columns in table 'cede':
 * @property integer $ID_CEDE
 * @property string $NOMBRE_CEDE
 * @property string $DIRECCION
 *
 * The followings are the available model relations:
 * @property Lugares[] $lugares
 */
class Cede extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cede';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOMBRE_CEDE, DIRECCION', 'required'),
			array('NOMBRE_CEDE', 'length', 'max'=>50),
			array('DIRECCION', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_CEDE, NOMBRE_CEDE, DIRECCION', 'safe', 'on'=>'search'),
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
			'lugares' => array(self::HAS_MANY, 'Lugares', 'CEDE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_CEDE' => 'Id Cede',
			'NOMBRE_CEDE' => 'Nombre Cede',
			'DIRECCION' => 'Direccion',
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

		$criteria->compare('ID_CEDE',$this->ID_CEDE);
		$criteria->compare('NOMBRE_CEDE',$this->NOMBRE_CEDE,true);
		$criteria->compare('DIRECCION',$this->DIRECCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cede the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
