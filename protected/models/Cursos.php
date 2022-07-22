<?php

/**
 * This is the model class for table "cursos".
 *
 * The followings are the available columns in table 'cursos':
 * @property integer $ID_CURSO
 * @property string $CURSO
 * @property integer $CUPO
 * @property string $STATUS
 * @property integer $CATEGORIA
 * @property string $FECHA_INICIO
 * @property string $FECHA_FIN
 *
 * The followings are the available model relations:
 * @property Categorias $cATEGORIA
 * @property Horarios[] $horarioses
 * @property Inscripciones[] $inscripciones
 * @property Lugares[] $lugares
 */
class Cursos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cursos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CURSO, STATUS,CATEGORIA, FECHA_INICIO, FECHA_FIN', 'required'),
			array('CUPO, CATEGORIA', 'numerical', 'integerOnly'=>true),
			array('CURSO', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_CURSO, CURSO, CUPO, STATUS, CATEGORIA, FECHA_INICIO, FECHA_FIN', 'safe', 'on'=>'search'),
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
			'cATEGORIA' => array(self::BELONGS_TO, 'Categorias', 'CATEGORIA'),
			'horarioses' => array(self::HAS_MANY, 'Horarios', 'CURSO'),
			'inscripciones' => array(self::HAS_MANY, 'Inscripciones', 'CURSO'),
			'lugares' => array(self::HAS_MANY, 'Lugares', 'CURSO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_CURSO' => 'Id Curso',
			'CURSO' => 'Curso',
			'CUPO' => 'Cupo',
			'STATUS' => 'Status',
			'CATEGORIA' => 'Categoria',
			'FECHA_INICIO' => 'Fecha Inicio',
			'FECHA_FIN' => 'Fecha Fin',
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

		$criteria->compare('ID_CURSO',$this->ID_CURSO);
		$criteria->compare('CURSO',$this->CURSO,true);
		$criteria->compare('CUPO',$this->CUPO);
		$criteria->compare('STATUS',$this->STATUS);
		$criteria->compare('CATEGORIA',$this->CATEGORIA);
		$criteria->compare('FECHA_INICIO',$this->FECHA_INICIO,true);
		$criteria->compare('FECHA_FIN',$this->FECHA_FIN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cursos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
