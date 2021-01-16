<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
	}
	table thead tr th{
		border:  0.01pt solid black;
	}
	table tr th{
		border: 0.01pt solid black;
		font-weight: bold;
		padding: 10px;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	.judul{
		text-align: left;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 20px;
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
		STANDAR 3. MAHASISWA DAN LULUSAN
</p>

<p>
	3.1 Profil Mahasiswa dan Lulusan
</p>

<p>
	3.1.1 Tuliskan data seluruh mahasiswa reguler<sup>(1)</sup> dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:
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
	<thead>
		<tr>
			<th rowspan="2">Tahun Akademik</th>
			<th rowspan="2">Daya Tampung</th>
			<th rowspan="1" colspan="2">Jumlah Calon Mahasiswa Reguler</th>
			<th rowspan="1" colspan="2">Jumlah Mahasiswa Baru</th>
			<th rowspan="1" colspan="2">Jumlah Total Mahasiswa</th>
			<th rowspan="1" colspan="2">Jumlah Lulusan</th>
			<th rowspan="1" colspan="3">IPK Lulusan Reguler</th>
			<th rowspan="1" colspan="3">Presentasi Lulusan Reguler dengan IPK</th>
		</tr>
		<tr>
			<th colspan="1">Ikut Seleksi</th>
			<th colspan="1">Lulus Seleksi</th>
			<th colspan="1">Reguler Bukan Trasnfer</th>
			<th colspan="1">Transfer<sup>(3)</sup></th>
			<th colspan="1">Reguler Bukan Trasnfer</th>
			<th colspan="1">Transfer<sup>(3)</sup></th>
			<th colspan="1">Reguler Bukan Trasnfer</th>
			<th colspan="1">Transfer<sup>(3)</sup></th>
			<th colspan="1">Min</th>
			<th colspan="1">Rat</th>
			<th colspan="1">Max</th>
			<th colspan="1"><2.75</th>
			<th colspan="1">2.75 - 3.50</th>
			<th colspan="1">>3.50</th>
		</tr>
		<tr>
			<th colspan="1">(1)</th>
			<th colspan="1">(2)</th>
			<th colspan="1">(3)</th>
			<th colspan="1">(4)</th>
			<th colspan="1">(5)</th>
			<th colspan="1">(6)</th>
			<th colspan="1">(7)</th>
			<th colspan="1">(8)</th>
			<th colspan="1">(9)</th>
			<th colspan="1">(10)</th>
			<th colspan="1">(11)</th>
			<th colspan="1">(12)</th>
			<th colspan="1">(13)</th>
			<th colspan="1">(14)</th>
			<th colspan="1">(15)</th>
			<th colspan="1">(16)</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td style="text-align:center;"><?=$value['thn_akademik']?></td>
			<td style="text-align:center;"><?=$value['daya_tampung']?></td>
			<td style="text-align:center;"><?=$value['mhs_ikut_seleksi']?></td>
			<td style="text-align:center;"><?=$value['mhs_lulus_seleksi']?></td>
			<td style="text-align:center;"><?=$value['maba_bkn_transfer']?></td>
			<td style="text-align:center;"><?=$value['maba_transfer']?></td>
			<td style="text-align:center;"><?=$value['total_mhs_bkn_transfer']?></td>
			<td style="text-align:center;"><?=$value['total_mhs_transfer']?></td>
			<td style="text-align:center;"><?=$value['jumlah_lulus_bkn_transfer']?></td>
			<td style="text-align:center;"><?=$value['jumlah_lulus_transfer']?></td>
			<td style="text-align:center;"><?=$value['ipk_min_lulusan_reguler']?></td>
			<td style="text-align:center;"><?=$value['ipk_rata2_lulusan_reguler']?></td>
			<td style="text-align:center;"><?=$value['ipk_maks_lulusan_reguler']?></td>
			<td style="text-align:center;"><?=$value['persen_ipk275']?></td>
			<td style="text-align:center;"><?=$value['persen_ipk275_350']?></td>
			<td style="text-align:center;"><?=$value['persen_ipk350']?></td>
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
<p class="keterangan">
	Catatan:<br> 
	TS:Tahun akademik penuh terakhir saat pengisian borang <br>
	Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum <br>
	Catatan: <br>
	(1)  Mahasiswa program reguler adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus). <br>
	(2)  Mahasiswa program non-reguler adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu. <br>
	(3)  Mahasiswa transfer adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.<br>

</p>
<?php } ?>