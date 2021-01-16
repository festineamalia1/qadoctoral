<?php
/* @var $this SaranaPustakaController */
/* @var $model SaranaPustaka */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sarana-pustaka-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

<!-- tambahan -->
	<?php echo "<b>Tuliskan rekapitulasi jumlah ketersediaan pustaka (buku teks, karya ilmiah, dan jurnal; termasuk juga dalam bentuk CD-ROM dan media
				lainnya) yang relevan dengan bidang Program Studi.</b>";?><br><br>
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
		<?php echo $form->labelEx($model,'jenis_pustaka'); ?>
		<?php echo $form->error($model,'jenis_pustaka'); ?>
		<?php echo $form->dropDownList($model,'jenis_pustaka',array('buku teks'=>'Buku Teks','jurnal nas'=>'Jurnal Nasional','jurnal inter'=>'Jurnal Internasional','prosiding'=>'Prosiding','skripsi'=>'Skripsi','thesis'=>'Thesis','disertasi'=>'Disertasi','penelitian'=>'Penelitian','makalah'=>'Makalah','kliping'=>'Kliping','artikel'=>'Artikel','ebook'=>'Ebook'),array('prompt' => 'Pilih Jenis Pustaka')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_judul'); ?>
		<?php echo $form->error($model,'jml_judul'); ?>
		<?php echo $form->textField($model,'jml_judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_copy'); ?>
		<?php echo $form->error($model,'jml_copy'); ?>
		<?php echo $form->textField($model,'jml_copy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
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