<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		text-align: center;
		border: 0.01pt solid black;
		font-weight: bold;
		padding: 7px;
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
		font-weight: bold;
		margin-bottom: 50px;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<p>7.3.2 Tuliskan instansi luar negeri yang menjalin kerjasama* yang terkait dengan Program
	Studi/jurusan dalam tiga tahun terakhir
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
<table class="table table-bordered">
		<tr>
			<th rowspan="2">No.</th>
			<th rowspan="2">Nama Instansi</th>
			<th rowspan="2">Jenis Kegiatan</th>
			<th rowspan="1" colspan="2">Kurun Waktu Kerjasama</th>
			<th rowspan="2">Manfaat yang Telah Diperoleh</th>
		</tr>
		<tr>
			<th colspan="1">Mulai</th>
			<th colspan="1">Keluar</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
			<th colspan="1">(6)</th>
		</tr>

		<?php
		$no=0;
		foreach ($data as $key => $value) {
			$no++;
		?>
		<tr>
			<td style="text-align:center"><?=$no?></td>	 
			<td><?=$value['nama_instansi']?></td>
			<td><?=$value['jenis_kegiatan']?></td>
			<td style="text-align:center"><?=$value['th_mulai']?></td>	
			<td style="text-align:center"><?=$value['th_akhir']?></td>	
			<td><?=$value['manfaat']?></td>	
		</tr>
		<?php
		$no++;
		}
		?>
</table>
<p class="keterangan">
	Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan
</p>
<?
}
?>