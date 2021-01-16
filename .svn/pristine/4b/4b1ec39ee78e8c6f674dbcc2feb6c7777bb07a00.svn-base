<?php

class HasilKaryaController extends Controller
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
				'actions'=>array('index','view','create','admin','delete','update','sentdata','getdata','cetakPDFjudul','getdata_karya','sentdata_karya','cetakPDFkarya'),
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
		$model=new HasilKarya;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['HasilKarya']))
		{
			$model->attributes=$_POST['HasilKarya'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_hasil_karya));
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

		if(isset($_POST['HasilKarya']))
		{
			$model->attributes=$_POST['HasilKarya'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_hasil_karya));
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
		$dataProvider=new CActiveDataProvider('HasilKarya', 
			array(
				'criteria'=>$criteria,
				'pagination'=>array(
			        'pageSize'=>10,
			    ),
			)
		);
		// end tambahan
		// $dataProvider=new CActiveDataProvider('HasilKarya');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new HasilKarya('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['HasilKarya']))
			$model->attributes=$_GET['HasilKarya'];

		$this->render('admin',array(
			'model'=>$model,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return HasilKarya the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=HasilKarya::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param HasilKarya $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='hasil-karya-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	// judul
	public function actionGetData(){
		$data['prodi'] = Yii::app()->db->createCommand()
	    ->select('p.id_prodi,p.jurusan')
	    ->from('prodi p')
	    ->queryAll();

	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('v_getdata_judul',$data);
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

		$data['id_administrasi']=$id_administrasi;
		$data['id_prodi']=$id_prodi;
		
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('k.id_prodi,judul, nama_dosen,publikasi,th_publikasi,tingkat,status_haki,p.jurusan')
	    ->from('hasil_karya k')
	    ->join('prodi p', 'k.id_prodi=p.id_prodi')
	    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		->queryAll();

		$myHtml = $this->renderPartial('v_judul',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFjudul(){
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


		$data['id_prodi']=$id_prodi;
		$data['id_administrasi']=$id_administrasi;

		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi,judul, nama_dosen,publikasi,th_publikasi,tingkat,status_haki,p.jurusan')
	   			->from('hasil_karya k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi,judul, nama_dosen,publikasi,th_publikasi,tingkat,status_haki,p.jurusan')
	   			->from('hasil_karya k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();
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
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_judul_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_judul', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end judul

	// karya
	public function actionGetData_karya(){
		$data['prodi'] = Yii::app()->db->createCommand()
	    ->select('p.id_prodi,p.jurusan')
	    ->from('prodi p')
	    ->queryAll();

	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('v_getdata_karya',$data);
	}

	public function actionSentData_karya(){
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
		$data['id_prodi']=$id_prodi;
		
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi,judul, nama_dosen,publikasi,th_publikasi,tingkat,status_haki,p.jurusan')
	   			->from('hasil_karya k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status_haki=:st', array(':st'=>'sudah'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

	    // ->join('tbl_profile p', 'u.id=p.user_id')
	    // ->where('id=:id', array(':id'=>$id))
		// var_dump($data['data']);
		$myHtml = $this->renderPartial('v_karya',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFkarya(){
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

		$data['id_administrasi']=$id_administrasi;
		$data['id_prodi']=$id_prodi;

		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi,judul, nama_dosen,publikasi,th_publikasi,tingkat,status_haki,p.jurusan')
	   			->from('hasil_karya k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();

		}else{
			$data['id_prodi']=$id_prodi;
			$data['id_administrasi']=$id_administrasi;
			$data['data'] = Yii::app()->db->createCommand()
				->select('k.id_prodi,judul, nama_dosen,publikasi,th_publikasi,tingkat,status_haki,p.jurusan')
	   			->from('hasil_karya k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

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
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_karya_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_karya', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end karya
}
