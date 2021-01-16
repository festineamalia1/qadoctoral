<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 10px;
	}
	table.min th{
		text-align: center;
		vertical-align: middle;
	}
	table.kusus th{
		text-align: center;
		vertical-align: middle;
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



	<?
		if ($id_prodi==1) {
	?>
			<p>6.4 Sistem Informasi</p>
			<p>
				6.4.1 Jelaskan sistem informasi manajemen dan fasilitas ICT (<i>Information and Communication Technology</i>) yang digunakan Fakultas/Sekolah Tinggi 
				untuk proses penyelenggaraan akademik dan administrasi (misalkan SIAKAD, SIMKEU, SIMAWA, SIMFA, SIMPEG dan sejenisnya), termasuk <i>distance-learning</i>. 
				Jelaskan pemanfaatannya dalam proses pengambilan keputusan dalam pengembangan institusi.  
			</p>
			<p style="border:1px solid black;padding:5px;">
				penjelasan
			</p>
			<br>
			<p>
				6.4.2 Beri tanda √ pada kolom yang sesuai (hanya satu kolom per baris) dengan aksesibilitas tiap jenis data, dengan mengikuti format tabel berikut.
			</p>
			<table class="table table-bordered kusus">
				<thead>
					<tr>
						<th rowspan="2" style="width:20px;">No.</th>
						<th rowspan="2">Jenis Data</th>
						<th rowspan="1" colspan="4">Sistem Pengelolaan Data</th>
					</tr>
					<tr>
						<th colspan="1">Secara Manual</th>
						<th colspan="1">Dengan Komputer Tanpa Jaringan</th>
						<th colspan="1">Dengan Komputer Jaringan Lokal (LAN)</th>
						<th colspan="1">Dengan Komputer Jaringan Luas (WAN)</th>
					</tr>
				</thead>
				<tbody>
					<?
					if(isset($mhs)){
						$i = 0;
						$rowspan = sizeof($mhs);
						foreach ($mhs as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">1</td>
									<td rowspan="<?=$rowspan?>">Mahasiswa</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">1</td>
							<td>Mahasiswa</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($krs)){
						$i = 0;
						$rowspan = sizeof($krs);
						foreach ($krs as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">2</td>
									<td rowspan="<?=$rowspan?>">Kartu Rencana Studi (KRS)</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">2</td>
							<td>Kartu Rencana Studi (KRS)</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($jadwal_mk)){
						$i = 0;
						$rowspan = sizeof($jadwal_mk);
						foreach ($jadwal_mk as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">3</td>
									<td rowspan="<?=$rowspan?>">Jadwal mata kuliah</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">3</td>
							<td>Jadwal mata kuliah</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($nilai_mk)){
						$i = 0;
						$rowspan = sizeof($nilai_mk);
						foreach ($nilai_mk as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">3</td>
									<td rowspan="<?=$rowspan?>">Nilai mata kuliah</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">3</td>
							<td>Nilai mata kuliah</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($transkrip_akademik)){
						$i = 0;
						$rowspan = sizeof($transkrip_akademik);
						foreach ($transkrip_akademik as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">5</td>
									<td rowspan="<?=$rowspan?>">Transkrip akademik</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">5</td>
							<td>Transkrip akademik</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($lulusan)){
						$i = 0;
						$rowspan = sizeof($lulusan);
						foreach ($lulusan as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">6</td>
									<td rowspan="<?=$rowspan?>">Lulusan</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">6</td>
							<td>Lulusan</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($dosen)){
						$i = 0;
						$rowspan = sizeof($dosen);
						foreach ($dosen as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">7</td>
									<td rowspan="<?=$rowspan?>">Dosen</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">7</td>
							<td>Dosen</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($pegawai)){
						$i = 0;
						$rowspan = sizeof($pegawai);
						foreach ($pegawai as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">8</td>
									<td rowspan="<?=$rowspan?>">Pegawai</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">8</td>
							<td>Pegawai</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($keuangan)){
						$i = 0;
						$rowspan = sizeof($keuangan);
						foreach ($keuangan as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">9</td>
									<td rowspan="<?=$rowspan?>">Keuangan</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">9</td>
							<td>Keuangan</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($inventaris)){
						$i = 0;
						$rowspan = sizeof($inventaris);
						foreach ($inventaris as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">10</td>
									<td rowspan="<?=$rowspan?>">Inventaris</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">10</td>
							<td>Inventaris</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($perpustakaan)){
						$i = 0;
						$rowspan = sizeof($perpustakaan);
						foreach ($perpustakaan as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">11</td>
									<td rowspan="<?=$rowspan?>">Perpustakaan</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">11</td>
							<td>Perpustakaan</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
				</tbody>
				<tfoot>

				</tfoot>
			</table>
			<br>
			<p>
				6.4.3 Jelaskan upaya penyebaran informasi/kebijakan untuk sivitas akademika di Fakultas/ Sekolah Tinggi 
				(misalnya melalui surat, faksimili, <i>mailing list, e-mail,sms,</i>buletin).
			</p>
			<p style="border:1px solid black;padding:5px;">
				penjelasan
			</p>
			<br>
			<p>
				6.4.4 Uraikan rencana pengembangan sistem informasi jangka panjang dan upaya pencapaiannya. Uraikan pula kendala-kendala yang dihadapi.
			</p>
			<p style="border:1px solid black;padding:5px;">
				<?//=$sistem['F_rencana_pengembangan_si']?>
			</p>


			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFsistem/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>
	<?
		} else {
	?>
			<p>6.5 Sistem Informasi</p>
			<p>
				6.5.1 Jelaskan sistem informasi dan fasilitas yang digunakan oleh program studi untuk proses pembelajaran (hardware, software, e-learning, perpustakaan, dll).
			</p>
			<p style="border:1px solid black;padding:5px;">
				Penjelasan mengenai sistem informasi
			</p>
			<br>
			<p>
				6.5.2 Beri tandan V(centang) pada kolom yang sesuai (hanya satu kolom) dengan aksesibilitas tiap jenis data, dengan mengikuti format tabel berikut :
			</p>
			<table class="table table-bordered kusus">
				<thead>
					<tr>
						<th rowspan="2" style="width:20px;">No.</th>
						<th rowspan="2">Jenis Data</th>
						<th rowspan="1" colspan="4">Sistem Pengelolaan Data</th>
					</tr>
					<tr>
						<th colspan="1">Secara Manual</th>
						<th colspan="1">Dengan Komputer Tanpa Jaringan</th>
						<th colspan="1">Dengan Komputer Jaringan Lokan (LAN)</th>
						<th colspan="1">Dengan Komputer Jaringan Luas (WAN)</th>
					</tr>
				</thead>
				<tbody>
					<?
					if(isset($mhs)){
						$i = 0;
						$rowspan = sizeof($mhs);
						foreach ($mhs as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">1</td>
									<td rowspan="<?=$rowspan?>">Mahasiswa</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">1</td>
							<td>Mahasiswa</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($krs)){
						$i = 0;
						$rowspan = sizeof($krs);
						foreach ($krs as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">2</td>
									<td rowspan="<?=$rowspan?>">Kartu Rencana Studi (KRS)</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">2</td>
							<td>Kartu Rencana Studi (KRS)</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($jadwal_mk)){
						$i = 0;
						$rowspan = sizeof($jadwal_mk);
						foreach ($jadwal_mk as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">3</td>
									<td rowspan="<?=$rowspan?>">Jadwal mata kuliah</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">3</td>
							<td>Jadwal mata kuliah</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($nilai_mk)){
						$i = 0;
						$rowspan = sizeof($nilai_mk);
						foreach ($nilai_mk as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">3</td>
									<td rowspan="<?=$rowspan?>">Nilai mata kuliah</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">3</td>
							<td>Nilai mata kuliah</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($transkrip_akademik)){
						$i = 0;
						$rowspan = sizeof($transkrip_akademik);
						foreach ($transkrip_akademik as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">5</td>
									<td rowspan="<?=$rowspan?>">Transkrip akademik</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">5</td>
							<td>Transkrip akademik</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($lulusan)){
						$i = 0;
						$rowspan = sizeof($lulusan);
						foreach ($lulusan as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">6</td>
									<td rowspan="<?=$rowspan?>">Lulusan</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">6</td>
							<td>Lulusan</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($dosen)){
						$i = 0;
						$rowspan = sizeof($dosen);
						foreach ($dosen as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">7</td>
									<td rowspan="<?=$rowspan?>">Dosen</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">7</td>
							<td>Dosen</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($pegawai)){
						$i = 0;
						$rowspan = sizeof($pegawai);
						foreach ($pegawai as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">8</td>
									<td rowspan="<?=$rowspan?>">Pegawai</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">8</td>
							<td>Pegawai</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($keuangan)){
						$i = 0;
						$rowspan = sizeof($keuangan);
						foreach ($keuangan as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">9</td>
									<td rowspan="<?=$rowspan?>">Keuangan</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">9</td>
							<td>Keuangan</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($inventaris)){
						$i = 0;
						$rowspan = sizeof($inventaris);
						foreach ($inventaris as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">10</td>
									<td rowspan="<?=$rowspan?>">Inventaris</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">10</td>
							<td>Inventaris</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
					<?
					if(isset($perpustakaan)){
						$i = 0;
						$rowspan = sizeof($perpustakaan);
						foreach ($perpustakaan as $key => $value) {
							$i++;
							?>
							<tr>
								<?
								if($i == 1){
									?>
									<td rowspan="<?=$rowspan?>" style="text-align:center;">11</td>
									<td rowspan="<?=$rowspan?>">Perpustakaan</td>
									<?
								}
								?>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'manual') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'kom non jaringan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'lan') ? 'ya':'tidak')?></td>
								<td style="text-align:center;"><?=(($value['sistem_pengelolaan'] == 'wan') ? 'ya':'tidak')?></td>
							</tr>
							<?
						}
					}else{
						?>
						<tr>
							<td style="text-align:center;">11</td>
							<td>Perpustakaan</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
							<td style="text-align:center;">-</td>
						</tr>
						<?
					}
					?>
				</tbody>
				<tfoot>

				</tfoot>
			</table>

			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFsistem/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>

	<?
		}
	?>
