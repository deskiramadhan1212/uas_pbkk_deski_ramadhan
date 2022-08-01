<?php
 // memanggil file koneksi.php
 include "koneksi.php";

 // membuat variable dengan nilai dari form
 $username = $_POST['username']; 
 // variablenya = username, dan nilainya sesuai yang dimasukkan di input name="username" tadi
 $password = $_POST['password']; 
 // variable password, dan nilainya sesuai yang dimasukkan di input name="password" tadi

 // menyesuaikan dengan data di database
 // $perintah = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
 $query=mysqli_query ($kon, "SELECT * FROM user WHERE username = '$username' AND password = '$password'")or die (mysqli_error()); 
 // $hasil = mysqli_query($query);

 $row = mysqli_fetch_array($query);
 if ($row['username'] == $username AND $row['password'] == $password) {

 // memulai fungsi session
 session_start(); 
 $_SESSION['username'] = $username;
 header("location:admin.php"); // jika berhasil login, maka masuk ke file admin.php
 
 } else {

 echo "Gagal Masuk, seisson belum tercipta atau gagal database"; 
 // jika gagal, maka muncul teks gagal masuk
 }
?>

