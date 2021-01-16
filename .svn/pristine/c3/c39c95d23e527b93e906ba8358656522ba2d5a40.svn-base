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
		border-top: none;
		font-weight: bold;
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
	3.2 Layanan Kepada Mahasiswa
</p>
<p>
	Lengkapilah tabel berikut untuk setiap jenis pelayanan kepada mahasiswa PS.
</p>
<table class="table table-striped">
			<!-- <b>Jurusan :<?=$data['jurusan']?></b><br></br> -->
	<thead>
	<tr>
		<th>Jenis</th>	
		<th>Kegiatan</th>	
		<th>Pelaksanaan</th>	
		<th>Hasil</th>			
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Bimbingan dan Konseling</td>	
		 <td><?=$data['kegiatan_BK']?></td>	
		 <td><?=$data['pelaksanaan_BK']?></td>	
		 <td><?=$data['hasil_BK']?></td>			
	</tr>
	<tr class="success">
	  	<td>Minat dan Bakat</td>	 
		<td><?=$data['kegiatan_minat']?></td>
		<td><?=$data['pelaksanaan_minat']?></td>
		<td><?=$data['hasil_minat']?></td>		
	</tr>
	  <tr class="error">
		<td>Pembinaan <i>Soft Skill</i></td>
		<td><?=$data['kegiatan_softskill']?></td>
		<td><?=$data['pelaksanaan_softskill']?></td>
		<td><?=$data['hasil_softskill']?></td>
	  </tr>
	   <tr class="warning">
		<td>Beasiswa</td>
		<td><?=$data['kegiatan_beasiswa']?></td>
		<td><?=$data['pelaksanaan_beasiswa']?></td>
		<td><?=$data['hasil_beasiswa']?></td>
	  </tr>
	   <tr class="info">
		<td>Kesehatan</td>
		<td><?=$data['kegiatan_kesehatan']?></td>
		<td><?=$data['pelaksanaan_kesehatan']?></td>
		<td><?=$data['hasil_kesehatan']?></td>
	  </tr>
	 </tbody>
</table>
<?
}
?>