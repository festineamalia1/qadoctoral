<?php
/* @var $this PrasaranaLainController */
/* @var $model PrasaranaLain */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prasarana-lain-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>


<!-- tambahan -->
	<?php echo "<b>Tuliskan data prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang
				perpustakaan, kebun percobaan, dsb. kecuali ruang dosen) yang dipergunakan PS
				dalam proses belajar mengajar dan data prasarana lain yang menunjang (misalnya tempat olah raga, ruang
				bersama, ruang himpunan mahasiswa, poliklinik).</b>";?> <br><br>
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
		<?php echo $form->labelEx($model,'jenis_prasarana'); ?>
		<?php echo $form->error($model,'jenis_prasarana'); ?>
		<?php echo $form->textField($model,'jenis_prasarana',array('size'=>160,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_unit'); ?>
		<?php echo $form->error($model,'jml_unit'); ?>
		<?php echo $form->textField($model,'jml_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tot_luas'); ?>
		<?php echo $form->error($model,'tot_luas'); ?>
		<?php echo $form->textField($model,'tot_luas',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kepemilikan'); ?>
		<?php echo $form->error($model,'kepemilikan'); ?>
		<?php echo $form->dropDownList($model,'kepemilikan',array('sendiri'=>'Milik Sendiri','sewa'=>'Sewa'),array('prompt' => 'Pilih Kepemilikan')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kondisi'); ?>
		<?php echo $form->error($model,'kondisi'); ?>
		<?php echo $form->dropDownList($model,'kondisi',array('terawat'=>'Terawat','tidak'=>'Tidak Terawat'),array('prompt' => 'Pilih Kondisi')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utilisasi'); ?>
		<?php echo $form->error($model,'utilisasi'); ?>
		<?php echo $form->textField($model,'utilisasi',array('size'=>150,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit_pengelola'); ?>
		<?php echo $form->error($model,'unit_pengelola'); ?>
		<?php echo $form->textField($model,'unit_pengelola',array('size'=>150,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ket_prasarana'); ?>
		<?php echo $form->error($model,'ket_prasarana'); ?>
		<?php echo $form->dropDownList($model,'ket_prasarana',array('penunjang'=>'Prasarana Penunjang','lain'=>'Prasarana Lain'),array('prompt' => 'Pilih Keterangan Prasarana')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
	</div>

	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'lampiran'); ?>
		<?php //echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'lampiran'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->