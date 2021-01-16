<?php
/* @var $this PenelitianDosentetapPsController */
/* @var $model PenelitianDosentetapPs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penelitian-dosentetap-ps-form',
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

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_pembiayaan'); ?>
		<?php echo $form->error($model,'sumber_pembiayaan'); ?>
		<?php echo $form->dropDownList($model,'sumber_pembiayaan',array('sendiri'=>'Sendiri','pt'=>'PT yang bersangkutan','depdiknas'=>'Depdiknas','dlm negeri'=>'Institusi dalam negeri luar depdiknas','luar negeri'=>'Institusi Luar Negeri'),array('prompt' => 'Pilih Sumber Pembiayaan')); ?>
	</div>
<!-- end tambahan -->
	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'sumber_pembiayaan'); ?>
		<?php //echo $form->textField($model,'sumber_pembiayaan',array('size'=>11,'maxlength'=>11)); ?>
		<?php //echo $form->error($model,'sumber_pembiayaan'); ?>
	</div> -->


	<div class="row">
		<?php echo $form->labelEx($model,'waktu_TS2'); ?>
		<?php echo $form->error($model,'waktu_TS2'); ?>
		<?php echo $form->textField($model,'waktu_TS2',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_TS1'); ?>
		<?php echo $form->error($model,'waktu_TS1'); ?>
		<?php echo $form->textField($model,'waktu_TS1',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_TS'); ?>
		<?php echo $form->error($model,'waktu_TS'); ?>
		<?php echo $form->textField($model,'waktu_TS',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array('pkm'=>'PKM','penelitian'=>'Penelitian','kerja sama'=>'Kerjasama'),array('prompt' => 'Pilih Status')); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'mhs_terlibat'); ?>
		<?php echo $form->error($model,'mhs_terlibat'); ?>
		<?php echo $form->dropDownList($model,'mhs_terlibat',array('ada'=>'Ada','tidak ada'=>'Tidak Ada'),array('prompt' => 'Pilih Keterlibatan Mahasiswa')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jum_mhs_ambil_ta'); ?>
		<?php echo $form->error($model,'jum_mhs_ambil_ta'); ?>
		<?php echo $form->textField($model,'jum_mhs_ambil_ta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jum_mhs_penelitian'); ?>
		<?php echo $form->error($model,'jum_mhs_penelitian'); ?>
		<?php echo $form->textField($model,'jum_mhs_penelitian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wujud_mhs_pkm'); ?>
		<?php echo $form->error($model,'wujud_mhs_pkm'); ?>
		<?php echo $form->textArea($model,'wujud_mhs_pkm',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
	</div>
<!--  -->

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