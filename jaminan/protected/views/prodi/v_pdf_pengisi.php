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
<!-- identitas pengisi -->
<p style="font-size:15px;text-align:center;font-weight:bold;margin-top:50px;margin-bottom:20px;">IDENTITAS PENGISI BORANG PROGRAM STUDI</p>

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
					<td style="border:0.01 solid black;width:35%;height:70px;"><div style="width:200px;height:40px;padding:20px;"></div></td>
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
