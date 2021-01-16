<style type="text/css">
	.judul{
		text-align: center;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 20px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<p>2.3 Sistem Pengelolaan</p>
	<p style="padding-left:25px">
		Sistem pengelolaan fungsional dan operasional program studi mencakup <b> perencanaan, pengorganisasian, pengembangan staf, pengawasan, pengarahan, representasi, dan penganggaran. </b>
		<br><br>
		<!-- Jelaskan pelaksanaan sistem pengelolaan program studi serta dokumen pendukungnya. -->
	</p>
<?php
if(empty($data)){
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
	</div>
<?
}else{
	?>
	<div style="padding:5px;border:1px solid black;">
		<b>Perencanaan </b><br>
		<?
		if(empty($data['perencanaan'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['perencanaan']."</span><br>";
		} ?>
		<b>Pengorganisasian </b><br>
		<?
		if(empty($data['pengorganisasian'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['pengorganisasian']."</span><br>";
		} ?>
		<b>Pengembangan staff </b><br>
		<?
		if(empty($data['pengembangan_staff'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['pengembangan_staff']."</span><br>";
		} ?>
		<b>Pengawasan </b><br>
		<?
		if(empty($data['pengawasan'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['pengawasan']."</span><br>";
		} ?>
		<b>Pengarahan </b><br>
		<?
		if(empty($data['pengarahan'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['pengarahan']."</span><br>";
		} ?>
		<b>Representasi </b><br>
		<?
		if(empty($data['representasi'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['representasi']."</span><br>";
		} ?>
		<b>Penganggaran </b><br>
		<?
		if(empty($data['penganggaran'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['penganggaran']."</span><br>";
		} ?>
	</div>
<?php } ?>