<?php
echo "<link href='".base_url()."codi.css' rel='stylesheet' type='text/css'>";

echo "<div id=kotak_soal>";
echo "<div id=silang>".anchor('controller/index','X')."</div>";
foreach($nama_pelajaran as $pelajaran){
echo "<div id=kotak_nama_pelajaran>".$pelajaran->nama_pelajaran."</div>";
}
echo form_open('controller/viewNilai/'.$id_pelajaran);
$i=0;
foreach($query as $row){
	$i++;
	echo $i.". ";
	if(!empty($row->gambar)) echo "<img src='http://localhost/Codi/image/".$row->gambar."'>";
	echo $row->soal."<br>";
	echo "<input type='radio' name='".$row->id_soal."' value='".$row->pilihan_1."' set_radio('".$row->id_soal."',".$row->pilihan_1.") />";
	echo $row->pilihan_1."<br>";
	echo "<input type='radio' name='".$row->id_soal."' value='".$row->pilihan_2."' set_radio('".$row->id_soal."',".$row->pilihan_2.") />";
	echo $row->pilihan_2."<br>";
	echo "<input type='radio' name='".$row->id_soal."' value='".$row->pilihan_3."' set_radio('".$row->id_soal."',".$row->pilihan_3.") />";
	echo $row->pilihan_3."<br>";
	echo "<br>";
}
echo "<center>";
echo form_submit('submit','Selesai');
echo form_close();
echo "</center>";
echo "</div>";
echo "<div id=kotak_copyright>";
echo "Dibuat Oleh : Ardy Purnama Putra";
echo "</div>";

?>

