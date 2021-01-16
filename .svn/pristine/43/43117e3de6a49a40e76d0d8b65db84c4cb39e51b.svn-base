<?php
/* @var $this TenagaKependidikanController */
/* @var $model TenagaKependidikan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tenaga-kependidikan-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

<!-- tambahan -->
	<?
	if(Yii::app()->user->group_id == 1){
		?>
			<div class="row">
				<?php echo $form->labelEx($model,'id_prodi'); ?>
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
		<?php echo $form->dropDownList($model, 'id_administrasi', CHtml::listData(
		Administrasi::model()->findAll(), 'id_administrasi', 'th_akademik'),
		array('prompt' => 'Pilih Administrasi')
		); ?>
	</div>
<!-- end tambahan -->
	<div class="row">
		<?php echo $form->labelEx($model,'jenis_tenaga'); ?>
		<?php echo $form->dropDownList($model,'jenis_tenaga',array('laboran'=>'Laboran','teknisi'=>'Teknisi','analisis'=>'Analisis','operator'=>'Operator','programmer'=>'Programmer'),array('prompt' => 'Pilih Jenis Tenaga')); ?>
		<?php echo $form->error($model,'jenis_tenaga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumS3'); ?>
		<?php echo $form->textField($model,'jumS3'); ?>
		<?php echo $form->error($model,'jumS3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumS2'); ?>
		<?php echo $form->textField($model,'jumS2'); ?>
		<?php echo $form->error($model,'jumS2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumS1'); ?>
		<?php echo $form->textField($model,'jumS1'); ?>
		<?php echo $form->error($model,'jumS1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumD4'); ?>
		<?php echo $form->textField($model,'jumD4'); ?>
		<?php echo $form->error($model,'jumD4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumD3'); ?>
		<?php echo $form->textField($model,'jumD3'); ?>
		<?php echo $form->error($model,'jumD3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumD2'); ?>
		<?php echo $form->textField($model,'jumD2'); ?>
		<?php echo $form->error($model,'jumD2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumD1'); ?>
		<?php echo $form->textField($model,'jumD1'); ?>
		<?php echo $form->error($model,'jumD1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumSMA'); ?>
		<?php echo $form->textField($model,'jumSMA'); ?>
		<?php echo $form->error($model,'jumSMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumSMK'); ?>
		<?php echo $form->textField($model,'jumSMK'); ?>
		<?php echo $form->error($model,'jumSMK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit_kerja'); ?>
		<?php echo $form->textField($model,'unit_kerja',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'unit_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upaya_peningkatan_kompetensi'); ?>
		<?php //echo $form->textArea($model,'upaya_peningkatan_kompetensi',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'upaya_peningkatan_kompetensi'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'upaya_peningkatan_kompetensi',
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->