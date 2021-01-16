<div class="grafik" style="" >
	<?php
		$tahun = $pene = $pk = '';
		$dana = array();
		for ($i=date('Y') - 5; $i < date('Y') + 5; $i++) { 
			$tahun .= "'".$i."',";
			$jml_pen = $jml_pkm = $jml_dana = 0;
			if(!empty($penelitian[$i])){
				$jml_pen = count($penelitian[$i]);
				foreach ($penelitian[$i] as $key => $value) {
					$jml_dana += $value['jumlah_dana'];
				}
				$dana[$i] = $jml_dana; 
			}
			if(!empty($pkm[$i])){
				$jml_pkm = count($pkm[$i]);
				foreach ($pkm[$i] as $key => $value) {
					$jml_dana += $value['jumlah_dana'];
				}
				$dana[$i] = $jml_dana; 
			}
			$pene .= $jml_pen;
			$pk .= $jml_pkm;
			if($i != (date('Y') + 4)){
				$pene .= ",";
				$pk .= ",";
			}
		}

		// print_r($tahun);
		// echo "<br>";
		// print_r($data);
		// echo "<br>";
		// print_r($dana);

	    $this->Widget('ext.highcharts.HighchartsWidget', array(
	       'options'=>'{
	          	"chart" : {"type":"spline"},
	          	"title": {
	                text: "Grafik Jumlah Penelitian dan Pengabdian Kepada Masyarakat"
	            },
	            xAxis: {
	                categories: ['.$tahun.']
	            },
	            yAxis: {
	                title: {
	                    text: "Jumlah"
	                }
	            },
	            "tooltip": {
	        	    valueSuffix: " (penelitian/PKM)",
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
	                name:"Jumlah Penelitian",
	                data: ['.$pene.']
	            },{
	                name:"Jumlah Pengabdian Kepada Masyarakat",
	                data: ['.$pk.']
	            }],
	            "exporting": {
	                "enabled": false
	              }
	       }'
	    ));
	?>
</div>