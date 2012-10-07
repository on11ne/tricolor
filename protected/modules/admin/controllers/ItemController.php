<?php

class ItemController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new Item;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Item'])) {

			$model->attributes = $_POST['Item'];
            $model->genres = $_POST['Item']['genres'];

            $model->index_teaser_image = CUploadedFile::getInstance($model, 'index_teaser_image');

            if($model->index_teaser_image) {

                $image_name = uniqid() . "." . pathinfo($model->index_teaser_image, PATHINFO_EXTENSION);

                $upload_directory = Yii::getPathOfAlias('webroot') . '/images/items/index_teasers/' . $image_name;
//                $web_directory = '/images/items/index_teasers/' . $image_name;

                if(!$model->index_teaser_image->saveAs($upload_directory))
                    $model->addError('index_teaser_image', 'Фотография не может быть сохранена');

                if(!$model->resize($upload_directory, 166, 247))
                    $model->addError('index_teaser_image', 'Невозможно обработать изображение');

                $model->index_teaser_image = $image_name;
            }

            $model->teaser_image = CUploadedFile::getInstance($model, 'teaser_image');

            if($model->teaser_image) {

                $image_name = uniqid() . "." . pathinfo($model->teaser_image, PATHINFO_EXTENSION);

                $upload_directory = Yii::getPathOfAlias('webroot') . '/images/items/teasers/' . $image_name;
//                $web_directory = '/images/items/teasers/' . $image_name;

                if(!$model->teaser_image->saveAs($upload_directory))
                    $model->addError('teaser_image', 'Фотография не может быть сохранена');

                if(!$model->resize($upload_directory, 326, 488))
                    $model->addError('teaser_image', 'Невозможно обработать изображение');

                $model->teaser_image = $image_name;
            }

            $model->slider_teaser_image = CUploadedFile::getInstance($model, 'slider_teaser_image');

            if($model->slider_teaser_image) {

                $image_name = uniqid() . "." . pathinfo($model->slider_teaser_image, PATHINFO_EXTENSION);

                $upload_directory = Yii::getPathOfAlias('webroot') . '/images/items/slider_teasers/' . $image_name;
//                $web_directory = '/images/items/slider_teasers/' . $image_name;

                if(!$model->slider_teaser_image->saveAs($upload_directory))
                    $model->addError('slider_teaser_image', 'Фотография не может быть сохранена');

                if(!$model->resize($upload_directory, 426, 233))
                    $model->addError('slider_teaser_image', 'Невозможно обработать изображение');

                $model->slider_teaser_image = $image_name;
            }

			if($model->save())
				$this->redirect(array('view','id' => $model->id));
		}

		$this->render('create', array(
			'model' => $model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Item']))
		{
			$model->attributes = $_POST['Item'];
            $model->genres = $_POST['Item']['genres'];

            if(CUploadedFile::getInstance($model, 'index_teaser_image')) {

                $model->index_teaser_image = CUploadedFile::getInstance($model, 'index_teaser_image');

                $image_name = uniqid() . "." . pathinfo($model->index_teaser_image, PATHINFO_EXTENSION);

                $upload_directory = Yii::getPathOfAlias('webroot') . '/images/items/index_teasers/' . $image_name;
                $web_directory = '/images/items/index_teasers/' . $image_name;

                if(!$model->index_teaser_image->saveAs($upload_directory))
                    $model->addError('index_teaser_image', 'Фотография не может быть сохранена');

                if(!$model->resize($upload_directory, 166, 247))
                    $model->addError('index_teaser_image', 'Невозможно обработать изображение');

                $model->index_teaser_image = $image_name;
            }

            if(CUploadedFile::getInstance($model, 'teaser_image')) {

                $model->teaser_image = CUploadedFile::getInstance($model, 'teaser_image');
                $image_name = uniqid() . "." . pathinfo($model->teaser_image, PATHINFO_EXTENSION);

                $upload_directory = Yii::getPathOfAlias('webroot') . '/images/items/teasers/' . $image_name;
//                $web_directory = '/images/items/teasers/' . $image_name;

                if(!$model->teaser_image->saveAs($upload_directory))
                    $model->addError('teaser_image', 'Фотография не может быть сохранена');

                if(!$model->resize($upload_directory, 326, 488))
                    $model->addError('teaser_image', 'Невозможно обработать изображение');

                $model->teaser_image = $image_name;
            }

            if(CUploadedFile::getInstance($model, 'slider_teaser_image')) {

                $model->slider_teaser_image = CUploadedFile::getInstance($model, 'slider_teaser_image');

                $image_name = uniqid() . "." . pathinfo($model->slider_teaser_image, PATHINFO_EXTENSION);

                $upload_directory = Yii::getPathOfAlias('webroot') . '/images/items/slider_teasers/' . $image_name;
//                $web_directory = '/images/items/slider_teasers/' . $image_name;

                if(!$model->slider_teaser_image->saveAs($upload_directory))
                    $model->addError('slider_teaser_image', 'Фотография не может быть сохранена');

                if(!$model->resize($upload_directory, 426, 233))
                    $model->addError('slider_teaser_image', 'Невозможно обработать изображение');
            }

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update', array(
			'model' => $model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Item');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Item('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Item']))
			$model->attributes=$_GET['Item'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Item::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='item-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
