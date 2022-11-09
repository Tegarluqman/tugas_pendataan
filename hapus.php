<?php
include ("koneksi.php");
isset($_GET['id']);
$kode = $_GET['id'];
$sql = "DELETE FROM data_ganjil WHERE id=$kode";
$query = mysqli_query($db, $sql);

if($query){
          header("Location:databarang.php");         
} else {
          echo "gagal menghapus";
}
?>