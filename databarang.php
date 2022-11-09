<?php
include("koneksi.php");
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
          <h1>DATA WARGA DESA SUKAMUNDUR</h1>
          <table border="1">
                    <tr>
                              <th>ID</th>
                              <th>NIK</th>
                              <th>NAMA</th>
                              <th>AGAMA</th>
                    </tr>
                    <?php
                    include("koneksi.php");
                    $sql='SELECT*FROM data_ganjil';
                    $query=mysqli_query($db,$sql);
                    while($data=mysqli_fetch_array($query)){
                              echo "<tr>";
                              echo "<td>".$data['id']."</td>";
                              echo "<td>".$data['NIK']."</td>";
                              echo "<td>".$data['NAMA']."</td>";
                              echo "<td>".$data['AGAMA']."</td>";
                              echo "<td>";
                              echo "<a href='edit.php?id=".$data['id']."'>Edit</a> ||";
                              echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
                              echo "</td>";
                              echo "</tr>";
                    }
                    ?>

</body>
</html>