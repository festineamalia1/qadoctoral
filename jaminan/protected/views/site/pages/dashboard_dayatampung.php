<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Dashboard';
$this->breadcrumbs=array(
	'Dashboard',
);
?>

<div class="row-fluid">
	<div class="span12">
		<form class="form-inline" method="post" id="form_dayatampung">		    
		    <label class="control-label" for="">Statistik Daya Tampung Jurursan Tahun</label>
		      <select class="input-small" name="id_administrasi" id="tahun">
		      	<?
		      	foreach ($administrasi as $key => $value) {
		      		?>
		      		<option value="<?=$value['detail_thn']?>"><?=$value['detail_thn']?></option>
		      		<?
		      	}
		      	?>
		      </select>
		    
		    <button type="button" class="btn btn-primary get_dayatampung"><i class="icon-arrow-right icon-white"></i> Proses</button>
		</form>
		<div style="height:30px;">
			<div class="progress progress-striped active hide" >
				  <div class="bar" style="width:0%;"></div>
			</div>
		</div>
		<div id="data_mhs_reg" class="data">	
			<?php $this->renderPartial('pages/v_gr_dayatampung', array('prodi'=>$data['prodi'],'daya_tampung'=>$data['daya_tampung'])); ?>
		</div>
	</div>
</div>
<hr>
<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
	}
	table thead tr th{
		border:  0.01pt solid black;
	}
	table tr th{
		border: 0.01pt solid black;
		font-weight: bold;
		padding: 10px;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	.judul{
		text-align: left;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 20px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<p class="judul" style="font-weight:bold;">

<?php
$data=233;
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{

?>
<!--
<div class="container-fluid" style="margin:0;padding:0;">
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">Tahun Akademik</th>
			<th rowspan="2">Daya Tampung</th>
			<th rowspan="1" colspan="2">Jumlah Calon Mahasiswa Reguler</th>
			<th rowspan="1" colspan="2">Jumlah Mahasiswa Baru</th>
			<th rowspan="1" colspan="2">Jumlah Mahasiswa(Student Body)</th>
		</tr>
		<tr>
			<th colspan="1">Ikut Seleksi</th>
			<th colspan="1">Lulus Seleksi</th>
			<th colspan="1">Reguler<sup>(2)</sup></th>
			<th colspan="1">Transfer<sup>(2)</sup></th>
			<th colspan="1">Reguler</th>
			<th colspan="1">Transfer</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
			<th colspan="1">(6)</th>
			<th colspan="1">(7)</th>
			<th colspan="1">(8)</th>
		</tr>
	</thead>
	<tbody>
		<?php
		//foreach ($data as $key => $value) {
		?>
		<tr>
			<td style="text-align:center;"></td>
			<td style="text-align:center;"></td>
			<td style="text-align:center;"></td>
			<td style="text-align:center;"></td>
			<td style="text-align:center;"></td>
			<td style="text-align:center;"></td>
			<td style="text-align:center;"></td>
			<td style="text-align:center;"></td>
		</tr>
		<?php
		}
		?>	
	</tbody>
	<tfoot>

	</tfoot>
</table>
<br>
<br>
-->
<!--
<table class="table table-bordered min">
			<thead>
				<tr>
					<th rowspan="2">Tahun Masuk</th>
					<th rowspan="1" colspan="7">Jumlah Mahasiswa Reguler per Angkatan pada Tahun*</th>
					<th rowspan="2" style="width:100px;">Jumlah Lulusan s.d. TS (dari Mahasiswa Reguler)</th>
				</tr>
				<tr>
					<th colspan="1">TS-6</th>
					<th colspan="1">TS-5</th>
					<th colspan="1">TS-4</th>
					<th colspan="1">TS-3</th>
					<th colspan="1">TS-2</th>
					<th colspan="1">TS-1</th>
					<th colspan="1">TS</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<td style="text-align:center;">TS-6</td>
				<td><i>(a)</i>=</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><i>(b)</i>= </td>
				<td><i>(c)</i>= </td>
			</tr>
			<tr>
				<td style="text-align:center;">TS-5</td>
				<td  style="background:grey"></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td style="text-align:center;">TS-4</td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td><i>(d)</i>= </td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td style="text-align:center;">TS-3</td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td></td>
				<td></td>
				<td></td>
				<td><i>(e)</i>= </td>
				<td><i>(f)</i>= </td>
			</tr>
			<tr>
				<td style="text-align:center;">TS-2</td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td></td>
				<td></td>
				<td></td>
				<td style="background:grey"></td>
			</tr>
			<tr>
				<td style="text-align:center;">TS-1</td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td></td>
				<td></td>
				<td style="background:grey"></td>
			</tr>
			<tr>
				<td style="text-align:center;">TS</td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td  style="background:grey"></td>
				<td style="background:grey"></td>
				<td style="background:grey"></td>
				<td></td>
				<td style="background:grey"></td>
			</tr>
			</tbody>
		<tfoot>

		</tfoot>
	</table>
 </div>
<p class="keterangan">
	Catatan:<br> 
	TS:Tahun akademik penuh terakhir saat pengisian borang <br>
	Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum <br>
	Catatan: <br>
	(1)  Mahasiswa program reguler adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus). <br>
	(2)  Mahasiswa program non-reguler adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu. <br>
	(3)  Mahasiswa transfer adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.<br>

</p>
<?php ?>

-->
<!-- Menu grafik -->

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
  $(".get_dayatampung").click(function()
  	{
  		var dataserialized = $('#form_dayatampung').serialize();
  		$.ajax({
  			type: 'POST',
  			url:"GrafikDayaTampung",
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
  // $(".get_dayatampung").trigger('click');
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