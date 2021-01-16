<?php

class Agendadanpenelitian_ps_S2Controller extends Controller
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
				'actions'=>array('admin','delete','update','create','index','view','getdataagenda','sentdataagenda','cetakPDFagenda'),
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
		$layout='//layouts/column2';
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
		$layout='//layouts/column2';
		$model=new Agendadanpenelitian_ps_S2;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Agendadanpenelitian_ps_S2']))
		{
			$model->attributes=$_POST['Agendadanpenelitian_ps_S2'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_agenda));
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
		$layout='//layouts/column2';
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Agendadanpenelitian_ps_S2']))
		{
			$model->attributes=$_POST['Agendadanpenelitian_ps_S2'];
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id_agenda));
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


		$dataProvider=new CActiveDataProvider('Agendadanpenelitian_ps_S2',
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
		$layout='//layouts/column2';
		
		$model=new Agendadanpenelitian_ps_S2('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Agendadanpenelitian_ps_S2']))
			$model->attributes=$_GET['Agendadanpenelitian_ps_S2'];

		$this->render('admin',array(
			'model'=>$model,'manajemen'=>'manajemen',
		));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Agendadanpenelitian_ps_S2 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Agendadanpenelitian_ps_S2::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Agendadanpenelitian_ps_S2 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='agendadanpenelitian-ps--s2-form')
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
				 ->select('k.id_prodi, k.nama_dosen,k.judul_penelitian,
			    	k.agenda_penelitian, k.keterlibatan_penelitian, p.jurusan')
			    ->from('Agendadanpenelitian_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    //->andWhere('k.status=:st', array(':st'=>'penelitian'))
				->andWhere('p.id_prodi=:id', array(':id'=>$id_prodi))
				->andWhere('a.id_administrasi=:id_a', array(':id_a'=>$id_administrasi))
				->queryAll();

		}else{

				$data['data'] = Yii::app()->db->createCommand()
				 ->select('k.id_prodi, k.nama_dosen,k.judul_penelitian,
			    	k.agenda_penelitian, k.keterlibatan_penelitian, p.jurusan')
			    ->from('Agendadanpenelitian_s2 k')
			    ->join('prodi p', 'k.id_prodi=p.id_prodi')
			    ->join('administrasi a','a.id_administrasi=k.id_administrasi')
			    //->andWhere('k.status=:st', array(':st'=>'penelitian'))
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

		$data['data'] = array();
		$data['data'] = Yii::app()->db->createCommand()
				 ->select('k.id_prodi, k.nama_dosen,k.judul_penelitian,
			    	k.agenda_penelitian, k.keterlibatan_penelitian, p.jurusan')
			    ->from('Agendadanpenelitian_s2 k')
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
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_agenda_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Magister '.$data["data"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_agenda', $data, true));
        }
        

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}
	// end penelitian dosen

	// mahasiswa
	
}
