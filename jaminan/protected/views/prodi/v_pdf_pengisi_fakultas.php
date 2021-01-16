<!-- identitas pengisi -->
<p style="font-size:15px;text-align:center;font-weight:bold;margin-top:80px;">IDENTITAS PENGISI BORANG</p>
<p style="font-size:20px;text-align:center;font-weight:bold;margin-bottom:30px;">FAKULTAS*/ SEKOLAH TINGGI**</p>

<?php
	if(!empty($pengisi)){
		foreach ($pengisi as $key => $value) {
			?>
			<table class="" style="width:70%;padding:10px;margin-bottom:30px;">
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
					<td style="border:1px solid black;width:35%;height:70px;"><div style="width:200px;height:40px;padding:20px;"></div></td>
				</tr>
			</tbody>
			</table>


		<?php
		}
	}else{
		?>
		<div class="alert alert-error">
		  Identitas pengisi borang masih belum diisi. Mohon diisi terlebih dahulu.
		</div>
		<?
	}
?>

<p style="font-size:12px;">
	Keterangan:<br>
* 	Untuk Universitas atau Institut, borang ini diisi oleh Fakultas.<br>
**  Untuk Sekolah Tinggi, borang ini diisi oleh Sekolah Tinggi.<br>
</p>