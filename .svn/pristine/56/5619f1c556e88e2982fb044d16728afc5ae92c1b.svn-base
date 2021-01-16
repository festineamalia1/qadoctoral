<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		text-align: center;
		border: thin solid black;
		font-weight: bold;
		padding: 7px;
	}
	table tr td{
		border: thin solid black;
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


<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
	<p>
		7.3 Kegiatan Kerjasama dengan Instansi Lain
	</p>
	<p>7.3.1 Tuliskan instansi dalam negeri yang menjalin kerjasama* yang terkait dengan Program
		Studi/jurusan dalam tiga tahun terakhir
	</p>

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
		$no=1;
		foreach ($data as $key => $value) {
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
		}
		?>
</table>
<p class="keterangan">
	Catatan : (*) dokumen pendukung disediakan pada saat asesmen lapangan
</p>
<?
}
?>