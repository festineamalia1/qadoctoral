<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tata_pamong'); ?>
		<?php echo $form->textField($model,'id_tata_pamong'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_prodi'); ?>
		<?php echo $form->textField($model,'id_prodi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_administrasi'); ?>
		<?php echo $form->textField($model,'id_administrasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sistem_tata_pamong'); ?>
		<?php echo $form->textArea($model,'sistem_tata_pamong',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kepemimpinan'); ?>
		<?php echo $form->textArea($model,'kepemimpinan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sistem_pengelolaan'); ?>
		<?php echo $form->textArea($model,'sistem_pengelolaan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penjaminan_mutu'); ?>
		<?php echo $form->textArea($model,'penjaminan_mutu',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umpan_balik_dosen'); ?>
		<?php echo $form->textArea($model,'umpan_balik_dosen',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tindak_lanjut_dosen'); ?>
		<?php echo $form->textArea($model,'tindak_lanjut_dosen',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umpan_balik_mhs'); ?>
		<?php echo $form->textArea($model,'umpan_balik_mhs',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tindak_lanjut_mhs'); ?>
		<?php echo $form->textArea($model,'tindak_lanjut_mhs',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umpan_balik_alumni'); ?>
		<?php echo $form->textArea($model,'umpan_balik_alumni',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tindak_lanjut_alumni'); ?>
		<?php echo $form->textArea($model,'tindak_lanjut_alumni',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umpan_balik_lulusan'); ?>
		<?php echo $form->textArea($model,'umpan_balik_lulusan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tindak_lanjut_lulusan'); ?>
		<?php echo $form->textArea($model,'tindak_lanjut_lulusan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'animo_calon_mhs'); ?>
		<?php echo $form->textArea($model,'animo_calon_mhs',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mutu_manajemen'); ?>
		<?php echo $form->textArea($model,'mutu_manajemen',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mutu_lulusan'); ?>
		<?php echo $form->textArea($model,'mutu_lulusan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kerjasama_kemitraan'); ?>
		<?php echo $form->textArea($model,'kerjasama_kemitraan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hibah_kompetitif'); ?>
		<?php echo $form->textArea($model,'hibah_kompetitif',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lampiran'); ?>
		<?php echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->