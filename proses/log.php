<?php 
 
// menghubungkan dengan koneksi
include '../inc/koneksi.php';
 
session_start();
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$username = $_POST['nama'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM akun where name='$username' and password='$password' and email='$email'");
$data = mysqli_fetch_array($result);
if($data > 0) {
	//menyimpan session user, nama, status dan id login
	$_SESSION['username'] = $username;
    $_SESSION['pass'] = $password;
	$_SESSION['nama'] = $data['name'];
	$_SESSION['status'] = "sudah_login";
    $_SESSION['id'] = $data['id_akun'];
	header("location:../utama/home.php");
} else {
	echo "<script>
	alert('Password atau Username Salah!!!');
	document.location.href = '../login.php';
</script>";
}
?>