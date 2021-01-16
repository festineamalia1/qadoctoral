<?php

class PenelitianDosentetapPsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

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
				'actions'=>array('admin','delete','update','create','index','view','getdata','sentdata','cetakPDFpenelitiandosen','getdata_mahasiswa','sentdata_mahasiswa','cetakPDFmahasiswa','getdata_pkm','getdata_kerjasama_dalam'),
				'expression'=> (isset(Yii::app()->user->group_id))?'Yii::app()->user->group_id != 0':'',
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
		$this->layout='//layouts/column2';
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),'manajemen'=>'manajemen',
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->layout='//layouts/column2';
		
		$model=new PenelitianDosentetapPs;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PenelitianDosentetapPs']))
		{
			$model->attributes=$_POST['PenelitianDosentetapPs'];
			// tambahan
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				// $nama = $model->lampiran->getName();
				// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/PenelitianDosentetap/'.$nama);
				$this->redirect(array('view','id'=>$model->id_jum_kegiatan));
			}
			// end tambahan
		}

		$this->render('create',array(
			'model'=>$model,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$this->layout='//layouts/column2';
		
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PenelitianDosentetapPs']))
		{
			$model->attributes=$_POST['PenelitianDosentetapPs'];
			// tambahan
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				// $nama = $model->lampiran->getName();
				// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/PenelitianDosentetap/'.$nama);
				$this->redirect(array('view','id'=>$model->id_jum_kegiatan));
			}
			// end tambahan
		}

		$this->render('update',array(
			'model'=>$model,'manajemen'=>'manajemen',
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
		
		$this->layout='//layouts/column2';
		// tambahan
		$criteria=new CDbCriteria;
		$criteria->with = array( 'relasi_administrasi' );
		if(Yii::app()->user->group_id != 1){
			$criteria->with = array( 'relasi_prodi' );
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}
		$dataProvider=new CActiveDataProvider('PenelitianDosentetapPs', 
			array(
				'criteria'=>$criteria,
				'pagination'=>array(
			        'pageSize'=>10,
			    ),
			)
		);
		// end tambahan
		// $dataProvider=new CActiveDataProvider('PenelitianDosentetapPs');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout='//layouts/column2';
		
		$model=new PenelitianDosentetapPs('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PenelitianDosentetapPs']))
			$model->attributes=$_GET['PenelitianDosentetapPs'];

		$this->render('admin',array(
			'model'=>$model,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PenelitianDosentetapPs the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PenelitianDosentetapPs::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PenelitianDosentetapPs $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='penelitian-dosentetap-ps-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	// penelitian dosen
	public function actionGetData(){
		$data['prodi'] = Yii::app()->db->createCommand()
	    ->select('p.id_prodi,p.jurusan')
	    ->from('prodi p')
	    ->queryAll();

	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();if(!empty(Yii::app()->user->group_id)){
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
		    ->andWhere('p.id_prodi=:id', array(':id'=>Yii::app()->user->group_id))
		    ->queryAll();
		}
		
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('v_getdata_penelitiandosen',$data);
	}

	public function actionSentData(){
		if(isset($_POST['id_prodi'])){
			$id_prodi = $_POST['id_prodi'];
		}else{
			$id_prodi = '';
		}
		if(isset($_POST['id_administrasi'])){
			$id_administrasi = $_POST['id_administrasi'];
		}else{
			$id_administrasi = '';
		}

		$dt['tahun'] = Yii::app()->db->createCommand()
	    ->select('a.th_akademik')
	    ->from('administrasi a')
	    ->where('a.id_administrasi=:id',array(':id'=>$id_administrasi))
	    ->queryRow();


		if($id_prodi == 1){

				$dt['id_administrasi']=$id_administrasi;
				$dt['id_prodi']=$id_prodi;

				$data['data'] = array();
				$data['pkm_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.id_jum_kegiatan,k.id_prodi,k.id_administrasi, k.sumber_pembiayaan,k.detail_sumber_biaya,
			    	k.waktu_TS2, k.waktu_TS1, k.waktu_TS, k.detail_waktu, k.status,
			    	k.detail_status,k.mhs_terlibat,k.jum_mhs_ambil_ta,k.jum_mhs_penelitian,
			    	k.wujud_mhs_pkm, k.sumber_data, k.id_sumber_data,k.lampiran, p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_jum_kegiatan desc')
				->queryAll();

				$dt['penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

				// 7.1 penelitian borang 3B
				$dt['dana_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('f_dana_masyarakat k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				//->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

				// 7.1.2 borang 3B
				$dt['penggunaan'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penggunaan_dana k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.jenis_penggunaan=:jp', array(':jp'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

		} else {
				$dt['id_administrasi']=$id_administrasi;
				$dt['id_prodi']=$id_prodi;
				$data['data'] = array();
				$data['pkm_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_jum_kegiatan desc')
				->queryAll();

				$dt['penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}

		$dt['data'] = array();
		$mhs_penelitian = 0;
		$mhs_ta = 0;
		foreach ($data['pkm_penelitian'] as $key => $value) {
			if($value['sumber_pembiayaan'] == 'sendiri'){
				if(empty($dt['data']['sendiri'])){
					$dt['data']['sendiri'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'pt'){
				if(empty($dt['data']['pt'])){
					$dt['data']['pt'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'depdiknas'){
				if(empty($dt['data']['depdiknas'])){
					$dt['data']['depdiknas'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'dlm negeri'){
				if(empty($dt['data']['dlm negeri'])){
					$dt['data']['dlm negeri'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'luar negeri'){
				if(empty($dt['data']['luar negeri'])){
					$dt['data']['luar negeri'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}

		}

		$dt['mhs_ta'] 			= $mhs_ta;
		$dt['mhs_penelitian']	= $mhs_penelitian;

		$myHtml = $this->renderPartial('v_penelitiandosen',$dt,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFpenelitiandosen(){
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

		$dt['tahun'] = Yii::app()->db->createCommand()
	    ->select('a.th_akademik')
	    ->from('administrasi a')
	    ->where('a.id_administrasi=:id',array(':id'=>$id_administrasi))
	    ->queryRow();

		if($id_prodi == 1){
			$dt['id_administrasi']=$id_administrasi;
			$dt['id_prodi']=$id_prodi;
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

			$dt['penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
			// 7.1 penelitian borang 3B
			$dt['dana_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('f_dana_masyarakat k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				//->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
				
			// 7.1.2 borang 3B
			$dt['penggunaan'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penggunaan_dana k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.jenis_penggunaan=:jp', array(':jp'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();

		}else{
			$dt['id_administrasi']=$id_administrasi;
			$dt['id_prodi']=$id_prodi;
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
			
			$dt['penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

			// 7.1 penelitian borang 3B
			$dt['dana_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('f_dana_masyarakat k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				//->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}

		$dt['data'] = array();
		$mhs_penelitian = 0;
		$mhs_ta = 0;
		foreach ($data['pkm_penelitian'] as $key => $value) {
			if($value['sumber_pembiayaan'] == 'sendiri'){
				if(empty($dt['data']['sendiri'])){
					$dt['data']['sendiri'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'pt'){
				if(empty($dt['data']['pt'])){
					$dt['data']['pt'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'depdiknas'){
				if(empty($dt['data']['depdiknas'])){
					$dt['data']['depdiknas'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'dlm negeri'){
				if(empty($dt['data']['dlm negeri'])){
					$dt['data']['dlm negeri'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}else if($value['sumber_pembiayaan'] == 'luar negeri'){
				if(empty($dt['data']['luar negeri'])){
					$dt['data']['luar negeri'][] = $value;
					$mhs_penelitian += $value['jum_mhs_penelitian'];
					$mhs_ta += $value['jum_mhs_ambil_ta'];
				}
			}

		}

		$dt['mhs_ta'] 			= $mhs_ta;
		$dt['mhs_penelitian']	= $mhs_penelitian;

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_penelitiandosen_fakultas', $dt, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_penelitiandosen', $dt, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 		// print_r($dt['thn_administrasi']);
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end penelitian dosen

	// mahasiswa
	public function actionGetData_mahasiswa(){
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
		    ->andWhere('p.id_prodi=:id', array(':id'=>Yii::app()->user->group_id))
		    ->queryAll();
		}
		
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('v_getdata_mahasiswa',$data);
	}

	public function actionSentData_mahasiswa(){
		if(isset($_POST['id_prodi'])){
			$id_prodi = $_POST['id_prodi'];
		}else{
			$id_prodi = '';
		}
		if(isset($_POST['id_administrasi'])){
			$id_administrasi = $_POST['id_administrasi'];
		}else{
			$id_administrasi = '';
		}

		$data['id_administrasi']=$id_administrasi;
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('k.id_prodi,sumber_pembiayaan,waktu_TS,waktu_TS1,waktu_TS2,status,mhs_terlibat,jum_mhs_penelitian,wujud_mhs_pkm,p.jurusan')
	    ->from('penelitian_dosentetap_ps k')
	    ->join('prodi p', 'k.id_prodi=p.id_prodi')
	    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		->queryAll();

	    // ->join('tbl_profile p', 'u.id=p.user_id')
	    // ->where('id=:id', array(':id'=>$id))
		// var_dump($data['data']);
		$myHtml = $this->renderPartial('v_mahasiswa',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFmahasiswa(){
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

		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
				 	->select('k.id_prodi,sumber_pembiayaan,waktu,status,mhs_terlibat,jum_mhs_penelitian,wujud_mhs_pkm,p.jurusan')
				    ->from('penelitian_dosentetap_ps k')
				    ->join('prodi p', 'k.id_prodi=p.id_prodi')
				    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
					    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
					->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
					->queryAll();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
					->select('k.id_prodi,sumber_pembiayaan,waktu,status,mhs_terlibat,jum_mhs_penelitian,wujud_mhs_pkm,p.jurusan')
				    ->from('penelitian_dosentetap_ps k')
				    ->join('prodi p', 'k.id_prodi=p.id_prodi')
				    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
					    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
					->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
					->queryAll();
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4-L');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_mahasiswa', $data, true));
        }else{
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_mahasiswa_fakultas', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	//end mahasiswa


	// getdata PKM
	public function actionGetData_pkm(){
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
		    ->andWhere('p.id_prodi=:id', array(':id'=>Yii::app()->user->group_id))
		    ->queryAll();
		}
		
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('v_getdata_pkm',$data);
	}
	// end getdata pkm


	// getdata kerjasama dalam
	public function actionGetData_kerjasama_dalam(){
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
		    ->andWhere('p.id_prodi=:id', array(':id'=>Yii::app()->user->group_id))
		    ->queryAll();
		}
		
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('v_getdata_kerjasama_dalam',$data);
	}
	// end kerja sama dalam
}
