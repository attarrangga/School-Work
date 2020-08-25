<?php
class Manusia{
  
    public $nama;
    public $umur;
    public $jenis_kelamin;
  
   function bicara() {
     return "Halo nama saya $this->nama";
    }
}
  
$objek = new Manusia();
  
$objek->nama="Attar Rangga Hardiansyah";
$objek->umur="16 Tahun";
$objek->jenis_kelamin="Laki-laki";
  
echo $objek->nama;
echo "<br />";
echo $objek->umur;
echo "<br />";
echo $objek->jenis_kelamin;
echo "<br />";
echo $objek->bicara();
?>