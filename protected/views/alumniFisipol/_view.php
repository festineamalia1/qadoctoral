<?php
/* @var $this AlumniFisipolController */
/* @var $data AlumniFisipol */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('almNiu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->almNiu), array('view', 'id'=>$data->almNiu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almNim')); ?>:</b>
	<?php echo CHtml::encode($data->almNim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almNama')); ?>:</b>
	<?php echo CHtml::encode($data->almNama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almAngkatan')); ?>:</b>
	<?php echo CHtml::encode($data->almAngkatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almProdiKode')); ?>:</b>
	<?php echo CHtml::encode($data->almProdiKode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almProdiKodeUniv')); ?>:</b>
	<?php echo CHtml::encode($data->almProdiKodeUniv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almTglMasuk')); ?>:</b>
	<?php echo CHtml::encode($data->almTglMasuk); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('almTglLulus')); ?>:</b>
	<?php echo CHtml::encode($data->almTglLulus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almCuti')); ?>:</b>
	<?php echo CHtml::encode($data->almCuti); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almLulusTahun')); ?>:</b>
	<?php echo CHtml::encode($data->almLulusTahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almLulusBulan')); ?>:</b>
	<?php echo CHtml::encode($data->almLulusBulan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almSKS')); ?>:</b>
	<?php echo CHtml::encode($data->almSKS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almIPK')); ?>:</b>
	<?php echo CHtml::encode($data->almIPK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almTOEFEL')); ?>:</b>
	<?php echo CHtml::encode($data->almTOEFEL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almStatusLulus')); ?>:</b>
	<?php echo CHtml::encode($data->almStatusLulus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almKodeLulus')); ?>:</b>
	<?php echo CHtml::encode($data->almKodeLulus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almNoIjasah')); ?>:</b>
	<?php echo CHtml::encode($data->almNoIjasah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almJudulSkripsi')); ?>:</b>
	<?php echo CHtml::encode($data->almJudulSkripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almPembimbing1')); ?>:</b>
	<?php echo CHtml::encode($data->almPembimbing1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almPembimbing2')); ?>:</b>
	<?php echo CHtml::encode($data->almPembimbing2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almPembimbing3')); ?>:</b>
	<?php echo CHtml::encode($data->almPembimbing3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almJenisKelamin')); ?>:</b>
	<?php echo CHtml::encode($data->almJenisKelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almAlamatEmail')); ?>:</b>
	<?php echo CHtml::encode($data->almAlamatEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almAgama')); ?>:</b>
	<?php echo CHtml::encode($data->almAgama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almTempatLahir')); ?>:</b>
	<?php echo CHtml::encode($data->almTempatLahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almTglLahir')); ?>:</b>
	<?php echo CHtml::encode($data->almTglLahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almBlnLahir')); ?>:</b>
	<?php echo CHtml::encode($data->almBlnLahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almThnLahir')); ?>:</b>
	<?php echo CHtml::encode($data->almThnLahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almAlamat')); ?>:</b>
	<?php echo CHtml::encode($data->almAlamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almTlp')); ?>:</b>
	<?php echo CHtml::encode($data->almTlp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almStatusKawin')); ?>:</b>
	<?php echo CHtml::encode($data->almStatusKawin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almPekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->almPekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almWargaNegara')); ?>:</b>
	<?php echo CHtml::encode($data->almWargaNegara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almBiaya')); ?>:</b>
	<?php echo CHtml::encode($data->almBiaya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almKetBiaya')); ?>:</b>
	<?php echo CHtml::encode($data->almKetBiaya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almNamaOrtu')); ?>:</b>
	<?php echo CHtml::encode($data->almNamaOrtu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almPekerjaanOrtu')); ?>:</b>
	<?php echo CHtml::encode($data->almPekerjaanOrtu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almAlamatOrtu')); ?>:</b>
	<?php echo CHtml::encode($data->almAlamatOrtu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('almStakmhsrKode')); ?>:</b>
	<?php echo CHtml::encode($data->almStakmhsrKode); ?>
	<br />

	*/ ?>

</div>