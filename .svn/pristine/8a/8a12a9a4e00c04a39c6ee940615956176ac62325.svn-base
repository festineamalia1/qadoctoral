<?php
/* @var $this PelaksanaanBimbinganTaController */
/* @var $model PelaksanaanBimbinganTa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pelaksanaan-bimbingan-ta-form',
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
		<?php echo $form->labelEx($model,'rata_mhs_perdosen'); ?>
		<?php echo $form->textField($model,'rata_mhs_perdosen',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'rata_mhs_perdosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rata_jum_pertemuan'); ?>
		<?php echo $form->textField($model,'rata_jum_pertemuan',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'rata_jum_pertemuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ketersediaan_panduan'); ?>
		<?php echo $form->dropDownList($model,'ketersediaan_panduan',array('ya'=>'Tersedia','tidak'=>'Tidak Tersedia'),array('prompt' => 'Pilih Ketersediaan Panduan')); ?>
		<?php echo $form->error($model,'ketersediaan_panduan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sosialisasi_pelaksanaan'); ?><?php echo'<i>(diisi jika ketersediaan panduan ada)</i>'?><br>
		<?php //echo $form->textArea($model,'sosialisasi_pelaksanaan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sosialisasi_pelaksanaan'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'sosialisasi_pelaksanaan',
                'editorTemplate'=>'full',
                'htmlOptions'=>array('class'=>'input-xxlarge tinymce'),
                'options' => array(
	               'theme_advanced_buttons1' =>
	               'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,formatselect,fontsizeselect,|',
	                'theme_advanced_buttons2' => '',
	                'theme_advanced_buttons3' => '',
	                'theme_advanced_buttons4' => '',
	                'theme_advanced_toolbar_location' => 'top',
	                'theme_advanced_toolbar_align' => 'left',
	                'theme_advanced_statusbar_location' => 'none',
	                'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
	                                                15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
	            ),
			)); 
		?>
	</div><br><br>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->