<?php

class ConfirmationController extends Controller
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
				'actions'=>array('create','update','admin','delete','pdf','pdfconfirmationamop'),
				'users'=>array('@'),
				'expression'=>'isset(Yii::app()->user->type) && 
					((Yii::app()->user->type==="Admin"))'		//------------------------------------
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','update','admin','pdf'),
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
		$model=$this->loadModel($id);
	
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
//	public function actionconfpdf($id)
//	{
//		$model=$this->loadModel($id);
//	
//		$this->render('pdfconfirmationamop',array(
//			'model'=>$this->loadModel($id),
//		));
//	}
 
        
        
        
	public function actionPdf($id)
	{
           
	$this->layout="//layouts/pdf";
       
		 $mPDF1 = Yii::app()->ePdf->mpdf();
		  $mPDF1->WriteHTML($this->render('pdfconfirmationamop',array(
			'model'=>$this->loadModel($id),),true)
		);
		$mPDF1->Output();
		 
	
	}
        
        public function actionpdfconfirmationamop($id)
	{
		$model=$this->loadModel($id);
	
		$this->render('pdfconfirmationamop',array(
			'model'=>$this->loadModel($id),
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Confirmation;
                $confgodparent=new ConfGodparent;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

                if(isset($_POST['Confirmation']))
		{
			$model->attributes=$_POST['Confirmation'];
              if($model->save()){
				if(isset($_POST['ConfGodparent']))
					{
                        $confgodparent->attributes=$_POST['ConfGodparent'];
						$confgodparent->confirmation_id=$model->id;
					}
								
				//logs
						$logC=new Logs;
						$logC->employee_id= Yii::app()->user->id;
						$logC->description= "Created Confirmation certificate". $container->code;
						$logC->dateTime= date('Y-m-d H:i:s');
	
					if($confgodparent->save() && $logC->save())
				{
					$this->redirect(array('view','id'=>$model->id));
				}
			}
		}
                
                
                
//		if(isset($_POST['Confirmation']))
//		{
//			$model->attributes=$_POST['Confirmation'];
//			if($model->save())
//				$this->redirect(array('view','id'=>$model->id));
//		}

		$this->render('create',array(
			'model'=>$model,
                     'confgodparent'=>$confgodparent,
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
		$logU->description= "Updated Confirmation certificate of ".$model->person->FullName;
		$logU->dateTime= date('Y-m-d H:i:s');


		if(isset($_POST['Confirmation']))
		{
			$model->attributes=$_POST['Confirmation'];
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
			$dataProvider=new CActiveDataProvider('Confirmation');
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
		$model=new Confirmation('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Confirmation']))
			$model->attributes=$_GET['Confirmation'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Confirmation the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Confirmation::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Confirmation $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='confirmation-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
