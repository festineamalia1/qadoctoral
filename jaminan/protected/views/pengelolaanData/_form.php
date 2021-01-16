<?php
/* @var $this PengelolaanDataController */
/* @var $model PengelolaanData */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengelolaan-data-form',
	'enableAjaxValidation'=>false,
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
		<?php echo $form->labelEx($model,'jenis_data'); ?>
		<?php echo $form->error($model,'jenis_data'); ?>
		<?php echo $form->dropDownList($model,'jenis_data',array('mhs'=>'Mahasiswa','krs'=>'KRS','jadwal mk'=>'Jadwal MK','nilai mk'=>'Nilai MK','transkrip akademik'=>'Transkrip Akademik','lulusan'=>'Lulusan','dosen'=>'Dosen','pegawai'=>'Pegawai','keuangan'=>'Keuangan','inventaris'=>'Inventaris','perpustakaan'=>'Perpustakaan'),array('prompt' => 'Pilih Jenis Data')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sistem_pengelolaan'); ?>
		<?php echo $form->error($model,'sistem_pengelolaan'); ?>
		<?php echo $form->dropDownList($model,'sistem_pengelolaan',array('manual'=>'Manual','kom non jaringan'=>'Komputer Non Jaringan','lan'=>'LAN','wan'=>'WAN'),array('prompt' => 'Pilih Sistem Pengelola')); ?>
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