<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
	}
	table tr th{
		border: thin solid black;
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
	.judul2{
		text-align: left;
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

			<p style="text-align:center;font-weight: bold;">
				DAFTAR  LAMPIRAN
			</p>
			<p>
				A. LAMPIRAN YANG HARUS DIKIRIM BERSAMA BORANG YANG DIISI FAKULTAS/ SEKOLAH TINGGI
			</p>
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th style="text-align:center;width:20px;">No.</th>
						<th style="text-align:center;width:100px;">Nomor Butir</th>
						<th style="text-align:center;">Keterangan</th>
						<th style="text-align:center;width:200px;">Lampiran</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td style="text-align:center;">1</td>
						<td style="text-align:center;">-</td>
						<td style=""><?=(isset($data['sk_pendirian']))? $data['sk_pendirian']['keterangan']:''?></td>
						<td style="text-align:center;"><?=(isset($data['sk_pendirian']))? $data['sk_pendirian']['nama_file']:'-'?></td>
					</tr>
					<tr>
						<td style="text-align:center;">2</td>
						<td style="text-align:center;">1.1</td>
						<td style=""><?=(isset($data['1.1']))? $data['1.1']['keterangan']:'Dokumen Renstra dan Renop Fakultas/ Sekolah Tinggi'?></td>
						<td style="text-align:center;"><?=(isset($data['1.1']))? $data['1.1']['nama_file']:'-'?></td>
					</tr>
				</tbody>
				<tfoot>

				</tfoot>
			</table>
			<br>
			<p>
				A. LAMPIRAN YANG HARUS DISEDIAKAN FAKULTAS/ SEKOLAH TINGGI PADA SAAT ASESMEN LAPANGAN
			</p>
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th style="text-align:center;width:20px;">No.</th>
						<th style="text-align:center;width:100px;">Nomor Butir</th>
						<th style="text-align:center;">Keterangan</th>
						<th style="text-align:center;width:200px;">Lampiran</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td style="text-align:center;">1</td>
						<td style="text-align:center;">2.1</td>
						<td style=""><?=(isset($data['2.1']))? $data['2.1']['keterangan']:'Dokumen SOP terkait dengan tata pamong '?></td>
						<td style="text-align:center;"><?=(isset($data['2.1']))? $data['2.1']['nama_file']:'-'?></td>
					</tr>
					<tr>
						<td style="text-align:center;">2</td>
						<td style="text-align:center;">2.5</td>
						<td style=""><?=(isset($data['2.5']))? $data['2.5']['keterangan']:'Dokumen tentang sistem penjaminan mutu di tingkat Fakultas/ Sekolah Tinggi'?></td>
						<td style="text-align:center;"><?=(isset($data['2.5']))? $data['2.5']['nama_file']:'-'?></td>
					</tr>
					<tr>
						<td style="text-align:center;">3</td>
						<td style="text-align:center;">3.1.1</td>
						<td style=""><?=(isset($data['3.1.1']))? $data['3.1.1']['keterangan']:'Dokumen sistem penerimaan mahasiswa baru yang mencakup :</br>
																							   (1) Kebijakan penerimaaan mahasiswa baru </br>
																							   (2) Kriteria penerimaaan mahasiswa baru </br>
																							   (3) Prosedur penerimaaan mahasiswa baru </br>
																							   (4) Instrumen penerimaaan mahasiswa baru </br>
																							   (5) Sistem pengambilan keputusan </br>'?></td>
						<td style="text-align:center;"><?=(isset($data['3.1.1']))? $data['3.1.1']['nama_file']:'-'?></td>
					</tr>
					<tr>
						<td style="text-align:center;">4</td>
						<td style="text-align:center;">5.1</td>
						<td style=""><?=(isset($data['5.1']))? $data['5.1']['keterangan']:'Dokumen yang terkait dengan penyusunan dan pengembangan kurikulum.'?></td>
						<td style="text-align:center;"><?=(isset($data['5.1']))? $data['5.1']['nama_file']:'-'?></td>
					</tr>
					<tr>
						<td style="text-align:center;">5</td>
						<td style="text-align:center;">6.1.1</td>
						<td style=""><?=(isset($data['6.1.1']))? $data['6.1.1']['keterangan']:'Laporan keuangan Fakultas/ Sekolah Tinggi dalam tiga tahun terakhir.'?></td>
						<td style="text-align:center;"><?=(isset($data['6.1.1']))? $data['6.1.1']['nama_file']:'-'?></td>
					</tr>
					<tr>
						<td style="text-align:center;">6</td>
						<td style="text-align:center;">6.4</td>
						<td style=""><?=(isset($data['6.4']))? $data['6.4']['keterangan']:'Daftar <i>software</i> yang berlisensi, petunjuk pemanfaatan SIM.'?></td>
						<td style="text-align:center;"><?=(isset($data['6.4']))? $data['6.4']['nama_file']:'-'?></td>
					</tr>
					<tr>
						<td style="text-align:center;">7</td>
						<td style="text-align:center;">7.1.1</td>
						<td style=""><?=(isset($data['7.1.1']))? $data['7.1.1']['keterangan']:'Hasil penelitian (daftar judul) yang jumlahnya ada dalam borang .'?></td>
						<td style="text-align:center;"><?=(isset($data['7.1.1']))? $data['7.1.1']['nama_file']:'-'?></td>
					</tr>
					<tr>
						<td style="text-align:center;">8</td>
						<td style="text-align:center;">7.2.1</td>
						<td style=""><?=(isset($data['7.2.1']))? $data['7.2.1']['keterangan']:'Hasil pelayanan/ pengabdian kepada masyarakat (daftar judul) yang jumlah judulnya ada dalam borang.'?></td>
						<td style="text-align:center;"><?=(isset($data['7.2.1']))? $data['7.2.1']['nama_file']:'-'?></td>
					</tr>
					<tr>
						<td style="text-align:center;">9</td>
						<td style="text-align:center;">7.3.1</td>
						<td style=""><?=(isset($data['7.3.1']))? $data['7.3.1']['keterangan']:'Dokumen pendukung kegiatan kerjasama Fakultas/ Sekolah Tinggi dengan instansi dalam negeri.'?></td>
						<td style="text-align:center;"><?=(isset($data['7.3.1']))? $data['7.3.1']['nama_file']:'-'?></td>
					</tr>
					<tr>
						<td style="text-align:center;">10</td>
						<td style="text-align:center;">7.3.2</td>
						<td style=""><?=(isset($data['7.3.2']))? $data['7.3.2']['keterangan']:'Dokumen pendukung kegiatan kerjasama Fakultas/ Sekolah Tinggi dengan instansi luar negeri.'?></td>
						<td style="text-align:center;"><?=(isset($data['7.3.2']))? $data['7.3.2']['nama_file']:'-'?></td>
					</tr>
				</tbody>
				<tfoot>

				</tfoot>
			</table>




