<?php
/* @var $this TataPamongController */
/* @var $model TataPamong */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tata-pamong-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>
	<p>Jelaskan secara ringkas sistem dan pelaksanaan tata pamong di program studi untuk  membangun sistem tata pamong yang <b>kredibel, transparan, akuntabel, bertanggung jawab dan adil </b> dalam mewujudkan visi, melaksanakan misi, mencapai tujuan dan melaksanakan strategi pencapaian sasaran.</p>
	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>
<!-- tambahan -->
	<?
	if(Yii::app()->user->group_id == 1){
		?>
			<div class="row">
				<?php echo $form->labelEx($model,'id_prodi'); ?>
				<?php echo $form->error($model,'id_prodi'); ?>
				<?php echo $form->dropDownList($model, 'id_prodi', CHtml::listData(
				Prodi::model()->findAll(), 'id_prodi', 'nama_prodi'),
				array('prompt' => 'Pilih Prodi')
				); ?>
			</div>
		<?
	}else{
		?>
			<div class="row">
				<?php echo $form->labelEx($model,'id_prodi'); ?>
				<?php echo $form->dropDownList($model, 'id_prodi', CHtml::listData(
				Prodi::model()->findAllByAttributes(array('id_prodi'=>Yii::app()->user->group_id)), 'id_prodi', 'nama_prodi'),
				array('prompt' => 'Pilih Prodi')
				); ?>
			</div>
		<?
	}
	?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_administrasi'); ?>
		<?php echo $form->error($model,'id_administrasi'); ?>
		<?php echo $form->dropDownList($model, 'id_administrasi', CHtml::listData(
		Administrasi::model()->findAll(), 'id_administrasi', 'th_akademik'),
		array('prompt' => 'Pilih Tahun')
		); ?>
	</div>
<!-- selesai tambahan -->

		<div class="row tiny">
		<?php echo $form->labelEx($model,'sistem_tata_pamong');?>
		<?php echo $form->error($model,'sistem_tata_pamong'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'sistem_tata_pamong',
                'editorTemplate'=>'full',
                'htmlOptions'=>array(
                					'class'=>'input-xxlarge tinymce',
                					'placeholder'=>'Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, transparan, akuntabel,bertanggung jawab dan adil.',
                					),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,image,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
	                'theme_advanced_buttons2' => '',
	                'theme_advanced_buttons3' => '',
	                'theme_advanced_buttons4' => '',
	                'theme_advanced_toolbar_location' => 'top',
	                'theme_advanced_toolbar_align' => 'left',
	                'theme_advanced_statusbar_location' => 'none',
	                'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
	                                                15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
	            ),
			)); 
		?>
	</div>


	<div class="row tiny">
		<?php echo $form->labelEx($model,'kredibel');?>
		<?php echo $form->error($model,'kredibel'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'kredibel',
                'editorTemplate'=>'full',
                'htmlOptions'=>array(
                					'class'=>'input-xxlarge tinymce',
                					'placeholder'=>'Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, transparan, akuntabel,bertanggung jawab dan adil.',
                					),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,image,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
	                'theme_advanced_buttons2' => '',
	                'theme_advanced_buttons3' => '',
	                'theme_advanced_buttons4' => '',
	                'theme_advanced_toolbar_location' => 'top',
	                'theme_advanced_toolbar_align' => 'left',
	                'theme_advanced_statusbar_location' => 'none',
	                'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
	                                                15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
	            ),
			)); 
		?>
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'transparan');?>
		<?php echo $form->error($model,'transparan'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'transparan',
                'editorTemplate'=>'full',
                'htmlOptions'=>array(
                					'class'=>'input-xxlarge tinymce',
                					'placeholder'=>'Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, transparan, akuntabel,bertanggung jawab dan adil.',
                					),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,image,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
	                'theme_advanced_buttons2' => '',
	                'theme_advanced_buttons3' => '',
	                'theme_advanced_buttons4' => '',
	                'theme_advanced_toolbar_location' => 'top',
	                'theme_advanced_toolbar_align' => 'left',
	                'theme_advanced_statusbar_location' => 'none',
	                'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
	                                                15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
	            ),
			)); 
		?>
	</div>
	<div class="row tiny">
		<?php echo $form->labelEx($model,'akuntable');?>
		<?php echo $form->error($model,'akuntable'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'akuntable',
                'editorTemplate'=>'full',
                'htmlOptions'=>array(
                					'class'=>'input-xxlarge tinymce',
                					'placeholder'=>'Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, transparan, akuntabel,bertanggung jawab dan adil.',
                					),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,image,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
	                'theme_advanced_buttons2' => '',
	                'theme_advanced_buttons3' => '',
	                'theme_advanced_buttons4' => '',
	                'theme_advanced_toolbar_location' => 'top',
	                'theme_advanced_toolbar_align' => 'left',
	                'theme_advanced_statusbar_location' => 'none',
	                'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
	                                                15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
	            ),
			)); 
		?>
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'bertanggungjawab');?>
		<?php echo $form->error($model,'bertanggungjawab'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'bertanggungjawab',
                'editorTemplate'=>'full',
                'htmlOptions'=>array(
                					'class'=>'input-xxlarge tinymce',
                					'placeholder'=>'Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, transparan, akuntabel,bertanggung jawab dan adil.',
                					),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,image,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
	                'theme_advanced_buttons2' => '',
	                'theme_advanced_buttons3' => '',
	                'theme_advanced_buttons4' => '',
	                'theme_advanced_toolbar_location' => 'top',
	                'theme_advanced_toolbar_align' => 'left',
	                'theme_advanced_statusbar_location' => 'none',
	                'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
	                                                15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
	            ),
			)); 
		?>
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'adil');?>
		<?php echo $form->error($model,'adil'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'adil',
                'editorTemplate'=>'full',
                'htmlOptions'=>array(
                					'class'=>'input-xxlarge tinymce',
                					'placeholder'=>'Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk memilih pemimpin dan membangun sistem tata pamong yang kredibel, transparan, akuntabel,bertanggung jawab dan adil.',
                					),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,image,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
	                'theme_advanced_buttons2' => '',
	                'theme_advanced_buttons3' => '',
	                'theme_advanced_buttons4' => '',
	                'theme_advanced_toolbar_location' => 'top',
	                'theme_advanced_toolbar_align' => 'left',
	                'theme_advanced_statusbar_location' => 'none',
	                'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
	                                                15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
	            ),
			)); 
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->