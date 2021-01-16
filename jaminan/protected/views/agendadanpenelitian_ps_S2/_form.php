<?php
/* @var $this Agendadanpenelitian_ps_S2Controller */
/* @var $model Agendadanpenelitian_ps_S2 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agendadanpenelitian-ps--s2-form',
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
		array('prompt' => 'Pilih Tahun')
		); ?>
	</div>
<!-- end tambahan -->
	<div class="row">
		<?php echo $form->labelEx($model,'ts'); ?>
		<?php echo $form->error($model,'ts'); ?>
		<?php echo $form->dropDownList($model,'ts',array('TS'=>'TS','TS-1'=>'TS-1','TS-2'=>'TS-2'),array('prompt' => 'Pilih Tahun Akademik')); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nama_dosen'); ?>
		<?php echo $form->dropDownList($model, 'nama_dosen', CHtml::listData(
		DataDosen::model()->findAll(), 'nama_dosen', 'nama_dosen'),
		array('prompt' => 'Pilih Dosen')
		); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'judul_penelitian'); ?>
		<?php echo $form->dropDownList($model, 'judul_penelitian', CHtml::listData(
		penelitian_Dosentetap_Ps_S2::model()->findAll(), 'judul_penelitian', 'judul_penelitian'),
		array('prompt' => 'Pilih Judul Penelitian')
		); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'agenda_penelitian'); ?>
		<?php echo $form->textField($model,'agenda_penelitian',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'agenda_penelitian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterlibatan_penelitian'); ?>
		<?php echo $form->textField($model,'keterlibatan_penelitian',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'keterlibatan_penelitian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jabatan_penelitian'); ?>
		<?php echo $form->textField($model,'jabatan_penelitian',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'jabatan_penelitian'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->