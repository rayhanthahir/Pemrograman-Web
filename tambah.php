<?php
     require 'function.php';

    //  if(isset($_POST["submit"])) {
    //      if( isset($_POST["submit"])){
    //          //jika sudah ditekan dijalankan function tambah
    //          if(tambah($_POST) > 0) {
    //              echo "
    //                  <script>
    //                      alert('data berhasil ditambahkan!');
    //                      document.location.href = 'index.php';
    //                  </script>
    //              ";
    //          } else {
    //              echo "
    //                  <script>
    //                      alert('data gagal ditambahkan!');
    //                      document.location.href = 'index.php';
    //                  </script>
    //              ";
    //          }
    //      }
    //  }


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
<h1>Tambah Data Mahasiswa</h1>

<form action="send.php" method="POST">
    <ul>
        <li>
            <label>Name</label>
            <input type="text" name="name" id="name">
        </li>
        <li>
            <label>Email</label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label>Address</label>
            <input type="text" name="address" id="address">
        </li>
        <li>
            <label>Gender</label>
            <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </li>
        <li>
            <label for="position">Position</label>
            <input type="text" name="position">
        </li>
        <li>
            <label for="status">Status</label>
            <select name="dataStatus">
                <option value="fulltime">Fulltime</option>
                <option value="parttime">Part-time</option>
            </select>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
</form>
</body>
</html>