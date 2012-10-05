<?php

/**
 * This is the model class for table "tbl_schedule_uploader".
 *
 * The followings are the available columns in table 'tbl_schedule_uploader':
 * @property integer $id
 * @property string $filename
 * @property string $created
 */
class ScheduleUploader extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ScheduleUploader the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName() {

		return 'tbl_schedule_uploader';
	}

    public function process() {

        Yii::import("application.extensions.phpexcel.*");

        $inputFileType = 'Excel5';
        $inputFileName = Yii::getPathOfAlias('webroot') . $this->filename;

        try {

            new PHPExcel();

            $objReader = PHPExcel_IOFactory::createReader($inputFileType);

            $objReader->setLoadAllSheets();
            $objPHPExcel = $objReader->load($inputFileName);

            $loadedSheetNames = $objPHPExcel->getSheetNames();
        } catch (Exception $ex) {

            $this->addError('filename', 'Не возможно обработать xls файл, проверьте формат');
            return false;
        }


        foreach($loadedSheetNames as $loadedSheetName) {

            $year = date("Y"); list($day, $month) = explode(".", $loadedSheetName);
            if(!checkdate($month, $day, $year)) continue;

            $message = 'Результаты загрузки<br/>';

            $objPHPExcel->setActiveSheetIndexByName($loadedSheetName);

            $hall_id = 1;
            $time_id = 1;
            foreach(array_merge(range('B', 'M'), range('O', 'Z')) as $letter) {
                foreach(range(2, 97) as $number) {

                    $film_title = $objPHPExcel->getActiveSheet()->getCell($letter.$number)->getValue();

                    if(strlen($film_title) > 1) {

                        $minutes_from_midnight = ($number - 2) * 15;
                        $current_time = mktime(
                            intval($minutes_from_midnight / 60), // hours
                            intval($minutes_from_midnight % 60), // minutes
                            0,
                            $month,
                            $day,
                            $year
                        );

                        $item = Item::model()->find('title=:t', array(':t' => $film_title));

                        if(is_null($item)) {

                            $message .= 'Название фильма ' . $film_title . " не найдено<br/>";
                        } else {

                            $schedule_item = new Schedule();
                            $schedule_item->hall_id = $hall_id;

                            $schedule_item->item_id = $item->id;
                            $schedule_item->start_date_time = date("Y-m-d H:i:s", $current_time);

                            if(!$schedule_item->save())
                                $message .= 'Ошибка сохранения сеанса ' . var_export($schedule_item->getErrors(), true) . " не найдено<br/>";
                        }
                    }
                    $time_id++;
                }
                $hall_id++;
            }
        }

        Yii::app()->user->setFlash('message', $message);

        return true;
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('filename', 'required'),
			array('filename', 'file', 'maxSize' => 3000000, 'types' => 'xls'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, filename, created', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'filename' => 'Таблица расписания',
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
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}