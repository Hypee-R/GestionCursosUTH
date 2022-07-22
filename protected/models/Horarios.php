<?php

/**
 * This is the model class for table "horarios".
 *
 * The followings are the available columns in table 'horarios':
 * @property integer $ID_HORARIO
 * @property integer $CURSO
 * @property string $DIA
 * @property string $HORA_INICIO
 * @property string $HORA_FIN
 *
 * The followings are the available model relations:
 * @property Cursos $cURSO
 */
class Horarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'horarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CURSO, DIA, HORA_INICIO, HORA_FIN', 'required'),
			array('CURSO', 'numerical', 'integerOnly'=>true),
			array('DIA', 'length', 'max'=>9),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_HORARIO, CURSO, DIA, HORA_INICIO, HORA_FIN', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_HORARIO' => 'Id Horario',
			'CURSO' => 'Curso',
			'DIA' => 'Dia',
			'HORA_INICIO' => 'Hora Inicio',
			'HORA_FIN' => 'Hora Fin',
		);
	}
	
	public function getSemana(){
		return array(
					false=>'Seleccione el dia',
					'1'=>'Lunes',
					'2'=>'Martes',
					'3'=>'Miercoles',
					'4'=>'Jueves',
					'5'=>'Viernes',
					'6'=>'Sabado'
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

		$criteria->compare('ID_HORARIO',$this->ID_HORARIO);
		$criteria->compare('CURSO',$this->CURSO);
		$criteria->compare('DIA',$this->DIA,true);
		$criteria->compare('HORA_INICIO',$this->HORA_INICIO,true);
		$criteria->compare('HORA_FIN',$this->HORA_FIN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Horarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
