<?php

class ChurchController extends Controller
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
				'actions'=>array('create','update','admin','delete','loadImage'),
				'users'=>array('@'),
				'expression'=>'isset(Yii::app()->user->type) && 
					((Yii::app()->user->type==="Admin"))'		//------------------------------------
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','update','admin'),
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
		$model=new Church;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Church']))
		{
			$model->attributes=$_POST['Church'];
                        
                        if(!empty($_FILES['Church']['tmp_name']['ch_pic']))
	            {
	                $file = CUploadedFile::getInstance($model,'ch_pic');
                //$model->med_descxray = $file->name;
	                $model->fileType = $file->type;
	                $fp = fopen($file->tempName, 'r');
	                $content = fread($fp, filesize($file->tempName));
	                fclose($fp);
	                $model->ch_pic = $content;
	            }
				//logs
				$logC=new Logs;
				$logC->employee_id= Yii::app()->user->id;
				$logC->description= "Church added successfully: Church Name: <a href=/mopccss/index.php?r=church/view&id=". $model->id . ">" . $model->ch_name . "</a>";
				$logC->dateTime= date('Y-m-d H:i:s');
				
			if($model->save() && $logC->save())
				$this->redirect(array('view','id'=>$model->id));
			
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

        Public function actionloadImage($id)
	    {
	        $model=$this->loadModel($id);
	
	        header('Content-Type: ' . $model->fileType);
	        print $model->ch_pic;
	
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
		$logU->description= "Church updated successfully: Church Name: <a href=/mopccss/index.php?r=church/view&id=". $model->id . ">" . $model->ch_name . "</a>";
		//$logU->description= "Updated ".$model->ch_name." information";
		$logU->dateTime= date('Y-m-d H:i:s');

		if(isset($_POST['Church']))
		{
                    
			$model->attributes=$_POST['Church'];
                        
                          if(!empty($_FILES['Church']['tmp_name']['ch_pic']))
	            {
	                $file = CUploadedFile::getInstance($model,'ch_pic');
                //$model->med_descxray = $file->name;
	                $model->fileType = $file->type;
	                $fp = fopen($file->tempName, 'r');
	                $content = fread($fp, filesize($file->tempName));
	                fclose($fp);
	                $model->ch_pic = $content;
	            }
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
		//logs
		$logD=new Logs;
		$logD->employee_id= Yii::app()->user->id;
		$logD->description= "Church deleted successfully: Church Name: " . $this->loadModel($id)->ch_name;
		$logD->dateTime= date('Y-m-d H:i:s');
		$logD->save();
		
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
		if(Yii::app()->user->isGuest){ 
			$this->redirect(array('/site/login'));
		}else{
			$dataProvider=new CActiveDataProvider('Church');
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
		$model=new Church('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Church']))
			$model->attributes=$_GET['Church'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Church the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Church::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Church $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='church-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
