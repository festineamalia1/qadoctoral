<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Dashboard';
$this->breadcrumbs=array(
	'Dashboard',
);
?>

<div class="row-fluid">
	<div class="span12">
		<form class="form-inline" method="post" id="form_penelitian">		    
		    <label class="control-label" for="">Statistik Data Dosen</label>
		      
		      <select class="input-small" name="id_prodi" id="prodi">
		      	<?
		      	foreach ($prodi as $key => $value) {
		      		?>
		      		<option value="<?=$value['id_prodi']?>"><?=$value['nama_prodi']?></option>
		      		<?
		      	}
		      	?>
		      </select>
		    
		    <button type="button" class="btn btn-primary getdata_penelitian"><i class="icon-arrow-right icon-white"></i> Proses</button>
		</form>
		<div style="height:30px;">
			<div class="progress progress-striped active hide" >
				  <div class="bar" style="width:0%;"></div>
			</div>
		</div>
		<div id="data_mhs_reg" class="data">	
			<?php $this->renderPartial('pages/v_gr_penelitian', array('penelitian'=>$penelitian,'pkm'=>$pkm)); ?>
		</div>
	</div>
</div>
<hr>

<!-- Menu grafik -->
<div class="row-fluid">
	<div class="span2" style="text-align:center;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/site/dashboard_dayatampung" title="Daya Tampung Jurusan">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Manajemen-Ruang.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Grafik Daya Tampung Jurusan</h5>
			</div>
		</a>
	</div>
	<div class="span2" style="text-align:center;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/site/dashboard_dosen" title="Grafik Dosen Tetap dan Tidak Tetap">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Pejabat.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Grafik Dosen</h5>
			</div>
		</a>
	</div>
	<div class="span2" style="text-align:center;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/site/dashboard_dosen_dan_mahasiswa" title="Grafik Perbandingan Dosen dan Mahasiswa">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Pejabat.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Grafik Perbandingan Dosen dan Mahasiswa</h5>
			</div>
		</a>
	</div>
	<div class="span2" style="text-align:center;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/site/dashboard_penelitian" title="Grafik Jumlah Penelitian dan Penggunaan Dana Penelitian">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Pejabat.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Grafik Jumlah Penelitian dan Penggunaan Dana Penelitian</h5>
			</div>
		</a>
	</div>
	<div class="span2" style="text-align:center;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/site/dashboard_mahasiswa_dan_lulusan" title="Grafik Perbandingan Mahasiswa Aktif dan Lulusan Pertahun">
			<div class="box_menu">
				<img src="<?=Yii::app()->getBaseUrl(true)?>/file/MenuManajemen/Pejabat.gif" style="float:left;width:100%;"> <br>
				<h5 class="judul_menu">Grafik Perbandingan Mahasiswa Aktif dan Lulusan Pertahun</h5>
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
  $(".getdata_penelitian").click(function()
  	{
  		var dataserialized = $('#form_penelitian').serialize();
  		$.ajax({
  			type: 'POST',
  			url:"grafikpenelitian",
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