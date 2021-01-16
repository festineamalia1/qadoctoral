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

</p>

7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Tiga Tahun Terakhir

<p>
	7.1.6   Tuliskan dosen yang melakukan penelitian dengan melibatkan mahasiswa program magister untuk penelitian tesisnya, pada tahun akademik terakhir (TS).
</p>
<?php if($id_prodi == 1){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>		
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
				<th>Nama Dosen Tetap</th>
				<th>Topik Penelitian</th>
				<th>Jumlah Mahasiswa yang terlibat</th>
			</tr>
			<tr>
				<th>(1)</th>
				<th>(2)</th>
				<th>(3)</th>
				<th>(4)</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i=0;
				$tot_jum_mhs_terlbt=0;
				$tot_mhs_terlibat_tesis=0;
				$tot_seluruh=0;

				foreach ($data as $key => $value) {
					$i++;
				?>
			<tr>
				<td style="text-align:center"><?=$i?></td>
				<td style="text-align:center"><?=$value['nama_dosen']?></td>
				<td style="text-align:center"><?=$value['topik_penelitian_tesis']?></td>
				<td style="text-align:center"><?=$value['jum_mhs_terlbt']?></td>
			</tr>

			<?php
				$tot_jum_mhs_terlbt += $value['jum_mhs_terlbt'];

				$tot_mhs_terlibat_tesis += $value['mhs_terlibat_tesis'];

				$tot_seluruh += $tot_jum_mhs_terlbt + $tot_mhs_terlibat_tesis;
			}
			?>

			
		</tbody>
		<tfoot>
			<tr>
				<th rowspan="1"  colspan="3">Total jumlah mahasiswa yang penelitian tesisnya terkait dengan penelitian dosen  </th>
				<th><?=$tot_jum_mhs_terlbt?></th>	
			</tr>
			<tr>
				<th rowspan="1" colspan="3">Jumlah mahasiswa yang penelitian tesisnya tidak terkait dengan penelitian dosen </th>
				<th><?=$tot_mhs_terlibat_tesis?></th>
			</tr>

			<tr>
				<th rowspan="1" colspan="3">Jumlah total</th>
				<th><?=$tot_seluruh?></th>
			</tr>

		</tfoot>
	</table>

<?php } 
}?>