<?php
/* @var $this SubstansiPraktekController */
/* @var $model SubstansiPraktek */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'substansi-praktek-form',
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

	<div class="row">
		<?php echo $form->labelEx($model,'kode_mk'); ?>
		<?php echo $form->dropDownList($model, 'kode_mk', CHtml::listData(
		MkKurikulum::model()->findAll(), 'kode_mk', 'kode_mk'),
		array('prompt' => 'Pilih Kode MK')
		); ?>
	</div>
<!-- end tambahan -->


	<div class="row">
		<?php echo $form->labelEx($model,'judul_modul'); ?>
		<?php echo $form->textField($model,'judul_modul',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'judul_modul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jam_pelaksanaan'); ?><?php echo '(Total waktu pelaksanaan. contoh: 15 jam)'?><br>
		<?php echo $form->textField($model,'jam_pelaksanaan'); ?>
		<?php echo $form->error($model,'jam_pelaksanaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lokasi_praktek'); ?><?php echo '(contoh:lapangan, kelas, instansi, dll)'?><br>
		<?php echo $form->textField($model,'lokasi_praktek',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'lokasi_praktek'); ?>
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