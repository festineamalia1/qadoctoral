<?php
$this->breadcrumbs=array(
	'Identitas',
);
?>
<style type="text/css">
	table.min{
		font-size: 12px;
	}
	table.min th{
		text-align: center;
		vertical-align: middle;
	}
	table td{
		padding: 5px;
	}
	.table th{
		text-align: center;
	}
</style>
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
} else {
?>
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

	<!-- identitas pengisi -->
	<p style="font-size:15px;text-align:center;font-weight:bold;margin-top:50px;margin-bottom:20px;">IDENTITAS PENGISI BORANG PROGRAM STUDI</p>

	<?php
		if(!empty($pengisi)){
			foreach ($pengisi as $key => $value) {
				?>
				<table class="" style="width:100%;padding:10px;margin-bottom:30px;">
				<tbody>
					<tr>
						<td style="width:35%;">Nama</td>
						<td>: <?php echo $value['nama'];?></td>
					</tr>
					<tr>
						<td style="width:35%;">NIDN</td>
						<td>: <?php echo $value['nidn'];?></td>
					</tr>
					<tr>
						<td style="width:35%;">Jabatan</td>
						<td>: <?php echo $value['jabatan'];?></td>
					</tr>
					<tr>
						<td style="width:35%;">Tanggal Pengisian</td>
						<td>: <?php echo date('d M Y',strtotime($value['tanggal_pengisian']));?></td>
					</tr>
					<tr>
						<td style="width:35%;">Tanda Tangan</td>
						<td><div style="width:200px;height:40px;padding:20px;border:1px solid black;"></div></td>
					</tr>
				</tbody>
				</table>


			<?php
			}
		}else{
			?>
			<table class="" style="width:100%;padding:10px;margin-bottom:30px;">
				<tbody>
					<tr>
						<td style="width:100%;border:none;" colspan="2" class="alert alert-error">Identitas pengisi borang masih belum diisi. Mohon diisi terlebih dahulu.</td>
					</tr>
				</tbody>
				</table>
			<?
		}
	?>


	<!-- tombol cetak -->
	<div class="row-fluid" style="margin-top:100px !important;margin-bottom:20px;">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/prodi/cetakpdfidentitas/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary">
				<i class="icon-print icon-white"></i> 
				Cetak Daftar Isi
			</a>
		</div>
	</div>
<?php
}
?>