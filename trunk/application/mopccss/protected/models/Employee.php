<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id
 * @property string $emp_username
 * @property string $emp_password
 * @property string $emp_usertype
 * @property string $emp_fname
 * @property string $emp_lname
 * @property string $emp_hireDate
 * @property string $emp_retireDate
 * @property string $emp_chapAssign
 * @property string $emp_email
 * @property integer $church_id
 *
 * The followings are the available model relations:
 * @property Baptismal[] $baptismals
 * @property Confirmation[] $confirmations
 * @property Church $church
 * @property Marriage[] $marriages
 */
class Employee extends CActiveRecord
{
	
	//Password Validation
	public function validatePassword($password){
		return CPasswordHelper::verifyPassword($password,$this->emp_password);
	}
	
	public function hashPassword($password){
		return CPasswordHelper::hashPassword($password);
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee';
	}
	
	/**
	 * @return array validation rules for model attributes.
	 */
	
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('emp_username', 'validateUsername'),
			array('emp_username, emp_password, emp_usertype, emp_fname, emp_lname,emp_email,church_id', 'required'),
			array('church_id', 'numerical', 'integerOnly'=>true),
			array('emp_username, emp_password, emp_usertype, emp_fname, emp_lname, emp_chapAssign', 'length', 'max'=>45),
			array('emp_email', 'length', 'max'=>50),
			array('emp_hireDate, emp_retireDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, emp_username, emp_password, emp_usertype, emp_fname, emp_lname, emp_hireDate, emp_retireDate, emp_chapAssign, church_id', 'safe', 'on'=>'search'),
		);
	}
	
	public function validateUsername($attribute,$params)
    {  
		if($this->isNewRecord){//verify username in creating records
			if(Employee::model()->exists('emp_username=:username',array(':username'=>$this->emp_username))){
				$this->addError('emp_username','Username already exists.');
			}
		}
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'baptismals' => array(self::HAS_MANY, 'Baptismal', 'Employee_id'),
			'confirmations' => array(self::HAS_MANY, 'Confirmation', 'Employee_id'),
			'church' => array(self::BELONGS_TO, 'Church', 'church_id'),
			'marriages' => array(self::HAS_MANY, 'Marriage', 'Employee_id'),
			'logs' => array(self::HAS_MANY, 'Logs', 'employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'emp_username' => 'Username',
			'emp_password' => 'Password',
			'emp_usertype' => 'User Type',
			'emp_fname' => 'Firstname',
			'emp_lname' => 'Lastname',
			'emp_hireDate' => 'Hire Date',
			'emp_retireDate' => 'Retire Date',
			'emp_chapAssign' => 'Assigned Chapter',
			'emp_email' => 'Email',
			'church_id' => 'Church',
			'fullname' => 'Fullname',
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

		//$criteria->compare('id',$this->id);
		$criteria->compare('emp_username',$this->emp_username,true);
		$criteria->compare('emp_password',$this->emp_password,true);
		$criteria->compare('emp_usertype',$this->emp_usertype,true);
		$criteria->compare('emp_fname',$this->emp_fname,true);
		$criteria->compare('emp_lname',$this->emp_lname,true);
		$criteria->compare('emp_hireDate',$this->emp_hireDate,true);
		$criteria->compare('emp_retireDate',$this->emp_retireDate,true);
		$criteria->compare('emp_chapAssign',$this->emp_chapAssign,true);
		//$criteria->compare('church_id',$this->church_id);
		
		//add the magic letter 't' to refer to the 'main' (not the related) table:
		$criteria->compare('t.id',$this->id);
		$criteria->compare('church.ch_name',$this->church_id, true);
		
		//load the related table at the same time:
		$criteria->with=array('church');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getFullName(){
		return $this->emp_lname . ", " . $this->emp_fname;
	}
	
	public function beforeSave(){
		$this->emp_password = hash_hmac('sha256', $this->emp_password, 
		Yii::app()->params['encryptionKey']);		
		return parent::beforeSave();
	}
}
