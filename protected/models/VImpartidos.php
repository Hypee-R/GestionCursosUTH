<?php

/**
 * This is the model class for table "v_impartidos".
 *
 * The followings are the available columns in table 'v_impartidos':
 * @property integer $ID_CURSO
 * @property string $CURSO
 * @property string $CEDE
 * @property string $FECHA_INICIO
 * @property string $FECHA_FIN
 * @property string $LUGAR
 * @property string $UBICACION
 * @property integer $CUPO
 * @property string $STATUS
 * @property string $CATEGORIA
 * @property string $USUARIO
 * @property string $TOTAL_INSCRITOS
 */
class VImpartidos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'v_impartidos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CURSO, CEDE, FECHA_INICIO, FECHA_FIN, LUGAR, UBICACION, CATEGORIA, USUARIO', 'required'),
			array('ID_CURSO, CUPO', 'numerical', 'integerOnly'=>true),
			array('CURSO', 'length', 'max'=>100),
			array('CEDE, UBICACION', 'length', 'max'=>50),
			array('LUGAR', 'length', 'max'=>15),
			array('STATUS', 'length', 'max'=>9),
			array('CATEGORIA', 'length', 'max'=>40),
			array('USUARIO', 'length', 'max'=>30),
			array('TOTAL_INSCRITOS', 'length', 'max'=>21),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_CURSO, CURSO, CEDE, FECHA_INICIO, FECHA_FIN, LUGAR, UBICACION, CUPO, STATUS, CATEGORIA, USUARIO, TOTAL_INSCRITOS', 'safe', 'on'=>'search'),
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
			'ID_CURSO' => 'Id Curso',
			'CURSO' => 'Curso',
			'CEDE' => 'Cede',
			'FECHA_INICIO' => 'Fecha Inicio',
			'FECHA_FIN' => 'Fecha Fin',
			'LUGAR' => 'Lugar',
			'UBICACION' => 'Ubicacion',
			'CUPO' => 'Cupo',
			'STATUS' => 'Status',
			'CATEGORIA' => 'Categoria',
			'USUARIO' => 'Usuario',
			'TOTAL_INSCRITOS' => 'Total Inscritos',
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
		$criteria->compare('CEDE',$this->CEDE,true);
		$criteria->compare('FECHA_INICIO',$this->FECHA_INICIO,true);
		$criteria->compare('FECHA_FIN',$this->FECHA_FIN,true);
		$criteria->compare('LUGAR',$this->LUGAR,true);
		$criteria->compare('UBICACION',$this->UBICACION,true);
		$criteria->compare('CUPO',$this->CUPO);
		$criteria->compare('STATUS',$this->STATUS,true);
		$criteria->compare('CATEGORIA',$this->CATEGORIA,true);
		$criteria->compare('USUARIO',$this->USUARIO,true);
		$criteria->compare('TOTAL_INSCRITOS',$this->TOTAL_INSCRITOS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VImpartidos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
