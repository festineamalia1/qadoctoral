<?php
/* @var $this EvaluasiLulusanController */
/* @var $model EvaluasiLulusan */
/* @var $form CActiveForm */
?>
<style type="text/css">
	.form{
		float: left;
		width: 100%;
	}
	.form_detail{
		width: 100%;
		float: left;
	}
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evaluasi-lulusan-form',
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
<!-- end tambahan -->
	
	<div class="row">
		<?php echo $form->labelEx($model,'studi_pelacakan'); ?>
		<?php echo $form->error($model,'studi_pelacakan'); ?>
		<?php echo $form->dropDownList($model,'studi_pelacakan',array('ada'=>'ada','tidak ada'=>'Tidak Ada'),array('prompt' => 'Pilih Studi Pelacakan')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metode'); ?>
		<?php echo $form->error($model,'metode'); ?>
		<?php echo $form->textArea($model,'metode',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proses'); ?>
		<?php echo $form->error($model,'proses'); ?>
		<?php echo $form->textArea($model,'proses',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mekanisme_kegiatan'); ?>
		<?php echo $form->error($model,'mekanisme_kegiatan'); ?>
		<?php echo $form->textArea($model,'mekanisme_kegiatan',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tindak_lanjut'); ?>
		<?php echo $form->error($model,'tindak_lanjut'); ?>
		<?php echo $form->textArea($model,'tindak_lanjut',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil'); ?>
		<?php echo $form->error($model,'hasil'); ?>
		<?php echo $form->textArea($model,'hasil',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
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


<!-- Detail evaluasi -->
<div class="form_detail">
	<?
		// $model = DetailEvaluasiLulusan::model();
	    // $this->renderPartial(Yii::app()->getBaseUrl(true)."/detailEvaluasiLulusan/admin",array('model'=>$model),true);
	?>
	<!-- <button class="btn btn-primary" class="add_detail" style="float:right;">Tambah Detail</button>
	<div class="clearfix"></div>
	<div id="detail_evaluasi">
		hihi
	</div>
	<table class="table table-bordered" style="margin-top:20px;">
		<thead>
			<tr>
				<td>Kemampuan</td>
				<td>SB</td>
				<td>B</td>
				<td>C</td>
				<td>K</td>
				<td>Rencana</td>
				<td>Ket</td>
			</tr>
		</thead>
	</table> -->
</div>
<script type="text/javascript">
	$(function(){
	  // 	$(".add_detail").click(function(){
	  // 		// var dataserialized = $('#form_jurusan').serialize();
	  // 		$.ajax({
	  // 			type: 'POST',
	  // 			url:"<?=Yii::app()->getBaseUrl(true)?>/DetailEvaluasiLulusan/admin",
	  // 			// data: dataserialized,
			//    success:function(result){
			//     	$('#detail_evaluasi').html("");
			//    }
			// });
	  //   	return false;
	  // 	});
		// $('.add_detail').live('click',function(){
		// 	alert();
		// });
	});
</script>
<!-- end detail evaluasi -->