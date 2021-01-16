<?php
/* @var $this JudulPelayanandanpengabdianController */
/* @var $model JudulPelayanandanpengabdian */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'judul-pelayanandanpengabdian-form',
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
		<?php echo $form->dropDownList($model,'ts',array('TS'=>'TS','TS-1'=>'TS-1','TS-2'=>'TS-2','TS-3'=>'TS=>3','TS4'=>'TS4'),array('prompt' => 'Pilih TS')); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'id_dosen'); ?>
		<?php echo $form->dropDownList($model,'id_dosen', CHtml::listData(
		DataDosen::model()->findAll(), 'id_dosen', 'nama_dosen'),
		array('prompt' => 'Pilih Dosen')
		); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judul_kegiatan_pengabdian'); ?>
		<?php echo $form->textField($model,'judul_kegiatan_pengabdian',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'judul_kegiatan_pengabdian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wkt_awl'); ?>
		<?php echo $form->textField($model,'wkt_awl'); ?>
		<?php echo $form->error($model,'wkt_awl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wkt_akh'); ?>
		<?php echo $form->textField($model,'wkt_akh'); ?>
		<?php echo $form->error($model,'wkt_akh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil'); ?>
		<?php echo $form->textField($model,'hasil',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'hasil'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah ' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->