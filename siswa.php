<?php
class Siswa{
  
    public $nis;
    public $nama;
    public $kelas;
  
   function nilai() {
     return "Kompeten";
    }
}
  
$attar = new Siswa();
  
$attar->nis="11907056";
$attar->nama="Attar Rangga Hardiansyah";
$attar->rombel="RPL XI-4";
  
echo $attar->nis;
echo "<br />";
echo $attar->nama;
echo "<br />";
echo $attar->rombel;
echo "<br />";
echo "<br />";
echo $attar->nilai();
?>
