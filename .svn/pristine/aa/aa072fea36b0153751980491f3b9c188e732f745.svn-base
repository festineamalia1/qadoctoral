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
<p style="font-size:15px;text-align:center;font-weight:bold;margin-top:30px;">DATA DAN INFORMASI</p>
<p style="font-size:20px;text-align:center;font-weight:bold;">FAKULTAS*/ SEKOLAH TINGGI**</p>
<p style="font-size:15px;text-align:center;font-weight:bold;">IDENTITAS</p>

<table class="" style="width:100%;padding:10px;margin-top:30px;">
<tbody>
	<tr>
		<td style="width:35%;">Nama Perguruan Tinggi</td>
		<td>: <?php echo $data->nama_prodi;?></td>
	</tr>
	<tr>
		<td style="width:35%;">Alamat</td>
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
	<tr>
		<td style="width:35%;">Nomor dan Tanggal SK Pendirian Institusi</td>
		<td>: Nomor SK : <?php echo $data->no_sk;?> <br>
			&nbsp;  Tangal : <?php echo date('d M Y',strtotime($data->tgl_sk));?>
		</td>
	</tr>
	<tr>
		<td style="width:35%;">Pejabat yang Menerbitkan SK</td>
		<td>: <?php echo $data->pejabat_sk;?></td>
	</tr>
</tbody>
</table>

<p style="margin-top:30px;">Identitas berikut ini mengenai Fakultas (yang bersangkutan dengan PS) dari Perguruan Tinggi :</p>
<table class="" style="width:100%;padding:10px;">
<tbody>
	<tr>
		<td style="width:35%;">Nama Fakultas</td>
		<td>: <?php echo $data->nama_prodi;?></td>
	</tr>
	<tr>
		<td style="width:35%;">Alamat</td>
		<td>: <?php echo $data->alamat_PS;?></td>
	</tr>
	<tr>
		<td style="width:35%;">No. Telepon</td>
		<td>: <?php echo $data->telp_PS;?></td>
	</tr>
	<tr>
		<td style="width:35%;">No. Faksimili</td>
		<td>: <?php echo $data->fax_PS;?></td>
	</tr>
	<tr>
		<td style="width:35%;"><i>Homepage dan E-Mail</i></td>
		<td>: <?php echo $data->homepage_PS;?>  /  Email : <?php echo $data->email_PS;?></td>
	</tr>
	<tr>
		<td style="width:35%;">Nomor dan Tanggal SK Pendirian Institusi</td>
		<td>: Nomor SK : <?php echo $data->no_sk;?> <br>
			&nbsp;  Tangal : <?php echo date('d M Y',strtotime($data->tgl_sk));?>
		</td>
	</tr>
	<tr>
		<td style="width:35%;">Pejabat yang Menerbitkan SK</td>
		<td>: <?php echo $data->pejabat_sk;?></td>
	</tr>
</tbody>
</table>


<p style="margin-top:30px;">Program studi yang dikelola oleh Fakultas/Sekolah Tinggi :</p>
<table class="" style="width:100%;padding:10px;">
<tbody>
	<tr>
		<td style="width:3%;">1</td>
		<td style="width:35%;">PS......................</td>
		<td>(Jenjang Pendidikan...........)</td>
	</tr>
</tbody>
</table>
<p style="margin-top:40px;font-weight:bold;text-align:center;">Isian selanjutnya adalah informasi yang mencakup semua program studi 
	dalam Fakultas/Sekolah Tinggi
</p>
<p style="font-size:12px;">
	Keterangan:<br>
 * 	Untuk Universitas atau Institut, borang  ini diisi oleh Fakultas.<br>
**  Untuk Sekolah Tinggi, borang ini diisi oleh Sekolah Tinggi.<br>
</p>



<!-- identitas pengisi -->
<p style="font-size:15px;text-align:center;font-weight:bold;margin-top:80px;">IDENTITAS PENGISI BORANG</p>
<p style="font-size:20px;text-align:center;font-weight:bold;margin-bottom:30px;">FAKULTAS*/ SEKOLAH TINGGI**</p>

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

<p style="font-size:12px;">
	Keterangan:<br>
* 	Untuk Universitas atau Institut, borang ini diisi oleh Fakultas.<br>
**  Untuk Sekolah Tinggi, borang ini diisi oleh Sekolah Tinggi.<br>
</p>


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