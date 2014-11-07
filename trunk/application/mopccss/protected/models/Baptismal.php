<?php

/**
 * This is the model class for table "baptismal".
 *
 * The followings are the available columns in table 'baptismal':
 * @property integer $id
 * @property string $bap_bapDate
 * @property string $bap_priest
 * @property string $bap_church
 * @property string $bap_churchAdd
 * @property integer $Employee_id
 * @property integer $person_id
 * @property integer $father_id
 * @property integer $mother_id
 *
 * The followings are the available model relations:
 * @property BapGodparent[] $bapGodparents
 * @property Employee $employee
 * @property Person $person
 * @property Person $father
 * @property Person $mother
 */
class Baptismal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'baptismal';
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
			array('bap_bapDate, Employee_id, person_id', 'required'),
			array('Employee_id, person_id', 'numerical', 'integerOnly'=>true),
			array('bap_priest, bap_church', 'length', 'max'=>45),
			array('bap_churchAdd', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, bap_bapDate, bap_priest, bap_church, bap_churchAdd, Employee_id, person_id', 'safe', 'on'=>'search'),
		);
	}
	
	public function validatePerson($attribute,$params)
    {  
		if(Baptismal::model()->exists('person_id=:person',array(':person'=>$this->person_id))){
            $this->addError('person_id','The person already exists. Cannot create another baptismal record!');
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
			'bapGodparents' => array(self::HAS_MANY, 'BapGodparent', 'baptismal_id'),
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
			'bap_bapDate' => 'Baptismal Date',
			'bap_priest' => 'Priest',
			'bap_church' => 'Church',
			'bap_churchAdd' => 'Church Address',
			'Employee_id' => 'Employee',
			'person_id' => 'Person',
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
		$criteria->compare('bap_bapDate',$this->bap_bapDate,true);
		$criteria->compare('bap_priest',$this->bap_priest,true);
		$criteria->compare('bap_church',$this->bap_church,true);
		$criteria->compare('bap_churchAdd',$this->bap_churchAdd,true);
		/*$criteria->compare('Employee_id',$this->Employee_id);
		$criteria->compare('person_id',$this->person_id);*/
		
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
	 * @return Baptismal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
