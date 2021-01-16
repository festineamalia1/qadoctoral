<style type="text/css">
	@media print{
		.table td{
			padding: 10px;
		}
		.alert{
			padding: 8px 35px 8px 14px;
			margin-bottom: 20px;
			color: #c09853;
			text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
			background-color: #fcf8e3;
			border: 1px solid #fbeed5;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
		}
		.alert-error{
			color: #b94a48;
			background-color: #f2dede;
			border-color: #eed3d7;
		}
		.table-bordered{
			border-collapse: collapse;
			width: 100%;
		}
		.table-bordered tr th{
			border: 0.01pt solid black;
			font-weight: bold;
			padding: 7px;
		}
		.table-bordered tr td{
			border: 0.01pt solid black;
			padding: 10px;
		}
	}
	
	p{
		text-align:justify;
		text-justify:inter-world;
	}
	.ket_atas{
		font-size: 12px;
		text-align:justify;
		text-justify:inter-world;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<p style="font-size:15px;text-align:center;font-weight:bold;margin-top:30px;">BORANG PROGRAM STUDI</p>
<p style="font-size:20px;text-align:center;font-weight:bold;">IDENTITAS PROGRAM STUDI</p>

<table class="" style="width:100%;padding:10px;margin-top:30px;">
<tbody>
	<tr>
		<td style="width:35%;">Program Studi (PS)</td>
		<td>: <?php echo $data->nama_prodi;?></td>
	</tr>
	<tr>
		<td style="width:35%;">Jurusan/Departemen</td>
		<td>:</td>
	</tr>
	<tr>
		<td style="width:35%;">Fakultas</td>
		<td>: ISIPOL</td>
	</tr>
	<tr>
		<td style="width:35%;">Perguruan Tinggi</td>
		<td>:</td>
	</tr>
	<tr>
		<td style="width:35%;">Nomor SK pendirian PS (*)</td>
		<td>:  <?php echo $data->no_sk;?></td>
	</tr>
	<tr>
		<td style="width:35%;">Tanggal SK pendirian PS</td>
		<td>: <?php echo date('d M Y',strtotime($data->tgl_sk));?></td>
	</tr>
	<tr>
		<td style="width:35%;">Pejabat Penandatangan SK Pendirian PS</td>
		<td>: <?php echo $data->pejabat_sk;?></td>
	</tr>
	<tr>
		<td style="width:35%;">Bulan & Tahun Dimulainya Penyelenggaraan PS</td>
		<td>: <?php echo $data->bln_thn_PS;?></td>
	</tr>
	<tr>
		<td style="width:35%;">Nomor SK Izin Operasional (*)</td>
		<td>: <?php echo $data->no_sk_operasional;?></td>
	</tr>
	<tr>
		<td style="width:35%;">Tanggal SK Izin Operasional</td>
		<td>: <?php echo $data->tgl_sk_operasional;?></td>
	</tr>
	<tr>
		<td style="width:35%;">Peringkat (Nilai) Akreditasi Terakhir</td>
		<td>:</td>
	</tr>
	<tr>
		<td style="width:35%;">Nomor SK BAN-PT</td>
		<td>: <?php echo $data->no_sk_BANPT;?></td>
	</tr>
	<tr>
		<td style="width:35%;">Alamat PS</td>
		<td>: <?php echo $data->alamat_PS;?></td>
	</tr>
	<tr>
		<td style="width:35%;">No. Telepon PS</td>
		<td>: <?php echo $data->telp_PS;?></td>
	</tr>
	<tr>
		<td style="width:35%;">No. Faksimili PS</td>
		<td>: <?php echo $data->fax_PS;?></td>
	</tr>
	<tr>
		<td style="width:35%;"><i>Homepage dan E-mail PS</i></td>
		<td>: <?php echo $data->homepage_PS;?>  /  Email : <?php echo $data->email_PS;?></td>
	</tr>
</tbody>
</table>

<p style="font-size:12px;margin-top:30px;">
	(*) : Lampirkan fotokopi SK terakhir
</p>

<p style="margin-top:30px;">
	Bagi PS yang dibina oleh Departemen Pendidikan Nasional, 
	sebutkan nama dosen tetap institusi yang terdaftar sebagai 
	dosen tetap PS berdasarkan SK 034/DIKTI/Kep/2002, dalam tabel di bawah ini.
</p>

<table class="table table-bordered" style="margin-top:30px;">
<thead>
	<tr>
		<th>No.</th>
		<th>Nama Dosen Tetap</th>
		<th>NIDN**</th>
		<th>Tgl. Lahir</th>
		<th>Jabatan Akademik</th>
		<th>Gelar Akademik</th>
		<th>Pendidikan S1, S2, S3  dan Asal PT </th>
		<th>Bidang Keahlian untuk Setiap Jenjang Pendidikan </th>
	</tr>
	<tr>
		<th>(1)</th>
		<th>(2)</th>
		<th>(3)</th>
		<th>(4)</th>
		<th>(5)</th>
		<th>(6)</th>
		<th>(7)</th>
		<th>(8)</th>
	</tr>
</thead>
<tbody>
	<?php
	$i = 0;
	foreach ($dosen as $key => $value) {
		$i++;
		?>
		<tr>
			<td style="text-align:center;"><?php echo $i;?></td>
			<td><?php echo $value['nama_dosen'];?></td>
			<td><?php echo $value['Nidn'];?></td>
			<td><?php echo $value['tgl_lahir'];?></td>
			<td><?php echo $value['jabatan_akademik'];?></td>
			<td><?php echo $value['gelar_akademik'];?></td>
			<td>
				<?php echo $value['pendidikanS1'];?>,<?php echo $value['asal_PTS1'];?><br>
				<?php echo $value['pendidikanS2'];?>,<?php echo $value['asal_PTS2'];?><br>
				<?php echo $value['pendidikanS3'];?>,<?php echo $value['asal_PTS3'];?><br>
			</td>
			<td>
				<?php echo $value['bidang_keahlianS1'];?><br>
				<?php echo $value['bidang_keahlianS2'];?><br>
				<?php echo $value['bidang_keahlianS3'];?><br>
			</td>
		</tr>
		<?php
	}
	?>
</tbody>
</table>

<p style="font-size:12px;margin-top:30px;mergin-bottom:30px;">
	** NIDN : Nomor Induk Dosen Nasional
</p>
