<div class="grafik" style="" >
	<?php
		$prodi = '"Fakultas","Manajemen dan Kebijakan Publik","Ilmu Hubungan Internasional","Politik dan Pemerintahan","Ilmu Pembangunan Sosial dan Kesejahteraan","Ilmu Komunikasi","Sosiologi",';
		if(isset($data)){
			foreach ($data['prodi'] as $key => $value) {
				$prodi .= '"'.$value['jurusan'].'",';
			}
		}

		$this->Widget('ext.highcharts.HighchartsWidget', array(
		'options'=>'{
			"chart" : {"type":"column"},
			"title": {
                "text": "Data Statistik Kerjasama Jurusan"
            },
            "subtitle": {
                "text": ""
            },
            "xAxis": {
                categories: ['.$prodi.']
            },
            "yAxis": {
	            "title": { "text": "Jumlah Kerjasama" }
	        },
	        "series": [{
                "name": "Dalam Negeri",
                "data": [10,20,11,12,15,9,18]
    
            },{
                "name": "Luar Negeri",
                "data": [9,10,12,15,12,8,11]
    
            }],
            "exporting": {
                "enabled": false
              }
		}'
		));

	?>
</div>