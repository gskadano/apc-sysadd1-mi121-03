<?php

/**
 * This is the model class for table "church".
 *
 * The followings are the available columns in table 'church':
 * @property integer $id
 * @property string $ch_name
 * @property string $ch_address
 * @property string $ch_pic
 * @property string $fileType
 */
class Church extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'church';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('ch_pic', 'required'),
			array('ch_name , fileType', 'length', 'max'=>45),
			array('ch_address', 'length', 'max'=>100),
                    
                    array('ch_pic', 'file',
					'types'=>'jpg, gif, png, bmp, jpeg',
						'maxSize'=>1024 * 1024 * 10, // 10MB
							'tooLarge'=>'The file was larger than 10MB. Please upload a smaller file.',
						'allowEmpty' => true
	         ),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ch_name, ch_address, ch_pic, fileType', 'safe', 'on'=>'search'),
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
			'employees' => array(self::HAS_MANY, 'Employee', 'church_id'),
			'priest' => array(self::HAS_MANY, 'Priest', 'church_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ch_name' => 'Church Name',
			'ch_address' => 'Church Address',
                        'ch_pic' => 'Church Picture',
			'fileType' => 'File Type',
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
		$criteria->compare('ch_name',$this->ch_name,true);
		$criteria->compare('ch_address',$this->ch_address,true);
                $criteria->compare('ch_pic',$this->ch_pic,true);
		$criteria->compare('fileType',$this->fileType,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Church the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
