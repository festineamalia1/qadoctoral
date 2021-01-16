<?php
/* @var $this DataDosenController */
/* @var $model DataDosen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-dosen-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'id_dosen'); ?>
		<?php echo $form->textField($model,'id_dosen'); ?>
		<?php echo $form->error($model,'id_dosen'); ?>
	</div> -->

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
		<?php echo $form->error($model,'nama_dosen'); ?>
		<?php echo $form->textField($model,'nama_dosen',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nidn'); ?>
		<?php echo $form->error($model,'Nidn'); ?>
		<?php echo $form->textField($model,'Nidn',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			    'model' => $model,
			    'attribute' => 'tgl_lahir',
			    'options' => array(
			        'dateFormat' => 'yy-mm-dd',  
			    ),
			    'htmlOptions' => array(
			        'size' => '10',        
			        'maxlength' => '10',   
			    ),
			));
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jabatan_akademik'); ?>
		<?php echo $form->error($model,'jabatan_akademik'); ?>
		<?php echo $form->textField($model,'jabatan_akademik',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gelar_akademik'); ?>
		<?php echo $form->error($model,'gelar_akademik'); ?>
		<?php echo $form->textField($model,'gelar_akademik',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'F_gelar_akademik_terakhir'); ?><?php echo '(Penulisan: S1=1, S2=2, S3=3)'?><br>		
		<?php echo $form->error($model,'F_gelar_akademik_terakhir'); ?>
		<?php echo $form->textField($model,'F_gelar_akademik_terakhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendidikanS1'); ?>
		<?php echo $form->error($model,'pendidikanS1'); ?>
		<?php echo $form->textField($model,'pendidikanS1',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendidikanS2'); ?>
		<?php echo $form->error($model,'pendidikanS2'); ?>
		<?php echo $form->textField($model,'pendidikanS2',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendidikanS3'); ?>
		<?php echo $form->error($model,'pendidikanS3'); ?>
		<?php echo $form->textField($model,'pendidikanS3',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asal_PTS1'); ?>
		<?php echo $form->error($model,'asal_PTS1'); ?>
		<?php echo $form->textField($model,'asal_PTS1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asal_PTS2'); ?>
		<?php echo $form->error($model,'asal_PTS2'); ?>
		<?php echo $form->textField($model,'asal_PTS2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asal_PTS3'); ?>
		<?php echo $form->error($model,'asal_PTS3'); ?>
		<?php echo $form->textField($model,'asal_PTS3',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bidang_keahlianS1'); ?>
		<?php echo $form->error($model,'bidang_keahlianS1'); ?>
		<?php echo $form->textField($model,'bidang_keahlianS1',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bidang_keahlianS2'); ?>
		<?php echo $form->error($model,'bidang_keahlianS2'); ?>
		<?php echo $form->textField($model,'bidang_keahlianS2',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bidang_keahlianS3'); ?>
		<?php echo $form->error($model,'bidang_keahlianS3'); ?>
		<?php echo $form->textField($model,'bidang_keahlianS3',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_dosen'); ?>
		<?php echo $form->error($model,'status_dosen'); ?>
		<?php echo $form->dropDownList($model,'status_dosen',array('tetap'=>'Tetap','tidak tetap'=>'Tidak Tetap'),array('prompt' => 'Pilih Status Dosen')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_bidang'); ?>
		<?php echo $form->error($model,'status_bidang'); ?>
		<?php echo $form->dropDownList($model,'status_bidang',array('sesuai PS'=>'Sesuai dengan PS','tdk sesuai PS'=>'Tidak Sesuai dengan PS'),array('prompt' => 'Pilih Status Bidang')); ?>
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