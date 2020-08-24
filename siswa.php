<?php
class Siswa{
  
    public $nis;
    public $nama;
    public $kelas;
  
   function rayon() {
     return "Tajur 1";
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
echo $attar->rayon();
?>