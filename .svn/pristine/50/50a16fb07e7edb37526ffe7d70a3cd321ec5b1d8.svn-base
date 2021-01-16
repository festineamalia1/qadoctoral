<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		border-top: 0.01pt solid black ;
		font-weight: bold;
		text-align: center;
		padding: 5px;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	.judul{
		text-align: center;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		margin-bottom: 15px;
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


<p>6.2 Sarana</p>
<p>
	6.2.1 Uraikan penilaian Fakultas/Sekolah Tinggi tentang sarana untuk menjamin penyelenggaraan program Tridarma PT 
	yang bermutu tinggi. Uraian ini mencakup aspek: kecukupan/ketersediaan/akses dan kewajaran serta rencana pengembangan dalam lima tahun mendatang. 
	Uraikan kendala yang dihadapi dalam penambahan sarana .
</p>
<?php
if(empty($F_sarana)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p style="border:1px solid black;padding:5px;">
	<? 
	foreach ($F_sarana as $key => $value) {
	?>
		<?=$value['uraian_sarana']?>
	<?
		}
	?>


</p><br>
<?php } ?>
<p>
	6.2.2  Tuliskan sarana tambahan untuk meningkatkan mutu penyelenggarakan program Tridarma PT pada semua  program studi yang dikelola dalam tiga tahun terakhir. 
	Uraikan pula  rencana investasi untuk sarana dalam lima tahun mendatang, dengan mengikuti format tabel berikut :
</p>
<?php
if(empty($F_tambahan)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Jenis Sarana Tambahan</th>
			<th rowspan="2">Investasi Sarana Selama Tiga Tahun Terkahir (Juta Rp)</th>
			<th rowspan="1" colspan="2">Rencana Investasi Sarana dalam Lima Tahun Mendatang</th>
		</tr>
		<tr>
			<th colspan="1">Nilai Investasi (Juta Rp)</th>
			<th colspan="1">Sumber Dana</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
		</tr>
	</thead>
	<tbody>
		<?
			$i=0;
		foreach ($F_tambahan as $key => $value) {
			$i++;
			?>
			<tr>
				<td><?=$i?></td>
				<td><?=$value['jenis_sarana']?></td>
				<td><?=$value['investasi_sarana']?></td>
				<td><?=$value['rencana_investasi']?></td>
				<td><?=$value['sumber_dana']?></td>
			</tr>
			<?
		}
		?>
	</tbody>
	<tfoot>

	</tfoot>
</table>
<?
}
?>