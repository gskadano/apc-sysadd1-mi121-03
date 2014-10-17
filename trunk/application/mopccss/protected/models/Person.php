<?php

/**
 * This is the model class for table "person".
 *
 * The followings are the available columns in table 'person':
 * @property integer $id
 * @property string $p_fname
 * @property string $p_middlename
 * @property string $p_lname
 * @property string $p_dateOfBirth
 * @property string $p_placeOfBirth
 * @property string $p_address
 * @property string $p_dateOfDeath
 * @property string $p_gender
 * @property string $p_father
 * @property string $p_mother
 */
class Person extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('p_fname, p_lname, p_dateOfBirth, p_gender, p_father, p_mother', 'required'),
			array('p_fname, p_middlename, p_lname, p_placeOfBirth, p_gender', 'length', 'max'=>45),
			array('p_address, p_father, p_mother', 'length', 'max'=>100),
			array('p_dateOfDeath', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, p_fname, p_middlename, p_lname, p_dateOfBirth, p_placeOfBirth, p_address, p_dateOfDeath, p_gender, p_father, p_mother', 'safe', 'on'=>'search'),
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
			'bapGodparents' => array(self::HAS_MANY, 'BapGodparent', 'person_id'),
			'baptismals' => array(self::HAS_MANY, 'Baptismal', 'person_id'),
			'confGodparents' => array(self::HAS_MANY, 'ConfGodparent', 'person_id'),
			'confirmations' => array(self::HAS_MANY, 'Confirmation', 'person_id'),
			'marGodparents' => array(self::HAS_MANY, 'MarGodparent', 'person_id'),
			'marriages' => array(self::HAS_MANY, 'Marriage', 'bride_id'),
			'marriages1' => array(self::HAS_MANY, 'Marriage', 'groom_id'),
			'positions' => array(self::HAS_MANY, 'Position', 'client_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'p_fname' => 'First name',
			'p_middlename' => 'Middle name',
			'p_lname' => 'Last name',
			'p_dateOfBirth' => 'Date of Birth',
			'p_placeOfBirth' => 'Place of Birth',
			'p_address' => 'Address',
			'p_dateOfDeath' => 'Date of Death',
			'p_gender' => 'Gender',
			'p_father' => 'Father',
			'p_mother' => 'Mother',
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
		$criteria->compare('p_fname',$this->p_fname,true);
		$criteria->compare('p_middlename',$this->p_middlename,true);
		$criteria->compare('p_lname',$this->p_lname,true);
		$criteria->compare('p_dateOfBirth',$this->p_dateOfBirth,true);
		$criteria->compare('p_placeOfBirth',$this->p_placeOfBirth,true);
		$criteria->compare('p_address',$this->p_address,true);
		$criteria->compare('p_dateOfDeath',$this->p_dateOfDeath,true);
		$criteria->compare('p_gender',$this->p_gender,true);
		$criteria->compare('p_father',$this->p_father,true);
		$criteria->compare('p_mother',$this->p_mother,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Person the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getFullName(){
		return $this->p_lname . ", " . $this->p_fname . " " . $this->p_middlename;
	}
}
