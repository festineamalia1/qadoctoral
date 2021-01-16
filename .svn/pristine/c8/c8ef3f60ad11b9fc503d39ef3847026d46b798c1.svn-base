<?php

class DataMhs7thController extends Controller
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
				'actions'=>array('admin','delete','create','index','view','sentdatamhs7','CetakPDFMhs7'),
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
		$model=new DataMhs7th;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DataMhs7th']))
		{
			$model->attributes=$_POST['DataMhs7th'];
			// tambahan
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				if($model->lampiran){
					// $nama = $model->lampiran->getName();
					// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/DataMhs7th/'.$nama);
				}
				$this->redirect(array('view','id'=>$model->id_mhs7));
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

		if(isset($_POST['DataMhs7th']))
		{
			$model->attributes=$_POST['DataMhs7th'];
			// tambahan
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				if($model->lampiran){
					// $nama = $model->lampiran->getName();
					// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/DataMhs7th/'.$nama);
				}
				$this->redirect(array('view','id'=>$model->id_mhs7));
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
		$dataProvider=new CActiveDataProvider('DataMhs7th', 
			array(
				'criteria'=>$criteria,
				'pagination'=>array(
			        'pageSize'=>10,
			    ),
			)
		);
		// end tambahan
		// $dataProvider=new CActiveDataProvider('DataMhs7th');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new DataMhs7th('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['DataMhs7th']))
			$model->attributes=$_GET['DataMhs7th'];

		$this->render('admin',array(
			'model'=>$model,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return DataMhs7th the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=DataMhs7th::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param DataMhs7th $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='data-mhs7th-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	// mhs 7 tahun teakhir
	public function actionSentDataMhs7(){
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
		    ->select('a.th_akreditasi,t.id_prodi,t.kegiatan_BK,t.pelaksanaan_BK,t.hasil_BK,t.kegiatan_minat,t.pelaksanaan_minat,t.hasil_minat,t.kegiatan_softskill,
		    	t.pelaksanaan_softskill,t.hasil_softskill,
		    		t.kegiatan_beasiswa,t.pelaksanaan_beasiswa,t.hasil_beasiswa,t.kegiatan_kesehatan,t.pelaksanaan_kesehatan,t.hasil_kesehatan,p.jurusan')
		    ->from('layanan t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('a.th_akreditasi,t.*,p.jurusan,a.id_administrasi')
		    ->from('data_mhs_7th t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}

		// echo "<pre>";
		// print_r($data['data']);
		// echo "</pre>";
		$th_akreditasi = '';
		$dt['data'] = array();
		if(!empty($data['data'])){
			foreach ($data['data'] as $key => $value) {
				if($value['TS_jum'] == 'TS'){
					$dt['data']['ts'][] = $value;
				}else if($value['TS_jum'] == 'TS1'){
					$dt['data']['ts1'][] = $value;						
				}else if($value['TS_jum'] == 'TS2'){
					$dt['data']['ts2'][] = $value;	
				}else if($value['TS_jum'] == 'TS3'){
					$dt['data']['ts3'][] = $value;
				}else if($value['TS_jum'] == 'TS4'){
					$dt['data']['ts4'][] = $value;
				}else if($value['TS_jum'] == 'TS5'){
					$dt['data']['ts5'][] = $value;
				}else if($value['TS_jum'] == 'TS6'){
					$dt['data']['ts6'][] = $value;
				}
			}
		}
		

		$myHtml = $this->renderPartial('v_mhs_7',$dt,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFMhs7(){
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
		    ->select('a.th_akreditasi,t.*,p.jurusan,a.id_administrasi')
		    ->from('data_mhs_7th t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=t.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryAll();
		}

		$th_akreditasi = '';
		$dt['data'] = array();
		if(!empty($data['data'])){
			foreach ($data['data'] as $key => $value) {
				$th_akreditasi = $value['th_akreditasi'];
				if($value['TS_jum'] == 'TS'){
					$dt['data']['ts'][] = $value;
				}else if($value['TS_jum'] == 'TS1'){
					$dt['data']['ts1'][] = $value;						
				}else if($value['TS_jum'] == 'TS2'){
					$dt['data']['ts2'][] = $value;	
				}else if($value['TS_jum'] == 'TS3'){
					$dt['data']['ts3'][] = $value;
				}else if($value['TS_jum'] == 'TS4'){
					$dt['data']['ts4'][] = $value;
				}else if($value['TS_jum'] == 'TS5'){
					$dt['data']['ts5'][] = $value;
				}else if($value['TS_jum'] == 'TS6'){
					$dt['data']['ts6'][] = $value;
				}
			}
		}

		// echo "<pre>";
		// print_r($dt['data']);
		// echo "</pre>";

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4-L');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_mhs7_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$th_akreditasi .'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_mhs7', $dt, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end mhs 7 tahun
}
