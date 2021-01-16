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
<p>2.5   Umpan Balik</p>
<p style="padding-left:25px">
	Apakah Program  Studi telah  melakukan  kajian  tentang  proses  pembelajaran  melalui  umpan
balik  dari  dosen,  mahasiswa,  alumni,  dan  pengguna  lulusan  mengenai  harapan  dan  persepsi
mereka? Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.
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
				<th width="50px">No</th>
				<th width="180px">Umpan Balik Dari</th>
				<th>Isi Umpan Balik</th>				
				<th>tindak lanjut</th>
			</tr>
			<tr>
				<th>(1)</th>
				<th>(2)</th>
				<th>(3)</th>
				<th>(4)</th>
			</tr>
		<thead>
		<tbody>
			<tr>
			    <td align="center">1</td>
			    <td>Dosen</td>
			    <td><?=$data['umpan_balik_dosen']?></td>
				<td><?=$data['tindak_lanjut_dosen']?></td>
			</tr>
			<tr>
			    <td align="center">2</td>
			    <td>Mahasiswa</td>
			    <td><?=$data['umpan_balik_mhs']?></td>
				<td><?=$data['tindak_lanjut_mhs']?></td>
			</tr>
			<tr>
			    <td align="center">3</td>
			    <td>Alumni</td>
			    <td><?=$data['umpan_balik_alumni']?></td>
				<td><?=$data['tindak_lanjut_alumni']?></td>
			</tr>
			<tr>
			    <td align="center">4</td>
			    <td>Pengguna Lulusan</td>
			    <td><?=$data['umpan_balik_alumni']?></td>
				<td><?=$data['tindak_lanjut_lulusan']?></td>
			</tr>
		</tbody>	
</table>

<?
}
?>