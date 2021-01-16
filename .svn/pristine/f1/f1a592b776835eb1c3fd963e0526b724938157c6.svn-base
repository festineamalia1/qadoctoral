<div class="grafik" style="" >
	<?php
	    $this->Widget('ext.highcharts.HighchartsWidget', array(
	       'options'=>'{
	          	"chart" : {"type":"spline"},
	          	"title": {
	                text: "Prestasi Mahasiswa dan Dosen Fakultas Isipol"
	            },
	            xAxis: {
	                categories: ["2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011","2012","2013"]
	            },
	            yAxis: {
	                title: {
	                    text: "Jumlah Prestasi"
	                }
	            },
	            "tooltip": {
	        	    pointFormat: "{series.name}:",
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
	                name:"Prestasi Mahasiswa Reguler",
	                data: [10,5,15,17,18,20,30,25,27,10,20,15,19,20]
	            },
	            {
	                name:"Prestasi Mahasiswa Non Reguler",
	                data: [11,4,10,14,15,10,20,24,23,19,25,10,12,22]
	            },
	            {
	                name:"Prestasi Dosen",
	                data: [15,5,12,9,11,12,28,26,29,12,20,20,22,24]
	            }],
	            "exporting": {
	                "enabled": false
	              }
	       }'
	    ));
	?>
</div>