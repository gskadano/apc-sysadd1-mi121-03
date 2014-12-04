<?php

class MarriageController extends Controller
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
				'actions'=>array('create','update','admin','pdf3','pdfmarriagemop','Ajax'),
				'users'=>array('@'),
				'expression'=>'isset(Yii::app()->user->type) && 
					((Yii::app()->user->type==="Admin"))'		//------------------------------------
			),
			
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','update','admin','pdf3','pdfmarriagemop','Ajax'),
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
        
        
        public function actionPdf3($id)
	{
           
	$this->layout="//layouts/pdf3";
       
		 $mPDF1 = Yii::app()->ePdf->mpdf();
		  $mPDF1->WriteHTML($this->render('pdfmarriagemop',array(
			'model'=>$this->loadModel($id),),true)
		);
		$mPDF1->Output();
		 
	
	}
        
        public function actionpdfmarriagemop($id)
	{
		$model=$this->loadModel($id);
	
		$this->render('pdfmarriagemop',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Marriage;
		$godparent=new MarGodparent;
		$model->bride_id = Yii::app()->getRequest()->getParam('bride_id');//-----------------------------
		$model->groom_id = Yii::app()->getRequest()->getParam('groom_id');//-----------------------------
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
					
		if(isset($_POST['Marriage']))
		{
				$model->attributes=$_POST['Marriage'];
              if($model->save()){
				if(isset($_POST['MarGodparent']))
						{
                        $godparent->attributes=$_POST['MarGodparent'];
						$godparent->marriage_id=$model->id;
					}
					
		//logs
					$logC=new Logs;
					$logC->employee_id= Yii::app()->user->id;
					$logC->description= "Created marriage certificate : Marriage of <a href=/mopccss/index.php?r=marriage/view&id="
						. $model->id . ">" . $model->bride->FullName . "</a> and <a href=/mopccss/index.php?r=marriage/view&id="
						. $model->id . ">" . $model->groom->FullName . "</a>";
					$logC->dateTime= date('Y-m-d H:i:s');
	
				if($godparent->save() && $logC ->save())
					{
						$this->redirect(array('view','id'=>$model->id));
					}
				}
			}
				/*if(isset($_POST['MarGodparent']))
				{
				
					$model->attributes=$_POST['Marriage'];
					if($model->save())
					
					$this->redirect(array('view','id'=>$model->id));
				}
				*/
				$this->render('create',array(
					'model'=>$model,
					'godparent'=>$godparent,
			));
	}
					
	/*
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
					$logU->description= "Updated marriage certificate : Marriage of <a href=/mopccss/index.php?r=marriage/view&id="
						. $model->id . ">" . $model->bride->FullName . "</a> and <a href=/mopccss/index.php?r=marriage/view&id="
						. $model->id . ">" . $model->groom->FullName . "</a>";
					$logU->dateTime= date('Y-m-d H:i:s');

		if(isset($_POST['Marriage']))
		{
			$model->attributes=$_POST['Marriage'];
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
		
		    $logD=new logs;
           $logD->employee_id= Yii::app()->user->id;
	            $logD->date= date('Y-m-d H:i:s');
			$logD->description= "Employee with ID#" . $id . " has been deleted";
				$logD->save();

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
			$dataProvider=new CActiveDataProvider('Marriage');
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
		$model=new Marriage('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Marriage']))
			$model->attributes=$_GET['Marriage'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Marriage the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Marriage::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Marriage $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='marriage-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionAjax(){
	    $request=trim($_GET['term']);
	    if($request!=''){
	        $model=Priest::model()->findAll(array("condition"=>"pfname like '$request%'"));
	        $data=array();
	        foreach($model as $get){
	            $data[]=$get->PFullName;
				//$data[]=$get->pfname;
	        }
	        $this->layout='empty';
	        echo json_encode($data);
	    }
	}
}
