<?php

class DataDosenController extends Controller
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
				'actions'=>array('admin','create','update','delete','index','view','getdata_dosentetap','getdata_bidang','sentdata','GetData_luarbidang','sentdata2','CetakPDFDosentetap_luarbidang',
				'CetakPDFDosentetap_bidang','GetData_dosentidaktetap','sentdata_dosentidaktetap','cetakPDFdosentidaktetap'),
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
		$model=new DataDosen;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DataDosen']))
		{
			$model->attributes=$_POST['DataDosen'];
			// tambahan
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				// $nama = $model->lampiran->getName();
				// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/DataDosen/'.$nama);
				$this->redirect(array('view','id'=>$model->id_dosen));
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

		if(isset($_POST['DataDosen']))
		{
			$model->attributes=$_POST['DataDosen'];
			// tambahan
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				// $nama = $model->lampiran->getName();
				// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/DataDosen/'.$nama);
				$this->redirect(array('view','id'=>$model->id_dosen));
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
		// tambahan
		$criteria=new CDbCriteria;
		$criteria->with = array( 'relasi_administrasi' );
		if(Yii::app()->user->group_id != 1){
			$criteria->with = array( 'relasi_prodi' );
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}
		$dataProvider=new CActiveDataProvider('DataDosen', 
			array(
				'criteria'=>$criteria,
				'pagination'=>array(
			        'pageSize'=>10,
			    ),
			)
		);
		// end tambahan
		// $dataProvider=new CActiveDataProvider('DataDosen');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new DataDosen('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DataDosen']))
			$model->attributes=$_GET['DataDosen'];

		$this->render('admin',array(
			'model'=>$model,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DataDosen the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DataDosen::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DataDosen $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='data-dosen-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	// data dosen tetap

	public function actionSentData(){
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

		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
		    ->select('d.*,p.jurusan')
		    ->from('data_dosen d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
		    ->andWhere('d.status_bidang=:stb', array(':stb'=>'sesuai PS'))
		    ->andWhere('d.status_dosen=:std', array(':std'=>'tetap'))
		    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

	    // ->join('tbl_profile p', 'u.id=p.user_id')
	    // ->where('id=:id', array(':id'=>$id))
		//var_dump($data['data']);
		$myHtml = $this->renderPartial('v_dosentetap',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFDosentetap_bidang(){
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
				->select('d.*,p.jurusan,a.th_akreditasi')
			    ->from('data_dosen d')
			    ->join('prodi p', 'd.id_prodi=p.id_prodi')
			    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			    ->andWhere('d.status_bidang=:stb', array(':stb'=>'sesuai PS'))
				->andWhere('d.status_dosen=:std', array(':std'=>'tetap'))
			    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
			    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    // ->limit('0,10')
			    ->queryAll();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
			    ->select('d.*,p.jurusan,a.th_akreditasi')
			    ->from('data_dosen d')
			    ->join('prodi p', 'd.id_prodi=p.id_prodi')
			    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
			    ->andWhere('d.status_bidang=:stb', array(':stb'=>'sesuai PS'))
				->andWhere('d.status_dosen=:std', array(':std'=>'tetap'))
			    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
			    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			    // ->limit('10')
			    ->queryAll();
		}
		// echo "<pre>";
		// var_dump($data['data']);
		// echo "</pre>";
		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4-L');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_dosentetap_bidang_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_dosentetap_bidang', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end data dosen tetap

	// data dosen luar bidang 
		public function actionGetData_luarbidang(){
		$data['prodi']=Yii::app()->db->createCommand()
		->select('p.id_prodi,p.jurusan')
	    ->from('prodi p')
	    ->queryAll();

	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('v_getdata_dosentetap_luarbidang',$data);
	}

	public function actionSentData2(){
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

		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
		    ->select('d.*,p.jurusan')
		    ->from('data_dosen d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
		    ->andWhere('d.status_bidang=:stb', array(':stb'=>'tdk sesuai PS'))
			->andWhere('d.status_dosen=:std', array(':std'=>'tetap'))
		    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

	    // ->join('tbl_profile p', 'u.id=p.user_id')
	    // ->where('id=:id', array(':id'=>$id))
		// var_dump($data['data']);
		$myHtml = $this->renderPartial('v_dosentetap_luarbidang',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFDosentetap_luarbidang(){
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
			$data['data'] = Yii::app()->db->createCommand()
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

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4-L');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_dosentetap_luarbidang_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_dosentetap_luarbidang', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	//end data dosen luar bidang

	// data dosen tidak tetap

	public function actionSentData_dosentidaktetap(){
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

		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
		    ->select('d.*,p.jurusan')
		    ->from('data_dosen d')
		    ->join('prodi p', 'd.id_prodi=p.id_prodi')
		    ->join('administrasi a', 'd.id_administrasi=a.id_administrasi')
		    ->andWhere('d.status_bidang=:stb', array(':stb'=>'sesuai PS'))
			->andWhere('d.status_dosen=:std', array(':std'=>'tidak tetap'))
		    ->andWhere('d.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();

	    // ->join('tbl_profile p', 'u.id=p.user_id')
	    // ->where('id=:id', array(':id'=>$id))
		//var_dump($data['data']);
		$myHtml = $this->renderPartial('v_dosentidaktetap',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFDosentidaktetap(){
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
			$data['data'] = Yii::app()->db->createCommand()
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

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4-L');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana 2008</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_dosentidaktetap_fakultas', $data, true));
        }else{
        	// footer
        		$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_dosentidaktetap', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end data dosen tidak tetap


	

}
