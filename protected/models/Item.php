<?php

/**
 * This is the model class for table "tbl_items".
 *
 * The followings are the available columns in table 'tbl_items':
 * @property integer $id
 * @property string $title
 * @property string $teaser_image
 * @property string $index_teaser_image
 * @property string $teaser_text
 * @property string $trailer
 * @property string $description
 * @property integer $order
 * @property string $created
 *
 * The followings are the available model relations:
 * @property TblGenresItems[] $tblGenresItems
 * @property TblSchedule[] $tblSchedules
 */
class Item extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Item the static model class
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
		return 'tbl_items';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, teaser_image, index_teaser_image, teaser_text, trailer, description, order, created', 'required'),
			array('order', 'numerical', 'integerOnly'=>true),
			array('title, teaser_image, index_teaser_image, trailer', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, teaser_image, index_teaser_image, teaser_text, trailer, description, order, created', 'safe', 'on'=>'search'),
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
			'genres' => array(self::MANY_MANY, 'Genre', 'tbl_genres_items(genre_id, item_id)'),
			'schedules' => array(self::HAS_MANY, 'Schedule', 'item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Название',
			'teaser_image' => 'Изображение',
			'index_teaser_image' => 'Изображение на главной',
			'teaser_text' => 'Вступительный текст',
			'trailer' => 'YouTube адрес',
			'description' => 'Описание',
            'genres' => 'Жанры',
			'order' => 'Порядок',
			'created' => 'Создано',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('teaser_image',$this->teaser_image,true);
		$criteria->compare('index_teaser_image',$this->index_teaser_image,true);
		$criteria->compare('teaser_text',$this->teaser_text,true);
		$criteria->compare('trailer',$this->trailer,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function behaviors(){
        return array( 'CAdvancedArBehavior' => array(
            'class' => 'application.extensions.CAdvancedArBehavior'));
    }
}