<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Dashboard';
$this->breadcrumbs=array(
	'Dashboard',
);
?>

<div class="row-fluid">
	<div class="span12">
		<form class="form-inline" method="post" id="form_dosen">		    
		    <label class="control-label" for="">Statistik Data Dosen</label>
		      <select class="input-small" name="id_administrasi" id="tahun">
		      	<?
		      	foreach ($administrasi as $key => $value) {
		      		?>
		      		<option value="<?=$value['id_administrasi']?>"><?=$value['th_akademik']?></option>
		      		<?
		      	}
		      	?>
		      </select>
		    
		    <button type="button" class="btn btn-primary getdata_dosen"><i class="icon-arrow-right icon-white"></i> Proses</button>
		</form>
		<div style="height:30px;">
			<div class="progress progress-striped active hide" >
				  <div class="bar" style="width:0%;"></div>
			</div>
		</div>
		<div id="data_mhs_reg" class="data">	
			<?php $this->renderPartial('pages/v_gr_dosen', array()); ?>
		</div>
	</div>
</div>
<hr>

<!-- Menu grafik -->
<div class="row-fluid">
	<div class="span12" style="text-align:center;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/site/dashboard_dayatampung" title="Daya Tampung Jurusan">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Manajemen-Ruang.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Grafik Daya Tampung Jurusan</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/site/dashboard_kerjasama" title="Grafik Kerjasama Jurusan">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Jadwal.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Grafik Kerjasama Jurusan</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/site/dashboard" title="Dashboard Mahasiswa Reguler">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/VisiMisi.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Grafik Mahasiswa Reguler</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/site/dashboard" title="Grafik Mahasiswa Reguler">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/VisiMisi.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Grafik Mahasiswa Reguler</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/site/dashboard_dosen" title="Grafik Dosen Tetap dan Tidak Tetap">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Pejabat.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Grafik Dosen</h5>
			</div>
		</a>
		<a href="<?=Yii::app()->getBaseUrl(true)?>/site/dashboard_prestasi" title="Prestasi Mahasiswa">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/SyaratPredikatKelulusan.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Grafik Prestasi</h5>
			</div>
		</a>
	</div>
</div>
<div class="row-fluid" style="margin-top:50px;">
	<div class="span12">
		
	</div>
</div>
<style type="text/css">
	.box_menu{
		float: left;
		margin: 20px;
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
  $(".getdata_dosen").click(function()
  	{
  		var dataserialized = $('#form_dosen').serialize();
  		$.ajax({
  			type: 'POST',
  			url:"GrafikDosen",
  			data: dataserialized,
		   	beforeSend:function(){

		    $('.bar').attr('style','width:20%;');
	  		$(".progress").fadeIn();
	  		for (var i = 0; i <= 99; i++) {
		      	setTimeout(function(){
		        	$('.bar').attr('style','width:'+i+'%;');
		      	}, 800);
		  	};
		   },
		   success:function(result){
		    	$('.bar').attr('style','width:100%;');
		    	$(".progress").fadeOut(setTimeout(function(){
		    		$("#data_mhs_reg").html(result);
		    		$("#data_mhs_reg").fadeIn(1000);
		    	},1000));
		   }
		});
    return false;
  });
  // $(".getdata_dosen").trigger('click');
});
 
</script>

<style type="text/css">
	.span-19{
		width: 100% !important;
	}
	.data{
		min-height: 300px;
		/*background: #000;*/
		/*opacity: 0.7;*/
	}
	.content-field{
		min-height: 550px !important;
	}
</style>