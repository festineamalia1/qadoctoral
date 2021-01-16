<?php

class Penelitian_Dosentetap_Ps_S2Controller extends Controller
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
				'actions'=>array('admin','delete','update','create','index','view','getdataagenda','sentdataagenda','CetakPDFagenda','getdatatesis','sentdatatesis','cetakPDFtesis','getdatapenjelasan','sentdatapenjelasan','cetakPDFpenjelasan','getdatadampak','sentdatadampak','cetakPDFdampak','getdatakerjasamadlm','sentdatakerjasamadlm','cetakPDFkerjasamadalam','getdatakerjasamaluar','sentdatakerjasamaluar','cetakPDFkerjasamaluar','getdatapenelitian','sentdatapenelitian','cetakPDFpenelitian','getdatajudul','sentdatajudul','cetakPDFjudul','getdatakarya','sentdatakarya','cetakPDFkarya','getdatatopik','sentdatatopik','cetakPDFtopik','getdata_pkm','sentdata_pkm','cetakPDFpkm','getdatapelayanan','sentdatapelayanan','cetakPDFpelayanan'),
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
			'model'=>$this->loadModel($id), 'manajemen'=>'manajemen',
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{	
		$this->layout='//layouts/column2';

		$model=new Penelitian_Dosentetap_Ps_S2;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Penelitian_Dosentetap_Ps_S2']))
		{
			$model->attributes=$_POST['Penelitian_Dosentetap_Ps_S2'];
			$model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				$model->lampiran->saveAs(Yii::app()->basePath.'/../file/Lampiran/'.$model->lampiran);
				$this->redirect(array('view','id'=>$model->id_penelitian_dosentetap_ps_s2));
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
		$this->layout='//layouts/column2';
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Penelitian_Dosentetap_Ps_S2']))
		{
			$model->attributes=$_POST['Penelitian_Dosentetap_Ps_S2'];
			$model->lampiran=CUploadedFile::getInstance($model,'lampiran');
			if($model->save()){
				$model->lampiran->saveAs(Yii::app()->basePath.'/../file/Lampiran/'.$model->lampiran);
				$this->redirect(array('view','id'=>$model->id_penelitian_dosentetap_ps_s2));
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

		$dataProvider=new CActiveDataProvider('Penelitian_Dosentetap_Ps_S2',
			array(
				'criteria'=>$criteria,
				'pagination'=>array(
			        'pageSize'=>10,
				),
			)
		);
		// end tambahan	
		$this->render('index',array(
			'dataProvider'=>$dataProvider, 'manajemen'=>'manajemen',
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{	
		$this->layout='//layouts/column2';

		$model=new Penelitian_Dosentetap_Ps_S2('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Penelitian_Dosentetap_Ps_S2']))
			$model->attributes=$_GET['Penelitian_Dosentetap_Ps_S2'];

		$this->render('admin',array(
			'model'=>$model, 'manajemen'=>'manajemen',
		));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Penelitian_Dosentetap_Ps_S2 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Penelitian_Dosentetap_Ps_S2::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Penelitian_Dosentetap_Ps_S2 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='penelitian--dosentetap--ps--s2-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
public function actionGetDataAgenda(){
		$layout='//layouts/main';
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
		$this->render('v_getdata_agenda',$data);
	}

	public function actionSentDataAgenda(){
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
				 ->select('k.*, p.jurusan')
			    ->from('agendadanpenelitian_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			 //    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				// ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

				$data['tesis'] = Yii::app()->db->createCommand()
				->select('k.*,p.jurusan')
			    ->from('tesis_mhs_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

	

		}else{

				$data['data'] = Yii::app()->db->createCommand()
				 ->select('k.*, p.jurusan')
			    ->from('agendadanpenelitian_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

				$data['tesis'] = Yii::app()->db->createCommand()
				->select('k.*,p.jurusan')
			    ->from('tesis_mhs_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}
		
					$myHtml = $this->renderPartial('v_data_agenda',$data,true); 
					echo $myHtml;
					Yii::app()->end(); 
					return;	
				
			}	

	public function actionCetakPDFagenda(){
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

		// $data['id_administrasi'] = $id_administrasi;
		// $data['id_prodi'] = $id_prodi;
		


		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		// $data['data'] = array();
		if($id_prodi == 1){
			$data['data'] = Yii::app()->db->createCommand()
				 ->select('k.*, p.jurusan')
			    ->from('agendadanpenelitian_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				 ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

				$data['tesis'] = Yii::app()->db->createCommand()
				->select('k.*,p.jurusan')
			    ->from('tesis_mhs_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			     ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

	

		}else{

				$data['data'] = Yii::app()->db->createCommand()
				 ->select('k.*, p.jurusan')
			    ->from('agendadanpenelitian_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

				$data['tesis'] = Yii::app()->db->createCommand()
				->select('k.*,p.jurusan')
			    ->from('tesis_mhs_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}


	    // call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4-L');

		$data['thn_administrasi'] = Yii::app()->db->createCommand()
			->select('a.*')
			->from('administrasi a')
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryRow();

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister  '.$data["thn_administrasi"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_agenda_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$data["thn_administrasi"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_agenda', $data, true));
        }
        # Renders image
        //   $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end penelitian dosen

	// mahasiswa


	public function actionGetDataTesis(){
		$layout='//layouts/main';
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
		$this->render('v_getdata_tesis',$data);
	}


	public function actionSentDataTesis(){
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
				 ->select('k.id_prodi,k.id_administrasi,
			    	k.judul_tesis, k.nama_mhs_s2, k.nama_dosen,p.jurusan')
			    ->from('tesis_mhs_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			   	->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

		}else{

				$data['data'] = Yii::app()->db->createCommand()
				 ->select('k.id_prodi,k.id_administrasi,
			    	k.judul_tesis, k.nama_mhs_s2, k.nama_dosen,p.jurusan')
			    ->from('tesis_mhs_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}



				// $dt['penelitian'] = Yii::app()->db->createCommand()
			 //    ->select('k.*,p.jurusan')
			 //    ->from('penelitian_dosentetap_ps k')
			 //    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			 //    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			 //    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				// ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				// ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				// ->queryAll();
				/*
			    ->select('k.id_agenda,k.id_prodi,k.id_administrasi, k.nama_dosen,k.judul_penelitian,
			    	k.agenda_penelitian, k.ts, k.keterlibatan_penelitian, k.id_sumber_data, k.sumber_data,
			    	k.lampiran,k.id_prodi,k.jabatan_penelitian, p.jurusan')
			    ->from('Agendadanpenelitian_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryRow();
				*/
		
					$myHtml = $this->renderPartial('v_data_tesis',$data,true); 
					echo $myHtml;
					Yii::app()->end(); 
					return;	
				
			}	



	public function actionCetakPDFtesis(){
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

		// $data['id_administrasi'] = $id_administrasi;
		// $data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
				  ->select('k.id_prodi,k.id_administrasi,
			    	k.judul_tesis, k.nama_mhs_s2, k.nama_dosen,p.jurusan')
			    ->from('tesis_mhs_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    //->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		


	    // call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister  '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_tesis_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_tesis', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	public function actionGetDataPenjelasan(){
		$layout='//layouts/main';
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
		$this->render('v_getdata_penjelasan',$data);
	}
	public function actionSentDataPenjelasan(){
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
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,v.*')
	    ->from('penjelasan_pendekatandanpemikiran v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();



				// $dt['penelitian'] = Yii::app()->db->createCommand()
			 //    ->select('k.*,p.jurusan')
			 //    ->from('penelitian_dosentetap_ps k')
			 //    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			 //    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			 //    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				// ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				// ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				// ->queryAll();
				/*
			    ->select('k.id_agenda,k.id_prodi,k.id_administrasi, k.nama_dosen,k.judul_penelitian,
			    	k.agenda_penelitian, k.ts, k.keterlibatan_penelitian, k.id_sumber_data, k.sumber_data,
			    	k.lampiran,k.id_prodi,k.jabatan_penelitian, p.jurusan')
			    ->from('Agendadanpenelitian_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    ->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryRow();
				*/
		
					$myHtml = $this->renderPartial('v_data_penjelasan',$data,true); 
					echo $myHtml;
					Yii::app()->end(); 
					return;	
				
			}

	public function actionCetakPDFpenjelasan(){
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

		// $data['id_administrasi'] = $id_administrasi;
		// $data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik,a.th_akreditasi,v.*')
	    ->from('penjelasan_pendekatandanpemikiran v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		


	    // call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister  '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_penjelasan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_penjelasan', $data, true));
         }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}


	public function actionGetDataDampak(){
		$layout='//layouts/main';
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
		$this->render('v_getdata_dampak',$data);
	}

	public function actionSentDataDampak(){
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
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,v.*')
	    ->from('dampak_penelitian v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();

		
		$myHtml = $this->renderPartial('v_data_dampak',$data,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
				
		}

		public function actionCetakPDFdampak(){
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

		// $data['id_administrasi'] = $id_administrasi;
		// $data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,v.*')
	    ->from('dampak_penelitian v')
	    ->join('prodi p', 'v.id_prodi=p.id_prodi')
	    ->join('administrasi a','v.id_administrasi=a.id_administrasi')
	    ->andWhere('v.id_prodi=:id', array(':id'=>$id_prodi))
	    ->andWhere('v.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
	    ->queryRow();
		


	    // call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister  '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_dampak_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_dampak', $data, true));
         }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}


	public function actionGetDataKerjasamadlm(){
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
		
		//echo '<pre>'; print_r($data); exit;
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();
		$this->render('v_getdata_kerjasamadalam',$data);
	}

	public function actionSentDataKerjasamadlm(){
		//print_r($_POST); exit;
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

		//print_r($id_prodi); exit;

		if($id_prodi == 1){
			$data['id_administrasi']=$id_administrasi;
			$data['id_prodi']=$id_prodi;		
			$data['data'] = array();
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan')
		    ->from('kerjasama_dlm k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();
		} else {
			$data['id_administrasi']=$id_administrasi;
			$data['id_prodi']=$id_prodi;
			$data['data'] = array();
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan')
		    ->from('kerjasama_dlm k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();
			//$data['data']=$data['data_jur'][0];
		}
	    // ->join('tbl_profile p', 'u.id=p.user_id')
	    // ->where('id=:id', array(':id'=>$id))
	    // var_dump($data['data']);
	    //print_r($data['data']); exit;
		$myHtml = $this->renderPartial('v_data_kerjasamadalam',$data,true);
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	


	public function actionCetakPDFkerjasamadalam(){
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

		// $data['id_administrasi'] = $id_administrasi;
		// $data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan')
		    ->from('kerjasama_dlm k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();
		


	    // call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister  '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_kerjasama_dalam_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_kerjasama_dalam', $data, true));
         }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	public function actionGetDataKerjasamaluar(){
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
		
		//echo '<pre>'; print_r($data); exit;
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();
		$this->render('v_getdata_kerjasamaluar',$data);
	}

	public function actionSentDataKerjasamaluar(){
		//print_r($_POST); exit;
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

		//print_r($id_prodi); exit;

		if($id_prodi == 1){
			$data['id_administrasi']=$id_administrasi;
			$data['id_prodi']=$id_prodi;		
			$data['data'] = array();
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan')
		    ->from('kerjasama_luar k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();
		} else {
			$data['id_administrasi']=$id_administrasi;
			$data['id_prodi']=$id_prodi;
			$data['data'] = array();
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan')
		    ->from('kerjasama_luar k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();
			//$data['data']=$data['data_jur'][0];
		}
	    // ->join('tbl_profile p', 'u.id=p.user_id')
	    // ->where('id=:id', array(':id'=>$id))
	    // var_dump($data['data']);
	    //print_r($data['data']); exit;
		$myHtml = $this->renderPartial('v_data_kerjasamaluar',$data,true);
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	


	public function actionCetakPDFkerjasamaluar(){
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

		// $data['id_administrasi'] = $id_administrasi;
		// $data['id_prodi'] = $id_prodi;

		if($id_prodi == 1){
			$data['id_administrasi']=$id_administrasi;
			$data['id_prodi']=$id_prodi;		
			$data['data'] = array();
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan')
		    ->from('kerjasama_luar k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();
		} else {
			$data['id_administrasi']=$id_administrasi;
			$data['id_prodi']=$id_prodi;
			$data['data'] = array();
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan')
		    ->from('kerjasama_luar k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();
			//$data['data']=$data['data_jur'][0];
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
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister  '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_kerjasama_dalam_luar', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_kerjasama_luar', $data, true));
         }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}


	public function actionGetDataPenelitian(){
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
		
		//echo '<pre>'; print_r($data); exit;
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();
		$this->render('v_getdata_penelitian',$data);
	}

	public function actionSentDataPenelitian(){
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
			//echo "string"; exit;

		    $data['s_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_penelitian_dosentetap_ps_s2')
				->queryAll();

			$dt['s'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
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

			$dt['s'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();


			//7.2.1 jumlah kegiatan pelayanan/pengabdian kepada masyarakat (*) yang sesuai dengan bidang keilmuan PS 
		    $data['s_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_penelitian_dosentetap_ps_s2')
				->queryAll();

			//7.2.2 kegiatan pelayanan/pengabdian kepada masyarakat
			// $data['pkm_pelayanan'] = Yii::app()->db->createCommand()
			//     ->select('k.*,p.jurusan')
			//     ->from('judul_pelayanandanpengabdian k')
			//     ->join('prodi p', 'k.id_prodi=p.id_prodi')
			//     ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			// 	->order('id_pelayana desc')
			// 	->queryAll();
		}

		$dt['data'] = array();
		
		//7.2.1
		foreach ($data['s_penelitian'] as $key => $value) {
			if($value['biaya'] == 'sendiri'){
				if(empty($dt['data']['sendiri'])){
					$dt['data']['sendiri'][] = $value;
				}	
			}else if($value['biaya'] == 'pt'){
				if(empty($dt['data']['pt'])){
					$dt['data']['pt'][] = $value;
				}
			}else if($value['biaya'] == 'depdiknas'){
				if(empty($dt['data']['depdiknas'])){
					$dt['data']['depdiknas'][] = $value;
				}
			}else if($value['biaya'] == 'dlm negeri'){
				if(empty($dt['data']['dlm negeri'])){
					$dt['data']['dlm negeri'][] = $value;
				}
			}else if($value['biaya'] == 'luar negeri'){
				if(empty($dt['data']['luar negeri'])){
					$dt['data']['luar negeri'][] = $value;
				}
			}
		}

		//7.2.2
	    // $dt['data']['pelayanan']=$data['pkm_pelayanan'];
		//echo "<pre>"; print_r($dt); exit;
		$myHtml = $this->renderPartial('v_penelitian',$dt,true); 
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionGetDataJudul(){
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
		
		//echo '<pre>'; print_r($data); exit;
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();
		$this->render('v_getdata_judul',$data);
	}

	public function actionSentDataJudul(){
		//print_r($_POST); exit;
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

		//print_r($id_prodi); exit;

		$data['id_administrasi']=$id_administrasi;
		$data['id_prodi']=$id_prodi;	

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
	    ->select('k.*,p.jurusan')
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

		// $data['id_administrasi'] = $id_administrasi;
		// $data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan')
		    ->from('hasil_karya k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();
		


	    // call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister  '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_judul_', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_judul', $data, true));
         }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}	

	public function actionGetDatakarya(){
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
		
		//echo '<pre>'; print_r($data); exit;
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();
		$this->render('v_getdata_karya',$data);
	}

	public function actionSentDataKarya(){
		//print_r($_POST); exit;
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

		//print_r($id_prodi); exit;

		if($id_prodi == 1){
			$data['id_administrasi']=$id_administrasi;
			$data['id_prodi']=$id_prodi;		
			$data['data'] = array();
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan')
		    ->from('hasil_karya k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();
		} else {
			$data['id_administrasi']=$id_administrasi;
			$data['id_prodi']=$id_prodi;
			$data['data'] = array();
			$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan')
		    ->from('hasil_karya k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();

		}
		
		$myHtml = $this->renderPartial('v_data_karya',$data,true);
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

		// $data['id_administrasi'] = $id_administrasi;
		// $data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
		    ->select('k.*,p.jurusan')
		    ->from('hasil_karya k')
		    ->join('prodi p', 'k.id_prodi=p.id_prodi')
		    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
		    // ->andWhere('k.jenis_kerjasama=:jk', array(':jk'=>'dlm negeri'))
			->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
			->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
			->queryAll();
		


	    // call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister  '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_karya_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_karya', $data, true));
         }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}


	public function actionGetDataTopik(){
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
		// topik_penelitian
		
		//echo '<pre>'; print_r($data); exit;
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();
	  }
		$this->render('v_getdata_topik',$data);
	}



	public function actionSentDataTopik(){
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
				   ->select('s.*,p.jurusan')
				    ->from('topik_penelitian s')
				    ->join('prodi p', 's.id_prodi=p.id_prodi')
				    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
				    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
					->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				    ->queryAll();
		}else{
			$data['data'] = Yii::app()->db->createCommand()
				    ->select('s.*,p.jurusan')
				    ->from('topik_penelitian s')
				    ->join('prodi p', 's.id_prodi=p.id_prodi')
				    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
				    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
					->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				    ->queryAll();
		}
		
		$myHtml = $this->renderPartial('v_data_topik',$data,true);
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}	

	public function actionCetakPDFtopik(){

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

		// $data['id_administrasi'] = $id_administrasi;
		// $data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
		    ->select('s.*,p.jurusan')
				    ->from('topik_penelitian s')
				    ->join('prodi p', 's.id_prodi=p.id_prodi')
				    ->join('administrasi a','a.id_administrasi=s.id_administrasi')
				    ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
					->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				    ->queryAll();
		


	    // call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister  '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_topik_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_topik', $data, true));
         }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}



	public function actionCetakPDFpenelitian(){
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
			//echo "string"; exit;

		    $data['s_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_penelitian_dosentetap_ps_s2')
				->queryAll();

			$dt['s'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
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

			$dt['s'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();


			//7.2.1 jumlah kegiatan pelayanan/pengabdian kepada masyarakat (*) yang sesuai dengan bidang keilmuan PS 
		    $data['s_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('penelitian_dosentetap_ps_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_penelitian_dosentetap_ps_s2')
				->queryAll();

			//7.2.2 kegiatan pelayanan/pengabdian kepada masyarakat
			// $data['pkm_pelayanan'] = Yii::app()->db->createCommand()
			//     ->select('k.*,p.jurusan')
			//     ->from('judul_pelayanandanpengabdian k')
			//     ->join('prodi p', 'k.id_prodi=p.id_prodi')
			//     ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			// 	->order('id_pelayana desc')
			// 	->queryAll();
		}

		$dt['data'] = array();
		
		//7.2.1
		foreach ($data['s_penelitian'] as $key => $value) {
			if($value['biaya'] == 'sendiri'){
				if(empty($dt['data']['sendiri'])){
					$dt['data']['sendiri'][] = $value;
				}	
			}else if($value['biaya'] == 'pt'){
				if(empty($dt['data']['pt'])){
					$dt['data']['pt'][] = $value;
				}
			}else if($value['biaya'] == 'depdiknas'){
				if(empty($dt['data']['depdiknas'])){
					$dt['data']['depdiknas'][] = $value;
				}
			}else if($value['biaya'] == 'dlm negeri'){
				if(empty($dt['data']['dlm negeri'])){
					$dt['data']['dlm negeri'][] = $value;
				}
			}else if($value['biaya'] == 'luar negeri'){
				if(empty($dt['data']['luar negeri'])){
					$dt['data']['luar negeri'][] = $value;
				}
			}
		}



			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();

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
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_penelitian_fakultas', $dt, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_penelitian', $dt, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	public function actionGetData_pkm(){
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
		
		//echo '<pre>'; print_r($data); exit;
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();
		$this->render('v_getdata_pkm',$data);
	}

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
			//echo "string"; exit;

		     $data['pkm_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('pengabdi k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_pengabdian desc')
				->queryAll();

			$dt['pkm'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('pengabdi k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
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

			$dt['pkm'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('pengabdi k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();


			//7.2.1 jumlah kegiatan pelayanan/pengabdian kepada masyarakat (*) yang sesuai dengan bidang keilmuan PS 
		    $data['pkm_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('pengabdi k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_pengabdian desc')
				->queryAll();

			//7.2.2 kegiatan pelayanan/pengabdian kepada masyarakat
			// $data['pkm_pelayanan'] = Yii::app()->db->createCommand()
			//     ->select('k.*,p.jurusan')
			//     ->from('judul_pelayanandanpengabdian k')
			//     ->join('prodi p', 'k.id_prodi=p.id_prodi')
			//     ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			// 	->order('id_pelayana desc')
			// 	->queryAll();
		}

		$dt['data'] = array();
		
		//7.2.1
		foreach ($data['pkm_penelitian'] as $key => $value) {
			if($value['sumber_biaya'] == 'sendiri'){
				if(empty($dt['data']['sendiri'])){
					$dt['data']['sendiri'][] = $value;
				}	
			}else if($value['sumber_biaya'] == 'pt'){
				if(empty($dt['data']['pt'])){
					$dt['data']['pt'][] = $value;
				}
			}else if($value['sumber_biaya'] == 'depdiknas'){
				if(empty($dt['data']['depdiknas'])){
					$dt['data']['depdiknas'][] = $value;
				}
			}else if($value['sumber_biaya'] == 'dlm negeri'){
				if(empty($dt['data']['dlm negeri'])){
					$dt['data']['dlm negeri'][] = $value;
				}
			}else if($value['sumber_biaya'] == 'luar negeri'){
				if(empty($dt['data']['luar negeri'])){
					$dt['data']['luar negeri'][] = $value;
				}
			}
		}

		//7.2.2
	    // $dt['data']['pelayanan']=$data['pkm_pelayanan'];
		//echo "<pre>"; print_r($dt); exit;
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
			//echo "string"; exit;

		     $data['pkm_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('pengabdi k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_pengabdian desc')
				->queryAll();

			$dt['pkm'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('pengabdi k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
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

			$dt['pkm'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('pengabdi k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();


			//7.2.1 jumlah kegiatan pelayanan/pengabdian kepada masyarakat (*) yang sesuai dengan bidang keilmuan PS 
		    $data['pkm_penelitian'] = Yii::app()->db->createCommand()
			    ->select('k.*,p.jurusan')
			    ->from('pengabdi k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    // ->andWhere('k.status=:st', array(':st'=>'pkm'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->order('id_pengabdian desc')
				->queryAll();

			//7.2.2 kegiatan pelayanan/pengabdian kepada masyarakat
			// $data['pkm_pelayanan'] = Yii::app()->db->createCommand()
			//     ->select('k.*,p.jurusan')
			//     ->from('judul_pelayanandanpengabdian k')
			//     ->join('prodi p', 'k.id_prodi=p.id_prodi')
			//     ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			// 	->order('id_pelayana desc')
			// 	->queryAll();
		}

		$dt['data'] = array();
		
		//7.2.1
		foreach ($data['pkm_penelitian'] as $key => $value) {
			if($value['sumber_biaya'] == 'sendiri'){
				if(empty($dt['data']['sendiri'])){
					$dt['data']['sendiri'][] = $value;
				}	
			}else if($value['sumber_biaya'] == 'pt'){
				if(empty($dt['data']['pt'])){
					$dt['data']['pt'][] = $value;
				}
			}else if($value['sumber_biaya'] == 'depdiknas'){
				if(empty($dt['data']['depdiknas'])){
					$dt['data']['depdiknas'][] = $value;
				}
			}else if($value['sumber_biaya'] == 'dlm negeri'){
				if(empty($dt['data']['dlm negeri'])){
					$dt['data']['dlm negeri'][] = $value;
				}
			}else if($value['sumber_biaya'] == 'luar negeri'){
				if(empty($dt['data']['luar negeri'])){
					$dt['data']['luar negeri'][] = $value;
				}
			}
		}



			$dt['thn_administrasi'] = Yii::app()->db->createCommand()
				->select('a.*')
				->from('administrasi a')
				->andWhere('a.id_administrasi=:id_a',array(':id_a'=>$id_administrasi))
				->queryRow();

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
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pkm_fakultas', $dt, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$dt['thn_administrasi']['th_akreditasi'].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pkm', $dt, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

	public function actionGetDataPelayanan(){
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
		
		//echo '<pre>'; print_r($data); exit;
	    $data['administrasi'] = Yii::app()->db->createCommand()
	    ->select('a.id_administrasi,a.th_akademik')
	    ->from('administrasi a')
	    ->order('id_administrasi desc')
	    ->queryAll();
		$this->render('v_getdata_pelayanan',$data);
	}

	public function actionSentDataPelayanan(){
		//print_r($_POST); exit;
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
			//echo "1";
			$data['data'] = Yii::app()->db->createCommand()
				->select('k.*,p.jurusan')
			    ->from('judul_pelayanandanpengabdian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			     ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

		}else{
			//echo "2";
			
				$data['data'] = Yii::app()->db->createCommand()
				 ->select('k.*,p.jurusan')
			    ->from('judul_pelayanandanpengabdian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    
			      ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				
				  ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}

		//print_r($data['data']);exit;

		
					$myHtml = $this->renderPartial('v_data_pelayanan',$data,true); 
					echo $myHtml;
					Yii::app()->end(); 
					return;	
				
	}	


	public function actionCetakPDFpelayanan(){
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

		// $data['id_administrasi'] = $id_administrasi;
		// $data['id_prodi'] = $id_prodi;

		$data['id_administrasi'] = $id_administrasi;
		$data['id_prodi'] = $id_prodi;

		$data['data'] = array();
		if($id_prodi == 1){
			//echo "1";
			$data['data'] = Yii::app()->db->createCommand()
				->select('k.*,p.jurusan')
			    ->from('judul_pelayanandanpengabdian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			     ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

		}else{
			//echo "2";
			
				$data['data'] = Yii::app()->db->createCommand()
				 ->select('k.*,p.jurusan')
			    ->from('judul_pelayanandanpengabdian k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    
			      ->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				
				  ->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();
		}
		//print_r($data['data']);exit;

		


	    // call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents(Yii::app()->theme->basePath . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);

        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Magister  '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pelayanan_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_pelayanan', $data, true));
         }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}




}