<?php ob_start();
    include "koneksi.php";

    $id   = $_POST['id'];
    $nama  = $_POST['nama'];
    $email  = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $pesan = $_POST['pesan'];

    mysqli_query($conn, "INSERT INTO komentar(id,nama,email,no_hp,pesan)
    VALUE('$id','$nama','$email','$no_hp','pesan')")or die(mysqli_error());
    header('location:index.html');
    ?>
	
