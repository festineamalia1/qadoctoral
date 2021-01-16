<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visi-misi-form',
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
		array('prompt' => 'Pilih Tahun')
		); ?>
	</div>
<!-- selesai tambahan -->
	<div class="row tiny">
		<?php echo $form->labelEx($model,'mekanisme'); ?>
		<?php echo $form->error($model,'mekanisme'); ?>
		<?php //echo $form->textArea($model,'mekanisme',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>550,'placeholder'=>'Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.')); ?>
		<?php $this->widget('ext.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'mekanisme',
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
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'visi'); ?>
		<?php echo $form->error($model,'visi'); ?>
		<?php //echo $form->textArea($model,'visi',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50,'placeholder'=>'Visi')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'visi',
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
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'misi'); ?>
		<?php echo $form->error($model,'misi'); ?>
		<?php //echo $form->textArea($model,'misi',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50,'placeholder'=>'Misi')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'misi',
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
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'tujuan'); ?>
		<?php echo $form->error($model,'tujuan'); ?>
		<?php //echo $form->textArea($model,'tujuan',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50,'placeholder'=>'Tujuan')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'tujuan',
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
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'sasaran'); ?>
		<?php echo $form->error($model,'sasaran'); ?>
		<?php //echo $form->textArea($model,'sasaran',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50,'placeholder'=>'Sasaran')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'sasaran',
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
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'strategi'); ?>
		<?php echo $form->error($model,'strategi'); ?>
		<?php //echo $form->textArea($model,'strategi',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50,'placeholder'=>'Strategi')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'strategi',
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
	</div>

	<div class="row tiny">
		<?php echo $form->labelEx($model,'sosialisasi'); ?>
		<?php echo $form->error($model,'sosialisasi'); ?>
		<?php //echo $form->textArea($model,'sosialisasi',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50,'placeholder'=>'Uraikan upaya penyebaran/ Sosialisasi visi,misi dan tujuan program sutdi serta pemahaman civitas akademika (dosen dan mahasiswa) dan tenaga kependidikan')); ?>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', 
			array(
				'model'=>$model,
				'attribute'=>'sosialisasi',
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
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('input-xxlarge','size'=>60,'maxlength'=>100,'placeholder'=>'Sumber Data','placeholder'=>'Contoh pengisian: Renstra')); ?>
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