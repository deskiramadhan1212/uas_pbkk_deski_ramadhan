<?php 
include "koneksi.php"; 

$id = $_GET['id'];

$nama = $_GET['nama'];
$nim = $_GET['nim'];
$pstudi = $_GET['pstudi'];
$email = $_GET['email'];
$no_hp = $_GET['no_hp'];
$alamat = $_GET['alamat'];
$motto = $_GET['motto'];
$motivasi = $_GET['motivasi'];
$query=mysqli_query($kon,"UPDATE calon_anggota SET nim='$nim', nama='$nama', no_hp='$no_hp', alamat='$alamat',motto='$motto', motivasi='$motivasi' , pstudi='$pstudi' , email='$email' WHERE id='$id'")or die (mysqli_error($kon)); 
//ubah ini
if($query) { ?> <script language="JavaScript">  document.location='admin.php'</script> <?php } ?>
