<?php
/* @var $this JmlMahasiswaS2Controller */
/* @var $model JmlMahasiswaS2 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_jml_mhs_s2'); ?>
		<?php echo $form->textField($model,'id_jml_mhs_s2'); ?>
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
		<?php echo $form->label($model,'tahun_akademik'); ?>
		<?php echo $form->textField($model,'tahun_akademik',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_ikut_seleksi'); ?>
		<?php echo $form->textField($model,'jml_ikut_seleksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_lolos_seleksi'); ?>
		<?php echo $form->textField($model,'jml_lolos_seleksi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_maba'); ?>
		<?php echo $form->textField($model,'jml_maba'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_maba_transfer'); ?>
		<?php echo $form->textField($model,'jml_maba_transfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_total'); ?>
		<?php echo $form->textField($model,'jml_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_total_transfer'); ?>
		<?php echo $form->textField($model,'jml_total_transfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_lulusan'); ?>
		<?php echo $form->textField($model,'jml_lulusan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_lulusan_transfer'); ?>
		<?php echo $form->textField($model,'jml_lulusan_transfer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ipk_min'); ?>
		<?php echo $form->textField($model,'ipk_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ipk_max'); ?>
		<?php echo $form->textField($model,'ipk_max'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ipk_rata'); ?>
		<?php echo $form->textField($model,'ipk_rata'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_mhs_wna'); ?>
		<?php echo $form->textField($model,'jml_mhs_wna'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->