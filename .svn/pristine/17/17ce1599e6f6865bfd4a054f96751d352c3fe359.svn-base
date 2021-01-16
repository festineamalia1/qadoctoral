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

<p>7.2   Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PkM) dalam Tiga Tahun 
       Terakhir
</p>
		<p>7.2.2 Tuliskan nama dosen, judul, waktu dan hasil/dampak kegiatan pelayanan/pengabdian kepada masyarakat</p></p><br>
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<table class="table table-bordered min">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Dosen</th>
					<th>Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</th>
					<th>Waktu Kegiatan</th>
					<th>Hasil atau Dampak Kegiatan</th>
				</tr>
				<tr>
					<th>(1)</th>
					<th>(2)</th>
					<th>(3)</th>
					<th>(4)</th>
					<th>(5)</th>
				</tr>
			</thead>
			<tbody>
			
				<?php 
					if(isset($data)){
						$num=0;
						foreach ($data as $key => $value) {
							?>
							<tr>
							<td style="text-align:center"><?=$num?></td>
							<td style="text-align:center"><?=$value['nama_dosen']?></td>
							<td style="text-align:center"><?=$value['judul_kegiatan_pengabdian']?></td>
							<td style="text-align:center"><?=$value['wkt_awl']?></td>
							<td style="text-align:center"><?=$value['hasil']?></td>
							</tr>			
							<?
							 $num++;
						}

					}
				?>
			
			</tbody>
			</table>
<?php } ?>