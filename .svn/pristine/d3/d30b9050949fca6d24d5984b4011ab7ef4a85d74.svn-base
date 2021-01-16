<?php
/* @var $this TesisMhs_ps_S2Controller */
/* @var $model TesisMhs_ps_S2 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tesis-mhs-ps--s2-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),

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
				<?php echo $form->error($model,'id_prodi'); ?>
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
				<?php echo $form->error($model,'id_prodi'); ?>
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
		<?php echo $form->error($model,'id_administrasi'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'ts'); ?>
		<?php echo $form->error($model,'ts'); ?>
		<?php echo $form->dropDownList($model,'ts',array('TS'=>'TS','TS-1'=>'TS-1','TS-2'=>'TS-2'),array('prompt' => 'Pilih Tahun Akademik')); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'nama_mhs_s2'); ?>
		<?php echo $form->dropDownList($model, 'nama_mhs_s2', CHtml::listData(
		MahasiswaS2::model()->findAll(), 'nama_mhs_s2', 'nama_mhs_s2'),
		array('prompt' => 'Pilih Mahasiswa')
		); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'judul_tesis'); ?>
		<?php echo $form->textField($model,'judul_tesis'); ?>
		<?php echo $form->error($model,'judul_tesis'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'nama_dosen'); ?>
		<?php echo $form->dropDownList($model, 'nama_dosen', CHtml::listData(
		DataDosen::model()->findAll(), 'nama_dosen', 'nama_dosen'),
		array('prompt' => 'Pilih Dosen')
		); ?>
	</div>


	
	<!-- <div class="row">
		<?php echo $form->labelEx($model,'judul_tesis'); ?>
		<?php echo $form->textField($model,'judul_tesis'); ?>
		<?php echo $form->error($model,'judul_tesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_mhs_s2'); ?>
		<?php echo $form->textField($model,'nama_mhs_s2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_mhs_s2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ts'); ?>
		<?php echo $form->textField($model,'ts',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'ts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_dosen'); ?>
		<?php echo $form->textField($model,'nama_dosen',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_dosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sumber_data'); ?>
		<?php echo $form->textField($model,'id_sumber_data'); ?>
		<?php echo $form->error($model,'id_sumber_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lampiran'); ?>
		<?php echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'lampiran'); ?>
	</div>
 -->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->