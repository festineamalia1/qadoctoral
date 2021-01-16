<?php
/* @var $this UpayaKeberlanjutanController */
/* @var $model UpayaKeberlanjutan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'upaya-keberlanjutan-form',
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
<!-- selesai tambahan -->

	<div class="row tiny">
		<?php echo '<b>Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi khususnya dalam hal :</b>'; ?><br><br>
		<?php echo $form->labelEx($model,'animo_calon_mhs'); ?>
		<?php echo $form->error($model,'animo_calon_mhs'); ?>
		<?php // echo $form->textArea($model,'animo_calon_mhs',array('rows'=>6, 'cols'=>50,'class'=>'input-xxlarge')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'animo_calon_mhs',
                'editorTemplate'=>'full',
                'htmlOptions'=>array(
                					'class'=>'input-xxlarge tinymce'
                					),
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
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'mutu_manajemen'); ?>
		<?php echo $form->error($model,'mutu_manajemen'); ?>
		<?php // echo $form->textArea($model,'mutu_manajemen',array('rows'=>6, 'cols'=>50,'class'=>'input-xxlarge')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'mutu_manajemen',
                'editorTemplate'=>'full',
                'htmlOptions'=>array(
                					'class'=>'input-xxlarge tinymce'
                					),
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
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'mutu_lulusan'); ?>
		<?php echo $form->error($model,'mutu_lulusan'); ?>
		<?php // echo $form->textArea($model,'mutu_lulusan',array('rows'=>6, 'cols'=>50,'class'=>'input-xxlarge')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'mutu_lulusan',
                'editorTemplate'=>'full',
                'htmlOptions'=>array(
                					'class'=>'input-xxlarge tinymce'
                					),
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
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'kerjasama_kemitraan'); ?>
		<?php echo $form->error($model,'kerjasama_kemitraan'); ?>
		<?php // echo $form->textArea($model,'kerjasama_kemitraan',array('rows'=>6, 'cols'=>50,'class'=>'input-xxlarge')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'kerjasama_kemitraan',
                'editorTemplate'=>'full',
                'htmlOptions'=>array(
                					'class'=>'input-xxlarge tinymce'
                					),
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
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'hibah_kompetitif'); ?>
		<?php echo $form->error($model,'hibah_kompetitif'); ?>
		<?php // echo $form->textArea($model,'hibah_kompetitif',array('rows'=>6, 'cols'=>50,'class'=>'input-xxlarge')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'hibah_kompetitif',
                'editorTemplate'=>'full',
                'htmlOptions'=>array(
                					'class'=>'input-xxlarge tinymce'
                					),
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
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->