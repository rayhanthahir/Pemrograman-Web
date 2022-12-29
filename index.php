<?php
    require 'function.php';
    $result = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
<h1>Daftar Karyawan</h1>
    <!-- <a href="tambah.php">Tambah data</a> -->
    <button type="submit"><a href="tambah.php">ADD DATA</a> </button>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Position</td>
            <td>Status</td>
        </tr>
        <!-- print data from result -->
        <?php $i = 1; ?>
        <?php foreach($result as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["Name"]; ?></td>
            <td><?= $row["Email"]; ?></td>
            <td><?= $row["Address"]; ?></td>
            <td><?= $row["Gender"]; ?></td>
            <td><?= $row["Position"]; ?></td>
            <td><?= $row["Status"]; ?></td>
            <td>
                <button type="submit" name="delete_p11" value="<?=$p11['id'];?>" class="btn btn-danger btn-sm">Delete</button>
            </td>
            <?php $i++; ?>
        </tr>
        <?php endforeach; ?>
</body>
</html>