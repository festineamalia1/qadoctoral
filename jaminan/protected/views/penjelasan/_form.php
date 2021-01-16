<?php
/* @var $this PenjelasanController */
/* @var $model penjelasan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penjelasan-form',
	'enableAjaxValidation'=>false,
	
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
		<?php echo $form->labelEx($model,'jenis_penelitian'); ?>
		<?php echo $form->error($model,'jenis_penelitian'); ?>
		<?php echo $form->dropDownList($model,'jenis_penelitian',array('Penelitian Dosen'=>'Penelitian Dosen','Penelitian Mahasiswa'=>'Penelitian Mahasiswa '),array('prompt' => 'Pilih Jenis Penelitian')); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'judul_penelitian'); ?>
		<?php echo $form->textField($model,'judul_penelitian',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'judul_penelitian'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'penjelasan_pendekatandanpemikiran'); ?>
		<?php echo $form->textArea($model,'penjelasan_pendekatandanpemikiran',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'penjelasan_pendekatandanpemikiran'); ?>
	</div>


<?php
/*
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
	*/
	?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->