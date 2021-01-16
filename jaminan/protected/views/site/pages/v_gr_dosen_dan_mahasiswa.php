<div class="grafik" style="" >
	<?php
		$TotalMahasiswaDanDosen = $dosen_tetap + $dosen_tidak_tetap + $mahasiswa;

	    $this->Widget('ext.highcharts.HighchartsWidget', array(
	       'options'=>'{
	          	"chart" : {"type":"pie"},
	          	"title": {
	                text: "Persentase Dosen Tetap, Dosen Tidak Tetap dan Mahasiswa Aktif"
	            },
	            "tooltip": {
	        	    pointFormat: "{series.name}: {point.y} (<b>{point.percentage}%</b>)",
	            	percentageDecimals: 1
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
	                name:"Jumlah (Presentase) ",
	                data: [{
	                	name : "Dosen Tetap",
	                	y:'.$dosen_tetap.',
	                },{
	                	name : "Dosen Tidak Tetap",
	                	y:'.$dosen_tidak_tetap.',
	                },{
	                	name : "Mahasiswa Transfer & Non Transfer",
	                	y:'.$mahasiswa.',
	                }]
	            }],
	            "legend":{
	            	"enabled":true
	              },
	              "exporting": {
	                "enabled": false
	              }
	       }'
	    ));
	?>
</div>