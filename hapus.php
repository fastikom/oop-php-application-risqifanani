<?php
require("cMhs.php");
  
$mhs=new mahasiswa();
$hapus=$mhs->getDelete();
 if($hapus){
 echo'<script>alert("DATA TERHAPUS");
 document.location="tampil.php";</script>';
 }
 else{
 echo'<script>alert("GAGAL");
 document.location="tampil.php";</script>';
 }
?>