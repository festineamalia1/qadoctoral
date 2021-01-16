<?php

class TataPamongController extends Controller
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
				'actions'=>array('admin','delete','create','index','view','getdata','sentdata','getdata_kepemimpinan','sentdata2','getdata_sispeng',
						'sentdata3','getdata_penjaminmutu','sentdata4','getdata_umpanbalik','sentdata5','getdata_keberlanjutan','sentdata6',
						'CetakPDFPamong','CetakPDFKepemimpinan','CetakPDFSispeng','CetakPDFPenjamin_mutu','CetakPDFUmpan_balik','CetakPDFKeberlanjutan'),
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
		$model=new TataPamong;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TataPamong']))
		{
			$model->attributes=$_POST['TataPamong'];
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				if($model->lampiran){
					// $nama = $model->lampiran->getName();
					// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/TataPamong/'.$nama);
				}
				$this->redirect(array('view','id'=>$model->id_tata_pamong));
			}
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

		if(isset($_POST['TataPamong']))
		{
			$model->attributes=$_POST['TataPamong'];
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id_tata_pamong));
			}
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
		$criteria=new CDbCriteria;
		$criteria->with = array( 'relasi_administrasi' );
		if(Yii::app()->user->group_id != 1){
			$criteria->with = array( 'relasi_prodi' );
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}
		$dataProvider=new CActiveDataProvider('TataPamong', 
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
		$model=new TataPamong('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TataPamong']))
			$model->attributes=$_GET['TataPamong'];

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
				$this->_model=TataPamong::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='tata-pamong-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	// tata pamong 
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
			$id_prodi = '1';
		}
		if(isset($_POST['id_administrasi'])){
			$id_administrasi = $_POST['id_administrasi'];
		}else{
			$id_administrasi = '';
		}

		$data['id_prodi']=$id_prodi;
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('t.*')
	    ->from('tata_pamong t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a','t.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();



		$myHtml = $this->renderPartial('v_data',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFPamong(){
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
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.th_akademik,a.id_administrasi,a.th_akreditasi,t.id_prodi,t.F_Struktur_Organisasi,t.sistem_tata_pamong,p.jurusan')
	    ->from('tata_pamong t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a','t.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();

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
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pamong_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pamong', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end tata pamong

	// kepemimpinan
	public function actionGetData_kepemimpinan(){

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

		$this->render('v_getdata_kepemimpinan',$data);
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

		$data['id_prodi']=$id_prodi;
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,t.id_prodi,t.kepemimpinan,p.jurusan,t.lampiran')
	    ->from('tata_pamong t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		
		$myHtml = $this->renderPartial('v_kepemimpinan',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFKepemimpinan(){
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
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,t.id_prodi,t.kepemimpinan,p.jurusan')
	    ->from('tata_pamong t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();

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
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_kepemimpinan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_kepemimpinan', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();

	}	

	// end kepemimpinan

	// Sistem pengelolaan
	public function actionGetData_sispeng(){
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

		$this->render('v_getdata_sispeng',$data);
	}

	public function actionSentData3(){
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
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,t.id_prodi,t.sistem_pengelolaan,p.jurusan,t.lampiran')
	    ->from('tata_pamong t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		
		$myHtml = $this->renderPartial('v_sispeng',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFSispeng(){
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
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,t.id_prodi,t.sistem_pengelolaan,p.jurusan')
	    ->from('tata_pamong t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();

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
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_sispeng_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_sispeng', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end sistem pengelolaan

	// Penjamin mutu
	public function actionGetData_penjaminmutu(){
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

		$this->render('v_getdata_penjaminmutu',$data);
	}	

	public function actionSentData4(){
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
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,t.id_prodi,t.penjaminan_mutu,p.jurusan,t.lampiran')
	    ->from('tata_pamong t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		
		$myHtml = $this->renderPartial('v_penjaminmutu',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPDFPenjamin_mutu(){
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
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	     ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,t.id_prodi,t.penjaminan_mutu,p.jurusan')
	    ->from('tata_pamong t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();

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
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_penjaminanmutu_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_penjaminanmutu', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end penjamin mutu

	// umpan balik 
	public function actionGetData_umpanbalik(){
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
	    
		$this->render('v_getdata_umpanbalik',$data);
	}

	public function actionSentData5(){
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
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,t.id_prodi,t.umpan_balik_dosen,t.umpan_balik_mhs,t.umpan_balik_alumni,t.tindak_lanjut_dosen,t.tindak_lanjut_mhs,
	    	t.umpan_balik_alumni,t.tindak_lanjut_alumni,t.umpan_balik_lulusan,t.tindak_lanjut_lulusan,p.jurusan,t.lampiran')
	    ->from('tata_pamong t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		
		$myHtml = $this->renderPartial('v_umpanbalik',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFUmpan_balik(){
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
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
		    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,t.id_prodi,t.umpan_balik_dosen,t.umpan_balik_mhs,t.umpan_balik_alumni,t.tindak_lanjut_dosen,t.tindak_lanjut_mhs,
		    	t.umpan_balik_alumni,t.tindak_lanjut_alumni,t.umpan_balik_lulusan,t.tindak_lanjut_lulusan,p.jurusan')
		    ->from('tata_pamong t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
		    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

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
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_umpanbalik_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_umpanbalik', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}


	// end umpan balik

	// keberlanjutan
	public function actionGetData_keberlanjutan(){
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

		$this->render('v_getdata_keberlanjutan',$data);
	}


	public function actionSentData6(){
		if(isset($_POST['id_prodi'])){
			$id_prodi = $_POST['id_prodi'];
		}else{
			$id_prodi = '0';
		}
		if(isset($_POST['id_administrasi'])){
			$id_administrasi = $_POST['id_administrasi'];
		}else{
			$id_administrasi = '';
		}
		$data['id_prodi']=$id_prodi;
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,t.id_prodi,t.animo_calon_mhs,t.mutu_manajemen,t.mutu_lulusan,t.kerjasama_kemitraan,t.hibah_kompetitif,p.jurusan,t.lampiran')
	    ->from('tata_pamong t')
	    ->join('prodi p', 't.id_prodi=p.id_prodi')
	    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
	    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		
		$myHtml = $this->renderPartial('v_keberlanjutan',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFKeberlanjutan(){
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
		$data['data'] = Yii::app()->db->createCommand()
		   	->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,t.id_prodi,t.animo_calon_mhs,t.mutu_manajemen,t.mutu_lulusan,t.kerjasama_kemitraan,t.hibah_kompetitif,p.jurusan')
		    ->from('tata_pamong t')
		    ->join('prodi p', 't.id_prodi=p.id_prodi')
		    ->join('administrasi a', 't.id_administrasi=a.id_administrasi')
		    ->andWhere('t.id_prodi=:id', array(':id'=>$id_prodi))
		    ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
		    ->queryRow();

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
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_keberlanjutan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_keberlanjutan', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	// end keberlanjutan

	

}
