<div class="grafik" style="" >
	<?php
	    //print_r($mhs); 
		$tahun = $jml_mhs_aktif = $jml_lulusan = '';
		$dana = array();
		for ($i=date('Y') - 5; $i < date('Y') + 5; $i++) { 
			$tahun .= "'".$i."',";
			//echo $tahun; exit;
			if(!empty($mhs[$i])){
				$jml = 0;
				$jml_lulus = 0;
				if(!empty($mhs[$i]['mhs_reguler'])){
					foreach ($mhs[$i]['mhs_reguler'] as $key => $value) {
						$jml += $value['mahasiswa_aktif'];
						$jml_lulus += $value['lulusan'];
					}
				}
				if(!empty($mhs[$i]['mhs_nonreguler'])){
					foreach ($mhs[$i]['mhs_nonreguler'] as $key => $value) {
						$jml += $value['mahasiswa_aktif'];
						$jml_lulus += $value['lulusan'];
					}
				}
				$jml_mhs_aktif .= $jml;
				$jml_lulusan .= $jml_lulus;
			}else{
				$jml_mhs_aktif .= '0';
				$jml_lulusan .= '0';
			}
			if($i != (date('Y') + 4)){
				$jml_mhs_aktif .= ",";
				$jml_lulusan .= ",";
			}
		}

	    $this->Widget('ext.highcharts.HighchartsWidget', array(
	       'options'=>'{
	          	"chart" : {"type":"spline"},
	          	"title": {
	                text: "Grafik Mahasiswa Aktif dan Lulusan Pertahun"
	            },
	            xAxis: {
	                categories: ['.$tahun.'],
	            },
	            yAxis: {
	                title: {
	                    text: "Jumlah"
	                }
	            },
	            "tooltip": {
	        	    valueSuffix: " (Mahasiswa)",
	            },
	            "plotOptions": {
	                pie: {
	                    allowPointSelect: true,
	                    cursor: "pointer",
	                    dataLabels: {
	                        enabled: false
	                    },
	                    showInLegend: true
	                }
	            },
	            "series": [{
	                name:"Mahasiswa Aktif",
	                data: ['.$jml_mhs_aktif.']
	            },{
	                name:"Lulusan",
	                data: ['.$jml_lulusan.']
	            }],
	            "exporting": {
	                "enabled": false
	              }
	       }'
	    ));
	?>
</div>