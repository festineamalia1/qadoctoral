<?php
/* @var $this PenggunaanDanaController */
/* @var $model PenggunaanDana */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penggunaan-dana-form',
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
		<?php echo $form->labelEx($model,'jenis_penggunaan'); ?>
		<?php echo $form->error($model,'jenis_penggunaan'); ?>
		<?php echo $form->dropDownList($model,'jenis_penggunaan',array('pendidikan'=>'Pendidikan','penelitian'=>'Penelitian','pkm'=>'PKM','prasarana'=>'Prasarana','sarana'=>'Sarana','sdm'=>'SDM','lainnya'=>'Lainnya'),array('prompt' => 'Pilih Jenis Penggunaan')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'persen_danaTS2'); ?>
		<?php echo $form->error($model,'persen_danaTS2'); ?>
		<?php echo $form->textField($model,'persen_danaTS2',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'persen_danaTS1'); ?>
		<?php echo $form->error($model,'persen_danaTS1'); ?>
		<?php echo $form->textField($model,'persen_danaTS1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'persen_danaTS'); ?>
		<?php echo $form->error($model,'persen_danaTS'); ?>
		<?php echo $form->textField($model,'persen_danaTS',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'F_pendapat_pimpinan_Fak'); ?>
		<?php echo $form->error($model,'F_pendapat_pimpinan_Fak'); ?>
		<?php echo $form->textArea($model,'F_pendapat_pimpinan_Fak',array('rows'=>6, 'cols'=>50)); ?>
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