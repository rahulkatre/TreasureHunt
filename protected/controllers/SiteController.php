<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionViewData()
	{

		
        $Criteria = new CDbCriteria();
        $Criteria->condition = "lhid = 1";
		
        $data =LocationHistory::model()->findAll($Criteria);
	    $store;
	   foreach($data as $comments_1) 
        { 
         	echo  "LHID:".$comments_1['lhid'];
            $store[0]=$comments_1['lhid'];
        }

       //echo  $json_encode($store);
       
    	echo $store[0];
	
	
	}
	
	//Function for inserting datafrom json objects into databse through models.
	/* 
	 */
	
   public function actionInsertData()
    {
     //$data=LocationHistory::model()->findAll(array('lattitude'=>$this->lattitude));
     //echo $data->lattitude;
     
    $JsonString='{
    "lhid": "5",
    "tgid": "4",
    "uid": "4",
    "lattitude": "47.94",
    "longitude": "20.66"
    }';	
    $model = new LocationHistory;  
    
    $_POST=json_decode($JsonString);	
    echo $_POST->lattitude;  
         
    $model->lhid=$_POST->lhid;
    $model->tgid=$_POST->tgid;
    $model->uid=$_POST->uid;
    $model->lattitude=$_POST->lattitude;
    $model->longitude=$_POST->longitude;
    
    if ($model->validate()){
      $model->save();
     } 
    else {
    print_r($model->errors);
    }
    
 }
	
    
    
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

   


}