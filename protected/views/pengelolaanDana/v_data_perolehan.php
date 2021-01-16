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
<?php
if(empty($data) && empty($tridarma)) {
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
	<?
		if($id_prodi==1) {
	?>
					<p>6.1 Pembiayaan</p>
					<p>6.1.1  Tuliskan jumlah dana termasuk gaji dan upah yang diterima  di Fakultas/Sekolah Tinggi selama tiga tahun terakhir dengan mengikuti  
					format tabel berikut:</p>
					<table class="table table-bordered kusus">
						<thead>
							<tr>
								<th rowspan="2">Sumber Dana</th>
								<th rowspan="2">Jenis Dana</th>
								<th rowspan="1" colspan="3">Jumlah Dana (Juta Rupiah)</th>
							</tr>
							<tr>
								<th colspasn="1">TS-2</th>
								<th colspasn="1">TS-1</th>
								<th colspasn="1">TS</th>
							</tr>
						</thead>
						<tbody>
							<?
							if(isset($data['pt_sendiri'])){
								$i = 0;
								$rowspan = sizeof($data['pt_sendiri']);
								foreach ($data['pt_sendiri'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>">PT Sendiri</td>
											<?
										}else{

										}
										?>
										<td><?=$value['jenis_dana']?></td>
										<td><?=$value['jumlah_dana_TS2']?></td>
										<td><?=$value['jumlah_dana_TS1']?></td>
										<td><?=$value['jumlah_dana_TS']?></td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
								<td>PT Sendiri</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($data['yayasan'])){
								$i = 0;
								$rowspan = sizeof($data['yayasan']);
								foreach ($data['yayasan'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>">Yayasan</td>
											<?
										}else{

										}
										?>
										<td><?=$value['jenis_dana']?></td>
										<td><?=$value['jumlah_dana_TS2']?></td>
										<td><?=$value['jumlah_dana_TS1']?></td>
										<td><?=$value['jumlah_dana_TS']?></td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
								<td>Yayasan</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								</tr>
								<?
							}
							?>
							
						</tbody>
						<tfoot>

						</tfoot>
					</table>

					<p>Penggunaan dana:</p>
					<table class="table table-bordered kusus">
						<thead>
							<tr>
								<th rowspan="3" style="width:20px;">No. </th>
								<th rowspan="3">Jenis Penggunaan</th>
								<th rowspan="1" colspan="6">Jumlah Dana dalam Juta Rupiah dan Persentase</th>
							</tr>
							<tr>
								<th rowspan="1" colspan="2">TS-2</th>
								<th rowspan="1" colspan="2">TS-1</th>
								<th rowspan="1" colspan="2">TS</th>
							</tr>
							<tr>
								<th colspan="1">Rp</th>
								<th colspan="1">%</th>
								<th colspan="1">Rp</th>
								<th colspan="1">%</th>
								<th colspan="1">Rp</th>
								<th colspan="1">%</th>
								
							</tr>
						</thead>
						<tbody>
							<?
							if(isset($penggunaan['pendidikan'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['pendidikan']);
								foreach ($penggunaan['pendidikan'] as $key => $value) {
									$i++;
									?>
									<tr>
										
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">1</td>
											<td rowspan="<?=$rowspan?>">Pendidikan</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">1</td>
									<td>Pendidikan</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['penelitian'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['penelitian']);
								foreach ($penggunaan['penelitian'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">2</td>
											<td rowspan="<?=$rowspan?>">Penelitian</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">2</td>
									<td>Penelitian</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['pkm'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['pkm']);
								foreach ($penggunaan['pkm'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">3</td>
											<td rowspan="<?=$rowspan?>">PKM</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">3</td>
									<td>Pengabdian kepada Masyarakat</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['prasarana'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['prasarana']);
								foreach ($penggunaan['prasarana'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">4</td>
											<td rowspan="<?=$rowspan?>">Prasarana</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">4</td>
									<td>Investasi prasarana</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['sarana'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['sarana']);
								foreach ($penggunaan['sarana'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">5</td>
											<td rowspan="<?=$rowspan?>">Sarana</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">5</td>
									<td>Investasi sarana</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['sdm'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['sdm']);
								foreach ($penggunaan['sdm'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">6</td>
											<td rowspan="<?=$rowspan?>">SDM</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">6</td>
									<td>Investasi SDM</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['lainnya'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['lainnya']);
								foreach ($penggunaan['lainnya'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">7</td>
											<td rowspan="<?=$rowspan?>">Lainnya</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
										<td style="text-align:center">-</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">7</td>
									<td>Lain-lain</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
						</tbody>
						<tfoot>

						</tfoot>
					</table>
					<br>
					<p>Penggunaan dana untuk penyelenggaraan kegiatan tridarma per program studi :</p>
					 <table class="table table-bordered kusus">
						<thead>
							<tr>
								<th rowspan="2">No.</th>
								<th rowspan="2">Nama Program Studi</th>
								<th rowspan="1" colspan="3">Jumlah Dana (Juta Rupiah)</th>
							</tr>
							<tr>
								<th colspasn="1">TS-2</th>
								<th colspasn="1">TS-1</th>
								<th colspasn="1">TS</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 0;
							foreach ($tridarma as $key => $value) {
								$i++;
							?>
							<tr>
								<td><?=$i?></td>
								<td><?=$value['jurusan']?></td>
								<td><?=$value['jumlah_dana_TS-2']?></td>
								<td><?=$value['jumlah_dana_TS-1']?></td>
								<td><?=$value['jumlah_dana_TS']?></td>
							</tr>
							<?php
							}
							?>
						</tbody>
					</table>
					<p>
						6.1.2 Uraikan pendapat pimpinan Fakultas/Sekolah Tinggi  tentang perolehan dana pada butir 6.1.1, 
						yang mencakup aspek: kecukupan dan upaya pengembangannya. Uraikan pula kendala-kendala yang dihadapi 
					</p>
					<p style="border:1px solid black;padding:5px;">
						<?
							foreach ($data as $key => $value) {
						?>
								<?//=$value['F_pendapat_pimpinan_Fak']?>
						<?
							}
						?>
						
					</p><br>
					</table>
					<div class="row-fluid">
						<div class="span12" style="text-align:right;">
							<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFperolehan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
						</div>
					</div>

	<?
		} else {
	?>

					<p>6.2 Perolehan dan Alokasi Dana</p>
					<p>6.2.1 Tuliskan realisasi perolehan dan alokasi dana (termasuk hibah) dalam juta rupiah termasuk gaji, selama
					tiga tahun terakhir, pada tabel berikut :</p>
					<table class="table table-bordered kusus">
						<thead>
							<tr>
								<th rowspan="2">Sumber Dana</th>
								<th rowspan="2">Jenis Dana</th>
								<th rowspan="1" colspan="3">Jumlah Dana</th>
							</tr>
							<tr>
								<th colspasn="1">TS-2</th>
								<th colspasn="1">TS-1</th>
								<th colspasn="1">TS</th>
							</tr>
						</thead>
						<tbody>
							<?
							if(isset($data['pt_sendiri'])){
								$i = 0;
								$rowspan = sizeof($data['pt_sendiri']);
								foreach ($data['pt_sendiri'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>">PT Sendiri</td>
											<?
										}else{

										}
										?>
										<td><?=$value['jenis_dana']?></td>
										<td><?=$value['jumlah_dana_TS2']?></td>
										<td><?=$value['jumlah_dana_TS1']?></td>
										<td><?=$value['jumlah_dana_TS']?></td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
								<td>PT Sendiri</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($data['yayasan'])){
								$i = 0;
								$rowspan = sizeof($data['yayasan']);
								foreach ($data['yayasan'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>">Yayasan</td>
											<?
										}else{

										}
										?>
										<td><?=$value['jenis_dana']?></td>
										<td><?=$value['jumlah_dana_TS2']?></td>
										<td><?=$value['jumlah_dana_TS1']?></td>
										<td><?=$value['jumlah_dana_TS']?></td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
								<td>Yayasan</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								<td>-</td>
								</tr>
								<?
							}
							?>
							
						</tbody>
						<tfoot>

						</tfoot>
					</table>

					<p>Penggunaan Dana</p>
					<table class="table table-bordered kusus">
						<thead>
							<tr>
								<th rowspan="2" style="width:20px;">No. </th>
								<th rowspan="2">Jenis Dana</th>
								<th rowspan="1" colspan="3">Presentase Dana</th>
							</tr>
							<tr>
								<th colspasn="1">TS-2</th>
								<th colspasn="1">TS-1</th>
								<th colspasn="1">TS</th>
							</tr>
						</thead>
						<tbody>
							<?
							if(isset($penggunaan['pendidikan'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['pendidikan']);
								foreach ($penggunaan['pendidikan'] as $key => $value) {
									$i++;
									?>
									<tr>
										
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">1</td>
											<td rowspan="<?=$rowspan?>">Pendidikan</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">1</td>
									<td>Pendidikan</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['penelitian'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['penelitian']);
								foreach ($penggunaan['penelitian'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">2</td>
											<td rowspan="<?=$rowspan?>">Penelitian</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">2</td>
									<td>Penelitian</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['pkm'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['pkm']);
								foreach ($penggunaan['pkm'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">3</td>
											<td rowspan="<?=$rowspan?>">PKM</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">3</td>
									<td>PKM</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['prasarana'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['prasarana']);
								foreach ($penggunaan['prasarana'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">4</td>
											<td rowspan="<?=$rowspan?>">Prasarana</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">4</td>
									<td>Prasarana</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['sarana'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['sarana']);
								foreach ($penggunaan['sarana'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">5</td>
											<td rowspan="<?=$rowspan?>">Sarana</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">5</td>
									<td>Sarana</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['sdm'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['sdm']);
								foreach ($penggunaan['sdm'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">6</td>
											<td rowspan="<?=$rowspan?>">SDM</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">6</td>
									<td>SDM</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
							<?
							if(isset($penggunaan['lainnya'])){
								$i = 0;
								$rowspan = sizeof($penggunaan['lainnya']);
								foreach ($penggunaan['lainnya'] as $key => $value) {
									$i++;
									?>
									<tr>
										<?
										if($i == 1){
											?>
											<td rowspan="<?=$rowspan?>" style="text-align:center">7</td>
											<td rowspan="<?=$rowspan?>">Lainnya</td>
											<?
										}else{

										}
										?>
										<td style="text-align:center"><?=$value['persen_danaTS2']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS1']?> %</td>
										<td style="text-align:center"><?=$value['persen_danaTS']?> %</td>
									</tr>
									<?
								}
							}else{
								?>
								<tr>
									<td style="text-align:center">7</td>
									<td>Lainnya</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
									<td style="text-align:center">-</td>
								</tr>
								<?
							}
							?>
						</tbody>
						<tfoot>

						</tfoot>
					</table>
					<br>
					<p>6.2.2 Tuliskan dana untuk kegiatan penelitian pada tiga tahun terakhir yang melibatkan dosen yang bidang keahliannya sesuai dengan program studi, dengan mengikuti
					 format tabel berikut :</p>
					 <table class="table table-bordered kusus">
						<thead>
							<tr>
								<th>Tahun</th>
								<th>Judul Penelitian</th>
								<th>Sumber dan Jenis Dana</th>
								<th>Jumlah Dana (Dalam Rupiah)</th>
							</tr>
						</thead>
						<tbody>
							<?
							foreach ($dana as $key => $value) {
							?>
							<tr>
								<td style="text-align:center"><?=$value['th_publikasi']?></td>
								<td><?=$value['judul']?></td>
								<td><?=$value['sumber_dana']?>, <?=$value['jenis_dana']?> </td>
								<td><?=$value['jumlah_dana']?></td>
							</tr>
							<?
							}
							?>
						
						</tbody>
						<tfoot>

						</tfoot>
					</table>
					<p class="keterangan">
						*Di luar dana penelitian/penulisan skripsi, tesis, disertasi sebagai bagian dari studi lanjut.
					</p>
					<br>
					<p>6.2.3 Tuliskan dana untuk kegiatan pelayanan/pengabdian kepada masyarakat pada tiga tahun terakhir dengan mengikuti
					 format tabel berikut :</p>
					 <table class="table table-bordered kusus">
						<thead>
							<tr>
								<th>Tahun</th>
								<th>Judul Penelitian</th>
								<th>Sumber dan Jenis Dana</th>
								<th>Jumlah Dana (Dalam Rupiah)</th>
							</tr>
						</thead>
						<tbody>
						<?
								foreach ($dana_pkm as $key => $value) {
						?>
							<tr>
								<td style="text-align:center"><?=$value['th_publikasi']?></td>
								<td><?=$value['judul']?></td>
								<td><?=$value['sumber_dana']?>,<?=$value['jenis_dana']?> </td>
								<td><?=$value['jumlah_dana']?></td>
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
							<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFperolehan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
						</div>
					</div>
	<?
		}
	?>

<?
}
?>

