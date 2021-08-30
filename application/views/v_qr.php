<html>

<center>
	<h2>Kode Hari Ini : </h2>
	<hr>
	<h3><pre><?= $kode;?></pre></h3>
		<img style="border:20px solid #efefef" src ="<?php echo site_url('render_qr/Qrcode/'.$kode);?>">
		
</center>
 <!--<center><img style="border:20px solid #efefef" src ="<?php echo site_url('render_qr/Qrcode/bandung_juara');?>"></center>-->

 </html>