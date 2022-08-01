<?php include "koneksi.php"; 
$id = $_GET['id'];  
$query = "DELETE FROM calon_anggota WHERE id = $id"; 
mysqli_query($kon,$query); 

?> 
<script language="JavaScript"> document.location='admin.php'</script> 
<?php ?>

