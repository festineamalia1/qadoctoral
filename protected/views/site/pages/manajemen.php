<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Manajemen Data';
$this->breadcrumbs=array(
	'Manajemen Data',
);
?>

<h1>Manajemen Data</h1>
<div class="row-fluid">
	<div class="span10 offset1" style="text-align:center;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/visimisi/admin" title="Visi, Misi, Tujuan dan Sasaran, Serta Strategi Pencapaian">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/VisiMisi.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Standar 1</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/tatapamong/admin" title="Tata Pamong, Kepemimpinan, Sistem Pengelolaan dan Penjamin Mutu">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Jadwal.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Standar 2</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/mhsreguler/admin" title="Kemahasiswaan dan Lulusan">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/SyaratPredikatKelulusan.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Standar 3</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/sdm/admin" title="Sumber Daya Manusia">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Pejabat.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Standar 4</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/kurikulum/admin" title="Kurikulum, Pembelajaran dan Suasana Akademik">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Kurikulum.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Standar 5</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/penjelasanpengelolaandana/admin" title="Pembiayaan, Prasarana, Sarana, dan Sistem Informasi">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Manajemen-Ruang.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Standar 6</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/PenelitianDosentetapPs/admin" title="Penelitian, Pelayanan/ Pengabdian Kepada Masyarakat, dan Kerjasama">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Rencana-Studi.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Standar 7</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/lampiran/admin" title="Manajemen Lampiran">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Rencana-Studi.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Lampiran</h5>
			</div>
		</a>
		<?
		if((isset(Yii::app()->user->group_id)) && (Yii::app()->user->group_id == 1)){
			?>
			<a href="<?=Yii::app()->getBaseUrl(true)?>/administrasi/admin" title="Manajemen Administrasi">
				<div class="box_menu">
					<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Rencana-Studi.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Manajemen Administrasi</h5>
				</div>
			</a>
			<a href="<?=Yii::app()->getBaseUrl(true)?>/user/admin" title="Manajemen User">
				<div class="box_menu">
					<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/User.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Manajemen User</h5>
				</div>
			</a>
			<?
		}
		?>
	</div>
</div>
<div class="row-fluid" style="margin-top:50px;">
	<div class="span12">
		
	</div>
</div>
<style type="text/css">
	.box_menu{
		float: left;
		margin: 10px;
		margin-top: 20px;
		width: 150px;
		height: 150px;
		/*border: 1px solid #D5D5D5;*/
		webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
		background-color: #fcfcfc;
		background-image: -webkit-gradient(linear, 0 0%, 0 100%, from(#FCFCFC), to(#F1F1F1));
		background-image: -webkit-linear-gradient(top, #FCFCFC 0%, #F1F1F1 100%);
		background-image: -moz-linear-gradient(top, #FCFCFC 0%, #F1F1F1 100%);
		background-image: -ms-linear-gradient(top, #FCFCFC 0%, #F1F1F1 100%);
		background-image: -o-linear-gradient(top, #FCFCFC 0%, #F1F1F1 100%);
		background-image: linear-gradient(top, #FCFCFC 0%, #F1F1F1 100%);
		box-shadow: 0 -2px 5px 0 white inset;
		-moz-box-shadow: 0 -2px 5px 0 #fff inset;
		-webkit-box-shadow: 0 -2px 5px 0 white inset

		vertical-align: middle;
		text-align: center;
	}
	.judul_menu{

	}
</style>
<script type="text/javascript">
	$(function(){
		var manajemen = "<?=$manajemen?>";
		if(manajemen == 'manajemen'){
			$('.site-sidebar').parent().addClass('hide');
			$('.content-after-sidebar').removeClass('span9');
		}
	});
</script>