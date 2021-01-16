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
			//echo 1; print_r($_POST['LoginForm']); echo '<br />'; echo 1; print_r($model->validate());
			//print_r($model->login()); exit;
			if($model->validate() && $model->login()){
				$uri = explode('/', Yii::app()->request->requestUri);
				if($uri[count($uri)-1] == 'login'){
					$this->redirect('manajemen'); 
				}else{
					$this->redirect(Yii::app()->request->requestUri); 
				}
			}
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
		// $this->redirect(Yii::app()->homeUrl);
		$this->redirect('login');
	}

	public function actionDashboard(){
		$this->layout='//layouts/dashboard';

		$data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

	    $id_administrasi = Yii::app()->db->createCommand()
	    ->select('max(a.id_administrasi) as id_administrasi')
	    ->from('administrasi a')
	    ->queryRow();

	    $id_administrasi = $id_administrasi['id_administrasi'];

	    $data['data']['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan')
		    ->from('prodi p')
		    ->queryAll();

		/*
		$data['mhs_reguler'] =  Yii::app()->db->createCommand()
			->select('m.*,p.nama_prodi')
			->from('mhs_reguler m')
		    ->join('prodi p','m.id_prodi=p.id_prodi')
		    ->join('administrasi a','m.id_administrasi=a.id_administrasi')
		    ->andWhere('m.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->andWhere('m.thn_akademik=:id_thn', array(':id_thn'=>'TS'))
		    ->queryAll(); */

		 $data['mhs_reguler'] =  Yii::app()->db->createCommand()
			->select('m.*,p.nama_prodi')
			->from('jml_mahasiswa_s2 m')
		    ->join('prodi p','m.id_prodi=p.id_prodi')
		    ->join('administrasi a','m.id_administrasi=a.id_administrasi')
		    ->andWhere('m.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    //->andWhere('m.tahun_akademik=:id_thn', array(':id_thn'=>'TS'))
		    ->queryAll();
		//echo '<pre>'; print_r($data['mhs_reguler']); exit;

		$data['data']['daya_tampung'] = array();
		if(!empty($data['mhs_reguler'])){
			foreach ($data['mhs_reguler'] as $key => $value) {
				$data['data']['daya_tampung'][$value['nama_prodi']] = $value;
			}
		}else{
			foreach ($data['data']['prodi'] as $key => $value) {
				$data['data']['daya_tampung'][$value['jurusan']] = '0';
			}
		}

		$this->render('pages/dashboard',$data);
	}

	public function actionAkreditasi(){
		if(isset(Yii::app()->user->group_id)){
			if(!empty(Yii::app()->user->group_id)){
				if(Yii::app()->user->group_id == 1){
					$data['prodi'] = Yii::app()->db->createCommand()
				    ->select('p.id_prodi,p.jurusan')
				    ->from('prodi p')
				    ->queryAll();
				}else{
					$data['prodi'] = Yii::app()->db->createCommand()
				    ->select('p.id_prodi,p.jurusan')
				    ->from('prodi p')
				    ->andWhere('p.id_prodi=:id', array(':id'=>Yii::app()->user->group_id))
				    ->queryAll();
				}
			}else{
				$data['prodi'] = Yii::app()->db->createCommand()
			    ->select('p.id_prodi,p.jurusan')
			    ->from('prodi p')
			    ->queryAll();
			}
			
		    $data['administrasi'] = Yii::app()->db->createCommand()
		    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi')
		    ->from('administrasi a')
		    ->order('id_administrasi desc')
		    ->queryAll();

			$this->render('pages/akreditasi',$data);
		}else{
			$this->actionLogin();
		}
		
	}


	public function actionManajemen(){
		$this->layout='//layouts/column2';
		$data['manajemen'] = 'manajemen';
		if(isset(Yii::app()->user->group_id)){
			$this->render('pages/manajemen',$data);
		}else{
			// $model=new LoginForm;
			// $this->render('login',array('model'=>$model));
			$this->actionLogin();
		}
	}

	// DASHBOARD DOSEN
	public function actiondashboard_dosen(){
		$this->layout='//layouts/dashboard';
		$data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

	    $id_administrasi = Yii::app()->db->createCommand()
	    ->select('max(a.id_administrasi) as id_administrasi')
	    ->from('administrasi a')
	    ->queryRow();

	    $id_administrasi = $id_administrasi['id_administrasi'];

	    $data['data']['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan')
		    ->from('prodi p')
		    ->queryAll();

		$dosen = Yii::app()->db->createCommand()
			->select('d.*,.nama_prodi')
			->from('data_dosen d')
			->join('prodi p','d.id_prodi=p.id_prodi')
		    ->join('administrasi a','d.id_administrasi=a.id_administrasi')
		    ->andWhere('d.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    //->group ('p.nama_prodi)
            //      ->andWhere('d.detil_thn=:id_a', array(':id_a'=>'2014'))

		    ->queryAll();
		
		$data['data']['dosen'] = array();
		foreach ($dosen as $key => $value) {
			$data['dosen'][$value['nama_prodi']][$value['F_gelar_akademik_terakhir']][] = $value;
		}

		//echo "<pre>"; print_r($data['dosen']); exit;

		$this->render('pages/dashboard_dosen',$data);
	}

	public function actionGrafikDosen(){
		$id_administrasi = $_POST['id_administrasi'];
		$data['id_administrasi'] = $id_administrasi;
		$data['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan')
		    ->from('prodi p')
		    ->queryAll();
		 echo 1; exit;
		$dosen = Yii::app()->db->createCommand()
			->select('d.*,p.nama_prodi,p.jurusan')
			->from('data_dosen d')
		       ->join('prodi p','d.id_prodi=p.id_prodi')
		       ->join('administrasi a','d.id_administrasi=a.id_administrasi')
		    ->andWhere('d.detil_thn=:id_a', array(':id_a'=>'2014'))
		    ->queryAll();

		foreach ($dosen as $key => $value) {
			$data['dosen'][$value['jurusan']][$value['F_gelar_akademik_terakhir']][] = $value;
		}
		$this->renderPartial('pages/v_gr_dosen', $data, false, true);
	}

	public function actiondashboard_dosen_dan_mahasiswa(){
		$this->layout='//layouts/dashboard';

	    $data['administrasi'] = Yii::app()->db->createCommand()
           ->select('a.detail_thn,a.detail_thn')
	    ->from('mhs_reguler a')
	    ->order('detail_thn desc')
           ->group('detail_thn')
	    ->queryAll();

	    //->select('a.id_administrasi,a.th_akademik')
	    //->from('administrasi a')
	    //->order('id_administrasi desc')
	    //->queryAll();

	    $data['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan,p.id_prodi,p.nama_prodi')
		    ->from('prodi p')
		    //->andWhere('m.id_prodi=:id_p', array(':id_p'=>$id_prodi))
		    ->queryAll();

		$id_administrasi = Yii::app()->db->createCommand()
	    	->select('max(a.id_administrasi) as id_administrasi')
	    	->from('administrasi a')
	    	->queryRow();

		$id_administrasi = $id_administrasi['id_administrasi'];

		if(empty($id_prodi)){
		
		//$id_prodi = '1';
	    $prodi = Yii::app()->db->createCommand()
		    ->select('p.id_prodi')
		    ->from('prodi p')
		    ->andWhere('p.prodi=:id_p', array(':id_p'=>'S2'))
		    ->queryAll();
		foreach ($prodi as $key => $value) {
			# code...
			$id_prodi[]=$value['id_prodi'];
		}


		}

		//echo "<pre>"; print_r($id_prodi); exit;

		$data['dosen_tetap'] = array();
		$data['dosen_tidak_tetap'] = array();
		$data['mhs_reguler'] =  Yii::app()->db->createCommand()
			->select('m.*,p.nama_prodi')
			->from('jml_mahasiswa_s2 m')
		    ->join('prodi p','m.id_prodi=p.id_prodi')
		    ->join('administrasi a','m.id_administrasi=a.id_administrasi')
		    ->andWhere('m.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    //->andWhere('m.id_prodi in (:id_p)', array(':id_p'=>$id_prodi))
		    //->andWhere('m.thn_akademik=:id_thn', array(':id_thn'=>'TS'))
		    ->queryAll();
		/*
		$data['mhs_nonreguler'] =  Yii::app()->db->createCommand()
			->select('m.*,p.nama_prodi')
			->from('mhs_nonreguler m')
		    ->join('prodi p','m.id_prodi=p.id_prodi')
		    ->join('administrasi a','m.id_administrasi=a.id_administrasi')
		    ->andWhere('m.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->andWhere('m.id_prodi=:id_p', array(':id_p'=>$id_prodi))
		    ->andWhere('m.th_akademik=:id_thn', array(':id_thn'=>'TS'))
		    ->queryAll();
		*/
		$i = 0;
		$total_mhs = 0;
		foreach ($data['mhs_reguler'] as $key => $value) {
			$total_mhs += $value['jml_maba'] + $value['jml_maba_transfer'];
		}
		/*
		foreach ($data['mhs_nonreguler'] as $key => $value) {
			$total_mhs += $value['tot_mhs_nonreg'] + $value['tot_transfer'];
		} */
		$data['mahasiswa'] = $total_mhs;

		// data dosen
		$dosen_tetap = Yii::app()->db->createCommand()
			->select('d.*,p.jurusan,a.th_akreditasi')
		    ->from('data_dosen d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			->andWhere('d.status_dosen=:std', array(':std'=>'tetap'))
		    //->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		$dosen_tidak_tetap = Yii::app()->db->createCommand()
			->select('d.*,p.jurusan,a.th_akreditasi')
		    ->from('data_dosen d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			->andWhere('d.status_dosen=:std', array(':std'=>'tidak tetap'))
		    //->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		$data['dosen_tetap'] = count($dosen_tetap);
		$data['dosen_tidak_tetap'] = count($dosen_tidak_tetap);

		$this->render('pages/dashboard_dosen_dan_mahasiswa',$data);
	}

	public function actiongrafik_dosen_dan_mahasiswa(){
		$id_administrasi = $_POST['id_administrasi'];
		$id_prodi = $_POST['id_prodi'];
		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['dosen_tetap'] = array();
		$data['dosen_tidak_tetap'] = array();

		$data['mhs_reguler'] =  Yii::app()->db->createCommand()
			->select('m.*,p.nama_prodi')
			->from('jml_mahasiswa_s2 m')
		    ->join('prodi p','m.id_prodi=p.id_prodi')
		    //->join('administrasi a','m.id_administrasi=a.id_administrasi')
		    ->andWhere('m.detail_thn=:id_a', array(':id_a'=>$id_administrasi))
		    ->andWhere('m.id_prodi=:id_p', array(':id_p'=>$id_prodi))
		    //->andWhere('m.thn_akademik=:id_thn', array(':id_thn'=>'TS'))
		    ->queryAll();

		
		$i = 0;
		$total_mhs = 0;
		foreach ($data['mhs_reguler'] as $key => $value) {
			$total_mhs += $value['jml_maba_transfer'] + $value['jml_maba'];
		}
			$data['mahasiswa'] = $total_mhs;

		// data dosen
		$dosen_tetap = Yii::app()->db->createCommand()
			->select('d.*,p.jurusan,a.th_akreditasi')
		    ->from('data_dosen d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			->andWhere('d.status_dosen=:std', array(':std'=>'tetap'))
		    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
            //->andWhere('d.detil_thn=:id_a', array(':id_a'=>'2014'))

		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		$dosen_tidak_tetap = Yii::app()->db->createCommand()
			->select('d.*,p.jurusan,a.th_akreditasi')
		    ->from('data_dosen d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			->andWhere('d.status_dosen=:std', array(':std'=>'tidak tetap'))
		    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		$data['dosen_tetap'] = count($dosen_tetap);
		$data['dosen_tidak_tetap'] = count($dosen_tidak_tetap);
		
		$this->renderPartial('pages/v_gr_dosen_dan_mahasiswa', $data, false, true);
	}

	// DASHBOARD DAYA TAMPUNG
	public function actiondashboard_dayatampung(){
		$this->layout='//layouts/dashboard';
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.detail_thn,a.detail_thn')
	    ->from('mhs_reguler a')
	    ->order('detail_thn desc')
           ->group('detail_thn')
	    ->queryAll();

	    $id_administrasi = Yii::app()->db->createCommand()
	   ->select('max(a.id_administrasi) as id_administrasi')
	   ->from('administrasi a')
	   ->queryRow();

	    $id_administrasi = $id_administrasi['id_administrasi'];
        //$id_administrasi = $_POST['id_administrasi'];
	    $data['data']['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan')
		    ->from('prodi p')
		    ->queryAll();

		$data['mhs_reguler'] =  Yii::app()->db->createCommand()
			->select('m.*,p.nama_prodi')
			->from('jml_mahasiswa_s2 m')
		    ->join('prodi p','m.id_prodi=p.id_prodi')
		    ->join('administrasi a','m.id_administrasi=a.id_administrasi')
            ->andWhere('m.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))

		    //->andWhere('m.detail_thn=:id_a', array(':id_a'=>$_POST['th_akademik']))
		    //->andWhere('m.thn_akademik=:id_thn', array(':id_thn'=>'TS'))
		    ->queryAll();

		//echo '<pre>'; print_r($data['mhs_reguler']); exit; 
		$data['data']['daya_tampung'] = array();

		if(!empty($data['mhs_reguler'])){
			foreach ($data['mhs_reguler'] as $key => $value) {
				$data['data']['daya_tampung'][$value['nama_prodi']] = $value;
			}
		}else{
			foreach ($data['data']['prodi'] as $key => $value) {
				$data['data']['daya_tampung'][$value['jurusan']] = '0';
			}
		}

		$this->render('pages/dashboard_dayatampung',$data);
	}

	public function actionGrafikDayaTampung(){
		//echo 1 ; exit;
		$id_administrasi = $_POST['id_administrasi'];
		$data['id_administrasi'] = $id_administrasi;
		$data['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan')
		    ->from('prodi p')
		    ->queryAll();

		$data['mhs_reguler'] =  Yii::app()->db->createCommand()
			->select('m.*,p.nama_prodi')
			->from('jml_mahasiswa_s2 m')
		    ->join('prodi p','m.id_prodi=p.id_prodi')
		    ->join('administrasi a','m.id_administrasi=a.id_administrasi')
		    //->andWhere('m.detail_thn=:detail_a', array(':detail_a'=>$id_administrasi))
		    ->andWhere('m.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    //->andWhere('m.thn_akademik=:id_thn', array(':id_thn'=>'TS'))
		    ->queryAll();
		
		$data['daya_tampung'] = array();
		if(!empty($data['mhs_reguler'])){
			foreach ($data['mhs_reguler'] as $key => $value) {
				$data['daya_tampung'][$value['nama_prodi']] = $value;
			}
		}else{
			foreach ($data['prodi'] as $key => $value) {
				$data['daya_tampung'][$value['jurusan']] = '0';
			}
		}

		//echo "<pre>"; print_r($data['daya_tampung']); exit;
		$this->renderPartial('pages/v_gr_dayatampung', $data, false, true);
	}

	// DASHBOARD PENELITIAN
	public function actiondashboard_penelitian(){
		$this->layout='//layouts/dashboard';

		$data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

	    $data['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan,p.id_prodi,p.nama_prodi')
		    ->from('prodi p')
		    ->queryAll();

		$id_administrasi = Yii::app()->db->createCommand()
	    	->select('max(a.id_administrasi) as id_administrasi')
	    	->from('administrasi a')
	    	->queryRow();
		$id_administrasi = $id_administrasi['id_administrasi'];
		if(empty($id_prodi)){
			$id_prodi = '1';
		}

		$data['penelitian'] = array();
		$data['pkm'] = array();
		$penelitian = Yii::app()->db->createCommand()
			->select('d.*,p.jurusan,a.th_akademik')
			->from('dana_penelitian d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			->andWhere('d.status=:st', array(':st'=>'penelitian'))
		    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->queryAll();
		$pkm = Yii::app()->db->createCommand()
			->select('d.*,p.jurusan,a.th_akademik')
			->from('dana_penelitian d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			->andWhere('d.status=:st', array(':st'=>'pkm'))
		    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->queryAll();
		foreach ($penelitian as $key => $value) {
			$data['penelitian'][$value['th_akademik']][] = $value;
		}
		foreach ($pkm as $key => $value) {
			$data['pkm'][$value['th_akademik']][] = $value;
		}
		$this->render('pages/dashboard_penelitian',$data);
	}

	public function actionGrafikPenelitian(){
		$id_prodi = $_POST['id_prodi'];
		$data['id_prodi'] = $id_prodi;
		$data['penelitian'] = array();
		$data['pkm'] = array();
		$penelitian = Yii::app()->db->createCommand()
			->select('d.*,p.jurusan,a.th_akademik')
			->from('dana_penelitian d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			->andWhere('d.status=:st', array(':st'=>'penelitian'))
		    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->queryAll();
		$pkm = Yii::app()->db->createCommand()
			->select('d.*,p.jurusan,a.th_akademik')
			->from('dana_penelitian d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			->andWhere('d.status=:st', array(':st'=>'pkm'))
		    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->queryAll();
		foreach ($penelitian as $key => $value) {
			$data['penelitian'][$value['th_akademik']][] = $value;
		}
		foreach ($pkm as $key => $value) {
			$data['pkm'][$value['th_akademik']][] = $value;
		}
		$this->renderPartial('pages/v_gr_penelitian', $data, false, true);
	}

	// GRAFIK MAHASISWA DAN LULUSAN PERTAHUN
	public function actiondashboard_mahasiswa_dan_lulusan(){
		$this->layout='//layouts/dashboard';

		$data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

	    $data['prodi'] = Yii::app()->db->createCommand()
		    ->select('p.jurusan,p.id_prodi,p.nama_prodi')
		    ->from('prodi p')
		    ->queryAll();

		$id_administrasi = Yii::app()->db->createCommand()
	    	->select('max(a.id_administrasi) as id_administrasi')
	    	->from('administrasi a')
	    	->queryRow();

	    //print_r($id_administrasi); exit;
		$id_administrasi = $id_administrasi['id_administrasi'];
		//$id_administrasi = '1';
		if(empty($id_prodi)){
			$id_prodi = '1';
		}

		$mhs_reguler =  Yii::app()->db->createCommand()
			->select('m.*,p.nama_prodi,a.th_akademik')
			->from('jml_mahasiswa_s2 m')
		    ->join('prodi p','m.id_prodi=p.id_prodi')
		    ->join('administrasi a','m.id_administrasi=a.id_administrasi')
		    //->andWhere('m.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    //->andWhere('m.id_prodi=:id_p', array(':id_p'=>$id_prodi))
		    ->andWhere('m.tahun_akademik=:id_thn', array(':id_thn'=>'TS'))
		    ->queryAll();

		//echo '<pre>'; print_r($mhs_reguler); exit;
		/*
		$mhs_nonreguler =  Yii::app()->db->createCommand()
			->select('m.*,p.nama_prodi,a.th_akademik')
			->from('mhs_nonreguler m')
		    ->join('prodi p','m.id_prodi=p.id_prodi')
		    ->join('administrasi a','m.id_administrasi=a.id_administrasi')
		    ->andWhere('m.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->andWhere('m.id_prodi=:id_p', array(':id_p'=>$id_prodi))
		    ->andWhere('m.th_akademik=:id_thn', array(':id_thn'=>'TS'))
		    ->queryAll();
		*/
		$data['mhs'] = array();
		foreach ($mhs_reguler as $key => $value) {
			$data['mhs'][$value['th_akademik']]['mhs_reguler'][] = array('mahasiswa_aktif'=>$value['jml_maba'] + $value['jml_maba_transfer'],
																'lulusan' => $value['jml_lulusan'] + $value['jml_lulusan_transfer']
															);
		}

		//echo "<pre>"; print_r($data); exit;
		/*
		foreach ($mhs_nonreguler as $key => $value) {
			$data['mhs'][$value['th_akademik']]['mhs_nonreguler'][''] = array('mahasiswa_aktif'=>$value['tot_mhs_nonreg'] + $value['tot_transfer'],
																	'lulusan'=> '0'
																);
		}*/

		$this->render('pages/dashboard_mahasiswa_dan_lulusan',$data);
	}

	public function actionGrafik_mahasiswa_dan_lulusan(){
		$id_prodi = $_POST['id_prodi'];
		$data['id_prodi'] = $id_prodi;
		
		$mhs_reguler =  Yii::app()->db->createCommand()
			->select('m.*,p.nama_prodi,a.th_akademik')
			->from('mhs_reguler m')
		    ->join('prodi p','m.id_prodi=p.id_prodi')
		    ->join('administrasi a','m.id_administrasi=a.id_administrasi')
		    ->andWhere('m.id_prodi=:id_p', array(':id_p'=>$id_prodi))
		    ->andWhere('m.thn_akademik=:id_thn', array(':id_thn'=>'TS'))
		    ->queryAll();

		$mhs_nonreguler =  Yii::app()->db->createCommand()
			->select('m.*,p.nama_prodi,a.th_akademik')
			->from('mhs_nonreguler m')
		    ->join('prodi p','m.id_prodi=p.id_prodi')
		    ->join('administrasi a','m.id_administrasi=a.id_administrasi')
		    ->andWhere('m.id_prodi=:id_p', array(':id_p'=>$id_prodi))
		    ->andWhere('m.th_akademik=:id_thn', array(':id_thn'=>'TS'))
		    ->queryAll();

		$data['mhs'] = array();
		foreach ($mhs_reguler as $key => $value) {
			$data['mhs'][$value['th_akademik']]['mhs_reguler'][] = array('mahasiswa_aktif'=>$value['total_mhs_transfer'] + $value['total_mhs_bkn_transfer'],
																'lulusan' => $value['jumlah_lulus_transfer'] + $value['jumlah_lulus_bkn_transfer']
															);
		}
		foreach ($mhs_nonreguler as $key => $value) {
			$data['mhs'][$value['th_akademik']]['mhs_nonreguler'][''] = array('mahasiswa_aktif'=>$value['tot_mhs_nonreg'] + $value['tot_transfer'],
																	'lulusan'=> '0'
																);
		}
		$this->renderPartial('pages/v_gr_mahasiswa_dan_lulusan', $data, false, true);
	} 


	// public function actionGrafikMhsReg(){

	// 	$id_administrasi = $_POST['id_administrasi'];
	// 	$data['data']['id_administrasi'] = $id_administrasi;
	// 	$dt['data'] = Yii::app()->db->createCommand()
	// 	    ->select('mr.*,p.id_prodi,p.jurusan,a.th_akademik')
	// 	    ->from('mhs_reguler mr')
	// 	    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
	// 	    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
	// 	    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
	// 	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	// 	    // ->order('th_akademik desc')   
	// 	    // ->limit(5)
	// 	    ->queryAll();

	// 	$data['data']['tahun'] = Yii::app()->db->createCommand()
	// 	    ->select('a.th_akademik')
	// 	    ->from('administrasi a')
	// 	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	// 	    ->queryRow();

	// 	$data['data']['prodi'] = Yii::app()->db->createCommand()
	// 	    ->select('p.jurusan')
	// 	    ->from('prodi p')
	// 	    ->queryAll();

	// 	foreach ($dt['data'] as $key => $value) {
	// 		$data['data'][$value['jurusan']][] = $value;
	// 	}
	// 	// echo "<pre>";
	// 	// print_r($data);
	// 	// echo "</pre>";
	// 	$this->renderPartial('pages/v_gr_mhs_reg', $data, false, true);
	// }

	// public function actiondashboard_nonreg(){
	// 	$this->layout='//layouts/dashboard';
	// 	$data['administrasi'] = Yii::app()->db->createCommand()
	//     ->select('a.id_administrasi,a.th_akademik')
	//     ->from('administrasi a')
	//     ->order('id_administrasi desc')
	//     ->queryAll();

	// 	$this->render('pages/dashboard_nonreg',$data);
	// }

	// public function actionGrafikMhsNonReg(){
	// 	$id_administrasi = $_POST['id_administrasi'];
	// 	$data['data']['id_administrasi'] = $id_administrasi;
	// 	$dt['data'] = Yii::app()->db->createCommand()
	// 	    ->select('mr.*,p.id_prodi,p.jurusan,a.th_akademik')
	// 	    ->from('mhs_reguler mr')
	// 	    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
	// 	    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
	// 	    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
	// 	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	// 	    // ->order('th_akademik desc')   
	// 	    // ->limit(5)
	// 	    ->queryAll();

	// 	$data['data']['tahun'] = Yii::app()->db->createCommand()
	// 	    ->select('a.th_akademik')
	// 	    ->from('administrasi a')
	// 	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	// 	    ->queryRow();

	// 	$data['data']['prodi'] = Yii::app()->db->createCommand()
	// 	    ->select('p.jurusan')
	// 	    ->from('prodi p')
	// 	    ->queryAll();

	// 	foreach ($dt['data'] as $key => $value) {
	// 		$data['data'][$value['jurusan']][] = $value;
	// 	}
	// 	$this->renderPartial('pages/v_gr_mhs_nonreg', $data, false, true);
	// }


	// public function actiondashboard_prestasi(){
	// 	$this->layout='//layouts/dashboard';
	// 	$data['administrasi'] = Yii::app()->db->createCommand()
	//     ->select('a.id_administrasi,a.th_akademik')
	//     ->from('administrasi a')
	//     ->order('id_administrasi desc')
	//     ->queryAll();

	// 	$this->render('pages/dashboard_prestasi',$data);
	// }

	// public function actionGrafikPrestasi(){
	// 	$id_administrasi = $_POST['id_administrasi'];
	// 	$data['data']['id_administrasi'] = $id_administrasi;
	// 	$this->renderPartial('pages/v_gr_prestasi', $data, false, true);
	// }

	// public function actiondashboard_kerjasama(){
	// 	$this->layout='//layouts/dashboard';
	// 	$data['administrasi'] = Yii::app()->db->createCommand()
	//     ->select('a.id_administrasi,a.th_akademik')
	//     ->from('administrasi a')
	//     ->order('id_administrasi desc')
	//     ->queryAll();

	// 	$this->render('pages/dashboard_kerjasama',$data);
	// }

	// public function actionGrafikKerjasama(){
	// 	$id_administrasi = $_POST['id_administrasi'];
	// 	$data['data']['id_administrasi'] = $id_administrasi;
	// 	$data['data']['prodi'] = Yii::app()->db->createCommand()
	// 	    ->select('p.jurusan')
	// 	    ->from('prodi p')
	// 	    ->queryAll();
		    
	// 	$this->renderPartial('pages/v_gr_kerjasama', $data, false, true);
	// }

	public function actionSearchAkreditasi(){
		if(isset($_POST['id_prodi'])){
			$id_prodi = $_POST['id_prodi'];
		}else{
			$id_prodi = '1';
		}
		if(isset($_POST['id_administrasi'])){
			$id_administrasi = $_POST['id_administrasi'];
		}else{
			$id_administrasi = '';
		}
		if($id_administrasi == '0'){
			$data['id_prodi']=$id_prodi;
			$data['akreditasi'] = array();
			$data['akreditasi'] = Yii::app()->db->createCommand()
		    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,p.jurusan,d.id_prodi')
		    ->from('daftar_isi d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a','d.id_administrasi=a.id_administrasi')
		    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->queryAll();
		}else{
			$data['id_prodi']=$id_prodi;
			$data['akreditasi'] = array();
			$data['akreditasi'] = Yii::app()->db->createCommand()
		    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,p.jurusan,d.id_prodi')
		    ->from('daftar_isi d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a','d.id_administrasi=a.id_administrasi')
		    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('d.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}
		

		$myHtml = $this->renderPartial('pages/v_data_akreditasi',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}


	public function actionCetakAll(){

		if(isset($_GET['id_prodi'])){
			$id_prodi = $_GET['id_prodi'];
		}else{
			$id_prodi = '';
		}
		if(isset($_GET['id_administrasi'])){
			$id_administrasi = $_GET['id_administrasi'];
		}else{
			$id_administrasi = '';
		}


		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');
		
        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<div style="padding-top:5px;border-top:1px solid black;width:100%;font-size:11px;font-weight:bold;"><div style="width:75%;text-align:left;float:left;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$dt["thn_administrasi"]["th_akreditasi"].'</div><div style="text-align:right;width:20%;float:right;">{PAGENO}</div></div>');
        	$mPDF1->WriteHTML($this->renderPartial('pages/component/v_sampul_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<div style="padding-top:5px;border-top:1px solid black;width:100%;font-size:11px;font-weight:bold;"><div style="width:75%;text-align:left;float:left;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$dt["thn_administrasi"]["th_akreditasi"].'</div><div style="text-align:right;width:20%;float:right;">{PAGENO}</div></div>');
        	$mPDF1->WriteHTML($this->renderPartial('pages/component/v_sampul_prodi', $data, true));
        }


		// DAFTAR ISI
        $mPDF1->AddPage();
		$daftarisi['daftar_isi'] = Yii::app()->db->createCommand()
		->select('d.*')
		->from('daftar_isi d')
		->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		->andWhere('d.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		->queryRow();
        $mPDF1->WriteHTML($this->renderPartial('//daftarisi/v_pdf', $daftarisi, true));
		// END DAFTAR ISI

		// IDENTITAS
        $mPDF1->AddPage();
		$dosen = array();
		$pengisi = array();
		if($id_prodi != 1){
			$dosen = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('data_dosen')
		    ->Where('id_prodi=:id', array(':id'=>$id_prodi))
		    ->queryAll();
		}

		$pengisi = Yii::app()->db->createCommand()
		->select('*')
		->from('pengisi_borang')
		->andWhere('id_prodi=:id', array(':id'=>$id_prodi))
		->andWhere('id_administrasi=:id_ad', array(':id_ad'=>$id_administrasi))
		->queryAll();

		if(!empty($id_prodi)){
			$identitas['data'] = Prodi::model()->findByPk($id_prodi);
		}
		$identitas['dosen'] = $dosen;
        if($id_prodi == 1){
        	$mPDF1->WriteHTML($this->renderPartial('//prodi/v_pdf_fakultas', $identitas, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//prodi/v_pdf_prodi', $identitas, true));
        }
        $mPDF1->AddPage();
		$identitas['pengisi'] = $pengisi;
		if($id_prodi == 1){
        	$mPDF1->WriteHTML($this->renderPartial('//prodi/v_pdf_pengisi_fakultas', $identitas, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//prodi/v_pdf_pengisi', $identitas, true));
        }
		// END IDENTITAS


		$dt_daftarIsi[1] = count($mPDF1->pages);

		// STANDAR 1 VISI MISI
		$mPDF1->AddPage();
		$visi['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,v.mekanisme,v.visi,v.misi,v.tujuan,v.sasaran,v.strategi,v.sosialisasi,p.jurusan,v.id_prodi')
	    ->from('visi_misi v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();

	    if($id_prodi == 1){
        	$mPDF1->WriteHTML($this->renderPartial('//visimisi/v_pdf_fakultas', $visi, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//visimisi/v_pdf', $visi, true));
        }
		// END STANDAR 1


		$dt_daftarIsi[2] = count($mPDF1->pages);

        // STANDAR 2
        // TATA PAMONG
        $mPDF1->AddPage();
        $pamong['data'] = array();
		$pamong['data'] = Yii::app()->db->createCommand()
	    ->select('a.th_akademik,a.id_administrasi,a.th_akreditasi,t.id_prodi,t.F_Struktur_Organisasi,t.sistem_tata_pamong,p.jurusan')
	    ->from('tata_pamong t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a','t.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->order('t.id_tata_pamong desc')
	    ->queryRow();
	    if($id_prodi == 1){
        	$mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_pamong_fakultas', $pamong, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_pamong', $pamong, true));
        }
        // KEPEMIMPINAN
        $kepemimpinan['data'] = array();
		$kepemimpinan['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,t.id_prodi,t.kepemimpinan,p.jurusan')
	    ->from('kepemimpinan t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->order('t.id_kepemimpinan desc')
	    ->queryRow();
	    if($id_prodi == 1){
        	$mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_kepemimpinan_fakultas', $kepemimpinan, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_kepemimpinan', $kepemimpinan, true));
        }
        // SISPENG
        $sispeng['data'] = array();
		$sispeng['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,t.id_prodi,t.sistem_pengelolaan,p.jurusan')
	    ->from('sistem_pengelolaan t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->order('t.id_sistem_pengelolaan desc')
	    ->queryRow();
	    if($id_prodi == 1){
        	$mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_sispeng_fakultas', $sispeng, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_sispeng', $sispeng, true));
        }
        // PEJAMIN MUTU
        $penjaminmutu['id_prodi']=$id_prodi;
		$penjaminmutu['data'] = array();
		$penjaminmutu['data'] = Yii::app()->db->createCommand()
	     ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,t.id_prodi,t.penjamin_mutu,p.jurusan')
	    ->from('penjamin_mutu t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->order('t.id_penjamin_mutu desc')
	    ->queryRow();
	    if($id_prodi == 1){
        	$mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_penjaminanmutu_fakultas', $penjaminmutu, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_penjaminanmutu', $penjaminmutu, true));
        }
        // UMPAN BALIK
        $umpanbalik['id_prodi']=$id_prodi;
		$umpanbalik['data'] = array();
		$umpanbalik['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,t.id_prodi,t.umpan_balik_dosen,t.umpan_balik_mhs,t.umpan_balik_alumni,t.tindak_lanjut_dosen,t.tindak_lanjut_mhs,
		    	t.umpan_balik_alumni,t.tindak_lanjut_alumni,t.umpan_balik_lulusan,t.tindak_lanjut_lulusan,p.jurusan')
	    ->from('umpan_balik t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->order('t.id_umpan_balik desc')
	    ->queryRow();
	    if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_umpanbalik_fakultas', $umpanbalik, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_umpanbalik', $umpanbalik, true));
        }
        // KEBERLANJUTAN
		$keberlanjutan['data'] = array();
		$keberlanjutan['data'] = Yii::app()->db->createCommand()
		   	->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,t.id_prodi,t.animo_calon_mhs,t.mutu_manajemen,t.mutu_lulusan,t.kerjasama_kemitraan,t.hibah_kompetitif,p.jurusan')
		    ->from('upaya_keberlanjutan t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
		    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('t.id_upaya_keberlanjutan desc')
		    ->queryRow();
	    if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_keberlanjutan_fakultas', $keberlanjutan, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//tatapamong/v_pdf_keberlanjutan', $keberlanjutan, true));
        }
        // END STANDAR 2


		$dt_daftarIsi[3] = count($mPDF1->pages);
        // STANDAR 3
        // MAHASISWA REGULER
        $mPDF1->AddPage('L');
        $mhsreguler['data'] = array();
		$mhsreguler['id_administrasi'] = array();
		if($id_prodi == 1 ){
			$mhsreguler['dt'] = Yii::app()->db->createCommand()
		    ->select('mr.*,p.id_prodi,p.jurusan,a.id_administrasi,a.th_akademik,a.th_akreditasi')
		    ->from('mhs_reguler mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('a.th_akademik')
		    ->queryAll();

		    $mhsreguler['dt2'] = Yii::app()->db->createCommand()
		     ->select('mr.*,p.id_prodi,p.jurusan,a.id_administrasi,a.th_akreditasi')
		    ->from('mhs_nonreguler mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('a.th_akademik')
		    ->queryAll();

			 foreach ($mhsreguler['dt'] as $key => $value) {
		    	$mhsreguler['id_administrasi'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['thn_akademik'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['daya_tampung'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['mhs_ikut_seleksi'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['mhs_lulus_seleksi'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['maba_bkn_transfer'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['maba_transfer'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['total_mhs_bkn_transfer'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['total_mhs_transfer'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['jumlah_lulus_bkn_transfer'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['jumlah_lulus_transfer'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['ipk_min_lulusan_reguler'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['ipk_rata2_lulusan_reguler'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['ipk_maks_lulusan_reguler'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['persen_ipk275'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['persen_ipk275_350'] = 0;
		    	$mhsreguler['data'][$value['thn_akademik']]['persen_ipk350'] = 0;
		    }

		    foreach ($mhsreguler['dt'] as $key => $value) {
		    	$mhsreguler['id_administrasi'] = $value['id_administrasi'];
		    	$mhsreguler['data'][$value['thn_akademik']]['thn_akademik'] = $value['thn_akademik'];
		    	$mhsreguler['data'][$value['thn_akademik']]['daya_tampung'] += $value['daya_tampung'];
				$mhsreguler['data'][$value['thn_akademik']]['mhs_ikut_seleksi'] += $value['mhs_ikut_seleksi'];
				$mhsreguler['data'][$value['thn_akademik']]['mhs_lulus_seleksi'] += $value['mhs_lulus_seleksi'];
				$mhsreguler['data'][$value['thn_akademik']]['maba_bkn_transfer'] += $value['maba_bkn_transfer'];
				$mhsreguler['data'][$value['thn_akademik']]['maba_transfer'] += $value['maba_transfer'];
				$mhsreguler['data'][$value['thn_akademik']]['total_mhs_bkn_transfer'] += $value['total_mhs_bkn_transfer'];
				$mhsreguler['data'][$value['thn_akademik']]['total_mhs_transfer'] += $value['total_mhs_transfer'];
				$mhsreguler['data'][$value['thn_akademik']]['jumlah_lulus_bkn_transfer'] += $value['jumlah_lulus_bkn_transfer'];
				$mhsreguler['data'][$value['thn_akademik']]['jumlah_lulus_transfer'] += $value['jumlah_lulus_transfer'];
				$mhsreguler['data'][$value['thn_akademik']]['ipk_min_lulusan_reguler'] += $value['ipk_min_lulusan_reguler'];
				$mhsreguler['data'][$value['thn_akademik']]['ipk_rata2_lulusan_reguler'] += $value['ipk_rata2_lulusan_reguler'];
				$mhsreguler['data'][$value['thn_akademik']]['ipk_maks_lulusan_reguler'] += $value['ipk_maks_lulusan_reguler'];
				$mhsreguler['data'][$value['thn_akademik']]['persen_ipk275'] += $value['persen_ipk275'];
				$mhsreguler['data'][$value['thn_akademik']]['persen_ipk275_350'] += $value['persen_ipk275_350'];
				$mhsreguler['data'][$value['thn_akademik']]['persen_ipk350'] += $value['persen_ipk350'];
		    }



		}else{
			
			$mhsreguler['data'] = Yii::app()->db->createCommand()
		    ->select('mr.*,p.id_prodi,p.jurusan,a.th_akreditasi')
		    ->from('mhs_reguler mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('thn_akademik')   
		    ->limit(5)
		    ->queryAll();

		}
		if($id_prodi == 1){
        	$mPDF1->WriteHTML($this->renderPartial('//mhsreguler/v_pdf_mhs_reguler_fakultas', $mhsreguler, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//mhsreguler/v_pdf_mhs_reguler', $mhsreguler, true));
        }
        // MHS NON REGULER
        $mhs_nonreguler['data'] = array();
		$mhs_nonreguler['id_administrasi'] = array();
		if($id_prodi == 1 ){
			$mhs_nonreguler['dt'] = Yii::app()->db->createCommand()
		    ->select('mr.*,p.id_prodi,p.jurusan,a.id_administrasi,a.th_akademik,a.th_akreditasi')
		    ->from('mhs_nonreguler mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('a.th_akademik')
		    ->queryAll();

			 foreach ($mhs_nonreguler['dt'] as $key => $value) {
		    	// $data['id_administrasi'] = 0;
		    	$mhs_nonreguler['data'][$value['th_akademik']]['th_akademik'] = 0;
		    	$mhs_nonreguler['data'][$value['th_akademik']]['daya_tampung'] = 0;
		    	$mhs_nonreguler['data'][$value['th_akademik']]['jml_ikut_seleksi'] = 0;
		    	$mhs_nonreguler['data'][$value['th_akademik']]['jml_lulus_seleksi'] = 0;
		    	$mhs_nonreguler['data'][$value['th_akademik']]['jml_maba_nonreg'] = 0;
		    	$mhs_nonreguler['data'][$value['th_akademik']]['jml_transfer'] = 0;
		    	$mhs_nonreguler['data'][$value['th_akademik']]['tot_mhs_nonreg'] = 0;
		    	$mhs_nonreguler['data'][$value['th_akademik']]['tot_transfer'] = 0;
		    }

		    foreach ($mhs_nonreguler['dt'] as $key => $value) {
		    	// $data['id_administrasi'] = $value['id_administrasi'];
		    	$mhs_nonreguler['data'][$value['th_akademik']]['th_akademik'] = $value['th_akademik'];
		    	$mhs_nonreguler['data'][$value['th_akademik']]['daya_tampung'] += $value['daya_tampung'];
				$mhs_nonreguler['data'][$value['th_akademik']]['jml_ikut_seleksi'] += $value['jml_ikut_seleksi'];
				$mhs_nonreguler['data'][$value['th_akademik']]['jml_lulus_seleksi'] += $value['jml_lulus_seleksi'];
				$mhs_nonreguler['data'][$value['th_akademik']]['jml_maba_nonreg'] += $value['jml_maba_nonreg'];
				$mhs_nonreguler['data'][$value['th_akademik']]['jml_transfer'] += $value['jml_transfer'];
				$mhs_nonreguler['data'][$value['th_akademik']]['tot_mhs_nonreg'] += $value['tot_mhs_nonreg'];
				$mhs_nonreguler['data'][$value['th_akademik']]['tot_transfer'] += $value['tot_transfer'];
		    }


		}else{
			
			$mhs_nonreguler['data'] = Yii::app()->db->createCommand()
		    ->select('mr.*,p.id_prodi,p.jurusan,a.id_administrasi,a.th_akademik, a.th_akreditasi')
		    ->from('mhs_nonreguler mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('a.th_akademik')   
		    ->limit(5)
		    ->queryAll();

		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//mhsnonreguler/v_pdf_mhs_nonreguler_fakultas', $mhs_nonreguler, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//mhsnonreguler/v_pdf_mhs_nonreguler', $mhs_nonreguler, true));
        }
        // PRESTASI MAHASISWA
        if($id_prodi == 1){
			$prestasi_mhs['dt'] = Yii::app()->db->createCommand()
				-> select('pres.*,a.th_akademik,a.th_akreditasi')
				->from('prestasi_mhs pres')
				->join('prodi p','pres.id_prodi=p.id_prodi')
				->join('administrasi a','pres.id_administrasi=a.id_administrasi')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->order('wkt_penyelenggaraan')
				->queryAll();
		}else{
			$prestasi_mhs['dt'] = Yii::app()->db->createCommand()
				-> select('pres.*,a.th_akademik,p.jurusan,a.th_akreditasi')
				->from('prestasi_mhs pres')
				->join('prodi p','pres.id_prodi=p.id_prodi')
				->join('administrasi a','pres.id_administrasi=a.id_administrasi')
				->andWhere('p.id_prodi=:id',array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->order('wkt_penyelenggaraan')
				->queryAll();
		}
		
		$th_akreditasi = '';
		$prestasi_mhs['data'] = array();
		foreach ($prestasi_mhs['dt'] as $key => $value) {
			$th_akreditasi = $value['th_akreditasi'];
			if($value['wkt_penyelenggaraan'] > ($value['th_akademik'] - 3)){
				$prestasi_mhs['data'][] = $value;
			}
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//prestasimhs/v_pdf_prestasi_fakultas', $prestasi_mhs, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//prestasimhs/v_pdf_prestasi', $prestasi_mhs, true));
        }
        // DATA MHS 7 TH
        if($id_prodi == 1){
			$data_mhs7th['data'] = Yii::app()->db->createCommand()
		    ->select('a.th_akreditasi,t.id_prodi,t.kegiatan_BK,t.pelaksanaan_BK,t.hasil_BK,t.kegiatan_minat,t.pelaksanaan_minat,t.hasil_minat,t.kegiatan_softskill,
		    	t.pelaksanaan_softskill,t.hasil_softskill,
		    		t.kegiatan_beasiswa,t.pelaksanaan_beasiswa,t.hasil_beasiswa,t.kegiatan_kesehatan,t.pelaksanaan_kesehatan,t.hasil_kesehatan,p.jurusan')
		    ->from('layanan t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}else{
			$data_mhs7th['data'] = Yii::app()->db->createCommand()
		    ->select('a.th_akreditasi,t.*,p.jurusan,a.id_administrasi')
		    ->from('data_mhs_7th t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}

		$th_akreditasi = '';
		$dt_mhs7th['data'] = array();
		if(!empty($data_mhs7th['data'])){
			foreach ($data_mhs7th['data'] as $key => $value) {
				$th_akreditasi = $value['th_akreditasi'];
				if($value['TS_jum'] == 'TS'){
					$dt_mhs7th['data']['ts'][] = $value;
				}else if($value['TS_jum'] == 'TS1'){
					$dt_mhs7th['data']['ts1'][] = $value;						
				}else if($value['TS_jum'] == 'TS2'){
					$dt_mhs7th['data']['ts2'][] = $value;	
				}else if($value['TS_jum'] == 'TS3'){
					$dt_mhs7th['data']['ts3'][] = $value;
				}else if($value['TS_jum'] == 'TS4'){
					$dt_mhs7th['data']['ts4'][] = $value;
				}else if($value['TS_jum'] == 'TS5'){
					$dt_mhs7th['data']['ts5'][] = $value;
				}else if($value['TS_jum'] == 'TS6'){
					$dt_mhs7th['data']['ts6'][] = $value;
				}
			}
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//datamhs7th/v_pdf_mhs7_fakultas', $data_mhs7th, true));
        }else{
        	$mPDF1->AddPage('L');
        	$mPDF1->WriteHTML($this->renderPartial('//datamhs7th/v_pdf_mhs7', $dt_mhs7th, true));
        }
        // LAYANAN
        if($id_prodi == 1){
			$layanan['data'] = Yii::app()->db->createCommand()
		    ->select('a.th_akreditasi,t.id_prodi,t.kegiatan_BK,t.pelaksanaan_BK,t.hasil_BK,t.kegiatan_minat,t.pelaksanaan_minat,t.hasil_minat,t.kegiatan_softskill,
		    	t.pelaksanaan_softskill,t.hasil_softskill,
		    		t.kegiatan_beasiswa,t.pelaksanaan_beasiswa,t.hasil_beasiswa,t.kegiatan_kesehatan,t.pelaksanaan_kesehatan,t.hasil_kesehatan,p.jurusan')
		    ->from('layanan t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}else{
			$layanan['data'] = Yii::app()->db->createCommand()
		    ->select('a.th_akreditasi,t.id_prodi,t.kegiatan_BK,t.pelaksanaan_BK,t.hasil_BK,t.kegiatan_minat,t.pelaksanaan_minat,t.hasil_minat,t.kegiatan_softskill,
		    	t.pelaksanaan_softskill,t.hasil_softskill,
		    		t.kegiatan_beasiswa,t.pelaksanaan_beasiswa,t.hasil_beasiswa,t.kegiatan_kesehatan,t.pelaksanaan_kesehatan,t.hasil_kesehatan,p.jurusan')
		    ->from('layanan t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//mhsreguler/v_pdf_layanan_fakultas', $layanan, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//mhsreguler/v_pdf_layanan', $layanan, true));
        }
        // EVALUASI
        $evaluasi_lulusan['id_prodi']=$id_prodi;
		$evaluasi_lulusan['id_administrasi']=$id_administrasi;
		$evaluasi_lulusan['data'] = array();
		if($id_prodi == 1){
			$evaluasi_lulusan['data'] = Yii::app()->db->createCommand()
		    ->select('t.*,p.jurusan,a.th_akreditasi')
		    ->from('evaluasi_lulusan t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','t.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

			$dt['pelacakan'] = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('detail_evaluasi_lulusan t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','t.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $evaluasi_lulusan['tracer'] = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('tracer_study t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','t.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();	


		}else{
			$evaluasi_lulusan['data'] = Yii::app()->db->createCommand()
		    ->select('t.*,p.jurusan,a.th_akreditasi')
		    ->from('evaluasi_lulusan t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','t.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		    $dt['pelacakan'] = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('detail_evaluasi_lulusan t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','t.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $evaluasi_lulusan['tracer'] = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('tracer_study t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','t.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		}

		$th_akreditasi = '';
		if(!empty($evaluasi_lulusan['data'])){
			foreach ($evaluasi_lulusan as $key => $value) {
				$th_akreditasi =  $value['th_akreditasi'];
			}
		}
		foreach ($dt['pelacakan'] as $key => $value) {
			if($value['jenis_kemampuan'] == 'integritas'){
				$evaluasi_lulusan['pelacakan']['integritas'][] = $value;
			}else if($value['jenis_kemampuan'] == 'keahlian'){
				$evaluasi_lulusan['pelacakan']['keahlian'][] = $value;
			}else if($value['jenis_kemampuan'] == 'bahasa'){
				$evaluasi_lulusan['pelacakan']['bahasa'][] = $value;
			}else if($value['jenis_kemampuan'] == 'TI'){
				$evaluasi_lulusan['pelacakan']['TI'][] = $value;
			}else if($value['jenis_kemampuan'] == 'komunikasi'){
				$evaluasi_lulusan['pelacakan']['komunikasi'][] = $value;
			}else if($value['jenis_kemampuan'] == 'kerjasama'){
				$evaluasi_lulusan['pelacakan']['kerjasama'][] = $value;
			}else if($value['jenis_kemampuan'] == 'pengembangan diri'){
				$evaluasi_lulusan['pelacakan']['pengembangan_diri'][] = $value;
			}
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//evaluasilulusan/v_pdf_evaluasi', $evaluasi_lulusan, true));
        }else{
        	$mPDF1->AddPage('P');
        	$mPDF1->WriteHTML($this->renderPartial('//evaluasilulusan/v_pdf_evaluasi', $evaluasi_lulusan, true));
        }
        // HIMPUNAN ALUMNI
        $himpunan_alumni['data'] = array();
		$himpunan_alumni['data'] = Yii::app()->db->createCommand()
	    ->select('t.*,p.jurusan,a.id_administrasi,a.th_akademik,a.th_akreditasi')
	    ->from('himpunan_alumni t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
		->join('administrasi a','a.id_administrasi=t.id_administrasi')
	    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
	    if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//himpunanalumni/v_pdf_himpunan_fakultas', $himpunan_alumni, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//himpunanalumni/v_pdf_himpunan', $himpunan_alumni, true));
        }
        // END STANDAR 3


		$dt_daftarIsi[4] = count($mPDF1->pages);
        // STANDAR 4
        // SELEKSI PENGEMBANGAN
        $seleksi_pengembangan['data'] = array();
		$seleksi_pengembangan['data'] = Yii::app()->db->createCommand()
	    ->select('t.id_prodi,t.rekrut_seleksi,t.penempatan,t.pengembangan,t.retensi,t.berhenti_dosen,p.jurusan, a.th_akreditasi')
	    ->from('sdm t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
	    if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//sdm/v_pdf_seleksipengembangan_fakultas', $seleksi_pengembangan, true));
        }else{
        	$mPDF1->AddPage('P');
        	$mPDF1->WriteHTML($this->renderPartial('//sdm/v_pdf_seleksipengembangan', $seleksi_pengembangan, true));
        }
        // MONITORING & EVALUASI
        $monev['data'] = array();
		$monev['data'] = Yii::app()->db->createCommand()
	    ->select('t.id_prodi,t.monitoring,t.evaluasi,t.rekam_jejak,t.ket_tambahan,p.jurusan,a.th_akreditasi')
	    ->from('sdm t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
	    if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//sdm/v_pdf_monev', $monev, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//sdm/v_pdf_monev', $monev, true));
        }

        // DOSEN TETAP
        if($id_prodi == 1){
			$dosen_tetap['data'] = Yii::app()->db->createCommand()
				->select('d.*,p.jurusan,a.th_akreditasi')
			    ->from('data_dosen d')
			    ->join('prodi p', 'd.id_prodi=p.id_prodi')
			    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			    ->andWhere('d.status_bidang=:stb', array(':stb'=>'sesuai PS'))
				->andWhere('d.status_dosen=:std', array(':std'=>'tetap'))
			    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
			    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();
		}else{
			$dosen_tetap['data'] = Yii::app()->db->createCommand()
			    ->select('d.*,p.jurusan,a.th_akreditasi')
			    ->from('data_dosen d')
			    ->join('prodi p', 'd.id_prodi=p.id_prodi')
			    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			    ->andWhere('d.status_bidang=:stb', array(':stb'=>'sesuai PS'))
				->andWhere('d.status_dosen=:std', array(':std'=>'tetap'))
			    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
			    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();
		}
		if($id_prodi == 1){
			$mPDF1->AddPage('P');
        	$mPDF1->WriteHTML($this->renderPartial('//datadosen/v_pdf_dosentetap_bidang_fakultas', $dosen_tetap, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//datadosen/v_pdf_dosentetap_bidang', $dosen_tetap, true));
        }
        // DATA DOSEN TETAP LUAR BIDANG
        if($id_prodi == 1){
			$dosen_tetap_luarbidang['data'] = Yii::app()->db->createCommand()
		     	->select('d.*,p.jurusan,a.th_akreditasi')
			    ->from('data_dosen d')
			    ->join('prodi p', 'd.id_prodi=p.id_prodi')
			    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			    ->andWhere('d.status_bidang=:stb', array(':stb'=>'tdk sesuai PS'))
				->andWhere('d.status_dosen=:std', array(':std'=>'tetap'))
			    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
			    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();
		}else{
			$dosen_tetap_luarbidang['data'] = Yii::app()->db->createCommand()
		  		->select('d.*,p.jurusan,a.th_akreditasi')
			    ->from('data_dosen d')
			    ->join('prodi p', 'd.id_prodi=p.id_prodi')
			    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			    ->andWhere('d.status_bidang=:stb', array(':stb'=>'tdk sesuai PS'))
				->andWhere('d.status_dosen=:std', array(':std'=>'tetap'))
			    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
			    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//datadosen/v_pdf_dosentetap_luarbidang_fakultas', $dosen_tetap_luarbidang, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//datadosen/v_pdf_dosentetap_luarbidang', $dosen_tetap_luarbidang, true));
        }
        // AKTIVITAS DOSEN TETAP SEMESTER
        if($id_prodi == 1){
			$aktivitas_tetap_semester['data'] = Yii::app()->db->createCommand()
				    ->select('s.*,p.jurusan,a.th_akreditasi')
				    ->from('aktivitas_dosen_tetap_semester s')
				    ->join('prodi p', 's.id_prodi=p.id_prodi')
				    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
				    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
					->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				    ->queryAll();
		}else{
			$aktivitas_tetap_semester['data'] = Yii::app()->db->createCommand()
				   ->select('s.*,p.jurusan,a.th_akreditasi')
				    ->from('aktivitas_dosen_tetap_semester s')
				    ->join('prodi p', 's.id_prodi=p.id_prodi')
				    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
				    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
					->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				    ->queryAll();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//aktivitasdosentetapsemester/v_pdf_dosentetap_semester_fakultas', $aktivitas_tetap_semester, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//aktivitasdosentetapsemester/v_pdf_dosentetap_semester', $aktivitas_tetap_semester, true));
        }
        // AKTIVITAS MENGAJAR DOSEN SETAHUN
        if($id_prodi == 1){
			$aktivitas_dosen_setahun['data'] = Yii::app()->db->createCommand()
		    ->select('t.*,p.jurusan,a.th_akreditasi')
		    ->from('aktivitas_dosen_setahun t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    ->andWhere('t.status_bidang=:stb', array(':stb'=>'sesuai PS'))
			->andWhere('t.status_dosen=:std', array(':std'=>'tetap'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $aktivitas_dosen_setahun['data2'] = Yii::app()->db->createCommand()
		    ->select('t.*,p.jurusan,a.th_akreditasi')
		    ->from('aktivitas_dosen_setahun t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    ->andWhere('t.status_bidang=:stb', array(':stb'=>'tidak sesuai PS'))
			->andWhere('t.status_dosen=:std', array(':std'=>'tetap'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}else{
			$aktivitas_dosen_setahun['data'] = Yii::app()->db->createCommand()
		    ->select('t.*,p.jurusan,a.th_akreditasi')
		    ->from('aktivitas_dosen_setahun t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    ->andWhere('t.status_bidang=:stb', array(':stb'=>'sesuai PS'))
			->andWhere('t.status_dosen=:std', array(':std'=>'tetap'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $aktivitas_dosen_setahun['data2'] = Yii::app()->db->createCommand()
		    ->select('t.*,p.jurusan,a.th_akreditasi')
		    ->from('aktivitas_dosen_setahun t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    ->andWhere('t.status_bidang=:stb', array(':stb'=>'tidak sesuai PS'))
			->andWhere('t.status_dosen=:std', array(':std'=>'tetap'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//aktivitasdosensetahun/v_pdf_dosen_setahun_fakultas', $aktivitas_dosen_setahun, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//aktivitasdosensetahun/v_pdf_dosen_setahun', $aktivitas_dosen_setahun, true));
        }
        // DATA DOSEN TIDAK TETAP
        if($id_prodi == 1){
			$dosen_tidak_tetap['data'] = Yii::app()->db->createCommand()
		     	->select('d.*,p.jurusan,a.th_akreditasi')
			    ->from('data_dosen d')
			    ->join('prodi p', 'd.id_prodi=p.id_prodi')
			    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			    ->andWhere('d.status_bidang=:stb', array(':stb'=>'sesuai PS'))
				->andWhere('d.status_dosen=:std', array(':std'=>'tidak tetap'))
			    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
			    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();
		}else{
			$dosen_tidak_tetap['data'] = Yii::app()->db->createCommand()
		  		->select('d.*,p.jurusan,a.th_akreditasi')
			    ->from('data_dosen d')
			    ->join('prodi p', 'd.id_prodi=p.id_prodi')
			    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			    ->andWhere('d.status_bidang=:stb', array(':stb'=>'sesuai PS'))
				->andWhere('d.status_dosen=:std', array(':std'=>'tidak tetap'))
			    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
			    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//datadosen/v_pdf_dosentidaktetap_fakultas', $dosen_tidak_tetap, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//datadosen/v_pdf_dosentidaktetap', $dosen_tidak_tetap, true));
        }
        // AKTIFITAS DOSEN TIDAK TETAP SETAHUN
        if($id_prodi == 1){
			$aktivitas_dosen_setahun_tidaktetap['data'] = Yii::app()->db->createCommand()
		    ->select('t.*,p.jurusan,a.th_akreditasi')
		    ->from('aktivitas_dosen_setahun t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    ->andWhere('t.status_bidang=:stb', array(':stb'=>'sesuai PS'))
			->andWhere('t.status_dosen=:std', array(':std'=>'tidak tetap'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}else{
			$aktivitas_dosen_setahun_tidaktetap['data'] = Yii::app()->db->createCommand()
		    ->select('t.*,p.jurusan,a.th_akreditasi')
		    ->from('aktivitas_dosen_setahun t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    ->andWhere('t.status_bidang=:stb', array(':stb'=>'sesuai PS'))
			->andWhere('t.status_dosen=:std', array(':std'=>'tidak tetap'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//aktivitasdosensetahun/v_pdf_dosentidaktetap_setahun_fakultas', $aktivitas_dosen_setahun_tidaktetap, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//aktivitasdosensetahun/v_pdf_dosentidaktetap_setahun', $aktivitas_dosen_setahun_tidaktetap, true));
        }
        // UPAYA PENINGKATAN SDM
        if($id_prodi == 1){
			$upaya_peningkatanSDM['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi, nama_pakar, nama_kegiatan,judul_kegiatan,waktu,p.jurusan,a.th_akreditasi')
			    ->from('kegiatan_tenaga_ahli_luarpt k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}else{
			$upaya_peningkatanSDM['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi, nama_pakar, nama_kegiatan,judul_kegiatan,waktu,p.jurusan,a.th_akreditasi')
			    ->from('kegiatan_tenaga_ahli_luarpt k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//kegiatantenagaahliluarpt/v_pdf_tenagaahli_fakultas', $upaya_peningkatanSDM, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//kegiatantenagaahliluarpt/v_pdf_tenagaahli', $upaya_peningkatanSDM, true));
        }
        // TUGAS BELAJAR DOSEN
        if($id_prodi == 1){
			$tgs_belajar['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi, nama_dosen, pendidikan_lanjut,bidang_studi,PT,negara,th_mulai_studi,p.jurusan,a.th_akreditasi')
			    ->from('tugas_blj_dosen k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}else{
			$tgs_belajar['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi, nama_dosen, pendidikan_lanjut,bidang_studi,PT,negara,th_mulai_studi,p.jurusan,a.th_akreditasi')
			    ->from('tugas_blj_dosen k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//tugasbljdosen/v_pdf_tugasbelajar_fakultas', $tgs_belajar, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//tugasbljdosen/v_pdf_tugasbelajar', $tgs_belajar, true));
        }
        // KEGIATAN DOSEN
        if($id_prodi == 1){
			$kegiatan_dosen['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi, nama_dosen,jenis_kegiatan,tempat,waktu,sebagai,p.jurusan')
			    ->from('kegiatan_dosen k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}else{
			$kegiatan_dosen['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi, nama_dosen,jenis_kegiatan,tempat,waktu,sebagai,p.jurusan')
			    ->from('kegiatan_dosen k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//kegiatandosen/v_pdf_kegiatandosen_fakultas', $kegiatan_dosen, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//kegiatandosen/v_pdf_kegiatandosen', $kegiatan_dosen, true));
        }
        // CAPAIAN DOSEN
        if($id_prodi == 1){
			$capaian_dosen['data'] = Yii::app()->db->createCommand()
					    ->select('c.id_prodi, nama_dosen,prestasi,waktu,tingkat,p.jurusan,a.th_akreditasi')
					    ->from('capaian_dosen c')
					    ->join('prodi p', 'c.id_prodi=p.id_prodi')
					    ->join('administrasi a','a.id_administrasi=c.id_administrasi')
						->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
						->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
						->queryAll();
		}else{
			$capaian_dosen['data'] = Yii::app()->db->createCommand()
				 		 ->select('c.id_prodi, nama_dosen,prestasi,waktu,tingkat,p.jurusan,a.th_akreditasi')
					    ->from('capaian_dosen c')
					    ->join('prodi p', 'c.id_prodi=p.id_prodi')
					    ->join('administrasi a','a.id_administrasi=c.id_administrasi')
						->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
						->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
						->queryAll();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//capaiandosen/v_pdf_capaiandosen_fakultas', $capaian_dosen, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//capaiandosen/v_pdf_capaiandosen', $capaian_dosen, true));
        }
        // KEIKUTSERTAAN DOSEN
        if($id_prodi == 1){
			$keikutsertaan['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi, nama_dosen,nama_organisasi,kurun_waktu,tingkat,p.jurusan')
			    ->from('keikutsertaan_dosen k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}else{
			$keikutsertaan['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi, nama_dosen,nama_organisasi,kurun_waktu,tingkat,p.jurusan')
				->from('keikutsertaan_dosen k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//keikutsertaandosen/v_pdf_organisasi_fakultas', $keikutsertaan, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//keikutsertaandosen/v_pdf_organisasi', $keikutsertaan, true));
        }
        // TENAGA KEPENDIDIKAN
        if($id_prodi == 1){
			$tenagakependidikan['data'] = Yii::app()->db->createCommand()
				->select('t.*,p.jurusan,a.th_akreditasi')
			    ->from('tenaga_kependidikan t')
			    ->join('prodi p', 't.id_prodi=p.id_prodi')
	  			->join('administrasi a','a.id_administrasi=t.id_administrasi')
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();
		}else{
			$tenagakependidikan['data'] = Yii::app()->db->createCommand()
				->select('t.*,p.jurusan,a.th_akreditasi')
			    ->from('tenaga_kependidikan t')
			    ->join('prodi p', 't.id_prodi=p.id_prodi')
	  			->join('administrasi a','a.id_administrasi=t.id_administrasi')
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();
		}
		if($id_prodi == 1){
        	$mPDF1->WriteHTML($this->renderPartial('//tenagakependidikan/v_pdf_tenagakependidikan_fakultas', $tenagakependidikan, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//tenagakependidikan/v_pdf_tenagakependidikan', $tenagakependidikan, true));
        }
        // END STANDAR 4



		$dt_daftarIsi[5] = count($mPDF1->pages);
        // STANDAR 5
        // KURIKULUM
        if($id_prodi == 1){
			$kurikulum['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		    $kurikulum['mk_kurikulum'] = Yii::app()->db->createCommand()
		    ->select('mk.*')
		    ->from('mk_kurikulum mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $kurikulum['total_sks'] = $kurikulum['sks_wajib'] = $kurikulum['sks_pilihan'] = 0;
		    foreach ($kurikulum['mk_kurikulum'] as $key => $value) {
		    	$kurikulum['total_sks'] += $value['bobot_sks'];
		    	if($value['jenis_sks'] == 'inti'){
		    		$kurikulum['sks_wajib'] += $value['bobot_sks'];
		    	}else if($value['jenis_sks'] == 'institusional'){
		    		$kurikulum['sks_pilihan'] += $value['bobot_sks'];
		    	}
		    }

		    $kurikulum['substansi'] = Yii::app()->db->createCommand()
		    ->select('s.*,mk.nama_mk')
		    ->from('substansi_praktek s')
		    ->leftjoin('mk_kurikulum mk','mk.kode_mk = s.kode_mk')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    // data kolum F_pembelajaran dan F_suasana_akademik
		    $kurikulum['suasana'] = Yii::app()->db->createCommand()
		    ->select('s.*')
		    ->from('suasana_akademik s')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();


			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}else{
			$kurikulum['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		    $kurikulum['mk_kurikulum'] = Yii::app()->db->createCommand()
		    ->select('mk.*')
		    ->from('mk_kurikulum mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $kurikulum['total_sks'] = $kurikulum['sks_wajib'] = $kurikulum['sks_pilihan'] = 0;
		    foreach ($kurikulum['mk_kurikulum'] as $key => $value) {
		    	$kurikulum['total_sks'] += $value['bobot_sks'];
		    	if($value['jenis_sks'] == 'inti'){
		    		$kurikulum['sks_wajib'] += $value['bobot_sks'];
		    	}else if($value['jenis_sks'] == 'institusional'){
		    		$kurikulum['sks_pilihan'] += $value['bobot_sks'];
		    	}
		    }
		    
		    $kurikulum['substansi'] = Yii::app()->db->createCommand()
		    ->select('s.*,mk.nama_mk')
		    ->from('substansi_praktek s')
		     ->leftjoin('mk_kurikulum mk','mk.kode_mk = s.kode_mk')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    // data kolum F_pembelajaran dan F_suasana_akademik
		    $kurikulum['suasana'] = Yii::app()->db->createCommand()
		    ->select('s.*')
		    ->from('suasana_akademik s')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		}
		if($id_prodi == 1){
        	$mPDF1->AddPage('P');
        	$mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_kurikulum_fakultas', $kurikulum, true));
        }else{
        	$mPDF1->AddPage('P');
        	$mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_kurikulum', $kurikulum, true));
        }
        // PENINJAUAN KURIKULUM
        if($id_prodi == 1){
			$peninjauan['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('peninjauan_kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $peninjauan['mekanisme'] = Yii::app()->db->createCommand()
		    ->select('mpk.*')
		    ->from('mekanisme_peninjauan_kurikulum mpk')
		    ->join('prodi p', 'mpk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mpk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}else{
			$peninjauan['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('peninjauan_kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $peninjauan['mekanisme'] = Yii::app()->db->createCommand()
		    ->select('mpk.*')
		    ->from('mekanisme_peninjauan_kurikulum mpk')
		    ->join('prodi p', 'mpk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mpk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_peninjauan_fakultas', $peninjauan, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_peninjauan', $peninjauan, true));
        }
        // PEMBELAJARAN
        if($id_prodi == 1){
			$pembelajaran['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('mekanisme_penyusunan_mk k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}else{
			$pembelajaran['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('mekanisme_penyusunan_mk k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_pembelajaran_fakultas', $pembelajaran, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_pembelajaran', $pembelajaran, true));
        }
        // PEMBIMBINGAN
        if($id_prodi == 1){
			$pembimbingan['data'] = Yii::app()->db->createCommand()
		    ->select('b.*,dd.nama_dosen,dd.gelar_akademik')
		    ->from('bimbingan_akademik b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->leftjoin('data_dosen dd', 'dd.id_dosen=b.id_dosen')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $pembimbingan['proses'] = Yii::app()->db->createCommand()
		    ->select('pb.*')
		    ->from('proses_bimbingan pb')
		    ->join('prodi p', 'pb.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=pb.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('pb.id_proses desc')
		    ->queryRow();
		}else{
			$pembimbingan['data'] = Yii::app()->db->createCommand()
		    ->select('b.*,dd.nama_dosen,dd.gelar_akademik')
		    ->from('bimbingan_akademik b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->leftjoin('data_dosen dd', 'dd.id_dosen=b.id_dosen')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $pembimbingan['proses'] = Yii::app()->db->createCommand()
		    ->select('pb.*')
		    ->from('proses_bimbingan pb')
		    ->join('prodi p', 'pb.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=pb.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('pb.id_proses desc')
		    ->queryRow();
		}
		if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_pembimbingan_fakultas', $pembimbingan, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_pembimbingan', $pembimbingan, true));
        }
        // PEMBIMBINGAN TA
        if($id_prodi == 1){
			$pembimbinganTA['data'] = Yii::app()->db->createCommand()
		    ->select('b.*,dd.nama_dosen')
		    ->from('bimbingan_ta b')
		    ->leftjoin('data_dosen dd','b.id_dosen = dd.id_dosen')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $pembimbinganTA['pelaksanaan'] = Yii::app()->db->createCommand()
		    ->select('b.*')
		    ->from('pelaksanaan_bimbingan_ta b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		}else{
			$pembimbinganTA['data'] = Yii::app()->db->createCommand()
		    ->select('b.*,dd.nama_dosen')
		    ->from('bimbingan_ta b')
		    ->leftjoin('data_dosen dd','b.id_dosen = dd.id_dosen')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $pembimbinganTA['pelaksanaan'] = Yii::app()->db->createCommand()
		    ->select('b.*')
		    ->from('pelaksanaan_bimbingan_ta b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		    if($id_prodi == 1){
        	// $mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_pembimbingan_fakultas', $pembimbinganTA, true));
	        }else{
	        	$mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_pembimbingan_TA', $pembimbinganTA, true));
	        }
		}
		// UPAYA PERBAIKAN
        if($id_prodi == 1){
			$upaya_perbaikan['data'] = Yii::app()->db->createCommand()
		    ->select('b.*')
		    ->from('perbaikan_pembelajaran b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		}else{
			$upaya_perbaikan['data'] = Yii::app()->db->createCommand()
		    ->select('b.*')
		    ->from('perbaikan_pembelajaran b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		} 
		if($id_prodi == 1){
    	// $mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_perbaikan_fakultas', $upaya_perbaikan, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_perbaikan', $upaya_perbaikan, true));
        }
        // PENINGKATAN SUASANA AKADEMIK
        if($id_prodi == 1){
		    $peningkatan_suasana['data'] = Yii::app()->db->createCommand()
		    ->select('s.*')
		    ->from('suasana_akademik s')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}else{
			$peningkatan_suasana['data'] = Yii::app()->db->createCommand()
		    ->select('s.*')
		    ->from('suasana_akademik s')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}
		if($id_prodi == 1){
    	// $mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_peningkatan_fakultas', $peningkatan_suasana, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//kurikulum/v_pdf_peningkatan', $peningkatan_suasana, true));
        }
        // END STANDAR 5 


		$dt_daftarIsi[6] = count($mPDF1->pages);
        // STANDAR 6
        // PENGELOLAAN DANA
        if($id_prodi == 1){
			$pengelolaan_dana['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,a.th_akreditasi,a.th_akademik')
		    ->from('penjelasan_pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		    
			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}else{
			$pengelolaan_dana['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,a.th_akreditasi,a.th_akademik')
		    ->from('penjelasan_pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}
        if($id_prodi == 1){
    	// $mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_pengelolaan_fakultas', $pengelolaan_dana, true));
        }else{
        	$mPDF1->AddPage('P');
        	$mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_pengelolaan', $pengelolaan_dana, true));
        }
        // PEROLEHAN DAN ALOKASI DANA
        if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan,a.th_akreditasi')
		    ->from('pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['penggunaan'] = Yii::app()->db->createCommand()
		    ->select('k.*,a.th_akreditasi')
		    ->from('penggunaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $perolehan['tridarma'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan,a.th_akreditasi')
		    ->from('f_dana_tridarma k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $perolehan['dana'] = Yii::app()->db->createCommand()
			    ->select('k.*,a.th_akreditasi')
			    ->from('dana_penelitian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();


			$perolehan['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();


		}else{ 

			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan,a.th_akreditasi')
		    ->from('pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['penggunaan'] = Yii::app()->db->createCommand()
		    ->select('k.*,a.th_akreditasi')
		    ->from('penggunaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $perolehan['tridarma'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan,a.th_akreditasi')
		    ->from('f_dana_tridarma k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		   	$perolehan['dana'] = Yii::app()->db->createCommand()
			    ->select('k.*,a.th_akreditasi')
			    ->from('dana_penelitian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();

			$perolehan['dana_pkm'] = Yii::app()->db->createCommand()
			    ->select('k.*,a.th_akreditasi')
			    ->from('dana_penelitian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'pkm'))
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();


		}

		$perolehan['data'] = array();
		foreach ($data['data'] as $key => $value) {
			if($value['sumber_dana'] == 'pt sendiri'){
				$perolehan['data']['pt_sendiri'][] = $value;
			}else if($value['sumber_dana'] == 'yayasan'){
				$perolehan['data']['yayasan'][] = $value;
			}else if($value['sumber_dana'] == 'diknas'){
				$perolehan['data']['diknas'][] = $value;
			}else if($value['sumber_dana'] == 'lain'){
				$perolehan['data']['lain'][] = $value;
			}
		}

		$perolehan['penggunaan'] = array();
		foreach ($data['penggunaan'] as $key => $value) {
			if($value['jenis_penggunaan'] == 'pendidikan'){
				$perolehan['penggunaan']['pendidikan'][] = $value;
			}else if($value['jenis_penggunaan'] == 'penelitian'){
				$perolehan['penggunaan']['penelitian'][] = $value;
			}else if($value['jenis_penggunaan'] == 'pkm'){
				$perolehan['penggunaan']['pkm'][] = $value;
			}else if($value['jenis_penggunaan'] == 'prasarana'){
				$perolehan['penggunaan']['prasarana'][] = $value;
			}else if($value['jenis_penggunaan'] == 'sarana'){
				$perolehan['penggunaan']['sarana'][] = $value;
			}else if($value['jenis_penggunaan'] == 'sdm'){
				$perolehan['penggunaan']['sdm'][] = $value;
			}else if($value['jenis_penggunaan'] == 'lainnya'){
				$perolehan['penggunaan']['lainnya'][] = $value;
			}
		}
		if($id_prodi == 1){
			$mPDF1->AddPage('P');
    		$mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_perolehan_fakultas', $perolehan, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_perolehan', $perolehan, true));
        }
        // PRASARANA
        if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $prasarana['lain'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'penunjang'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $prasarana['lain2'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'lain'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();


		    $prasarana['F_prasarana'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('F_prasarana_tambahan k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();


			$prasarana['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();

		}else{
			$data['data'] = Yii::app()->db->createCommand()
		   ->select('k.*')
		    ->from('prasarana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $prasarana['lain'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'penunjang'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $prasarana['lain2'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'lain'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}

		$prasarana['data'] = array();
		foreach ($data['data'] as $key => $value) {
			if($value['ruang_kerja'] == '1'){
				$prasarana['data']['1'][] = $value;
			}else if($value['ruang_kerja'] == '2'){
				$prasarana['data']['2'][] = $value;
			}else if($value['ruang_kerja'] == '3sd4'){
				$prasarana['data']['3sd4'][] = $value;
			}else if($value['ruang_kerja'] == 'lbh4'){
				$prasarana['data']['lbh4'][] = $value;
			}
		}
		if($id_prodi == 1){
    		
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_prasarana', $prasarana, true));
        }
        // SARANA
        if($id_prodi == 1){
			$sarana2['pustaka'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('sarana_pustaka k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();


		    $sarana2['j'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('jurnal k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $sarana2['sumber'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pustaka_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $sarana2['peralatan'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('peralatan_utama k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $sarana2['F_sarana'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('f_detail_sarana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $sarana2['F_tambahan'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('f_sarana_tambahan k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();


		}else{
			$sarana2['pustaka'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('sarana_pustaka k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $sarana2['j'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('jurnal k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $sarana2['sumber'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pustaka_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $sarana2['peralatan'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('peralatan_utama k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		}
		
		foreach ($sarana2['j'] as $key => $value) {
			if($value['jenis'] == 'dikti'){
				$sarana2['jurnal']['dikti'][] = $value;
			}else if($value['jenis'] == 'internasional'){
				$sarana2['jurnal']['internasional'][] = $value;
			}
		}
		if($id_prodi == 1){
    		$mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_sarana_fakultas', $sarana2, true));
    		$mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_prasarana_fakultas', $prasarana, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_sarana', $sarana2, true));
        }
        // SISTEM INFORMASI
        if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pengelolaan_data k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('k.id_kelola_data desc')
		    ->queryAll();

		    $sistem['sistem'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('sistem_informasi k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pengelolaan_data k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('k.id_kelola_data desc')
		    ->queryAll();

		     $sistem['sistem'] = Yii::app()->db->createCommand()
		    ->select('s.*')
		    ->from('sistem_informasi s')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}

		foreach ($data['data'] as $key => $value) {
			if($value['jenis_data'] == 'mhs'){
				$sistem['mhs'] = $value;
			}else if($value['jenis_data'] == 'krs'){
				$sistem['krs'] = $value;
			}else if($value['jenis_data'] == 'jadwal mk'){
				$sistem['jadwal_mk'] = $value;
			}else if($value['jenis_data'] == 'nilai mk'){
				$sistem['nilai_mk'] = $value;
			}else if($value['jenis_data'] == 'transkrip akademik'){
				$sistem['transkrip_akademik'] = $value;
			}else if($value['jenis_data'] == 'lulusan'){
				$sistem['lulusan'] = $value;
			}else if($value['jenis_data'] == 'dosen'){
				$sistem['dosen'] = $value;
			}else if($value['jenis_data'] == 'pegawai'){
				$sistem['pegawai'] = $value;
			}else if($value['jenis_data'] == 'keuangan'){
				$sistem['keuangan'] = $value;
			}else if($value['jenis_data'] == 'inventaris'){
				$sistem['inventaris'] = $value;
			}else if($value['jenis_data'] == 'perpustakaan'){
				$sistem['perpustakaan'] = $value;
			}
		}
		if($id_prodi == 1){
    		$mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_sistem_fakultas', $sistem, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_sistem', $sistem, true));
        }
        // END STANDAR 6
        

		$dt_daftarIsi[7] = count($mPDF1->pages);
        // STANDAR 7
        // PENELITIAN DOSEN TETAP
        if($id_prodi == 1){
			$penelitian_dosen['id_administrasi']=$id_administrasi;
			$penelitian_dosen['id_prodi']=$id_prodi;
			$data['pkm_penelitian'] = Yii::app()->db->createCommand()
				->select('k.*')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_jum_kegiatan desc')
				->queryAll();

			$penelitian_dosen['penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
			// 7.1 penelitian borang 3B
			$penelitian_dosen['dana_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('f_dana_masyarakat k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				//->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
				
			// 7.1.2 borang 3B
			$penelitian_dosen['penggunaan'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penggunaan_dana k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.jenis_penggunaan=:jp', array(':jp'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

			$penelitian_dosen['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();

		}else{
			$penelitian_dosen['id_administrasi']=$id_administrasi;
			$penelitian_dosen['id_prodi']=$id_prodi;
			$data['pkm_penelitian'] = Yii::app()->db->createCommand()
				->select('k.*')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_jum_kegiatan desc')
				->queryAll();
			
			$penelitian_dosen['penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

			// 7.1 penelitian borang 3B
			$penelitian_dosen['dana_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('f_dana_masyarakat k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				//->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

			$penelitian_dosen['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}

		$penelitian_dosen['data'] = array();
		$mhs_penelitian = 0;
		$mhs_ta = 0;
		foreach ($data['pkm_penelitian'] as $key => $value) {
			if($value['sumber_pembiayaan'] == 'sendiri'){
				if(empty($penelitian_dosen['data']['sendiri'])){
					$penelitian_dosen['data']['sendiri'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'pt'){
				if(empty($penelitian_dosen['data']['pt'])){
					$penelitian_dosen['data']['pt'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'depdiknas'){
				if(empty($penelitian_dosen['data']['depdiknas'])){
					$penelitian_dosen['data']['depdiknas'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'dlm negeri'){
				if(empty($penelitian_dosen['data']['dlm negeri'])){
					$penelitian_dosen['data']['dlm negeri'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'luar negeri'){
				if(empty($penelitian_dosen['data']['luar negeri'])){
					$penelitian_dosen['data']['luar negeri'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}

		}

		$penelitian_dosen['mhs_ta'] 			= $mhs_ta;
		$penelitian_dosen['mhs_penelitian']	= $mhs_penelitian;
		if($id_prodi == 1){
    	// $mPDF1->WriteHTML($this->renderPartial('//penelitiandosentetapps/v_pdf_penelitiandosen_fakultas', $penelitian_dosen, true));
        }else{
        	$mPDF1->AddPage('P');
        	$mPDF1->WriteHTML($this->renderPartial('//penelitiandosentetapps/v_pdf_penelitiandosen', $penelitian_dosen, true));
        }
        // JUDUL PENELITIAN
        if($id_prodi == 1){
			$judul_penelitian['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi,judul, nama_dosen,publikasi,th_publikasi,tingkat,status_haki,p.jurusan')
	   			->from('hasil_karya k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}else{
			$judul_penelitian['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi,judul, nama_dosen,publikasi,th_publikasi,tingkat,status_haki,p.jurusan')
	   			->from('hasil_karya k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}
		if($id_prodi == 1){
    	// $mPDF1->WriteHTML($this->renderPartial('//hasilkarya/v_pdf_judul_fakultas', $judul_penelitian, true));
        }else{
        	$mPDF1->AddPage('L');
        	$mPDF1->WriteHTML($this->renderPartial('//hasilkarya/v_pdf_judul', $judul_penelitian, true));
        }
        // HASIL KARYA DOSEN
        if($id_prodi == 1){
			$hasil_karya_dosen['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi,judul, nama_dosen,publikasi,th_publikasi,tingkat,status_haki,p.jurusan')
	   			->from('hasil_karya k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status_haki=:st', array(':st'=>'sudah'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

		}else{
			$hasil_karya_dosen['id_prodi']=$id_prodi;
			$hasil_karya_dosen['id_administrasi']=$id_administrasi;
			$hasil_karya_dosen['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi,judul, nama_dosen,publikasi,th_publikasi,tingkat,status_haki,p.jurusan')
	   			->from('hasil_karya k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->andWhere('k.status_haki=:st', array(':st'=>'sudah'))
				->queryAll();
		}
		if($id_prodi == 1){
    	// $mPDF1->WriteHTML($this->renderPartial('//hasilkarya/v_pdf_karya_fakultas', $hasil_karya_dosen, true));
        }else{
        	$mPDF1->AddPage('P');
        	$mPDF1->WriteHTML($this->renderPartial('//hasilkarya/v_pdf_karya', $hasil_karya_dosen, true));
        }
        // PKM
        if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt_pkm['pkm'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

		    $data['pkm'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.nama_prodi')
		    ->from('F_dana_masyarakat k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();


		    $data['pkm_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
				
			// 7.2.2  borang 3B
			$dt_pkm['pkm_dana_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('f_dana_masyarakat k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

			// 7.2.2 pandangan PKM borang 3B
			 $dt_pkm['penggunaan'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penggunaan_dana k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.jenis_penggunaan=:jp', array(':jp'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();


			$dt_pkm['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();

		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt_pkm['pkm'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		    
		    $data['pkm_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}

		$dt_pkm['data'] = array();
		foreach ($data['pkm_penelitian'] as $key => $value) {
			if($value['sumber_pembiayaan'] == 'sendiri'){
				if(empty($dt_pkm['data']['sendiri'])){
					$dt_pkm['data']['sendiri'][] = $value;
				}	
			}else if($value['sumber_pembiayaan'] == 'pt'){
				if(empty($dt_pkm['data']['pt'])){
					$dt_pkm['data']['pt'][] = $value;
				}
			}else if($value['sumber_pembiayaan'] == 'depdiknas'){
				if(empty($dt['data']['depdiknas'])){
					$dt_pkm['data']['depdiknas'][] = $value;
				}
			}else if($value['sumber_pembiayaan'] == 'dlm negeri'){
				if(empty($dt_pkm['data']['dlm negeri'])){
					$dt_pkm['data']['dlm negeri'][] = $value;
				}
			}else if($value['sumber_pembiayaan'] == 'luar negeri'){
				if(empty($dt_pkm['data']['luar negeri'])){
					$dt_pkm['data']['luar negeri'][] = $value;
				}
			}
		}
		if($id_prodi == 1){
    	// $mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_pkm_fakultas', $dt_pkm, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//pengelolaandana/v_pdf_pkm', $dt_pkm, true));
        }
        // KERJASAMA DALAM
        if($id_prodi == 1){
			$kerjasama_dalam['data'] = Yii::app()->db->createCommand()
				->select('p.id_prodi,k.id_prodi, nama_instansi,jenis_kegiatan,th_mulai,th_akhir,manfaat,jenis_kerjasama,p.jurusan')
			    ->from('kerjasama k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

		}else{
			$kerjasama_dalam['data'] = Yii::app()->db->createCommand()
				->select('p.id_prodi,k.id_prodi, nama_instansi,jenis_kegiatan,th_mulai,th_akhir,manfaat,jenis_kerjasama,p.jurusan')
			    ->from('kerjasama k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}
		if($id_prodi == 1){
    	// $mPDF1->WriteHTML($this->renderPartial('//kerjasama/v_pdf_kerjasama_dalam_fakultas', $kerjasama_dalam, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//kerjasama/v_pdf_kerjasama_dalam', $kerjasama_dalam, true));
        }
        // KERJASAMA LUAR
        $kerjasama_luar['data'] = Yii::app()->db->createCommand()
			->select('k.id_prodi, nama_instansi,jenis_kegiatan,th_mulai,th_akhir,manfaat,jenis_kerjasama,p.jurusan')
		    ->from('kerjasama k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'luar negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();
		if($id_prodi == 1){
    	// $mPDF1->WriteHTML($this->renderPartial('//kerjasama/v_pdf_kerjasama_luar_fakultas', $kerjasama_luar, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//kerjasama/v_pdf_kerjasama_luar', $kerjasama_luar, true));
        }
        // END STANDAR 7


		$dt_daftarIsi[8] = count($mPDF1->pages);
        // LAMPIRAN
        $dt_lampiran['data'] = Yii::app()->db->createCommand()
		    ->select('a.id_administrasi,a.th_akademik,l.*')
		    ->from('lampiran l')
		    ->join('prodi p', 'l.id_prodi=p.id_prodi')
		    ->join('administrasi a','l.id_administrasi=a.id_administrasi')
		    ->andWhere('l.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('l.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

	    $dt_lampiran['thn_administrasi'] = Yii::app()->db->createCommand()
			->select('a.*')
			->from('administrasi a')
			->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
			->queryRow();
	    
	    foreach ($dt_lampiran['data'] as $key => $value) {
	    	$data_lampiran['data'][$value['point']] = $value;
	    }
        if($id_prodi == 1){
    	// $mPDF1->WriteHTML($this->renderPartial('//lampiran/v_pdf_fakultas', $data_lampiran, true));
        }else{
        	$mPDF1->AddPage('P');
        	$mPDF1->WriteHTML($this->renderPartial('//lampiran/v_pdf', $data_lampiran, true));
        }
        // END LAMPIRAN

        $dt_daftarIsiFix= '';
        foreach ($dt_daftarIsi as $key => $value) {
        	$dt_daftarIsiFix .= $key.":".$value.";";
        }
        $daftarIsi = Yii::app()->db->createCommand()
	    ->select('d.daftar_isi')
	    ->from('daftar_isi d')
	    ->andWhere('d.id_prodi=:id', array(':id'=>Yii::app()->user->group_id))
	    ->andWhere('d.id_administrasi=:id_a', array(':id_a'=>$_GET['id_administrasi']))
	    ->queryAll();
	    if( count($daftarIsi) >= 1 )
	    {	
	    	$mdl = DaftarIsi::model()->find(array(
			    'condition' => 'id_prodi =:id_p AND id_administrasi =:id_a',
			    'params' => array(':id_p' => $_GET['id_prodi'], ':id_a' => $_GET['id_administrasi']),
			));
	    	$mdl->daftar_isi = $dt_daftarIsiFix;
			$mdl->save();
	    }
        $mPDF1->Output();
	}





}
