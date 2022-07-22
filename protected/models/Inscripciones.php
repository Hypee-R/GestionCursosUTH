<?php

/**
 * This is the model class for table "inscripciones".
 *
 * The followings are the available columns in table 'inscripciones':
 * @property integer $ID_INSCRIPCION
 * @property integer $CURSO
 * @property integer $PERSONA
 * @property integer $TIPO_INSCRIPCION
 * @property string $TOKEN
 * @property string $STATUS
 *
 * The followings are the available model relations:
 * @property Cursos $cURSO
 * @property Usuarios $pERSONA
 * @property Tipos $tIPOINSCRIPCION
 */
class Inscripciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inscripciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CURSO, STATUS, PERSONA, TIPO_INSCRIPCION', 'required'),
			array('CURSO, TIPO_INSCRIPCION', 'numerical', 'integerOnly'=>true),
			array('TOKEN', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_INSCRIPCION, CURSO, PERSONA, TIPO_INSCRIPCION, TOKEN, STATUS', 'safe', 'on'=>'search'),
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
			'cURSO' => array(self::BELONGS_TO, 'Cursos', 'CURSO'),
			'pERSONA' => array(self::BELONGS_TO, 'Usuarios', 'PERSONA'),
			'tIPOINSCRIPCION' => array(self::BELONGS_TO, 'Tipos', 'TIPO_INSCRIPCION'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_INSCRIPCION' => 'Id Inscripcion',
			'CURSO' => 'Curso',
			'PERSONA' => 'Persona',
			'TIPO_INSCRIPCION' => 'Tipo Inscripcion',
			'TOKEN' => 'Token',
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

		$criteria->compare('ID_INSCRIPCION',$this->ID_INSCRIPCION);
		$criteria->compare('CURSO',$this->CURSO);
		$criteria->compare('PERSONA',$this->PERSONA);
		$criteria->compare('TIPO_INSCRIPCION',$this->TIPO_INSCRIPCION);
		$criteria->compare('TOKEN',$this->TOKEN,true);
		$criteria->compare('STATUS',$this->STATUS);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inscripciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
