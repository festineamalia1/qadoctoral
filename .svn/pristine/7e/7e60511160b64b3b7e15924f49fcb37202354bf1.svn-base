<?php
/* @var $this PeralatanUtamaController */
/* @var $model PeralatanUtama */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peralatan-utama-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

<!-- tambahan -->
	<?php echo "<b>Tuliskan peralatan utama yang digunakan di laboratorium (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/balai kesehatan,
green house, lahan untuk pertanian, dan sejenisnya) yang dipergunakan dalam proses pembelajaran di jurusan/fakultas.</b>";?><br><br>
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
		<?php echo $form->labelEx($model,'nama_lab'); ?>
		<?php echo $form->error($model,'nama_lab'); ?>
		<?php echo $form->textField($model,'nama_lab',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_peralatan'); ?>
		<?php echo $form->error($model,'jenis_peralatan'); ?>
		<?php echo $form->textField($model,'jenis_peralatan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_unit'); ?>
		<?php echo $form->error($model,'jml_unit'); ?>
		<?php echo $form->textField($model,'jml_unit'); ?>
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
		<?php echo $form->labelEx($model,'rata2_wkt_guna'); ?>
		<?php echo $form->error($model,'rata2_wkt_guna'); ?>
		<?php echo $form->textField($model,'rata2_wkt_guna',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
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