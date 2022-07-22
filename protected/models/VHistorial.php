<?php

/**
 * This is the model class for table "v_historial".
 *
 * The followings are the available columns in table 'v_historial':
 * @property string $CURSO
 * @property integer $ID_USUARIO
 * @property string $NOMBRE
 * @property string $TIPO_INSCRIPCION
 * @property string $STATUS
 */
class VHistorial extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'v_historial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CURSO, TIPO_INSCRIPCION', 'required'),
			array('ID_USUARIO', 'numerical', 'integerOnly'=>true),
			array('CURSO', 'length', 'max'=>100),
			array('NOMBRE', 'length', 'max'=>77),
			array('TIPO_INSCRIPCION', 'length', 'max'=>12),
			array('STATUS', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CURSO, ID_USUARIO, NOMBRE, TIPO_INSCRIPCION, STATUS', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CURSO' => 'Curso',
			'ID_USUARIO' => 'Id Usuario',
			'NOMBRE' => 'Nombre',
			'TIPO_INSCRIPCION' => 'Tipo Inscripcion',
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

		$criteria->compare('CURSO',$this->CURSO,true);
		$criteria->compare('ID_USUARIO',$this->ID_USUARIO);
		$criteria->compare('NOMBRE',$this->NOMBRE,true);
		$criteria->compare('TIPO_INSCRIPCION',$this->TIPO_INSCRIPCION,true);
		$criteria->compare('STATUS',$this->STATUS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VHistorial the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
