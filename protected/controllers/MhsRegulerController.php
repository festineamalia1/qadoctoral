<?php

class MhsRegulerController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
				'actions'=>array('admin','delete','update','create','index','view','admin','getdata','sentdata','getdata_layanan','sentdata2',
				'CetakPDFMhsReguler','GetData_evaluasi','CetakPDFLayanan','sentdatamhs7','CetakPDFMhs7','GetData_himpunan','manajemen'),
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
	 */
	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),'manajemen'=>'manajemen',
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new MhsReguler;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MhsReguler']))
		{
			$model->attributes=$_POST['MhsReguler'];
			// tambahan
			$model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				if($model->lampiran){
					$nama = $model->lampiran->getName();
					$model->lampiran->saveAs(Yii::app()->basePath.'/../file/MhsReguler/'.$nama);
				}
				$this->redirect(array('view','id'=>$model->id_mhs_reguler));
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
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MhsReguler']))
		{
			$model->attributes=$_POST['MhsReguler'];
			// tambahan
			$model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				if($model->lampiran){
					$nama = $model->lampiran->getName();
					$model->lampiran->saveAs(Yii::app()->basePath.'/../file/MhsReguler/'.$nama);
				}
				$this->redirect(array('view','id'=>$model->id_mhs_reguler));
			}
			// end tambahan
		}

		$this->render('update',array(
			'model'=>$model,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 */
	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{	
		// tambahan
		$criteria=new CDbCriteria;
		$criteria->with = array( 'relasi_administrasi' );
		if(Yii::app()->user->group_id != 1){
			$criteria->with = array( 'relasi_prodi' );
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}
		$dataProvider=new CActiveDataProvider('MhsReguler', 
			array(
				'criteria'=>$criteria,
				'pagination'=>array(
			        'pageSize'=>10,
			    ),
			)
		);
		// end tambahan
		$this->render('index',array(
			'dataProvider'=>$dataProvider,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new MhsReguler('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MhsReguler']))
			$model->attributes=$_GET['MhsReguler'];
			$this->render('admin',array(
				'model'=>$model,'manajemen'=>'manajemen',
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=MhsReguler::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='mhs-reguler-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}



	// controller for mhs_reguler 
	public function actionGetData(){
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

		$this->render('v_getdata',$data);
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

		$data['data'] = array();
		$data['id_administrasi'] = '';
		$data['id_prodi'] = '';
		if($id_prodi == 1 ){
			// $data['data'] = Yii::app()->db->createCommand()
		 //    ->select('mr.*,p.id_prodi,p.jurusan,a.id_administrasi')
		 //    ->from('mhs_reguler mr')
		 //    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		 //    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		 //    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		 //    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		 //    ->order('a.th_akademik desc')
		 //    // ->limit(5)
		 //    ->queryAll();

		    // echo "<pre>";
		    //  echo var_dump($data['data']);
		    // echo "</pre>";

		    // $year = date('Y') - 5;
			// foreach ($data['dt'] as $key => $value) {
			//  	// if($value['thn_akademik'] >= $year){
			//     	$data['id_administrasi'] = 0;
			//     	$data['data'][$value['thn_akademik']]['thn_akademik'] = 0;
			//     	$data['data'][$value['thn_akademik']]['daya_tampung'] = 0;
			//     	$data['data'][$value['thn_akademik']]['mhs_ikut_seleksi'] = 0;
			//     	$data['data'][$value['thn_akademik']]['mhs_lulus_seleksi'] = 0;
			//     	$data['data'][$value['thn_akademik']]['maba_bkn_transfer'] = 0;
			//     	$data['data'][$value['thn_akademik']]['maba_transfer'] = 0;
			//     	$data['data'][$value['thn_akademik']]['total_mhs_bkn_transfer'] = 0;
			//     	$data['data'][$value['thn_akademik']]['total_mhs_transfer'] = 0;
			//     	$data['data'][$value['thn_akademik']]['jumlah_lulus_bkn_transfer'] = 0;
			//     	$data['data'][$value['thn_akademik']]['jumlah_lulus_transfer'] = 0;
			//     	$data['data'][$value['thn_akademik']]['ipk_min_lulusan_reguler'] = 0;
			//     	$data['data'][$value['thn_akademik']]['ipk_rata2_lulusan_reguler'] = 0;
			//     	$data['data'][$value['thn_akademik']]['ipk_maks_lulusan_reguler'] = 0;
			//     	$data['data'][$value['thn_akademik']]['persen_ipk275'] = 0;
			//     	$data['data'][$value['thn_akademik']]['persen_ipk275_350'] = 0;
			//     	$data['data'][$value['thn_akademik']]['persen_ipk350'] = 0;
		 //    	// }
		 //    }

		    

		  //   foreach ($data['dt'] as $key => $value) {
		  //   	// if($value['thn_akademik'] >= $year){
			 //    	$data['id_administrasi'] = $value['id_administrasi'];
			 //    	$data['data'][$value['thn_akademik']]['thn_akademik'] = $value['thn_akademik'];
			 //    	$data['data'][$value['thn_akademik']]['daya_tampung'] += $value['daya_tampung'];
				// 	$data['data'][$value['thn_akademik']]['mhs_ikut_seleksi'] += $value['mhs_ikut_seleksi'];
				// 	$data['data'][$value['thn_akademik']]['mhs_lulus_seleksi'] += $value['mhs_lulus_seleksi'];
				// 	$data['data'][$value['thn_akademik']]['maba_bkn_transfer'] += $value['maba_bkn_transfer'];
				// 	$data['data'][$value['thn_akademik']]['maba_transfer'] += $value['maba_transfer'];
				// 	$data['data'][$value['thn_akademik']]['total_mhs_bkn_transfer'] += $value['total_mhs_bkn_transfer'];
				// 	$data['data'][$value['thn_akademik']]['total_mhs_transfer'] += $value['total_mhs_transfer'];
				// 	$data['data'][$value['thn_akademik']]['jumlah_lulus_bkn_transfer'] += $value['jumlah_lulus_bkn_transfer'];
				// 	$data['data'][$value['thn_akademik']]['jumlah_lulus_transfer'] += $value['jumlah_lulus_transfer'];
				// 	$data['data'][$value['thn_akademik']]['ipk_min_lulusan_reguler'] += $value['ipk_min_lulusan_reguler'];
				// 	$data['data'][$value['thn_akademik']]['ipk_rata2_lulusan_reguler'] += $value['ipk_rata2_lulusan_reguler'];
				// 	$data['data'][$value['thn_akademik']]['ipk_maks_lulusan_reguler'] += $value['ipk_maks_lulusan_reguler'];
				// 	$data['data'][$value['thn_akademik']]['persen_ipk275'] += $value['persen_ipk275'];
				// 	$data['data'][$value['thn_akademik']]['persen_ipk275_350'] += $value['persen_ipk275_350'];
				// 	$data['data'][$value['thn_akademik']]['persen_ipk350'] += $value['persen_ipk350'];
				// // }
		  //   }

		    // echo "<pre>";
		    //  echo var_dump($data['data']);
		    // echo "</pre>";


		}else{
			
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('mr.*,p.id_prodi,p.jurusan')
		    ->from('mhs_reguler mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('th_akademik desc')  
		    ->queryAll();

		}
	

		$data['id_administrasi'] = $id_administrasi;
	    $data['id_prodi'] = $id_prodi;
	
	    $myHtml = $this->renderPartial('v_data',$data,true); 
		echo $myHtml;		
		Yii::app()->end(); 
		return;	
	}	


	public function actionCetakPDFMhsReguler(){
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

		$data['data'] = array();
		$data['id_administrasi'] = array();
		if($id_prodi == 1 ){
			$data['dt'] = Yii::app()->db->createCommand()
		    ->select('mr.*,p.id_prodi,p.jurusan,a.id_administrasi,a.th_akademik,a.th_akreditasi')
		    ->from('mhs_reguler mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('a.th_akademik')
		    ->queryAll();

		    $data['dt2'] = Yii::app()->db->createCommand()
		     ->select('mr.*,p.id_prodi,p.jurusan,a.id_administrasi,a.th_akreditasi')
		    ->from('mhs_nonreguler mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('a.th_akademik')
		    ->queryAll();

			 foreach ($data['dt'] as $key => $value) {
		    	$data['id_administrasi'] = 0;
		    	$data['data'][$value['thn_akademik']]['thn_akademik'] = 0;
		    	$data['data'][$value['thn_akademik']]['daya_tampung'] = 0;
		    	$data['data'][$value['thn_akademik']]['mhs_ikut_seleksi'] = 0;
		    	$data['data'][$value['thn_akademik']]['mhs_lulus_seleksi'] = 0;
		    	$data['data'][$value['thn_akademik']]['maba_bkn_transfer'] = 0;
		    	$data['data'][$value['thn_akademik']]['maba_transfer'] = 0;
		    	$data['data'][$value['thn_akademik']]['total_mhs_bkn_transfer'] = 0;
		    	$data['data'][$value['thn_akademik']]['total_mhs_transfer'] = 0;
		    	$data['data'][$value['thn_akademik']]['jumlah_lulus_bkn_transfer'] = 0;
		    	$data['data'][$value['thn_akademik']]['jumlah_lulus_transfer'] = 0;
		    	$data['data'][$value['thn_akademik']]['ipk_min_lulusan_reguler'] = 0;
		    	$data['data'][$value['thn_akademik']]['ipk_rata2_lulusan_reguler'] = 0;
		    	$data['data'][$value['thn_akademik']]['ipk_maks_lulusan_reguler'] = 0;
		    	$data['data'][$value['thn_akademik']]['persen_ipk275'] = 0;
		    	$data['data'][$value['thn_akademik']]['persen_ipk275_350'] = 0;
		    	$data['data'][$value['thn_akademik']]['persen_ipk350'] = 0;
		    }

		    foreach ($data['dt'] as $key => $value) {
		    	$data['id_administrasi'] = $value['id_administrasi'];
		    	$data['data'][$value['thn_akademik']]['thn_akademik'] = $value['thn_akademik'];
		    	$data['data'][$value['thn_akademik']]['daya_tampung'] += $value['daya_tampung'];
				$data['data'][$value['thn_akademik']]['mhs_ikut_seleksi'] += $value['mhs_ikut_seleksi'];
				$data['data'][$value['thn_akademik']]['mhs_lulus_seleksi'] += $value['mhs_lulus_seleksi'];
				$data['data'][$value['thn_akademik']]['maba_bkn_transfer'] += $value['maba_bkn_transfer'];
				$data['data'][$value['thn_akademik']]['maba_transfer'] += $value['maba_transfer'];
				$data['data'][$value['thn_akademik']]['total_mhs_bkn_transfer'] += $value['total_mhs_bkn_transfer'];
				$data['data'][$value['thn_akademik']]['total_mhs_transfer'] += $value['total_mhs_transfer'];
				$data['data'][$value['thn_akademik']]['jumlah_lulus_bkn_transfer'] += $value['jumlah_lulus_bkn_transfer'];
				$data['data'][$value['thn_akademik']]['jumlah_lulus_transfer'] += $value['jumlah_lulus_transfer'];
				$data['data'][$value['thn_akademik']]['ipk_min_lulusan_reguler'] += $value['ipk_min_lulusan_reguler'];
				$data['data'][$value['thn_akademik']]['ipk_rata2_lulusan_reguler'] += $value['ipk_rata2_lulusan_reguler'];
				$data['data'][$value['thn_akademik']]['ipk_maks_lulusan_reguler'] += $value['ipk_maks_lulusan_reguler'];
				$data['data'][$value['thn_akademik']]['persen_ipk275'] += $value['persen_ipk275'];
				$data['data'][$value['thn_akademik']]['persen_ipk275_350'] += $value['persen_ipk275_350'];
				$data['data'][$value['thn_akademik']]['persen_ipk350'] += $value['persen_ipk350'];
		    }



		}else{
			
			$data['data'] = Yii::app()->db->createCommand()
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

		$thn_akreditasi = '';
		foreach ($data['data'] as $key => $value) {
			$thn_akreditasi = $value['th_akreditasi'];
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4-L');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana 200'.$thn_akreditasi.'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_mhs_reguler_fakultas', $data, true));
        }else{
        	// footer
        $mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$thn_akreditasi.'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_mhs_reguler', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end mahasiswa reguler


	// Layanan
	public function actionGetData_layanan(){
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

		$this->render('v_getdata_layanan',$data);
	}

	public function actionSentData2(){
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

		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('t.id_prodi,t.kegiatan_BK,t.pelaksanaan_BK,t.hasil_BK,t.kegiatan_minat,t.pelaksanaan_minat,t.hasil_minat,t.kegiatan_softskill,
		    	t.pelaksanaan_softskill,t.hasil_softskill,
		    		t.kegiatan_beasiswa,t.pelaksanaan_beasiswa,t.hasil_beasiswa,t.kegiatan_kesehatan,t.pelaksanaan_kesehatan,t.hasil_kesehatan,p.jurusan')
		    ->from('layanan t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('t.id_prodi,t.kegiatan_BK,t.pelaksanaan_BK,t.hasil_BK,t.kegiatan_minat,t.pelaksanaan_minat,t.hasil_minat,t.kegiatan_softskill,
		    	t.pelaksanaan_softskill,t.hasil_softskill,
		    		t.kegiatan_beasiswa,t.pelaksanaan_beasiswa,t.hasil_beasiswa,t.kegiatan_kesehatan,t.pelaksanaan_kesehatan,t.hasil_kesehatan,p.jurusan,t.lampiran')
		    ->from('layanan t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}


		$myHtml = $this->renderPartial('v_layanan',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFLayanan(){
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
			$data['data'] = Yii::app()->db->createCommand()
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

		$th_akreditasi = '';
		if(!empty($data)){
			foreach ($data as $key => $value) {
				$th_akreditasi = $value['th_akreditasi'];
			}
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4-L');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$th_akreditasi.'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_layanan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$th_akreditasi.'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_layanan', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end layanan


	// evaluasi
	public function actionGetData_evaluasi(){
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

		$this->render('v_getdata_evaluasi',$data);
	}

	// end evaluasi

	


	// Himpunan Alumni 
	public function actionGetData_himpunan(){
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

		$this->render('v_getdata_himpunan',$data);
	}

	public function actionManajemen(){

	    $data['manajemen'] = 'manajemen';

		$this->render('v_manajemen',$data);
	}

}

