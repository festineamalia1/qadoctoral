<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		border-top: thin solid black ;
		font-weight: bold;
		text-align: center;
		padding: 10px;
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

<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p class="sub_judul">5.4 Sistem Pembimbingan Akademik</p>
<p>5.4.1 Nama dosen pembimbing akademik dan jumlah mahasiswa yang dibimbingnya dengan mengikuti format tabel berikut : </p>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Dosen Pembimbing Akademik</th>
			<th>Jumlah Mahasiswa Bimbingan</th>
			<th>Rata-rata Banyaknya Pertemuan/mhs/semester</th>
		</tr>
	</thead>
	<tbody>
		<?
		$i = 0;
		$total = 0;
		$rata = 0;
		foreach ($data as $key => $value) {
			$i++;
			$rata += $value['rata_pertemuan'];
			$total += $value['jml_mhs_bim'];
			?>
			<tr>
				<td style="text-align:center;"><?=$i?></td>
				<td style="text-align:center;"><?=$value['nama_dosen']?>, <?=$value['gelar_akademik']?></td>
				<td style="text-align:center;"><?=$value['jml_mhs_bim']?></td>
				<td style="text-align:center;"><?=$value['rata_pertemuan']?></td>
			</tr>
			<?
		}
		?>
		<tr>
			<td colspan="2" style="text-align:center;">Total</td>
			<td style="text-align:center;"><?=$total?></td>
			<td style="background:#333;"></td>
		</tr>
		<tr>
			<td colspan="4" style="text-align:left;">rata-rata banyaknya pertemuan per mahasiswa per semester = <?=($rata/$i)?> kali</td>
		</tr>
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p>5.4.2 Jelaskan proses pembimbingan akademik yang diterapkan pada program studi ini dalam hal-hal berikut :</p>
<table class="table table-bordered">
	<thead>
		<tr>
			<th style="width:20px;">No.</th>
			<th style="width:200px;">Hal</th>
			<th>Penjelasan</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Tujuan Pembimbingan</td>
			<td><?=$proses['tujuan_bim']?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Pelaksanaan Pembimbingan</td>
			<td><?=$proses['pelaksanaan']?></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Masalah yang dibicarakan dalam pembimbingan</td>
			<td><?=$proses['pembicara']?></td>
		</tr>
		<tr>
			<td>4</td>
			<td>Kesulitan dalam bimbingan dan upaya untuk mengatasinya</td>
			<td><?=$proses['kendala']?></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Manfaat yang diperoleh mahasiswa dari pembimbingan</td>
			<td><?=$proses['manfaat']?></td>
		</tr>
	</tbody>
	<tfoot>

	</tfoot>
</table>
<?
}
?>