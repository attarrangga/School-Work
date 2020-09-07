<?php
class Hai{
	var $str;
}
// membuat object pesan. ini disebut instansiasi
$pesan=new Hai();
//memberikan nilai untuk property str pada objek pesan
$pesan->str="Hello Wordl!";
echo $pesan->str; //mencetak nilainya (pengolahan data)
?>