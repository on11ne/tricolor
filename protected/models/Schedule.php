<?php

/**
 * This is the model class for table "tbl_schedule".
 *
 * The followings are the available columns in table 'tbl_schedule':
 * @property integer $id
 * @property integer $item_id
 * @property integer $hall_id
 * @property string $start_date_time
 *
 * The followings are the available model relations:
 * @property TblHalls $hall
 * @property TblItems $item
 */
class Schedule extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Schedule the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_schedule';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, hall_id, start_date_time', 'required'),
			array('item_id, hall_id', 'numerical', 'integerOnly'=>true),

            array('item_id', 'exist', 'className' => 'Item', 'attributeName' => 'id'),
            array('hall_id', 'exist', 'className' => 'Hall', 'attributeName' => 'id'),
            array('start_date_time', 'unique', 'className' => 'Schedule', 'attributeName' => 'start_date_time'),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, item_id, hall_id, start_date_time', 'safe', 'on'=>'search'),
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
			'hall' => array(self::BELONGS_TO, 'Hall', 'hall_id'),
			'item' => array(self::BELONGS_TO, 'Item', 'item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(

			'id' => 'ID',
			'item_id' => 'Название',
			'hall_id' => 'Экран',
			'start_date_time' => 'Начало сеанса',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('hall_id',$this->hall_id);
		$criteria->compare('start_date_time',$this->start_date_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}