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
 *
 * The followings are the available model relations:
 * @property BapGodparent[] $bapGodparents
 * @property Baptismal[] $baptismals
 * @property Baptismal[] $baptismals1
 * @property Baptismal[] $baptismals2
 * @property ConfGodparent[] $confGodparents
 * @property Confirmation[] $confirmations
 * @property Confirmation[] $confirmations1
 * @property Confirmation[] $confirmations2
 * @property MarGodparent[] $marGodparents
 * @property Marriage[] $marriages
 * @property Marriage[] $marriages1
 * @property Marriage[] $marriages2
 * @property Marriage[] $marriages3
 * @property Position[] $positions
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
			array('p_fname, p_lname, p_dateOfBirth, p_gender', 'required'),
			array('p_fname, p_middlename, p_lname, p_placeOfBirth, p_gender', 'length', 'max'=>45),
			array('p_address', 'length', 'max'=>100),
			array('p_dateOfDeath', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, p_fname, p_middlename, p_lname, p_dateOfBirth, p_placeOfBirth, p_address, p_dateOfDeath, p_gender', 'safe', 'on'=>'search'),
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
			'baptismals1' => array(self::HAS_MANY, 'Baptismal', 'father_id'),
			'baptismals2' => array(self::HAS_MANY, 'Baptismal', 'mother_id'),
			'confGodparents' => array(self::HAS_MANY, 'ConfGodparent', 'person_id'),
			'confirmations' => array(self::HAS_MANY, 'Confirmation', 'person_id'),
			'confirmations1' => array(self::HAS_MANY, 'Confirmation', 'father_id'),
			'confirmations2' => array(self::HAS_MANY, 'Confirmation', 'mother_id'),
			'marGodparents' => array(self::HAS_MANY, 'MarGodparent', 'person_id'),
			'marriages' => array(self::HAS_MANY, 'Marriage', 'bride_id'),
			'marriages1' => array(self::HAS_MANY, 'Marriage', 'groom_id'),
			'marriages2' => array(self::HAS_MANY, 'Marriage', 'father_id'),
			'marriages3' => array(self::HAS_MANY, 'Marriage', 'mother_id'),
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
			'p_fname' => 'P Fname',
			'p_middlename' => 'P Middlename',
			'p_lname' => 'P Lname',
			'p_dateOfBirth' => 'P Date Of Birth',
			'p_placeOfBirth' => 'P Place Of Birth',
			'p_address' => 'P Address',
			'p_dateOfDeath' => 'P Date Of Death',
			'p_gender' => 'P Gender',
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
