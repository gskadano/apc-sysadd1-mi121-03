<?php

/**
 * This is the model class for table "priest".
 *
 * The followings are the available columns in table 'priest':
 * @property integer $id
 * @property string $pfname
 * @property string $plname
 * @property string $pmname
 * @property string $dateOfBirth
 * @property string $placeOfBirth
 * @property string $crasm_no
 * @property string $exp_date
 * @property string $pr_father
 * @property string $pr_mother
 * @property string $ordainedAsPriest
 * @property string $placeOfOrdination
 * @property string $ordainingBishop
 * @property integer $church_id
 */
class Priest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'priest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pfname, plname, pmname, dateOfBirth, crasm_no, exp_date, church_id', 'required'),
			array('church_id', 'numerical', 'integerOnly'=>true),
			array('pfname, plname, pmname, placeOfBirth, crasm_no, pr_father, pr_mother', 'length', 'max'=>45),
			array('placeOfOrdination', 'length', 'max'=>255),
			array('ordainingBishop', 'length', 'max'=>100),
			array('ordainedAsPriest', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pfname, plname, pmname, dateOfBirth, placeOfBirth, crasm_no, exp_date, pr_father, pr_mother, ordainedAsPriest, placeOfOrdination, ordainingBishop, church_id', 'safe', 'on'=>'search'),
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
			'church' => array(self::BELONGS_TO, 'Church', 'church_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pfname' => 'First name',
			'plname' => 'Last name',
			'pmname' => 'Middle name',
			'dateOfBirth' => 'Date Of Birth',
			'placeOfBirth' => 'Place Of Birth',
			'crasm_no' => 'Crasm No',
			'exp_date' => 'Crasm Expiration Date',
			'pr_father' => 'Fathers name',
			'pr_mother' => 'Mothers name',
			'ordainedAsPriest' => 'Ordained As Priest',
			'placeOfOrdination' => 'Place Of Ordination',
			'ordainingBishop' => 'Ordaining Bishop',
			'church_id' => 'Church',
			'pname' => 'Priest Name',
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
		$criteria->compare('pfname',$this->pfname,true);
		$criteria->compare('plname',$this->plname,true);
		$criteria->compare('pmname',$this->pmname,true);
		$criteria->compare('dateOfBirth',$this->dateOfBirth,true);
		$criteria->compare('placeOfBirth',$this->placeOfBirth,true);
		$criteria->compare('crasm_no',$this->crasm_no,true);
		$criteria->compare('exp_date',$this->exp_date,true);
		$criteria->compare('pr_father',$this->pr_father,true);
		$criteria->compare('pr_mother',$this->pr_mother,true);
		$criteria->compare('ordainedAsPriest',$this->ordainedAsPriest,true);
		$criteria->compare('placeOfOrdination',$this->placeOfOrdination,true);
		$criteria->compare('ordainingBishop',$this->ordainingBishop,true);
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
	 * @return Priest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getPFullName(){
		return "Fr. " . $this->pfname . " " . $this->plname;
	}
}
