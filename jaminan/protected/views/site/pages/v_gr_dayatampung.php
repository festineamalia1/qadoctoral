<div class="grafik" style="" >
	<?php
		// $prodi = '"Fakultas","Manajemen dan Kebijakan Publik","Ilmu Hubungan Internasional","Politik dan Pemerintahan","Ilmu Pembangunan Sosial dan Kesejahteraan","Ilmu Komunikasi","Sosiologi",';
		$dt_prodi = '';
        $dt_daya_tampung = '';
        $dt_ikut_seleksi = '';
        $dt_lulus_seleksi = '';
        $dt_aktif_kuliah = '';
        if(isset($prodi)){
            $count = count($prodi) - 1;
			foreach ($prodi as $key => $value) {
                if($value['jurusan'] != 'Fakultas'){
    				$dt_prodi .= '"'.$value['jurusan'].'",';
                    if(isset($daya_tampung)){
                        if(!empty($daya_tampung[$value['jurusan']]['daya_tampung'])){
                            if($count == $key){
                                $dt_daya_tampung .= $daya_tampung[$value['jurusan']]['daya_tampung'];
                                $dt_ikut_seleksi .= $daya_tampung[$value['jurusan']]['jml_ikut_seleksi'];
                                $dt_lulus_seleksi .= $daya_tampung[$value['jurusan']]['jml_lolos_seleksi'];
                                $dt_aktif_kuliah .= ($daya_tampung[$value['jurusan']]['jml_maba'] + $daya_tampung[$value['jurusan']]['jml_maba_transfer']);
                            }else{
                                $dt_daya_tampung .= $daya_tampung[$value['jurusan']]['daya_tampung'].",";
                                $dt_ikut_seleksi .= $daya_tampung[$value['jurusan']]['jml_ikut_seleksi'].",";
                                $dt_lulus_seleksi .= $daya_tampung[$value['jurusan']]['jml_lolos_seleksi'].",";
                                $dt_aktif_kuliah .= ($daya_tampung[$value['jurusan']]['jml_maba'] + $daya_tampung[$value['jurusan']]['jml_maba_transfer']).",";
                            }
                        }else{
                            if($count == $key){
                                $dt_daya_tampung .= '0';
                                $dt_ikut_seleksi .= '0';
                                $dt_lulus_seleksi .= '0';
                                $dt_aktif_kuliah .= '0';
                            }else{
                                $dt_daya_tampung .= '0,';
                                $dt_ikut_seleksi .= '0,';
                                $dt_lulus_seleksi .= '0,';
                                $dt_aktif_kuliah .= '0,';
                            }
                        }
                    }else{
                        if($count == $key){
                            $dt_daya_tampung .= '0';
                            $dt_ikut_seleksi .= '0';
                            $dt_lulus_seleksi .= '0';
                            $dt_aktif_kuliah .= '0';
                        }else{
                            $dt_daya_tampung .= '0,';
                            $dt_ikut_seleksi .= '0,';
                            $dt_lulus_seleksi .= '0,';
                            $dt_aktif_kuliah .= '0,';
                        }
                    }
                }
			}
		}

        // echo "<pre>";
        // print_r($daya_tampung);
        // echo "</pre>";


		$this->Widget('ext.highcharts.HighchartsWidget', array(
		'options'=>'{
			"chart" : {"type":"column"},
			"title": {
                "text": "Data Statistik Akademik Daya Tampung"
            },
            "subtitle": {
                "text": ""
            },
            "xAxis": {
                categories: ['.$dt_prodi.']
            },
            "yAxis": {
	            "title": { "text": "Jumlah Mahasiswa" }
	        },
	        "series": [{
                "name": "Ikut Seleksi",
                "data": ['.$dt_ikut_seleksi.']
    
            },{
                "name": "Daya Tampung",
                "data": ['.$dt_daya_tampung.']
    
            }, {
                "name": "Lolos Seleksi",
                "data": ['.$dt_lulus_seleksi.']
    
            },{
                "name": "Mahasiswa Baru",
                "data": ['.$dt_aktif_kuliah.']
    
            }],
            "exporting": {
                "enabled": false
              }
		}'
		));

	?>
</div>