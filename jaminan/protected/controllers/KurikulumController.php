<?php

class KurikulumController extends Controller
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
				'actions'=>array('admin','delete','update','CetakPDFStruktur','create','index','view','getdata','sentdata','getdatastruktur', 'sentdatastruktur','getdatapeninjauan','sentdatapeninjauan','getdatapersyaratanpelaksanaan','sentdatapersyaratanpelaksanaan','getdatapembelajaran','sentdatapembelajaran',
					'getdatapembimbingan','sentdatapembimbingan','getdatakemampuanlulusan','sentdatakemampuanlulusan','getdatamonitoring','sentdatamonitoring','getdataTA','sentdataTA','getdataperbaikan','sentdataperbaikan',
					'getdatapeningkatan','sentdatapeningkatan','CetakPDFkurikulum','CetakPDFpeninjauan','CetakPDFpersyaratanpelaksanaan','CetakPDFpembelajaran','CetakPDFpembimbingan','cetakPDFTA',
					'CetakPDFmonitoring','CetakPDFta','CetakPDFpeningkatan','CetakPDFkemampuanlulusan','CetakPDFperbaikan'),
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
		$model=new Kurikulum;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kurikulum']))
		{
			$model->attributes=$_POST['Kurikulum'];
			// tambahan
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				// $nama = $model->lampiran->getName();
				// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/Kurikulum/'.$nama);
				$this->redirect(array('view','id'=>$model->id_kurikulum));
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

		if(isset($_POST['Kurikulum']))
		{
			$model->attributes=$_POST['Kurikulum'];
			// tambahan
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				// $nama = $model->lampiran->getName();
				// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/Kurikulum/'.$nama);
				$this->redirect(array('view','id'=>$model->id_kurikulum));
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
		//$dataProvider=new CActiveDataProvider('Kurikulum');
				// tambahan
		$criteria=new CDbCriteria;
		$criteria->with = array( 'relasi_administrasi' );
		if(Yii::app()->user->group_id != 1){
			$criteria->with = array( 'relasi_prodi' );
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}
		$dataProvider=new CActiveDataProvider('Kurikulum', 
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
		$this->layout='//layouts/column2';
		$model=new Kurikulum('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kurikulum']))
			$model->attributes=$_GET['Kurikulum'];

		$this->render('admin',array(
			'model'=>$model,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Kurikulum the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Kurikulum::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Kurikulum $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kurikulum-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	// Kurikulum
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

		//print_r($_POST); exit;

		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		    $data['mk_kurikulum'] = Yii::app()->db->createCommand()
		    ->select('mk.*')
		    ->from('mk_kurikulum mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['substansi'] = Yii::app()->db->createCommand()
		    ->select('s.*,mk.nama_mk')
		    ->from('substansi_praktek s')
		    ->leftjoin('mk_kurikulum mk','mk.kode_mk = s.kode_mk')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    // data kolum F_pembelajaran dan F_suasana_akademik
		    $data['suasana'] = Yii::app()->db->createCommand()
		    ->select('s.*')
		    ->from('suasana_akademik s')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		    
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		    $data['mk_kurikulum'] = Yii::app()->db->createCommand()
		    ->select('mk.*')
		    ->from('mk_kurikulum mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['total_sks'] = $data['sks_wajib'] = $data['sks_pilihan'] = 0;
		    foreach ($data['mk_kurikulum'] as $key => $value) {
		    	$data['total_sks'] += $value['bobot_sks'];
		    	if($value['jenis_sks'] == 'inti'){
		    		$data['sks_wajib'] += $value['bobot_sks'];
		    	}else if($value['jenis_sks'] == 'institusional'){
		    		$data['sks_pilihan'] += $value['bobot_sks'];
		    	}
		    }

		    $data['substansi'] = Yii::app()->db->createCommand()
		    ->select('s.*,mk.nama_mk')
		    ->from('substansi_praktek s')
		    ->leftjoin('mk_kurikulum mk','mk.kode_mk = s.kode_mk')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    // data kolum F_pembelajaran dan F_suasana_akademik
		    $data['suasana'] = Yii::app()->db->createCommand()
		    ->select('s.*')
		    ->from('suasana_akademik s')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}
		//print_r($data['mk_kurikulum'] ); exit;
		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";
		$myHtml = $this->renderPartial('v_data',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}
	public function actionCetakPDFkurikulum(){
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
		    ->select('k.*')
		    ->from('kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		    $data['mk_kurikulum'] = Yii::app()->db->createCommand()
		    ->select('mk.*')
		    ->from('mk_kurikulum mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['total_sks'] = $data['sks_wajib'] = $data['sks_pilihan'] = 0;
		    foreach ($data['mk_kurikulum'] as $key => $value) {
		    	$data['total_sks'] += $value['bobot_sks'];
		    	if($value['jenis_sks'] == 'inti'){
		    		$data['sks_wajib'] += $value['bobot_sks'];
		    	}else if($value['jenis_sks'] == 'institusional'){
		    		$data['sks_pilihan'] += $value['bobot_sks'];
		    	}
		    }

		    $data['substansi'] = Yii::app()->db->createCommand()
		    ->select('s.*,mk.nama_mk')
		    ->from('substansi_praktek s')
		    ->leftjoin('mk_kurikulum mk','mk.kode_mk = s.kode_mk')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    // data kolum F_pembelajaran dan F_suasana_akademik
		    $data['suasana'] = Yii::app()->db->createCommand()
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
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		    $data['mk_kurikulum'] = Yii::app()->db->createCommand()
		    ->select('mk.*')
		    ->from('mk_kurikulum mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['total_sks'] = $data['sks_wajib'] = $data['sks_pilihan'] = 0;
		    foreach ($data['mk_kurikulum'] as $key => $value) {
		    	$data['total_sks'] += $value['bobot_sks'];
		    	if($value['jenis_sks'] == 'inti'){
		    		$data['sks_wajib'] += $value['bobot_sks'];
		    	}else if($value['jenis_sks'] == 'institusional'){
		    		$data['sks_pilihan'] += $value['bobot_sks'];
		    	}
		    }
		    
		    $data['substansi'] = Yii::app()->db->createCommand()
		    ->select('s.*,mk.nama_mk')
		    ->from('substansi_praktek s')
		     ->leftjoin('mk_kurikulum mk','mk.kode_mk = s.kode_mk')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    // data kolum F_pembelajaran dan F_suasana_akademik
		    $data['suasana'] = Yii::app()->db->createCommand()
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
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_kurikulum_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_kurikulum', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// End KUrikulum

	//Struktur Kurikulum


	
public function actionGetDataStruktur(){
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

		$this->render('v_getdata_struktur',$data);
	}

	public function actionSentDataStruktur(){
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

		//print_r($_POST); exit;
		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['mk_kuri'] = array();
		if($id_prodi == 1){

		    $data['mk_kuri'] = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('mk_kurikulum mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['kurikulum_tdk_tetap'] = Yii::app()->db->createCommand()
		    ->select('mk.*, mk.perkuliahan')
		    ->from('kurikulum_tdk_tetap mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		    
		}else{

		    $data['mk_kuri'] = Yii::app()->db->createCommand()
		    ->select('mk.*, mk.perkuliahan')
		    ->from('mk_kurikulum mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['kurikulum_tdk_tetap'] = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('kurikulum_tdk_tetap mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		    

		}
		//print_r($data); exit;
		$myHtml = $this->renderPartial('v_data_struktur',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFStruktur(){
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

		    $data['mk_kuri'] = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('mk_kurikulum mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['kurikulum_tdk_tetap'] = Yii::app()->db->createCommand()
		    ->select('mk.*, mk.perkuliahan')
		    ->from('kurikulum_tdk_tetap mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		    
		}else{

		    $data['mk_kuri'] = Yii::app()->db->createCommand()
		    ->select('mk.*, mk.perkuliahan')
		    ->from('mk_kurikulum mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['kurikulum_tdk_tetap'] = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('kurikulum_tdk_tetap mk')
		    ->join('prodi p', 'mk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		    

		}
		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Doktor 2008</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_struktur_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktor 2008</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_struktur', $data, true));
        }
         $mPDF1->Output();
    }

    //kurikulum_tdk_tetap
    public function actionSentDataKurikulumTidakTetap(){
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

		// $data['data'] = VisiMisi::model()->findByAttributes(array('id_prodi'=>$id_prodi));
		$data['id_prodi']=$id_prodi;
		$data['id_administrasi']=$id_administrasi;
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,v.*')
	    ->from('kurikulum_tdk_tetap v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		
		$myHtml = $this->renderPartial('v_data_struktur',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFKurikulumTidakTetap(){
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
		    ->select('v.*')
		    ->from('kurikulum_tdk_tetap v')
		    ->join('prodi p', 'v.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=v.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();


			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('v.*')
		    ->from('kurikulum_tdk_tetap v')
		    ->join('prodi p', 'v.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=v.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();


			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_struktur_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_struktur', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
       # Outputs ready PDF
        $mPDF1->Output();
	}

   
	//end struktur

	// Peninjauan 5 Tahun terakhir

	public function actionGetDataPeninjauan(){
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

		$this->render('v_getdata_peninjauan',$data);
	}

	public function actionSentDataPeninjauan(){
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
		// $id_administrasi = 4;
		// $id_prodi = 1;
		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;


		$data['data'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('peninjauan_kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['mekanisme'] = Yii::app()->db->createCommand()
		    ->select('mpk.*')
		    ->from('mekanisme_peninjauan_kurikulum mpk')
		    ->join('prodi p', 'mpk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mpk.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,mk.nama_mk')
		    ->from('peninjauan_kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->leftjoin('mk_kurikulum mk','mk.kode_mk = k.kode_mk')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['mekanisme'] = Yii::app()->db->createCommand()
		    ->select('mpk.*')
		    ->from('mekanisme_peninjauan_kurikulum mpk')
		    ->join('prodi p', 'mpk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mpk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('mpk.id_mekanisme desc')
		    ->queryRow();
		}
		$myHtml = $this->renderPartial('v_data_peninjauan',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFpeninjauan(){
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
		    ->select('k.*')
		    ->from('peninjauan_kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['mekanisme'] = Yii::app()->db->createCommand()
		    ->select('mpk.*')
		    ->from('mekanisme_peninjauan_kurikulum mpk')
		    ->join('prodi p', 'mpk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mpk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();


			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('peninjauan_kurikulum k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['mekanisme'] = Yii::app()->db->createCommand()
		    ->select('mpk.*')
		    ->from('mekanisme_peninjauan_kurikulum mpk')
		    ->join('prodi p', 'mpk.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=mpk.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();


			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_peninjauan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_peninjauan', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
       # Outputs ready PDF
        $mPDF1->Output();
	}

	// end Peninjauan
	// Persayaratan dan pelaksanaan
	public function actionGetDataPersyaratanPelaksanaan(){
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

		$this->render('v_getdata_persyaratanpelaksanaan',$data);
	}

	public function actionSentDataPersyaratanPelaksanaan(){
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

		// $data['data'] = VisiMisi::model()->findByAttributes(array('id_prodi'=>$id_prodi));
		$data['id_prodi']=$id_prodi;
		$data['id_administrasi']=$id_administrasi;
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,v.*')
	    ->from('persyaratan_pelaksanaan v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		
		$myHtml = $this->renderPartial('v_data_persyaratanpelaksanaan',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFpersyaratanpelaksanaan(){
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
		    ->select('v.*')
		    ->from('persyaratan_pelaksanaan v')
		    ->join('prodi p', 'v.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=v.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();


			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('v.*')
		    ->from('persyaratan_pelaksanaan v')
		    ->join('prodi p', 'v.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=v.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();


			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_persyaratanpelaksanaan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_persyaratanpelaksanaan', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
       # Outputs ready PDF
        $mPDF1->Output();
	}

	
	// Proses Pembelajaran
	public function actionGetDataPembelajaran(){
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

		$this->render('v_getdata_pembelajaran',$data);
	}

	public function actionSentDataPembelajaran(){
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
		    ->select('k.*')
		    ->from('mekanisme_penyusunan_mk k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('k.id_penyusunan desc')
		    ->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('mekanisme_penyusunan_mk k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('k.id_penyusunan desc')
		    ->queryRow();
		}

		// var_dump($data['data']);

		$myHtml = $this->renderPartial('v_data_pembelajaran',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFpembelajaran(){
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
		    ->select('k.*')
		    ->from('mekanisme_penyusunan_mk k')
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
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('mekanisme_penyusunan_mk k')
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
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pembelajaran_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pembelajaran', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end Proses Pembelajaran




	//Monitoring dan Evaluasi
	public function actionGetDataMonitoring(){
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

		$this->render('v_getdata_monitoring',$data);
	}

	public function actionSentDataMonitoring(){
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

		// $data['data'] = VisiMisi::model()->findByAttributes(array('id_prodi'=>$id_prodi));
		$data['id_prodi']=$id_prodi;
		$data['id_administrasi']=$id_administrasi;
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,m.*')
	    ->from('monitoringevaluasi m')
	    ->join('prodi p', 'm.id_prodi=p.id_prodi')
	    ->join('administrasi a','m.id_administrasi=a.id_administrasi')
	    ->andWhere('m.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('m.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		
		$myHtml = $this->renderPartial('v_data_monitoring',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFmonitoring(){
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
		    ->select('m.*')
		    ->from('monitoringevaluasi m')
		    ->join('prodi p', 'm.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=m.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();


			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('m.*')
		    ->from('monitoringevaluasi m')
		    ->join('prodi p', 'm.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=m.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();


			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}
		

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_monitoring_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_monitoring', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
       # Outputs ready PDF
        $mPDF1->Output();
	}
	// Pembimbingan Akademik

	public function actionGetDataPembimbingan(){
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

		$this->render('v_getdata_pembimbingan',$data);
	}

	public function actionSentDataPembimbingan(){
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

		// $id_administrasi  = 4;
		// $id_prodi = 2;

		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('bimbingan_akademik b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->leftjoin('data_dosen dd', 'dd.id_dosen=b.id_dosen')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['proses'] = Yii::app()->db->createCommand()
		    ->select('pb.kebijakan_pembimbingan, pb.mekanisme_penunjukkan, pb.proses_pembimbingan')
		    ->from('proses_bimbingan pb')
		    ->join('prodi p', 'pb.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=pb.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('pb.id_proses desc')
		    ->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('bimbingan_akademik b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->leftjoin('data_dosen dd', 'dd.id_dosen=b.id_dosen')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['proses'] = Yii::app()->db->createCommand()
		    ->select('pb.kebijakan_pembimbingan, pb.mekanisme_penunjukkan, pb.proses_pembimbingan')
		    ->from('proses_bimbingan pb')
		    ->join('prodi p', 'pb.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=pb.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('pb.id_proses desc')
		    ->queryRow();
		}

		// var_dump($data['data']);

		$myHtml = $this->renderPartial('v_data_pembimbingan',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFpembimbingan(){
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
		    ->select('b.*,dd.nama_dosen,dd.gelar_akademik')
		    ->from('bimbingan_akademik b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->leftjoin('data_dosen dd', 'dd.id_dosen=b.id_dosen')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['proses'] = Yii::app()->db->createCommand()
		    ->select('pb.*')
		    ->from('proses_bimbingan pb')
		    ->join('prodi p', 'pb.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=pb.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('pb.id_proses desc')
		    ->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('b.*,dd.nama_dosen,dd.gelar_akademik')
		    ->from('bimbingan_akademik b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->leftjoin('data_dosen dd', 'dd.id_dosen=b.id_dosen')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['proses'] = Yii::app()->db->createCommand()
		    ->select('pb.*')
		    ->from('proses_bimbingan pb')
		    ->join('prodi p', 'pb.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=pb.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('pb.id_proses desc')
		    ->queryRow();
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pembimbingan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pembimbingan', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end pembimbingan akademik


	// Pembimbingan TA/ SKRIPSI

	public function actionGetDataTA(){
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

		$this->render('v_getdata_pembimbingan_TA',$data);
	}

	public function actionSentDataTA(){
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
		    ->select('b.*,dd.nama_dosen')
		    ->from('bimbingan_ta b')
		    ->leftjoin('data_dosen dd','b.id_dosen = dd.id_dosen')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['pelaksanaan'] = Yii::app()->db->createCommand()
		    ->select('b.*')
		    ->from('pelaksanaan_bimbingan_ta b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('b.id_pelaksanaan desc')
		    ->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('b.*,dd.nama_dosen')
		    ->from('bimbingan_ta b')
		    ->leftjoin('data_dosen dd','b.id_dosen = dd.id_dosen')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['pelaksanaan'] = Yii::app()->db->createCommand()
		    ->select('b.*')
		    ->from('pelaksanaan_bimbingan_ta b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('b.id_pelaksanaan desc')
		    ->queryRow();
		}

		// var_dump($data['data']);

		$myHtml = $this->renderPartial('v_data_pembimbingan_TA',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFta(){
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
		    ->select('b.*,dd.nama_dosen')
		    ->from('bimbingan_ta b')
		    ->leftjoin('data_dosen dd','b.id_dosen = dd.id_dosen')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['pelaksanaan'] = Yii::app()->db->createCommand()
		    ->select('b.*')
		    ->from('pelaksanaan_bimbingan_ta b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('b.*,dd.nama_dosen')
		    ->from('bimbingan_ta b')
		    ->leftjoin('data_dosen dd','b.id_dosen = dd.id_dosen')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['pelaksanaan'] = Yii::app()->db->createCommand()
		    ->select('b.*')
		    ->from('pelaksanaan_bimbingan_ta b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pembimbingan_TA_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pembimbingan_TA', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// END Pembimbingan TA/ Skripsi


	// Upaya perbaikan pembelajaran

	public function actionGetDataPerbaikan(){
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

		$this->render('v_getdata_perbaikan',$data);
	}

	public function actionSentDataPerbaikan(){
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
		    ->select('b.*')
		    ->from('perbaikan_pembelajaran b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('b.*')
		    ->from('perbaikan_pembelajaran b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}

		// var_dump($data['data']);

		$myHtml = $this->renderPartial('v_data_perbaikan',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFperbaikan(){
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
		    ->select('b.*')
		    ->from('perbaikan_pembelajaran b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('b.*')
		    ->from('perbaikan_pembelajaran b')
		    ->join('prodi p', 'b.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=b.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_perbaikan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_perbaikan', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end upaya perbaikan pembelajaran
//Upaya Peningkatan Kemampuan Lulusan
	public function actionGetDataKemampuanLulusan(){
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

		$this->render('v_getdata_kemampuanlulusan',$data);
	}

	public function actionSentDataKemampuanLulusan(){
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

		$x['x'] = array();
		$data['id_prodi']='';
		$data['id_administrasi']='';
		
		if($id_prodi==1){
		$x['x'] = Yii::app()->db->createCommand()
		->select('*')
	    ->from('kemampuan_lulusan t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a','t.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('t.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		}else {
		$x['x'] = Yii::app()->db->createCommand()
		->select('*')
	    ->from('kemampuan_lulusan t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a','t.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('t.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		}


	    //echo "$x"; exit();

		$myHtml = $this->renderPartial('v_data_kemampuanlulusan',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;
			
	}

	public function actionCetakPDFkemampuanlulusan(){
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
		    ->select('m.*')
		    ->from('kemampuan_lulusan m')
		    ->join('prodi p', 'm.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=m.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();


			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('m.*')
		    ->from('kemampuan_lulusan m')
		    ->join('prodi p', 'm.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=m.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();


			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}
		

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_kemampuanlulusan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_kemampuanlulusan', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
       # Outputs ready PDF
        $mPDF1->Output();
	}



	// Upaya peningkatan suasana akademik

	public function actionGetDataPeningkatan(){
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
		$this->render('v_getdata_peningkatan',$data);
	}

	public function actionSentDataPeningkatan(){
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
		    ->select('s.*')
		    ->from('suasana_akademik s')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('s.*')
		    ->from('suasana_akademik s')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}

		// var_dump($data['data']);

		$myHtml = $this->renderPartial('v_data_peningkatan',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFpeningkatan(){
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
		    ->select('s.*')
		    ->from('suasana_akademik s')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('s.*')
		    ->from('suasana_akademik s')
		    ->join('prodi p', 's.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_peningkatan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktor '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_peningkatan', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end peningkatan suasana akademik


}
