<?php

echo "<div id=kotak>";
echo "<div id=kotak_pelajaran>";
echo "<table>";
foreach($query as $row){
echo "<tr>";
echo "<td>".anchor('controller/viewSoal/'.$row->id_pelajaran,$row->nama_pelajaran)."</td>";
echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "</div>";
?>