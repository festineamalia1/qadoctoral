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
                "text": "Data Statistik Daya Tampung Jurusan"
            },
            "subtitle": {
                "text": ""
            },
            "xAxis": {
                categories: ['.$prodi.']
            },
            "yAxis": {
	            "title": { "text": "Jumlah Mahasiswa" }
	        },
	        "series": [{
                "name": "Ikut Seleksi",
                "data": [500,520,500,500,510,450,400]
    
            },{
                "name": "Daya Tampung",
                "data": [100,100,100,150,120,120,110]
    
            }, {
                "name": "Lolos Seleksi",
                "data": [120,110,110,130,160,120,110]
    
            }],
            "exporting": {
                "enabled": false
              }
		}'
		));

	?>
</div>