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
			array('Employee_id, bride_id, groom_id, father_id, mother_id', 'required'),
			array('Employee_id, bride_id, groom_id, father_id, mother_id', 'numerical', 'integerOnly'=>true),
			array('mar_priest', 'length', 'max'=>45),
			array('mar_marDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, mar_marDate, mar_priest, Employee_id, bride_id, groom_id, father_id, mother_id', 'safe', 'on'=>'search'),
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
			'marGodparents' => array(self::HAS_MANY, 'MarGodparent', 'marriage_id'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'Employee_id'),
			'bride' => array(self::BELONGS_TO, 'Person', 'bride_id'),
			'groom' => array(self::BELONGS_TO, 'Person', 'groom_id'),
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
			'mar_marDate' => 'Mar Mar Date',
			'mar_priest' => 'Mar Priest',
			'Employee_id' => 'Employee',
			'bride_id' => 'Bride',
			'groom_id' => 'Groom',
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
		$criteria->compare('mar_marDate',$this->mar_marDate,true);
		$criteria->compare('mar_priest',$this->mar_priest,true);
		$criteria->compare('Employee_id',$this->Employee_id);
		$criteria->compare('bride_id',$this->bride_id);
		$criteria->compare('groom_id',$this->groom_id);
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
	 * @return Marriage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
