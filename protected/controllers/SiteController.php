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
					"Content-type: text/plain; charset=UTF-8";

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
		// display the login form atau peringatan
		if(Yii::app()->request->isAjaxRequest)
				$this->renderPartial('vlogin');
			else
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

	public function actionDashboard(){
		$data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('pages/dashboard',$data);
	}

	public function actionManajemen(){
		$data['manajemen'] = 'manajemen';
		$this->render('pages/manajemen',$data);
	}


	public function actionGrafikMhsReg(){
		$id_administrasi = $_POST['id_administrasi'];
		$data['data']['id_administrasi'] = $id_administrasi;
		$dt['data'] = Yii::app()->db->createCommand()
		    ->select('mr.*,p.id_prodi,p.jurusan,a.th_akademik')
		    ->from('mhs_reguler mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    // ->order('th_akademik desc')   
		    // ->limit(5)
		    ->queryAll();

		$data['data']['tahun'] = Yii::app()->db->createCommand()
		    ->select('a.th_akademik')
		    ->from('administrasi a')
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		$data['data']['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan')
		    ->from('prodi p')
		    ->queryAll();

		foreach ($dt['data'] as $key => $value) {
			$data['data'][$value['jurusan']][] = $value;
		}
		$this->renderPartial('pages/v_gr_mhs_reg', $data, false, true);
	}

	public function actiondashboard_nonreg(){
		$data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('pages/dashboard_nonreg',$data);
	}

	public function actionGrafikMhsNonReg(){
		$id_administrasi = $_POST['id_administrasi'];
		$data['data']['id_administrasi'] = $id_administrasi;
		$dt['data'] = Yii::app()->db->createCommand()
		    ->select('mr.*,p.id_prodi,p.jurusan,a.th_akademik')
		    ->from('mhs_reguler mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    // ->order('th_akademik desc')   
		    // ->limit(5)
		    ->queryAll();

		$data['data']['tahun'] = Yii::app()->db->createCommand()
		    ->select('a.th_akademik')
		    ->from('administrasi a')
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		$data['data']['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan')
		    ->from('prodi p')
		    ->queryAll();

		foreach ($dt['data'] as $key => $value) {
			$data['data'][$value['jurusan']][] = $value;
		}
		$this->renderPartial('pages/v_gr_mhs_nonreg', $data, false, true);
	}

	public function actiondashboard_dosen(){
		$data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('pages/dashboard_dosen',$data);
	}

	public function actionGrafikDosen(){
		$id_administrasi = $_POST['id_administrasi'];
		$data['data']['id_administrasi'] = $id_administrasi;
		$this->renderPartial('pages/v_gr_dosen', $data, false, true);
	}

	public function actiondashboard_prestasi(){
		$data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('pages/dashboard_prestasi',$data);
	}

	public function actionGrafikPrestasi(){
		$id_administrasi = $_POST['id_administrasi'];
		$data['data']['id_administrasi'] = $id_administrasi;
		$this->renderPartial('pages/v_gr_prestasi', $data, false, true);
	}

	public function actiondashboard_dayatampung(){
		$data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('pages/dashboard_dayatampung',$data);
	}

	public function actionGrafikDayaTampung(){
		$id_administrasi = $_POST['id_administrasi'];
		$data['data']['id_administrasi'] = $id_administrasi;
		$data['data']['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan')
		    ->from('prodi p')
		    ->queryAll();

		$this->renderPartial('pages/v_gr_dayatampung', $data, false, true);
	}


	public function actiondashboard_kerjasama(){
		$data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('pages/dashboard_kerjasama',$data);
	}

	public function actionGrafikKerjasama(){
		$id_administrasi = $_POST['id_administrasi'];
		$data['data']['id_administrasi'] = $id_administrasi;
		$data['data']['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan')
		    ->from('prodi p')
		    ->queryAll();
		    
		$this->renderPartial('pages/v_gr_kerjasama', $data, false, true);
	}






}