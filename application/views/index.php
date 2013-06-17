<?php
echo "<link href='".base_url()."codi.css' rel='stylesheet' type='text/css'>";

echo "<div id='kotak'>";
echo "<center>";
echo "<div id=kotak_pelajaran>";
echo "<table>";
echo "<tr>";
foreach($query as $row){
	echo "<td align='center'>".anchor('controller/viewSoal/'.$row->id_pelajaran,$row->nama_pelajaran)."</td>";
}
echo "</tr>";
echo "</table>";
echo "</center>";
echo "</div>";
echo "</div>";
echo "<div id=kotak_copyright>";
echo "Dibuat Oleh : Ardy Purnama Putra";
echo "</div>";
?>
