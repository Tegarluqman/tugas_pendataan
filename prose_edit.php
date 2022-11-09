<?php
include("koneksi.php");
if(isset($_POST['simpan'])){
          $nik=$_POST['NIK'];
          $nama=$_POST['NAMA'];
          $agama=$_POST['AGAMA'];
          $kode=$_POST['id'];

$sql="UPDATE data_ganjil SET NIK='$nik', NAMA='$nama', AGAMA='$agama' WHERE id=$kode";
$query=mysqli_query($db,$sql);

if($query){
          header('Location:databarang.php');
}else{
          die ("gagal mengedit");
}
}
?>