<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $rememberMe;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			//'username'=>'User Name',
			'rememberMe'=>'Remember me next time',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password','Incorrect username or password.');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		$sql=Employee::model()->findAll('emp_username=:parent_id',array(':parent_id'=>$this->username));
		$data=CHtml::listData($sql,'emp_retireDate','emp_retireDate');
		foreach($data as $value=>$name){
			$retire = $value;
		}
		if(count($sql)!==0){
			//if($retire==null){
			if(strtotime($retire) > strtotime(date('Y-m-d')) || $retire==null || $retire=="0000-00-00"){
				if($this->_identity===null)
				{
					$this->_identity=new UserIdentity($this->username,$this->password);
					$this->_identity->authenticate();
				}
				if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
				{
					$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
					Yii::app()->user->login($this->_identity,$duration);
					return true;
				}
				else
					return false;
			}else{
				Yii::app()->user->setFlash('message','Employee is already retired or has resigned.');
			}
		}
	}
}
