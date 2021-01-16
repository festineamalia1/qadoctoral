<?php

class VisiMisiController extends Controller
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
				'actions'=>array('index','view','create','admin','GetData','SentData','CetakPDF'),
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
		$model=new VisiMisi;
		$administrasi = new Administrasi;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['VisiMisi']))
		{
			$model->attributes=$_POST['VisiMisi'];
			if($model->save()){
				if($model->lampiran){
				}
				$this->redirect(array('view','id'=>$model->id_visi_misi));
			}
			// end tambahan
		}

		$this->render('create',array(
			'model'=>$model,'manajemen'=>'manajemen','administrasi'=>$administrasi,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel();
		$administrasi = new Administrasi;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['VisiMisi']))
		{
			$model->attributes=$_POST['VisiMisi'];
			// tambahan
			// $model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				if($model->lampiran){
					// $nama = $model->lampiran->getName();
					// $model->lampiran->saveAs(Yii::app()->basePath.'/../file/VisiMisi/'.$nama);
				}
				$this->redirect(array('view','id'=>$model->id_visi_misi));
			}
			// end tambahan
		}

		$this->render('update',array(
			'model'=>$model,'manajemen'=>'manajemen','administrasi'=>$administrasi,
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
		$dataProvider=new CActiveDataProvider('VisiMisi', 
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
		$model=new VisiMisi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['VisiMisi']))
			// $model->attributes=$_GET['VisiMisi'];
			$model->attributes=$_GET['VisiMisi'];

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
				$this->_model=VisiMisi::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='visi-misi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

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
		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,v.mekanisme,v.visi,v.misi,v.tujuan,v.sasaran,v.strategi,v.sosialisasi,p.jurusan,v.id_prodi,v.lampiran')
	    ->from('visi_misi v')
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
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,v.mekanisme,v.visi,v.misi,v.tujuan,v.sasaran,v.strategi,v.sosialisasi,p.jurusan,v.id_prodi')
	    ->from('visi_misi v')
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
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$dt["thn_administrasi"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$dt["thn_administrasi"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf', $data, true));
        }


        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

}
