<?php
/* @var $this KegiatanDosenController */
/* @var $model KegiatanDosen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kegiatan-dosen-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

<!-- tambahan -->
	<?php echo "<b>Kegiatan dosen tetap yang bidang keahliannya sesuai dengan Program Studi dalam seminar ilmiah/lokakarya/penataran/<i>workshop</i>/pagelaran/
pameran/peragaan yang tidak hanya melibatkan dosen Perguruan Tinggi sendiri</b>";?><br><br>
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
		<?php echo $form->labelEx($model,'nama_dosen'); ?>
		<?php //echo $form->textField($model,'nama_dosen',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama_dosen'); ?>
		<?php echo $form->dropDownList($model, 'nama_dosen', CHtml::listData(
		DataDosen::model()->findAll(), 'nama_dosen', 'nama_dosen'),
		array('prompt' => 'Pilih Dosen')
		); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kegiatan'); ?>
		<?php echo $form->error($model,'jenis_kegiatan'); ?>
		<?php echo $form->dropDownList($model,'jenis_kegiatan',array('seminar ilmiah'=>'Seminar Ilmiah','lokakarya'=>'Lokakarya','penataran'=>'Penataran','workshop'=>'Workshop','pagelaran'=>'Pagelaran','pameran'=>'Pameran','peragaan'=>'Peragaan','lainnya'=>'Lainnya'),array('prompt' => 'Pilih Kegiatan')); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'tempat'); ?>
		<?php echo $form->error($model,'tempat'); ?>
		<?php echo $form->textField($model,'tempat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu'); ?>
		<?php echo "(contoh: 2011)";?><br>
		<?php echo $form->error($model,'waktu'); ?>
		<?php echo $form->textField($model,'waktu',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sebagai'); ?>
		<?php echo $form->error($model,'sebagai'); ?>
		<?php echo $form->dropDownList($model,'sebagai',array('penyaji'=>'Penyaji','peserta'=>'Peserta'),array('prompt' => 'Pilih')); ?>
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