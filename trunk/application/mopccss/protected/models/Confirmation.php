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
 *
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
			array('conf_confDate, Employee_id, person_id, father_id, mother_id', 'required'),
			array('Employee_id, person_id, father_id, mother_id', 'numerical', 'integerOnly'=>true),
			array('conf_bapChurch, conf_church, conf_priest', 'length', 'max'=>45),
			array('conf_bapAdd', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, conf_confDate, conf_bapChurch, conf_bapAdd, conf_church, conf_priest, Employee_id, person_id, father_id, mother_id', 'safe', 'on'=>'search'),
		);
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
			'father' => array(self::BELONGS_TO, 'Person', 'father_id'),
			'mother' => array(self::BELONGS_TO, 'Person', 'mother_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'conf_confDate' => 'Conf Conf Date',
			'conf_bapChurch' => 'Conf Bap Church',
			'conf_bapAdd' => 'Conf Bap Add',
			'conf_church' => 'Conf Church',
			'conf_priest' => 'Conf Priest',
			'Employee_id' => 'Employee',
			'person_id' => 'Person',
			'father_id' => 'Father',
			'mother_id' => 'Mother',
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
		$criteria->compare('Employee_id',$this->Employee_id);
		$criteria->compare('person_id',$this->person_id);
		$criteria->compare('father_id',$this->father_id);
		$criteria->compare('mother_id',$this->mother_id);

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