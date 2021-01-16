<?php
/* @var $this SdmController */
/* @var $model Sdm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sdm-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

<!-- tambahan -->
<?php echo "<b>Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu
penyelenggaraan program akademik.</b>";?><br><br>
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
				<?php echo $form->error($model,'id_prodi'); ?>
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
		array('prompt' => 'Pilih Administrasi')
		); ?>
	</div>
<!-- end tambahan -->
	<br><br>
	<div class="row">
		<?php echo $form->labelEx($model,'rekrut_seleksi'); ?>
		<?php //echo $form->textArea($model,'rekrut_seleksi',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'rekrut_seleksi'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'rekrut_seleksi',
                'editorTemplate'=>'full',
                'htmlOptions'=>array('class'=>'input-xxlarge tinymce'),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
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
	<br><br>
	<div class="row">
		<?php echo $form->labelEx($model,'penempatan'); ?>
		<?php //echo $form->textArea($model,'penempatan',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'penempatan'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'penempatan',
                'editorTemplate'=>'full',
                'htmlOptions'=>array('class'=>'input-xxlarge tinymce'),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
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
	<br><br>
	<div class="row">
		<?php echo $form->labelEx($model,'pengembangan'); ?>
		<?php //echo $form->textArea($model,'pengembangan',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pengembangan'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'pengembangan',
                'editorTemplate'=>'full',
                'htmlOptions'=>array('class'=>'input-xxlarge tinymce'),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
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
	<br><br>
	<div class="row">
		<?php echo $form->labelEx($model,'retensi'); ?>
		<?php //echo $form->textArea($model,'retensi',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'retensi'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'retensi',
                'editorTemplate'=>'full',
                'htmlOptions'=>array('class'=>'input-xxlarge tinymce'),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
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
	<br><br>
	<div class="row">
		<?php echo $form->labelEx($model,'berhenti_dosen'); ?>
		<?php //echo $form->textArea($model,'berhenti_dosen',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'berhenti_dosen'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'berhenti_dosen',
                'editorTemplate'=>'full',
                'htmlOptions'=>array('class'=>'input-xxlarge tinymce'),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
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
	<br><br>
	<div class="row">
		<?php echo $form->labelEx($model,'berhenti_kependidikan'); ?>
		<?php //echo $form->textArea($model,'berhenti_kependidikan',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'berhenti_kependidikan'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'berhenti_kependidikan',
                'editorTemplate'=>'full',
                'htmlOptions'=>array('class'=>'input-xxlarge tinymce'),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
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
	<br><br>
	<div class="row">
		<?php echo "<b>Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan.
Sistem monitoring dan evaluasi serta rekam jejak kinerja dosen dan tenaga kependidikan diatur dalam buku pedoman akademik dan modul
akademik</b>";?><br><br>
		<?php echo $form->labelEx($model,'monitoring'); ?>
		<?php //echo $form->textArea($model,'monitoring',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'monitoring'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'monitoring',
                'editorTemplate'=>'full',
                'htmlOptions'=>array('class'=>'input-xxlarge tinymce'),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
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
	<br><br>
	<div class="row">
		<?php echo $form->labelEx($model,'evaluasi'); ?>
		<?php //echo $form->textArea($model,'evaluasi',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'evaluasi'); ?><?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'evaluasi',
                'editorTemplate'=>'full',
                'htmlOptions'=>array('class'=>'input-xxlarge tinymce'),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
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
	<br><br>
	<div class="row">
		<?php echo $form->labelEx($model,'rekam_jejak'); ?>
		<?php //echo $form->textArea($model,'rekam_jejak',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'rekam_jejak'); ?><?php echo $form->error($model,'evaluasi'); ?><?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'rekam_jejak',
                'editorTemplate'=>'full',
                'htmlOptions'=>array('class'=>'input-xxlarge tinymce'),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
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
	<br><br>
	<div class="row">
		<?php echo $form->labelEx($model,'ket_tambahan'); ?>
		<?php echo $form->textArea($model,'ket_tambahan',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50, 'placeholder'=>'Diisi jika ada')); ?>
		<?php echo $form->error($model,'ket_tambahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
	</div>

<!-- tambahan -->
	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'lampiran'); ?>
		<?php // echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->fileField($model,'lampiran',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'lampiran'); ?>
	</div> -->
<!-- end tambahan -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->