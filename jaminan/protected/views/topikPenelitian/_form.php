<?php
/* @var $this TopikPenelitianController */
/* @var $model TopikPenelitian */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'topik-penelitian-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),

)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

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
		<?php echo $form->error($model,'id_administrasi'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'id_dosen'); ?>
		<?php echo $form->dropDownList($model, 'id_dosen', CHtml::listData(
		DataDosen::model()->findAll(), 'id_dosen', 'nama_dosen'),
		array('prompt' => 'Pilih Dosen')
		); ?>
		<!--?php echo $form->error($model,'id_dosen'); ?-->
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'judul_penelitian'); ?>
		<?php echo $form->dropDownList($model, 'judul_penelitian', CHtml::listData(
		penelitian::model()->findAll(), 'judul_penelitian', 'judul_penelitian'),
		array('prompt' => 'Pilih Judul Penelitian')
		); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'topik_penelitian_disertasi'); ?>
		<?php echo $form->textField($model,'topik_penelitian_disertasi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'topik_penelitian_disertasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jum_mhs_terlbt'); ?>
		<?php echo $form->textField($model,'jum_mhs_terlbt'); ?>
		<?php echo $form->error($model,'jum_mhs_terlbt'); ?>
	</div>


	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'judul_penelitian'); ?>
		<?php //echo $form->textField($model,'judul_penelitian'); ?>
		<?php //echo $form->error($model,'judul_penelitian'); ?>
	</div>
 -->
	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'id_sumber_data'); ?>
		<?php //echo $form->textField($model,'id_sumber_data'); ?>
		<?php //echo $form->error($model,'id_sumber_data'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'sumber_data'); ?>
		<?php //echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'sumber_data'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'lampiran'); ?>
		<?php //echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'lampiran'); ?>
	</div>
 -->
	<div class="row">
		<?php echo $form->labelEx($model,'mhs_terlibat_disertasi'); ?>
		<?php echo $form->textField($model,'mhs_terlibat_disertasi'); ?>
		<?php echo $form->error($model,'mhs_terlibat_disertasi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->