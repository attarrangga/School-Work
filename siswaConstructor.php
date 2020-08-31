<?php
class Siswa{
  
    public $nama;
    public $nis;
    public $rayon;
    
    public function __construct($nama , $nis, $rayon){
      $this->nama = $nama;
      $this->nis = $nis;
      $this->rayon = $rayon;
    }
}
  
$siswa1 = new Siswa("Attar Rangga Hardiansyah", 11907056, "Tajur 1");
  
echo "Data siswa : " . $siswa1->nama;
echo "<br />";
echo "Nis : " . $siswa1->nis;
echo "<br />";
echo "rayon : " . $siswa1->rayon;
?>