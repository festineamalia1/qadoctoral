<style type="text/css">
	/*table{
		font-size: 12px;
	}
	table.min{
		font-size: 10px;
	}
	table.min th{
		text-align: center;
		vertical-align: middle;
	}
	table.kusus th{
		text-align: center;
		vertical-align: middle;
	}*/
	p{
		text-align:justify;
		text-justify:inter-world;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
	.point{
		padding-left: 15px;
	}
	.clear{
		both:clear;
	}
</style>
<p>2.6 Keberlanjutan</p>
		<p style="padding-left:25px">
				Jelaskan  upaya  untuk  menjamin  keberlanjutan  <i>(sustainability)</i> Program  Studi ini,  khususnya
				dalam hal:
		</p>
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>

		
		<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
			a. Upaya untuk peningkatan animo calon mahasiswa:<br>
				<span style="margin-left:15px;"><?=$data['animo_calon_mhs']?></span><br>		
			b. Upaya peningkatan mutu manajemen:<br>	 
				<span style="margin-left:15px;"><?=$data['mutu_manajemen']?></span><br>	
			c. Upaya untuk peningkatan mutu lulusan:<br>
				<span style="margin-left:15px;"><?=$data['mutu_lulusan']?></span><br>
			d. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan:<br>
				<span style="margin-left:15px;"><?=$data['kerjasama_kemitraan']?></span><br>
			e. Upaya dan prestasi memperoleh dana dari sumber selain mahasiswa</span><br>
				<span style="margin-left:15px;"><?=$data['dana_sumber_selain_mahasiswa']?>
		</div>
<?
}
?>