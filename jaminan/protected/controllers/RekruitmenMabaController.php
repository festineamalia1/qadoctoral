<?php

class RekruitmenMabaController extends Controller
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
				'actions'=>array('index','view','create','admin','update','delete','GetData','SentData_profil','GetData_profil','CetakPDF_profil','GetData_studi','Getdata_evaluasi','Getdata_himpunan','CetakPDF_himpunan','SentData','SentData_himpunan','SentData_studi','CetakPDF'),
				'expression'=> (isset(Yii::app()->user->group_id))?'Yii::app()->user->group_id != 0':'',
				// 'users'=>array('*'),
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
		//$this->layout='//layouts/column2';
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
		$model=new RekruitmenMaba;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RekruitmenMaba']))
		{
			$model->attributes=$_POST['RekruitmenMaba'];
			if($model->save()){
				if($model->lampiran){

				}
				$this->redirect(array('view','id'=>$model->id_rmaba));
			}
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
		//$this->layout='//layouts/column2';
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RekruitmenMaba']))
		{
			$model->attributes=$_POST['RekruitmenMaba'];
			if($model->save()){
				if($model->lampiran){

				}
				$this->redirect(array('view','id'=>$model->id_rmaba));
			}
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
		$criteria=new CDbCriteria;
		$criteria->with = array( 'relasi_administrasi' );
		if(Yii::app()->user->group_id != 1){
			$criteria->with = array( 'relasi_prodi' );
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}
		$dataProvider=new CActiveDataProvider('RekruitmenMaba',
			array(
				'criteria'=>$criteria,
				'pagination'=>array(
			        'pageSize'=>10,
			    ),
			)    
		);
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
		$model=new RekruitmenMaba('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RekruitmenMaba']))
			$model->attributes=$_GET['RekruitmenMaba'];

		$this->render('admin',array(
			'model'=>$model,'manajemen'=>'manajemen',
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return RekruitmenMaba the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$this->layout='//layouts/column2';
		$model=RekruitmenMaba::model()->findByPk($id);
		if($model===null)
		{
			if(isset($_GET['id']))
				$this->_model=RekruitmenMaba::model()->findbyPk($_GET['id']);
			if($model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param RekruitmenMaba $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rekruitmen-maba-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	//ini rekruitmen maba yang di depan, yang home itu, okok? ;)
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
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('v_getdata',$data);
	}

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

		// $data['data'] = VisiMisi::model()->findByAttributes(array('id_prodi'=>$id_prodi));
		$data['id_prodi']=$id_prodi;
		$data['id_administrasi']=$id_administrasi;
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,v.kebijakan_rekruitmen_calon_maba,v.kriteria_seleksi_maba,v.sistem_pengambilan_kptsan,v.prosedur_penerimaan_maba,p.jurusan,v.id_prodi,v.lampiran')
	    ->from('rekruitmen_maba v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		
		$myHtml = $this->renderPartial('v_data',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}
	public function actionCetakPDF(){

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

		// create query
		// $data['data'] = VisiMisi::model()->findByAttributes(array('id_prodi'=>$id_prodi));
		$data['id_prodi']=$id_prodi;
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,v.kebijakan_rekruitmen_calon_maba,v.kriteria_seleksi_maba,v.sistem_pengambilan_kptsan,v.prosedur_penerimaan_maba,p.jurusan,v.id_administrasi,v.id_prodi')
	    ->from('rekruitmen_maba v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();

	    // tambahan
	    $dt['thn_administrasi'] = Yii::app()->db->createCommand()
			->select('a.*')
			->from('administrasi a')
			->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
			->queryRow();
		// end tambahan

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basepath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister '.$dt["thn_administrasi"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$dt["thn_administrasi"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf', $data, true));
        }


        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}	
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

	//alumni
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
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('v_getdata_himpunan',$data);
	}

	public function actionSentData_himpunan(){
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

		$data['id_prodi']=$id_prodi;
		$data['id_administrasi']=$id_administrasi;
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('*')
	    ->from('himpunan_alumni_s3 v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		
		$myHtml = $this->renderPartial('v_himpunan',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;
	}

	public function ActionCetakPDF_himpunan(){
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

		// create query
		// $data['data'] = VisiMisi::model()->findByAttributes(array('id_prodi'=>$id_prodi));
		$data['id_prodi']=$id_prodi;
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,v.*')
	    ->from('himpunan_alumni_s3 v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();

	    // tambahan
	    $dt['thn_administrasi'] = Yii::app()->db->createCommand()
			->select('a.*')
			->from('administrasi a')
			->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
			->queryRow();
		// end tambahan

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basepath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Doktoral '.$dt["thn_administrasi"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_himpunan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktoral '.$dt["thn_administrasi"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_himpunan', $data, true));
        }


        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	//end himpunan

	//hasil studi
	public  function actionGetData_studi(){
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
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();

		$this->render('v_getdata_evaluasi',$data);		
	}
	public function ActionSentData_studi(){
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
	    ->from('hasil_studi_pelacakan v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();

	    foreach ($data['data'] as $key => $value) {
			if($value['jenis_kemampuan'] == 'Pengembangan diri'){
				$data['data']['pengembangan'][] = $value;
			}else if($value['jenis_kemampuan'] == 'Kerjasama dalam tim'){
				$data['data']['kerjasama'][] = $value;
			}else if($value['jenis_kemampuan'] == 'Komunikasi'){
				$data['data']['komunikasi'][] = $value;
			}else if($value['jenis_kemampuan'] == 'Penggunaan teknologi informasi'){
				$data['data']['teknologi'][] = $value;
			}else if($value['jenis_kemampuan'] == 'Bahasa Asing'){
				$data['data']['BAsing'][] = $value;
			}else if($value['jenis_kemampuan'] == 'Keahlian berdasarkan bidang ilmu (profesionalisme)'){
				$data['data']['profesionalisme'][] = $value;
			}else if($value['jenis_kemampuan'] == 'Integritas (etika dan moral)'){
				$data['data']['etikamoral'][] = $value;
			}else if($value['jenis_kemampuan'] == 'Keluasan wawasan antar disiplin ilmu'){
				$data['data']['wawasan_disiplin'][] = $value;
			}else if($value['jenis_kemampuan'] == 'Kepemimpinan'){
				$data['data']['kepemimpinan'][] = $value;
			}
		}
		
		$myHtml = $this->renderPartial('v_studi',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;
	}
	//end evaluasi

	//profil mahasiswa
	public function ActionGetData_profil(){
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

		$this->render('v_getdata_profil',$data);

	}

	public function ActionSentData_profil(){
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
			
		}else{
			
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('mr.*,p.id_prodi,p.jurusan')
		    ->from('jml_mahasiswa_s3 mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('th_akademik desc')  
		    ->queryAll();
		/*	$jumlah=0;
			$jmlIpkRata=0;
		
		 foreach ($data['data'] as $key => $value) {
		 	$A=$value['jml_lulusan'];
		 	$B=$value['ipk_rata'];
		 	$jmlIpkRata+=$B;
		 	$kali=$A*$B;
		 	$jumlah+=$kali;
		 }
		 $rata=$jumlah/$jmlIpkRata;
		 echo $rata;
		 exit;*/


		}
	

		$data['id_administrasi'] = $id_administrasi;
	    $data['id_prodi'] = $id_prodi;
	
	    $myHtml = $this->renderPartial('v_data_profil',$data,true); 
		echo $myHtml;		
		Yii::app()->end(); 
		return;	

	}

	public function ActionCetakPDF_Profil(){
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
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('mr.*,p.id_prodi,p.jurusan,a.th_akreditasi')
		    ->from('jml_mahasiswa_s3 mr')
		    ->join('prodi p', 'mr.id_prodi=p.id_prodi')
		    ->join('administrasi a','mr.id_administrasi=a.id_administrasi')
		    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->order('tahun_akademik desc')   
		    ->limit(5)
		    ->queryAll();

		

		$thn_akreditasi = '';
		foreach ($data['data'] as $key => $value) {
			$thn_akreditasi = $value['th_akreditasi'];
		}

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4-L');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Doktoral 200'.$thn_akreditasi.'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_profil_fakultas', $data, true));
        }else{
        	// footer
        $mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Doktoral '.$thn_akreditasi.'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_profil', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
}