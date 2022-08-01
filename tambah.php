<?php 
include "koneksi.php"; 

 
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$pstudi = $_POST['pstudi'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$motto = $_POST['motto'];
$motivasi = $_POST['motivasi'];

$query=mysqli_query($kon, "INSERT INTO calon_anggota (nama, nim,pstudi,email,no_hp,alamat,motto,motivasi)
VALUES ('$nama', '$nim' ,'$pstudi','$email','$no_hp' ,'$alamat','$motto','$motivasi')")or die (mysqli_error()); 
 
if($query) {
?>
<script language="JavaScript">
   document.location='index.html'</script> 
<?php 
} 
?>
