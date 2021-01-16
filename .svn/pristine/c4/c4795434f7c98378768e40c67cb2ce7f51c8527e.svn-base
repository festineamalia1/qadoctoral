<?php

class ProdiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */

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
				'actions'=>array('index','view','admin','delete','update','create','sentdata','getdata','cetakpdfidentitas'),
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
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Prodi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Prodi']))
		{
			$model->attributes=$_POST['Prodi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_prodi));
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

		if(isset($_POST['Prodi']))
		{
			$model->attributes=$_POST['Prodi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_prodi));
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
		$dataProvider=new CActiveDataProvider('Prodi');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Prodi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Prodi']))
			$model->attributes=$_GET['Prodi'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Prodi the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Prodi::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Prodi $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='prodi-form')
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
		$dosen = array();
		$pengisi = array();
		if($id_prodi != 1){
			$dosen = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('data_dosen')
		    ->Where('id_prodi=:id', array(':id'=>$id_prodi))
		    ->queryAll();
		}

		$pengisi = Yii::app()->db->createCommand()
		->select('*')
		->from('pengisi_borang')
		->andWhere('id_prodi=:id', array(':id'=>$id_prodi))
		->andWhere('id_administrasi=:id_ad', array(':id_ad'=>$id_administrasi))
		->queryAll();

		if(!empty($id_prodi)){
			if($id_prodi == '1'){
				$data['data'] = $this->loadModel($id_prodi);
			}else{
				$data['data'] = $this->loadModel($id_prodi);
			}
		}
		$data['dosen'] = $dosen;
		$data['pengisi'] = $pengisi;
		$data['id_prodi'] = $id_prodi;
		$data['id_administrasi'] = $id_administrasi;
		if($id_prodi == 1){
			$myHtml = $this->renderPartial('v_data_fakultas',$data,true); 
		}else{
			$myHtml = $this->renderPartial('v_data_prodi',$data,true); 
		}
		echo $myHtml;
		Yii::app()->end(); 
		return;	
	}

	public function actionCetakPdfIdentitas(){
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
		$dosen = array();
		$pengisi = array();
		if($id_prodi != 1){
			$dosen = Yii::app()->db->createCommand()
		    ->select('*')
		    ->from('data_dosen')
		    ->Where('id_prodi=:id', array(':id'=>$id_prodi))
		    ->queryAll();
		}

		$pengisi = Yii::app()->db->createCommand()
		->select('*')
		->from('pengisi_borang')
		->andWhere('id_prodi=:id', array(':id'=>$id_prodi))
		->andWhere('id_administrasi=:id_ad', array(':id_ad'=>$id_administrasi))
		->queryAll();

		if(!empty($id_prodi)){
			if($id_prodi == '1'){
				$data['data'] = $this->loadModel($id_prodi);
			}else{
				$data['data'] = $this->loadModel($id_prodi);
			}
		}
		$data['dosen'] = $dosen;
		$data['pengisi'] = $pengisi;

		// call constructor
		$mPDF1 = Yii::app()->ePdf->mpdf('', 'A4');

		# render (full page)
        // $mPDF1->WriteHTML($this->render('v_data', $data, true));

        # Load a stylesheet
        $stylesheet = file_get_contents('..'.Yii::app()->theme->baseUrl . '/css/fisiep.css');
        $mPDF1->WriteHTML($stylesheet, 1);
        
        if($id_prodi == 1){
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Portofolio Fakultas/ Sekolah Tinggi, Akreditasi PS Sarjana '.$dt["thn_administrasi"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_fakultas', $data, true));
        }else{
        	// footer
        	$mPDF1->SetHTMLFooter('<p style="padding-top:5px;border-top:1px solid black;width:100%;text-align:left;font-size:11px;font-weight:bold;">BAN-PT : Borang Akreditasi Program Studi Sarjana '.$dt["thn_administrasi"]["th_akreditasi"].'</p>');
        	# renderPartial (only 'view' of current controller)
	        $mPDF1->WriteHTML($this->renderPartial('v_pdf_prodi', $data, true));
        }

        $mPDF1->AddPage();
		if($id_prodi == 1){
        	$mPDF1->WriteHTML($this->renderPartial('//prodi/v_pdf_pengisi_fakultas', $data, true));
        }else{
        	$mPDF1->WriteHTML($this->renderPartial('//prodi/v_pdf_pengisi', $data, true));
        }

        # Renders image
        // $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' ));
 
        # Outputs ready PDF
        $mPDF1->Output();
	}

}
