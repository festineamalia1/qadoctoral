<div class="grafik" style="" >
	<?php
		// $prodi = '"Fakultas","Manajemen dan Kebijakan Publik","Ilmu Hubungan Internasional","Politik dan Pemerintahan","Ilmu Pembangunan Sosial dan Kesejahteraan","Ilmu Komunikasi","Sosiologi",';

		//print_r($dosen); exit;
		$dt_prodi = '';
        $S1 = '';
        $S2 = '';
        $S3 = '';
        $JumlahS1 = $JumlahS2 = $JumlahS3 = 0;
        if(isset($prodi)){
            $count = count($prodi) - 1;
			foreach ($prodi as $key => $value) {
				if($value['jurusan'] != 'Fakultas'){	
					$dt_prodi .= '"'.$value['jurusan'].'",';
					if(!empty($dosen[$value['jurusan']])){
						if($value['jurusan'] == 'Fakultas'){
							foreach ($dosen as $k => $v) {
								$JumlahS1 += (!empty($v[1])) ? sizeof($v[1]) : 0;
		                        $JumlahS2 += (!empty($v[2])) ? sizeof($v[2]) : 0;
		                        $JumlahS3 += (!empty($v[3])) ? sizeof($v[3]) : 0;
	                    	}
	                    	$S1 .= $JumlahS1.",";
	                    	$S2 .= $JumlahS2.",";
	                    	$S3 .= $JumlahS3.",";
						}else{
							if($count == $key){
		                        $S1 .= (!empty($dosen[$value['jurusan']][1])) ? count($dosen[$value['jurusan']][1]) : 0;
		                        $S2 .= (!empty($dosen[$value['jurusan']][2])) ? count($dosen[$value['jurusan']][2]) : 0;
		                        $S3 .= (!empty($dosen[$value['jurusan']][3])) ? count($dosen[$value['jurusan']][3]) : 0;
		                    }else{
		                        $S1 .= ((!empty($dosen[$value['jurusan']][1])) ? count($dosen[$value['jurusan']][1]) : 0).",";
		                        $S2 .= ((!empty($dosen[$value['jurusan']][2])) ? count($dosen[$value['jurusan']][2]) : 0).",";
		                        $S3 .= ((!empty($dosen[$value['jurusan']][3])) ? count($dosen[$value['jurusan']][3]) : 0).",";
		                    }
						}
					}else{
						if($count == $key){
							$S1 .= "0";
		                    $S2 .= "0";
		                    $S3 .= "0";
	                	}else{
	                		$S1 .= "0,";
		                    $S2 .= "0,";
		                    $S3 .= "0,";
	                	}
					}
				}
			}
		}

		$this->Widget('ext.highcharts.HighchartsWidget', array(
		'options'=>'{
			"chart" : {"type":"column"},
			"title": {
                "text": "Data Statistik Dosen"
            },
            "subtitle": {
                "text": ""
            },
            "xAxis": {
                categories: ['.$dt_prodi.']
            },
            "yAxis": {
	            "title": { "text": "Jumlah Dosen" }
	        },
	        "series": [{
                "name": "S1",
                "data": ['.$S1.']
    
            },{
                "name": "S2",
                "data": ['.$S2.']
    
            }, {
                "name": "S3",
                "data": ['.$S3.']
    
            }],
            "exporting": {
                "enabled": false
              }
		}'
		));

	?>
</div>