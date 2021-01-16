<div class="grafik" style="" >
	<?php
	    $this->Widget('ext.highcharts.HighchartsWidget', array(
	       'options'=>'{
	          	"chart" : {"type":"pie"},
	          	"title": {
	                text: "Persentase Dosen Tetap, Dosen Tidak Tetap dan Tenaga Pendidik"
	            },
	            "tooltip": {
	        	    pointFormat: "{series.name}: <b>{point.percentage}%</b>",
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
	                name:"Data Dosen dan Tenaga Pendidik",
	                data: [
	                    ["Dosen Tetap",   30.0],
	                    ["Dosen Tidak Tetap",20.0],
	                    ["Tenaga Pendidik", 30.0]
	                ]
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