<?php

class PengelolaanDanaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
				'actions'=>array('admin','delete','update','create','index','view','getdatapengelolaan','sentdatapengelolaan','getdataperolehan','sentdataperolehan','getdataprasarana','sentdataprasarana',
				'getdatasarana','sentdatasarana','getdatasistem','sentdatasistem','getdata_pkm','sentdata_pkm','cetakPDFpkm','cetakPDFpengelolaan',
				'cetakPDFperolehan','cetakPDFprasarana','cetakPDFsarana','cetakPDFsistem'),
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
		$model=new PengelolaanDana;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PengelolaanDana']))
		{
			$model->attributes=$_POST['PengelolaanDana'];
			// tambahan
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				// $nama = $model->lampiran->getName();
				// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/PengelolaanDana/'.$nama);
				$this->redirect(array('view','id'=>$model->id_kelola_dana));
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
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PengelolaanDana']))
		{
			$model->attributes=$_POST['PengelolaanDana'];
			// tambahan
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				// $nama = $model->lampiran->getName();
				// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/PengelolaanDana/'.$nama);
				$this->redirect(array('view','id'=>$model->id_kelola_dana));
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
		$dataProvider=new CActiveDataProvider('PengelolaanDana');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PengelolaanDana('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PengelolaanDana']))
			$model->attributes=$_GET['PengelolaanDana'];

		$this->render('admin',array(
			'model'=>$model,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PengelolaanDana the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PengelolaanDana::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PengelolaanDana $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pengelolaan-dana-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	// Pengelolaan dana

	public function actionGetDataPengelolaan(){
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

	public function actionSentDataPengelolaan(){
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
		    ->from('penjelasan_pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('id_penjelasan desc')
		    ->queryRow();

		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('penjelasan_pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->order('id_penjelasan desc')
		    ->queryRow();
		}

		$myHtml = $this->renderPartial('v_data',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFpengelolaan(){
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

		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,a.th_akreditasi,a.th_akademik')
		    ->from('penjelasan_pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,a.th_akreditasi,a.th_akademik')
		    ->from('penjelasan_pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
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
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pengelolaan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pengelolaan', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end pengelolaan dana

	// perolehan dan alokasi dana
	public function actionGetDataPerolehan(){
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

		$this->render('v_getdata_perolehan',$data);
	}

	public function actionSentDataPerolehan(){
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

		$dt['id_administrasi'] = $id_administrasi;
		$dt['id_prodi'] = $id_prodi;

		$data['data'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('pengelolaan_dana k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();

		    $data['penggunaan'] = Yii::app()->db->createCommand()
			    ->select('k.*')
			    ->from('penggunaan_dana k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();

		     $dt['tridarma'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('f_dana_tridarma k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();

		     $dt['dana'] = Yii::app()->db->createCommand()
			    ->select('k.*')
			    ->from('dana_penelitian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();

		}else{
			$data['data'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('pengelolaan_dana k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();

		     $data['penggunaan'] = Yii::app()->db->createCommand()
			    ->select('k.*')
			    ->from('penggunaan_dana k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();

		     $dt['tridarma'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('f_dana_tridarma k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();

		    $dt['dana'] = Yii::app()->db->createCommand()
			    ->select('k.*')
			    ->from('dana_penelitian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();

			$dt['dana_pkm'] = Yii::app()->db->createCommand()
			    ->select('k.*')
			    ->from('dana_penelitian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'pkm'))
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();

		}

		$dt['data'] = array();
		foreach ($data['data'] as $key => $value) {
			if($value['sumber_dana'] == 'pt sendiri'){
				$dt['data']['pt_sendiri'][] = $value;
			}else if($value['sumber_dana'] == 'yayasan'){
				$dt['data']['yayasan'][] = $value;
			}else if($value['sumber_dana'] == 'diknas'){
				$dt['data']['diknas'][] = $value;
			}else if($value['sumber_dana'] == 'lain'){
				$dt['data']['lain'][] = $value;
			}
		}

		$dt['penggunaan'] = array();
		foreach ($data['penggunaan'] as $key => $value) {
			if($value['jenis_penggunaan'] == 'pendidikan'){
				$dt['penggunaan']['pendidikan'][] = $value;
			}else if($value['jenis_penggunaan'] == 'penelitian'){
				$dt['penggunaan']['penelitian'][] = $value;
			}else if($value['jenis_penggunaan'] == 'pkm'){
				$dt['penggunaan']['pkm'][] = $value;
			}else if($value['jenis_penggunaan'] == 'prasarana'){
				$dt['penggunaan']['prasarana'][] = $value;
			}else if($value['jenis_penggunaan'] == 'sarana'){
				$dt['penggunaan']['penelitian'][] = $value;
			}else if($value['jenis_penggunaan'] == 'sdm'){
				$dt['penggunaan']['pkm'][] = $value;
			}else if($value['jenis_penggunaan'] == 'lainnya'){
				$dt['penggunaan']['prasarana'][] = $value;
			}
		}

		$myHtml = $this->renderPartial('v_data_perolehan',$dt,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

		public function actionCetakPDFperolehan(){
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

		$dt['id_administrasi'] = $id_administrasi;
		$dt['id_prodi'] = $id_prodi;

		$data['data'] = array();
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

		    $dt['tridarma'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan,a.th_akreditasi')
		    ->from('f_dana_tridarma k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['dana'] = Yii::app()->db->createCommand()
			    ->select('k.*,a.th_akreditasi')
			    ->from('dana_penelitian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();


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

		     $dt['tridarma'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan,a.th_akreditasi')
		    ->from('f_dana_tridarma k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		   	$dt['dana'] = Yii::app()->db->createCommand()
			    ->select('k.*,a.th_akreditasi')
			    ->from('dana_penelitian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();

			$dt['dana_pkm'] = Yii::app()->db->createCommand()
			    ->select('k.*,a.th_akreditasi')
			    ->from('dana_penelitian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'pkm'))
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    ->queryAll();


		}

		$dt['data'] = array();
		foreach ($data['data'] as $key => $value) {
			if($value['sumber_dana'] == 'pt sendiri'){
				$dt['data']['pt_sendiri'][] = $value;
			}else if($value['sumber_dana'] == 'yayasan'){
				$dt['data']['yayasan'][] = $value;
			}else if($value['sumber_dana'] == 'diknas'){
				$dt['data']['diknas'][] = $value;
			}else if($value['sumber_dana'] == 'lain'){
				$dt['data']['lain'][] = $value;
			}
		}

		$dt['penggunaan'] = array();
		foreach ($data['penggunaan'] as $key => $value) {
			if($value['jenis_penggunaan'] == 'pendidikan'){
				$dt['penggunaan']['pendidikan'][] = $value;
			}else if($value['jenis_penggunaan'] == 'penelitian'){
				$dt['penggunaan']['penelitian'][] = $value;
			}else if($value['jenis_penggunaan'] == 'pkm'){
				$dt['penggunaan']['pkm'][] = $value;
			}else if($value['jenis_penggunaan'] == 'prasarana'){
				$dt['penggunaan']['prasarana'][] = $value;
			}else if($value['jenis_penggunaan'] == 'sarana'){
				$dt['penggunaan']['penelitian'][] = $value;
			}else if($value['jenis_penggunaan'] == 'sdm'){
				$dt['penggunaan']['pkm'][] = $value;
			}else if($value['jenis_penggunaan'] == 'lainnya'){
				$dt['penggunaan']['prasarana'][] = $value;
			}
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
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$dt["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_perolehan_fakultas', $dt, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$dt["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_perolehan', $dt, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end perolehan dan alokasi dana

	// prasarana
	public function actionGetDataPrasarana(){
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

		$this->render('v_getdata_prasarana',$data);
	}

	public function actionSentDataPrasarana(){
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


		
		$dt['id_administrasi'] = $id_administrasi;
		$dt['id_prodi'] = $id_prodi;

		$data['data'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['lain'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'penunjang'))
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['lain2'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'lain'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $dt['F_prasarana'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('f_prasarana_tambahan k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		}else{
			$data['data'] = Yii::app()->db->createCommand()
		   ->select('k.*')
		    ->from('prasarana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['lain'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'penunjang'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['lain2'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'lain'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['F_prasarana'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('f_prasarana_tambahan k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}

		$dt['data'] = array();
		foreach ($data['data'] as $key => $value) {
			if($value['ruang_kerja'] == '1'){
				$dt['data']['1'][] = $value;
			}else if($value['ruang_kerja'] == '2'){
				$dt['data']['2'][] = $value;
			}else if($value['ruang_kerja'] == '3sd4'){
				$dt['data']['3sd4'][] = $value;
			}else if($value['ruang_kerja'] == 'lbh4'){
				$dt['data']['lbh4'][] = $value;
			}
		}

		// $dt['lain'] = $data['lain'];
	


		// echo "<pre>";
		// print_r($dt);
		// echo "</pre>";

		$myHtml = $this->renderPartial('v_data_prasarana',$dt,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

		public function actionCetakPDFprasarana(){
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

		$dt['id_administrasi'] = $id_administrasi;
		$dt['id_prodi'] = $id_prodi;

		$data['data'] = array();
		$data['F_prasarana'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['lain'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'penunjang'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['lain2'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'lain'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();


		    $dt['F_prasarana'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('F_prasarana_tambahan k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		}else{
			$data['data'] = Yii::app()->db->createCommand()
		   ->select('k.*')
		    ->from('prasarana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['lain'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'penunjang'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['lain2'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('prasarana_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('k.ket_prasarana=:kp', array(':kp'=>'lain'))
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}

		$dt['data'] = array();
		foreach ($data['data'] as $key => $value) {
			if($value['ruang_kerja'] == '1'){
				$dt['data']['1'][] = $value;
			}else if($value['ruang_kerja'] == '2'){
				$dt['data']['2'][] = $value;
			}else if($value['ruang_kerja'] == '3sd4'){
				$dt['data']['3sd4'][] = $value;
			}else if($value['ruang_kerja'] == 'lbh4'){
				$dt['data']['lbh4'][] = $value;
			}
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
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_prasarana_fakultas', $dt, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_prasarana', $dt, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end prasarana

	// sarana
	public function actionGetDataSarana(){
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

		$this->render('v_getdata_sarana',$data);
	}

	public function actionSentDataSarana(){
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

		$data['pustaka'] = array();
		$data['jurnal'] = array();
		$data['j']= array();
		if($id_prodi == 1){
			$data['pustaka'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('sarana_pustaka k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();


		    $data['j'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('jurnal k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['sumber'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pustaka_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['peralatan'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('peralatan_utama k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['F_sarana'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('f_detail_sarana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['F_tambahan'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('f_sarana_tambahan k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();


		}else{
			$data['pustaka'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('sarana_pustaka k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['j'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('jurnal k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['sumber'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pustaka_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['peralatan'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('peralatan_utama k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();



		}
		
		foreach ($data['j'] as $key => $value) {
			if($value['jenis'] == 'dikti'){
				$data['jurnal']['dikti'][] = $value;
			}else if($value['jenis'] == 'internasional'){
				$data['jurnal']['internasional'][] = $value;
			}
		}

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		

		$myHtml = $this->renderPartial('v_data_sarana',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFsarana(){
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

		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['pustaka'] = array();
		$data['jurnal'] = array();
		if($id_prodi == 1){
			$data['pustaka'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('f_sarana_tambahan k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['j'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('jurnal k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		  	$data['detail_sarana'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('f_detail_sarana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['F_sarana'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('f_detail_sarana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}else{
			$data['pustaka'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('f_sarana_tambahan k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['j'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('jurnal k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		     $data['sumber'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pustaka_lain k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['peralatan'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('peralatan_utama k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();



		}

		foreach ($data['j'] as $key => $value) {
			if($value['jenis'] == 'dikti'){
				$data['jurnal']['dikti'][] = $value;
			}else if($value['jenis'] == 'internasional'){
				$data['jurnal']['internasional'][] = $value;
			}
		}


		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		
		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_sarana_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_sarana', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end sarana

	// sistem
	public function actionGetDataSistem(){
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

		$this->render('v_getdata_sistem',$data);
	}

	public function actionSentDataSistem(){
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

		$dt['id_administrasi'] = $id_administrasi;
		$dt['id_prodi'] = $id_prodi;
	

		$data['data'] = array();
		$data['sistem']=array(); 
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pengelolaan_data k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();


		    $dt['sistem'] = Yii::app()->db->createCommand()
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
		    ->queryAll();
		}

		foreach ($data['data'] as $key => $value) {
			if($value['jenis_data'] == 'mhs'){
				$dt['mhs'][] = $value;
			}else if($value['jenis_data'] == 'krs'){
				$dt['krs'][] = $value;
			}else if($value['jenis_data'] == 'jadwal mk'){
				$dt['jadwal_mk'][] = $value;
			}else if($value['jenis_data'] == 'nilai mk'){
				$dt['nilai_mk'][] = $value;
			}else if($value['jenis_data'] == 'transkrip akademik'){
				$dt['transkrip_akademik'][] = $value;
			}else if($value['jenis_data'] == 'lulusan'){
				$dt['lulusan'][] = $value;
			}else if($value['jenis_data'] == 'dosen'){
				$dt['dosen'][] = $value;
			}else if($value['jenis_data'] == 'pegawai'){
				$dt['pegawai'][] = $value;
			}else if($value['jenis_data'] == 'keuangan'){
				$dt['keuangan'][] = $value;
			}else if($value['jenis_data'] == 'inventaris'){
				$dt['inventaris'][] = $value;
			}else if($value['jenis_data'] == 'perpustakaan'){
				$dt['perpustakaan'][] = $value;
			}
		}

		$myHtml = $this->renderPartial('v_data_sistem',$dt,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

		public function actionCetakPDFsistem(){
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

		$dt['id_administrasi'] = $id_administrasi;
		$dt['id_prodi'] = $id_prodi;

		$data['data'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pengelolaan_data k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $data['sistem'] = Yii::app()->db->createCommand()
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
		    ->queryAll();

		     $data['sistem'] = Yii::app()->db->createCommand()
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
				$dt['mhs'][] = $value;
			}else if($value['jenis_data'] == 'krs'){
				$dt['krs'][] = $value;
			}else if($value['jenis_data'] == 'jadwal mk'){
				$dt['jadwal_mk'][] = $value;
			}else if($value['jenis_data'] == 'nilai mk'){
				$dt['nilai_mk'][] = $value;
			}else if($value['jenis_data'] == 'transkrip akademik'){
				$dt['transkrip_akademik'][] = $value;
			}else if($value['jenis_data'] == 'lulusan'){
				$dt['lulusan'][] = $value;
			}else if($value['jenis_data'] == 'dosen'){
				$dt['dosen'][] = $value;
			}else if($value['jenis_data'] == 'pegawai'){
				$dt['pegawai'][] = $value;
			}else if($value['jenis_data'] == 'keuangan'){
				$dt['keuangan'][] = $value;
			}else if($value['jenis_data'] == 'inventaris'){
				$dt['inventaris'][] = $value;
			}else if($value['jenis_data'] == 'perpustakaan'){
				$dt['perpustakaan'][] = $value;
			}
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
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_sistem_fakultas', $dt, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_sistem', $dt, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end sistem


	// pkm

	public function actionSentData_pkm(){
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

		$dt['id_administrasi'] = $id_administrasi;
		$dt['id_prodi'] = $id_prodi;


		$data['data'] = array();
		if($id_prodi == 1){
			// $data['data'] = Yii::app()->db->createCommand()
		 //    ->select('k.*')
		 //    ->from('pengelolaan_dana k')
		 //    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		 //    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		 //    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			// ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		 //    ->queryAll();

		  //   $dt['pkm'] = Yii::app()->db->createCommand()
			 //    ->select('k.*,p.jurusan')
			 //    ->from('penelitian_dosentetap_ps k')
			 //    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			 //    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			 //    ->andWhere('k.status=:st', array(':st'=>'pkm'))
				// ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				// ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				// ->queryAll();

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
			// $dt['pkm_dana_penelitian'] = Yii::app()->db->createCommand()
			//     ->select('k.*,p.jurusan')
			//     ->from('f_dana_masyarakat k')
			//     ->join('prodi p', 'k.id_prodi=p.id_prodi')
			//     ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			// 	->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			// 	->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			// 	->queryAll();

			// // 7.2.2 pandangan PKM borang 3B
			//  $dt['penggunaan'] = Yii::app()->db->createCommand()
			//     ->select('k.*,p.jurusan')
			//     ->from('penggunaan_dana k')
			//     ->join('prodi p', 'k.id_prodi=p.id_prodi')
			//     ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			//     ->andWhere('k.jenis_penggunaan=:jp', array(':jp'=>'pkm'))
			// 	->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			// 	->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			// 	->queryAll();

		}else{
			// $data['data'] = Yii::app()->db->createCommand()
		 //    ->select('k.*')
		 //    ->from('pengelolaan_dana k')
		 //    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		 //    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		 //    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			// ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		 //    ->queryAll();

		  //   $dt['pkm'] = Yii::app()->db->createCommand()
			 //    ->select('k.*,p.jurusan')
			 //    ->from('penelitian_dosentetap_ps k')
			 //    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			 //    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			 //    ->andWhere('k.status=:st', array(':st'=>'pkm'))
				// ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				// ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				// ->queryAll();

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

		$dt['data'] = array();
		foreach ($data['pkm_penelitian'] as $key => $value) {
			if($value['sumber_pembiayaan'] == 'sendiri'){
				$dt['data']['sendiri'][] = $value;
			}else if($value['sumber_pembiayaan'] == 'pt'){
				$dt['data']['pt'][] = $value;
			}else if($value['sumber_pembiayaan'] == 'depdiknas'){
				$dt['data']['depdiknas'][] = $value;
			}else if($value['sumber_pembiayaan'] == 'dlm negeri'){
				$dt['data']['dlm negeri'][] = $value;
			}else if($value['sumber_pembiayaan'] == 'luar negeri'){
				$dt['data']['luar negeri'][] = $value;
			}
		}


		// echo "<pre>";
		// print_r($dt['data']);
		// echo "</pre>";

		$myHtml = $this->renderPartial('v_pkm',$dt,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFpkm(){
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

		$dt['id_administrasi'] = $id_administrasi;
		$dt['id_prodi'] = $id_prodi;

		$data['data'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['pkm'] = Yii::app()->db->createCommand()
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
			$dt['pkm_dana_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('f_dana_masyarakat k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

			// 7.2.2 pandangan PKM borang 3B
			 $dt['penggunaan'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penggunaan_dana k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.jenis_penggunaan=:jp', array(':jp'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*')
		    ->from('pengelolaan_dana k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

		    $dt['pkm'] = Yii::app()->db->createCommand()
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

		$dt['data'] = array();
		foreach ($data['pkm_penelitian'] as $key => $value) {
			if($value['sumber_pembiayaan'] == 'sendiri'){
				$dt['data']['sendiri'][] = $value;
			}else if($value['sumber_pembiayaan'] == 'pt'){
				$dt['data']['pt'][] = $value;
			}else if($value['sumber_pembiayaan'] == 'depdiknas'){
				$dt['data']['depdiknas'][] = $value;
			}else if($value['sumber_pembiayaan'] == 'dlm negeri'){
				$dt['data']['dlm negeri'][] = $value;
			}else if($value['sumber_pembiayaan'] == 'luar negeri'){
				$dt['data']['luar negeri'][] = $value;
			}
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
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana 2008</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pkm_fakultas', $dt, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana 2008</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pkm', $dt, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end pkm
}
