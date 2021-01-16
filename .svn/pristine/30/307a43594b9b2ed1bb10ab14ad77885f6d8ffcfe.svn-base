<?php
/* @var $this SistemPengelolaanController */
/* @var $model SistemPengelolaan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sistem-pengelolaan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

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
		<?php echo $form->labelEx($model,'perencanaan'); ?>
		<?php echo $form->error($model,'perencanaan'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'perencanaan',
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
		<?php echo $form->labelEx($model,'pengorganisasian'); ?>
		<?php echo $form->error($model,'pengorganisasian'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'pengorganisasian',
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
		<?php echo $form->labelEx($model,'pengembangan_staf'); ?>
		<?php echo $form->error($model,'pengembangan_staf'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'pengembangan_staf',
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
		<?php echo $form->labelEx($model,'pengawasan'); ?>
		<?php echo $form->error($model,'pengawasan'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'pengawasan',
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
		<?php echo $form->labelEx($model,'pengarahan'); ?>
		<?php echo $form->error($model,'pengarahan'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'pengarahan',
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
		<?php echo $form->labelEx($model,'representasi'); ?>
		<?php echo $form->error($model,'representasi'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'representasi',
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
		<?php echo $form->labelEx($model,'penganggaran'); ?>
		<?php echo $form->error($model,'penganggaran'); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'penganggaran',
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
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->