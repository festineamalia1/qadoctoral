<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		font-weight: bold;
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
		font-weight: bold;
		margin-bottom: 50px;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<p class="judul">
	STANDAR 7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA
</p>

<p>
	7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Tiga Tahun Terakhir
</p>
<p>
	7.1.7  Sebutkan karya dosen dan atau mahasiswa program studi yang telah memperoleh hak paten/HaKI atau karya yang mendapat pengakuan/penghargaan dari lembaga nasional/ internasional, tiga tahun terakhir.
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
		<table class="table table-bordered min">
			<thead>
				<tr>
					<th rowspan="2" colspan="1">No</th>
					<th rowspan="1" colspan="3">Nama Karya*</th>
			</tr>
			<tr>
				<th colspan="1">Paten/Haki</th>
				<th colspan="1">Karya yang Mendapat Pengakuan/ penghargaan dari Lembaga Nasional/ International</th>
			

					
				</tr>

				<tr>
					<th>(1)</th>
					<th>(2)</th>
					<th>(3)</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i=0;
				foreach ($data as $key => $value) {
					$i++;
				?>
				<tr>
					<td width="35px" style="text-align:center"><?=$i?></td>
					<td><?=$value['status_haki']?></td>
					<td><?=$value['judul']?></td>
				</tr>
				<?php
				}
				?>
				
			</tbody>
			<tfoot>
			</tfoot>
		</table>
<p class="keterangan">
	*Lampirkan surat paten HaKI atau keterangan sejenis.
</p>
<?php } ?>