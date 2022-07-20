<html>
      <meta name="viewport" content="width=device-width, initial-scale=1">
</html>

<?php
include "mysql.php";
if($_POST['Submit'] == "Submit") {
    $nama = $_POST['nama'];
if(empty($_POST['nama'])) {
    echo "tidak boleh kosong";
    return;
}
$test = "SELECT * FROM anjay WHERE nama = '".$nama."'";

$cek = mysqli_query($kon, $test);
$input = "INSERT INTO anjay (nama)VALUES('".$nama."')";
$query = mysqli_query($kon, $input);
if($query) {
    echo "Berhasil Menambahkan Data";
} else {
    echo "Nama tersebut sudah ada";
}
}
?>