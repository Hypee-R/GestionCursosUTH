<?php

class CursosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','vcursos','novedades'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('impartidos','organizados','tomados'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','update','admin','delete'),
				'roles'=>array('Administrador'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Cursos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cursos']))
		{
			$model->attributes=$_POST['Cursos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_CURSO));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cursos']))
		{
			$model->attributes=$_POST['Cursos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_CURSO));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Cursos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionVCursos()
	{
		$dataProvider=new CActiveDataProvider('VCursos');
		$this->render('v_index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionNovedades(){
		$dataProvider=new CActiveDataProvider('VNovedades');
		$this->render('n_index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionTomados($user){
		$dataProvider=new CActiveDataProvider('VTomados', array(
		'criteria' => array ( 
		        'condition' => 'USUARIO = '."'$user'", 
		        'order' => 'CURSO ASC')
		    ));
		$this->render('t_index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionImpartidos($user){
		$dataProvider=new CActiveDataProvider('VImpartidos', array(
		'criteria' => array ( 
		        'condition' => 'USUARIO = '."'$user'", 
		        'order' => 'CURSO ASC')
		    ));
		$this->render('x_index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionOrganizados($user){
		$dataProvider=new CActiveDataProvider('VOrganizados', array(
		'criteria' => array ( 
		        'condition' => 'USUARIO = '."'$user'", 
		        'order' => 'CURSO ASC')
		    ));
		if(Yii::app()->user->checkAccess('Organizador')){
			$this->render('o_index',array(
				'dataProvider'=>$dataProvider,
			));
		}else{
			$this->render('xx_index',array(
				'dataProvider'=>$dataProvider,
			));
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cursos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cursos']))
			$model->attributes=$_GET['Cursos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cursos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Cursos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cursos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cursos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
