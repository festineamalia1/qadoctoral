<?php

class AktivitasDosenTetapSetahunController extends Controller
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
				'actions'=>array('index','view','GetData_dosentetap_setahun','sentdata','CetakPDFDosentetap_setahun'),
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
		$model=new AktivitasDosenTetapSetahun;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['AktivitasDosenTetapSetahun']))
		{
			$model->attributes=$_POST['AktivitasDosenTetapSetahun'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_aktivitas_setahun));
		}

		$this->render('create',array(
			'model'=>$model,
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

		if(isset($_POST['AktivitasDosenTetapSetahun']))
		{
			$model->attributes=$_POST['AktivitasDosenTetapSetahun'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_aktivitas_setahun));
		}

		$this->render('update',array(
			'model'=>$model,
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
		$dataProvider=new CActiveDataProvider('AktivitasDosenTetapSetahun');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new AktivitasDosenTetapSetahun('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['AktivitasDosenTetapSetahun']))
			$model->attributes=$_GET['AktivitasDosenTetapSetahun'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return AktivitasDosenTetapSetahun the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=AktivitasDosenTetapSetahun::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param AktivitasDosenTetapSetahun $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='aktivitas-dosen-tetap-setahun-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	// aktivitas Dosen Tetap Semester
	public function actionGetData_dosentetap_setahun(){
		$data['prodi'] = Yii::app()->db->createCommand()
	    ->select('p.id_prodi,p.jurusan')
	    ->from('prodi p')
	    ->queryAll();

	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('v_getdata_dosentetap_setahun',$data);
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

		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('t.id_prodi,t.nama_dosen,t.bidang_keahlian,t.kode_mk,t.nama_mk,t.jum_kelas,t.jum_rencana_pertemuan,t.jum_pertemuan_terlaksana,
		    	t.status_bidang,p.jurusan')
		    ->from('aktivitas_dosen_tetap_setahun t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		     ->select('t.id_prodi,t.nama_dosen,t.bidang_keahlian,t.kode_mk,t.nama_mk,t.jum_kelas,t.jum_rencana_pertemuan,t.jum_pertemuan_terlaksana,
		    	t.status_bidang,p.jurusan')
		    ->from('aktivitas_dosen_tetap_setahun t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}


		$myHtml = $this->renderPartial('v_dosentetap_setahun',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFDosentetap_setahun(){
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
		    ->select('t.id_prodi,t.nama_dosen,t.bidang_keahlian,t.kode_mk,t.nama_mk,t.jum_kelas,t.jum_rencana_pertemuan,t.jum_pertemuan_terlaksana,
		    	t.status_bidang,p.jurusan')
		    ->from('aktivitas_dosen_tetap_setahun t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		     ->select('t.id_prodi,t.nama_dosen,t.bidang_keahlian,t.kode_mk,t.nama_mk,t.jum_kelas,t.jum_rencana_pertemuan,t.jum_pertemuan_terlaksana,
		    	t.status_bidang,p.jurusan')
		    ->from('aktivitas_dosen_tetap_setahun t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
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
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_dosentetap_setahun', $data, true));
        }else{
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_dosentetap_setahun_fakultas', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end aktivitas Dosen Tetap Semester
}
