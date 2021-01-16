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
		padding: 8px;
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
</style>

<p>
	3.2 Layanan Kepada Mahasiswa
</p>
<p style="padding-left:25px">
	Lengkapilah tabel berikut untuk setiap jenis pelayanan kepada mahasiswa PS.
</p>
<table class="table table-bordered">
			<!-- <b>Jurusan :<?=$data['jurusan']?></b><br></br> -->
	<thead>
	<tr>
		<th width="50px">No.</th>	
		<th width="250px">Jenis Pelayanan kepada Mahasiswa</th>	
		<th>Bentuk kegiatan, Pelaksanaan, dan Hasilnya</th>			
	</tr>
	<tr>
		<th>(1)</th>
		<th>(2)</th>
		<th>(3)</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td style="text-align:center">1</td>
		<td>Bimbingan dan Konseling</td>	
		<td>
		 	<?=$data['kegiatan_BK']?>,
		 	<?=$data['pelaksanaan_BK']?>,
		 	<?=$data['hasil_BK']?>
		 </td>			
	</tr>
	<tr>
		<td style="text-align:center">2</td>
	  	<td>Minat dan Bakat (ektra kurikuler)</td>	 
		<td><?=$data['kegiatan_minat']?>,
			<?=$data['pelaksanaan_minat']?>,
			<?=$data['hasil_minat']?></td>		
	</tr>
	  <tr>
	  	<td style="text-align:center">3</td>
		<td>Pembinaan <i>Soft Skills</i></td>
		<td><?=$data['kegiatan_softskill']?>,
			<?=$data['pelaksanaan_softskill']?>,
			<?=$data['hasil_softskill']?></td>
	  </tr>
	<tr>
	   	<td style="text-align:center">4</td>
		<td>Beasiswa</td>
		<td><?=$data['kegiatan_beasiswa']?>,
			<?=$data['pelaksanaan_beasiswa']?>,
			<?=$data['hasil_beasiswa']?></td>
	</tr>
	<tr>
		<td style="text-align:center">5</td>
		<td>Kesehatan</td>
		<td><?=$data['kegiatan_kesehatan']?>,
			<?=$data['pelaksanaan_kesehatan']?>,
			<?=$data['hasil_kesehatan']?></td>
	</tr>
	 </tbody>
</table>
