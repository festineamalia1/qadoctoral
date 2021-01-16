<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_mhs_reguler'); ?>
		<?php echo $form->textField($model,'id_mhs_reguler'); ?>
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
		<?php echo $form->label($model,'thn_akademik'); ?>
		<?php echo $form->textField($model,'thn_akademik',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'daya_tampung'); ?>
		<?php echo $form->textField($model,'daya_tampung',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mhs_ikut_seleksi'); ?>
		<?php echo $form->textField($model,'mhs_ikut_seleksi',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mhs_lulus_seleksi'); ?>
		<?php echo $form->textField($model,'mhs_lulus_seleksi',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maba_bkn_transfer'); ?>
		<?php echo $form->textField($model,'maba_bkn_transfer',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maba_transfer'); ?>
		<?php echo $form->textField($model,'maba_transfer',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_mhs_bkn_transfer'); ?>
		<?php echo $form->textField($model,'total_mhs_bkn_transfer',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_mhs_transfer'); ?>
		<?php echo $form->textField($model,'total_mhs_transfer',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_lulus_bkn_transfer'); ?>
		<?php echo $form->textField($model,'jumlah_lulus_bkn_transfer',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_lulus_transfer'); ?>
		<?php echo $form->textField($model,'jumlah_lulus_transfer',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ipk_min_lulusan_reguler'); ?>
		<?php echo $form->textField($model,'ipk_min_lulusan_reguler',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ipk_rata2_lulusan_reguler'); ?>
		<?php echo $form->textField($model,'ipk_rata2_lulusan_reguler',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ipk_maks_lulusan_reguler'); ?>
		<?php echo $form->textField($model,'ipk_maks_lulusan_reguler',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'persen_ipk275'); ?>
		<?php echo $form->textField($model,'persen_ipk275',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'persen_ipk275_350'); ?>
		<?php echo $form->textField($model,'persen_ipk275_350',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'persen_ipk350'); ?>
		<?php echo $form->textField($model,'persen_ipk350',array('size'=>10,'maxlength'=>10)); ?>
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