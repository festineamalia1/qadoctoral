<?php
/* @var $this JmlMahasiswaS3Controller */
/* @var $model JmlMahasiswaS3 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jml-mahasiswa-s2-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>
<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>
	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>
	<?
		if(YII::app()->user->group_id==1){
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
					Prodi::model()->findAll(), 'id_prodi', 'nama_prodi'),
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

	<div class="row">
		<?php echo $form->labelEx($model,'tahun_akademik'); ?>
		<?php echo $form->error($model,'tahun_akademik'); ?>
		<?php echo $form->dropDownList($model,'tahun_akademik',array('TS'=>'TS','TS-1'=>'TS-1','TS-2'=>'TS-2','TS-3'=>'TS-3','TS-4'=>'TS-4'),array('prompt' => 'Pilih Tahun Akademik')); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'daya_tampung'); ?>
		<?php echo $form->error($model,'daya_tampung'); ?>
		<?php echo $form->textField($model,'daya_tampung'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'jml_ikut_seleksi'); ?>
		<?php echo $form->error($model,'jml_ikut_seleksi'); ?>
		<?php echo $form->textField($model,'jml_ikut_seleksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_lolos_seleksi'); ?>
		<?php echo $form->error($model,'jml_lolos_seleksi'); ?>
		<?php echo $form->textField($model,'jml_lolos_seleksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_maba'); ?>
		<?php echo $form->error($model,'jml_maba'); ?>
		<?php echo $form->textField($model,'jml_maba'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_maba_transfer'); ?>
		<?php echo $form->error($model,'jml_maba_transfer'); ?>
		<?php echo $form->textField($model,'jml_maba_transfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_total'); ?>
		<?php echo $form->error($model,'jml_total'); ?>
		<?php echo $form->textField($model,'jml_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_total_transfer'); ?>
		<?php echo $form->error($model,'jml_total_transfer'); ?>
		<?php echo $form->textField($model,'jml_total_transfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_lulusan'); ?>
		<?php echo $form->error($model,'jml_lulusan'); ?>
		<?php echo $form->textField($model,'jml_lulusan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_lulusan_transfer'); ?>
		<?php echo $form->error($model,'jml_lulusan_transfer'); ?>
		<?php echo $form->textField($model,'jml_lulusan_transfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rata_lama_studi'); ?>
		<?php echo $form->error($model,'rata_lama_studi'); ?>
		<?php echo $form->textField($model,'rata_lama_studi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ipk_min'); ?>
		<?php echo $form->error($model,'ipk_min'); ?>
		<?php echo $form->textField($model,'ipk_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ipk_max'); ?>
		<?php echo $form->error($model,'ipk_max'); ?>
		<?php echo $form->textField($model,'ipk_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ipk_rata'); ?>
		<?php echo $form->error($model,'ipk_rata'); ?>
		<?php echo $form->textField($model,'ipk_rata'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_mhs_wna'); ?>
		<?php echo $form->error($model,'jml_mhs_wna'); ?>
		<?php echo $form->textField($model,'jml_mhs_wna'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->