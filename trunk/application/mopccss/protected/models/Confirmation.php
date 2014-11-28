<?php

/**
 * This is the model class for table "confirmation".
 *
 * The followings are the available columns in table 'confirmation':
 * @property integer $id
 * @property string $conf_confDate
 * @property string $conf_bapChurch
 * @property string $conf_bapAdd
 * @property string $conf_church
 * @property string $conf_priest
 * @property integer $Employee_id
 * @property integer $person_id
 * @property integer $father_id
 * @property integer $mother_id
 * @property string $conf_bkno
 * @property string $conf_series
 * @property string $conf_pageno
 * @property string $conf_lineno
 * The followings are the available model relations:
 * @property ConfGodparent[] $confGodparents
 * @property Employee $employee
 * @property Person $person
 * @property Person $father
 * @property Person $mother
 */
class Confirmation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'confirmation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('person_id', 'validatePerson'),
			array('conf_confDate, Employee_id, person_id, conf_bkno, conf_series, conf_pageno, conf_lineno', 'required'),
			array('Employee_id, person_id', 'numerical', 'integerOnly'=>true),
			array('conf_bapChurch, conf_church, conf_priest, conf_bkno, conf_series, conf_pageno, conf_lineno', 'length', 'max'=>45),
			array('conf_bapAdd', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, conf_confDate, conf_bapChurch, conf_bapAdd, conf_church, conf_priest, Employee_id, person_id, conf_bkno, conf_series, conf_pageno, conf_lineno',  'safe', 'on'=>'search'),
		);
	}

        public function validatePerson($attribute,$params)
    {  
		if($this->isNewRecord){//verify username in creating records
			if(Confirmation::model()->exists('person_id=:person',array(':person'=>$this->person_id))){
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
			'confGodparents' => array(self::HAS_MANY, 'ConfGodparent', 'confirmation_id'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'Employee_id'),
			'person' => array(self::BELONGS_TO, 'Person', 'person_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'conf_confDate' => 'Date of Confirmation',
			'conf_bapChurch' => 'Name of church when baptized',
			'conf_bapAdd' => 'Address of church when baptized',
			'conf_church' => 'Church name',
			'conf_priest' => 'Priest',
			'Employee_id' => 'Employee',
			'person_id' => 'Person',
			'conf_bkno' => 'Book No.',
			'conf_series' => 'Series of',
			'conf_pageno' => 'Page No.',
			'conf_lineno' => 'Line No.',
                  
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
		$criteria->compare('conf_confDate',$this->conf_confDate,true);
		$criteria->compare('conf_bapChurch',$this->conf_bapChurch,true);
		$criteria->compare('conf_bapAdd',$this->conf_bapAdd,true);
		$criteria->compare('conf_church',$this->conf_church,true);
		$criteria->compare('conf_priest',$this->conf_priest,true);
		$criteria->compare('conf_bkno',$this->conf_bkno,true);
		$criteria->compare('conf_series',$this->conf_series,true);
		$criteria->compare('conf_pageno',$this->conf_pageno,true);
		$criteria->compare('conf_lineno',$this->conf_lineno,true);
		/*$criteria->compare('Employee_id',$this->Employee_id);
		$criteria->compare('person_id',$this->person_id);
		$criteria->compare('father_id',$this->father_id);
		$criteria->compare('mother_id',$this->mother_id);*/
		
		//add the magic letter 't' to refer to the 'main' (not the related) table:
		$criteria->compare('t.id',$this->id);
		$criteria->compare('employee.emp_lname',$this->Employee_id, true);
		$criteria->compare('person.p_lname',$this->person_id, true);

		//load the related table at the same time:
		$criteria->with=array('employee','person');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Confirmation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
