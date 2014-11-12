<?php

/**
 * This is the model class for table "marriage".
 *
 * The followings are the available columns in table 'marriage':
 * @property integer $id
 * @property string $mar_marDate
 * @property string $mar_priest
 * @property integer $Employee_id
 * @property integer $bride_id
 * @property integer $groom_id
 * @property integer $father_id
 * @property integer $mother_id
 *
 * The followings are the available model relations:
 * @property MarGodparent[] $marGodparents
 * @property Employee $employee
 * @property Person $bride
 * @property Person $groom
 * @property Person $father
 * @property Person $mother
 */
class Marriage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marriage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Employee_id, bride_id, groom_id', 'required'),
			array('Employee_id, bride_id, groom_id', 'numerical', 'integerOnly'=>true),
			array('mar_priest', 'length', 'max'=>45),
			array('mar_marDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, mar_marDate, mar_priest, Employee_id, bride_id, groom_id', 'safe', 'on'=>'search'),
		);
	}
	
	public function validatePerson($attribute,$params)
    {  
		if($this->isNewRecord){//verify username in creating records
			if(Marriage::model()->exists('person_id=:person',array(':person'=>$this->person_id))){
				$this->addError('person_id','The person already exists. Cannot create another confirmation record!');
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
			'marGodparents' => array(self::HAS_MANY, 'MarGodparent', 'marriage_id'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'Employee_id'),
			'bride' => array(self::BELONGS_TO, 'Person', 'bride_id'),
			'groom' => array(self::BELONGS_TO, 'Person', 'groom_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mar_marDate' => 'Marriage Date',
			'mar_priest' => 'Priest',
			'Employee_id' => 'Employee',
			'bride_id' => 'Bride',
			'groom_id' => 'Groom',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('mar_marDate',$this->mar_marDate,true);
		$criteria->compare('mar_priest',$this->mar_priest,true);
		//$criteria->compare('Employee_id',$this->Employee_id);
		//$criteria->compare('bride_id',$this->bride_id);
		//$criteria->compare('groom_id',$this->groom_id);

		//add the magic letter 't' to refer to the 'main' (not the related) table:
		$criteria->compare('t.id',$this->id);
		$criteria->compare('employee.emp_lname',$this->Employee_id, true);
		$criteria->compare('bride.p_lname',$this->bride_id, true);
		$criteria->compare('groom.p_lname',$this->groom_id, true);
		

//load the related table at the same time:
$criteria->with=array('employee','bride','groom');
		
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Marriage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
