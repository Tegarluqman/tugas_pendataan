<?php
include("koneksi.php");
if(!isset($_GET['id'])){
          header("Location:databarang.php?");
}
$kode=$_GET['id'];
$sql="SELECT*FROM data_ganjil WHERE id=$kode";
$query=mysqli_query($db,$sql);
$data =mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
          die ("data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <h1>EDIT DATA</h1>
                    <form action="prose_edit.php" method="POST">
                              <form>
                                        <fieldset>
                                        <input type="hidden" name="id" value="<?php echo $data['id']?>"/>
                                        <p>
                                                  <label for="NIK">NIK:</label>
                                                  <input type="text" name="NIK" value="<?php echo $data['NIK']?>"/>
                                        </p>
                                        <p>
                                                  <label for="NAMA">NAMA:</label>
                                                  <input type="text" name="NAMA" value="<?php echo $data['NAMA']?>"/>
                                        </p>
                                        <p>
                                                  <label for="AGAMA">AGAMA:</label>
                                                  <select name="AGAMA">
                                                  <option value="ISLAM">ISLAM</option>
                                                  <option value="KRISTEN">KRISTEN</option>
                                                  <option value="KATOLIK">KATOLIK</option>
                                                  <option value="HINDU">HINDU</option>
                                                  <option value="BUDHA">BUDHA</option> value="<?php echo $data['AGAMA']?>"/>
</select>
                                        </p>
                                        <p>
                                                  <input type="submit" value="SIMPAN" name="simpan">
                                        </p>
</fieldset>
</form>

</body>
</html>