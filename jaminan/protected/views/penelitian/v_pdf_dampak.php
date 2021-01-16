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
	.judul{
		text-align: left;
		font-weight: bold;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 20px;
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
<br>
<p class="judul">
	STANDAR 7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA
</p>
<p>
		7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Lima Tahun Terakhir
	</p>
	<p>
		7.1.3  Jelaskan hasil penelitian dosen atau penelitian tesis mahasiswa  pada butir 7.1.1. yang berdampak pada peningkatan (1) produktivitas, (2) kesejahteraan masyarakat, dan (3) mutu lingkungan
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
			a. Dampak pada peningkatan produktivitas:<br>
				<span style="margin-left:15px;"><?=$data['damp_produktifitas']?></span><br>		
			b.  Dampak pada peningkatan kesejahteraan masyarakat:<br>	 
				<span style="margin-left:15px;"><?=$data['damp_kesejahteraan_masyarakat']?></span><br>	
			c.  Dampak pada peningkatan mutu lingkungan:<br>
				<span style="margin-left:15px;"><?=$data['damp_mutu_lingkungan']?></span><br>
			<div class="clear"></div>
		</div>


<?
}
?>