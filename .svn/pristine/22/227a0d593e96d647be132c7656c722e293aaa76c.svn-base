<?php
/* @var $this LampiranController */
/* @var $model Lampiran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lampiran-form',
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
<!-- end tambahan -->

<!-- 
	<div class="row">
		<?php //echo $form->labelEx($model,'nama_file'); ?>
		<?php //echo $form->textField($model,'nama_file',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'nama_file'); ?>
	</div> -->
	<div class="row">
		<?php echo $form->labelEx($model,'point'); ?>
		<?php echo $form->error($model,'point'); ?>
		<?php echo $form->dropDownList($model,'point',
			array(
				'sk_pendirian'=>'SK Pendirian',
				'sk_perizinan'=>'SK Perizinan',
				'1.1'	=>'1.1',
				'2.1'	=>'2.1',
				'2.4'	=>'2.4',
				'2.5'	=>'2.5',
				'3.1.1'	=>'3.1.1',
				'3.2'	=>'3.2',
				'3.3.1'	=>'3.3.1',
				'3.4'	=>'3.4',
				'4.1'	=>'4.1',
				'4.2.1'	=>'4.2.1',
				'4.3.1'	=>'4.3.1',
				'4.3.2'	=>'4.3.2',
				'4.4.1'	=>'4.4.1',
				'4.5.3'	=>'4.5.3',
				'4.5.4'	=>'4.5.4',
				'4.5.5'	=>'4.5.5',
				'4.6.1'	=>'4.6.1',
				'5.1'	=>'5.1',
				'5.1.2.2'=>'5.1.2.2',
				'5.1.4'	=>'5.1.4',
				'5.2'	=>'5.2',
				'5.3.1'	=>'5.3.1',
				'5.3.2' =>'5.3.2',
				'5.5.1'	=>'5.5.1',
				'5.5.2'	=>'5.5.2',
				'6.1'	=>'6.1',
				'6.1.1'	=>'6.1.1',
				'6.4'	=>'6.4',
				'6.4.1'	=>'6.4.1',
				'6.5.1'	=>'6.5.1',
				'7.1.1'	=>'7.1.1',
				'7.1.4'	=>'7.1.4',
				'7.2.1'	=>'7.2.1',
				'7.3.1'	=>'7.3.1',
				'7.3.2'	=>'7.3.2'),
				array('prompt' => 'Pilih Point')); ?>
	</div>

	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'point'); ?>
		<?php //echo $form->textField($model,'point',array('class'=>'input-mini','size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->error($model,'point'); ?>
	</div> -->
	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->error($model,'keterangan'); ?>
		<?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'standar'); ?>
		<?php echo $form->error($model,'standar'); ?>
		<?php echo $form->dropDownList($model,'standar',array('1'=>'Standar 1','2'=>'Standar 2','3'=>'Standar 3','4'=>'Standar 4','5'=>'Standar 5','6'=>'Standar 6','7'=>'Standar 7',),array('prompt' => 'Pilih Standar')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_file'); ?>
		<?php // echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_file'); ?>
		<?php echo $form->fileField($model,'nama_file',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->