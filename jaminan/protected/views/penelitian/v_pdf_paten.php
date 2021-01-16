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
	<p class="judul" style="font-weight:bold;">
	7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Lima Tahun Terakhir
	</p>
	<p>
	7.1.6  Sebutkan karya dosen dan atau mahasiswa program studi yang telah memperoleh hak paten/HaKi atau karya yang mendapat pengakuan/penghargaan dari lembaga nasional/ internasional.
	</p>
	<br>
<?
	if(empty($data)){
		?>
		<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	} else {
	?>
	<table  class="table table-bordered min">
		<thead>
		<tr>
			<th rowspan="2">No</th>
			<th colspan="2"> Nama Karya*</th>
		</tr>
		<tr>
			<th>Paten/Haki</th>
			<th>Karya yang Mendapat Pengakuan/Penghargaan dari Lembaga Nasional/Internasional</th>
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
					<td><?=$value['haki']?></td>
					<td><?=$value['judul']?></td>
				</tr>
				<?php
				}
				?>
		</tbody>
	</table>
	<?
	}
	?>
<p class="keterangan">
	Catatan : (*) Lampirkan surat paten/HaKI atau surat pengakuan/penghargaan dari lembaga nasional/ internasional.
</p>