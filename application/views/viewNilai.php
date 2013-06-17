<?php
echo "<link href='".base_url()."codi.css' rel='stylesheet' type='text/css'>";

echo "<div id=kotak_nilai>";
echo "<div id=kotak_hasil_nilai>";
echo $nilai;
echo "</div>";
echo anchor('controller/index','Home');
echo "</div>";
echo "<div id=kotak_copyright>";
echo "Dibuat Oleh : Ardy Purnama Putra";
echo "</div>";

?>