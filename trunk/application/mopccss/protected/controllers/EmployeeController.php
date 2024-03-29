<?php

class EmployeeController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete'),
				'users'=>array('@'),
				'expression'=>'isset(Yii::app()->user->type) && 
					((Yii::app()->user->type==="Admin"))'		//------------------------------------
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin',),
				/*'user'=>array('admin'),*/
				'users'=>array('@'),
				'expression'=>'isset(Yii::app()->user->type) && 
					((Yii::app()->user->type==="Regular"))'		//------------------------------------
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
		if(Yii::app()->user->isGuest){ 
			$this->redirect(array('/site/login'));
		}else{
			$this->render('view',array(
				'model'=>$this->loadModel($id),
			));
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Employee;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Employee']))
		{
			$model->attributes=$_POST['Employee'];

			if($model->save()){
				//logs
				$logC=new Logs;
				$logC->employee_id= Yii::app()->user->id;
				$logC->description= "Created an employee: <a href=/mopccss/index.php?r=employee/view&id=". $model->id . ">" . $model->FullName . "</a> has been hired";
				$logC->dateTime= date('Y-m-d H:i:s');
				$logC->save();
				
				$this->redirect(array('view','id'=>$model->id));
			}
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
		
			//logs
			$logU=new Logs;
			$logU->employee_id= Yii::app()->user->id;
			$logU->description= "Updated an employee information: <a href=/mopccss/index.php?r=employee/view&id=". $model->id . ">" . $model->FullName . "</a>";
			$logU->dateTime= date('Y-m-d H:i:s');

		if(isset($_POST['Employee']))
		{
			$model->attributes=$_POST['Employee'];
			if($model->save() && $logU->save())
				$this->redirect(array('view','id'=>$model->id));
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
	/*
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			//$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			$this->redirect(array('index'));
		*/
		try {
			$this->loadModel($id)->delete();
			$this->redirect(array('employee/index'));
		} catch (CDbException $e) {
			if($e->errorInfo[1] == 1451) {
				header("HTTP/1.0 400 Relation Restriction");
				//echo "Cannot delete employee! Refer to date of retirement.\n";
				//if($this->loadModel($id)->emp_retireDate != 0000-00-00){
				$retireDate=$this->loadModel($id)->emp_retireDate;
				if($this->loadModel($id)->emp_retireDate > strtotime(date('Y-m-d'))){
					$this->redirect(array('employee/view','id'=>$id,
						'error'=>'Cannot delete employee! It has created a record already. Refer to date of retirement.'));
				}else{
					$this->redirect(array('employee/update','id'=>$id,
						'error'=>'Cannot delete employee! It has created a record already. Update date of retirement.'));
				}
			} else {
				//throw new CHttpException(400, Yii::t('err', 'bad request'));
				throw $e . 'wqerty';
			}
		}
	}
	/*
	function actionretireDate() {
		$model->emp_retireDate = date('Y-m-d'); // default to today
		$this->render('update',array('value'=>$model->emp_retireDate));
	}
	*/
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		if(Yii::app()->user->isGuest){ 
			$this->redirect(array('/site/login'));
		}else{
			$dataProvider=new CActiveDataProvider('Employee');
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
			));
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Employee('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Employee']))
			$model->attributes=$_GET['Employee'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Employee the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Employee::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Employee $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='employee-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
