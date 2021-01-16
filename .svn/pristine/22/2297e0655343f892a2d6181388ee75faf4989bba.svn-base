<div class="grafik" style="" >
	<?php
		$jml_total_mhs = 0;
		$jumlah = '0,0,0,0,0,0,0';
		$tahun = '';
		$prodi = '';
		if(isset($data)){
			$tahun = $data['tahun']['th_akademik'];
			foreach ($data['prodi'] as $key => $value) {
				$prodi .= '"'.$value['jurusan'].'",';
				$jml_mhs[$value['jurusan']] = 0;
			}

			foreach ($data['prodi'] as $key => $value) {
				if(isset($data[$value['jurusan']])){
					$jml_total_mhs = 0;
					foreach ($data[$value['jurusan']] as $key => $value) {
						$jml_total_mhs += $value['total_mhs_bkn_transfer'] + $value['total_mhs_transfer'];
					}
					$jml_mhs[$value['jurusan']] = $jml_total_mhs;
				}
			}
			
			$jumlah = '';
			$i = 1;
			foreach ($jml_mhs as $key => $value) {
				
				if($i < sizeof($jml_mhs)){
					$jumlah .= $value.",";
				}else{
					$jumlah .= $value;
				}
				$i++;
			}
			


		    
		}

		$this->Widget('ext.highcharts.HighchartsWidget', array(
	       'options'=>'{
	          "title": { "text": "Statistik Mahasiswa Non Reguler" },
	          "chart" : {"type":"column"},
	          "xAxis": {
	             "categories": ['.$prodi.']
	          },
	          "yAxis": {
	             "title": { "text": "Jumlah Mahasiswa" }
	          },
	          "series": [
	             { "name": "'.$tahun.'", "data": ['.$jumlah.'] }
	          ],
	          "legend":{
            	"enabled":false
              },
              "exporting": {
                "enabled": false
              }
	       }'
	    ));

	?>
</div>