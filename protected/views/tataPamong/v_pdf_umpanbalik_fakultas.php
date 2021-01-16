<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table thead tr th{
		border:  thin solid black;
	}
	table tr th{
		border: thin; solid black;
		border-top: none;
		font-weight: bold;
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
<h4>2.5   Umpan Balik</h4>
<p>
	Apakah Program  Studi telah  melakukan  kajian  tentang  proses  pembelajaran  melalui  umpan
balik  dari  dosen,  mahasiswa,  alumni,  dan  pengguna  lulusan  mengenai  harapan  dan  persepsi
mereka? Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.
</p>
<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Umpan Balik Dari</th>
				<th>Isi Umpan Balik</th>				
				<th>tindak lanjut</th>
			</tr>
		<thead>
		<tbody>
			<tr>
			    <td>1</td>
			    <td>Dosen</td>
			    <td><?=$data['umpan_balik_dosen']?></td>
				<td><?=$data['tindak_lanjut_dosen']?></td>
			</tr>
			<tr>
			    <td>2</td>
			    <td>Mahasiswa</td>
			    <td><?=$data['umpan_balik_mhs']?></td>
				<td><?=$data['tindak_lanjut_mhs']?></td>
			</tr>
			<tr>
			    <td>3</td>
			    <td>Alumni</td>
			    <td><?=$data['umpan_balik_alumni']?></td>
				<td><?=$data['tindak_lanjut_alumni']?></td>
			</tr>
			<tr>
			    <td>4</td>
			    <td>Pengguna Lulusan</td>
			    <td><?=$data['umpan_balik_alumni']?></td>
				<td><?=$data['tindak_lanjut_lulusan']?></td>
			</tr>
		</tbody>	
</table>

<?
}
?>