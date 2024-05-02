<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminstyle.css">
    <title>Admin!</title>
</head>
<body>
    <h1>Selamat datang di Tabel User!</h1>
    <table border='0'>
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Level</th>
            <th>Email</th>
            <th>No_rek</th>
            <th>Edit / Delete. </th>
        </tr>

        <?php
        session_start();
        include '../koneksi.php';
        $query_mysqli = mysqli_query($mysqli, "SELECT * FROM user") or die (mysqli_error());
        $nomor=1;
        while($data = mysqli_fetch_array($query_mysqli)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['level']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['no_rek']; ?></td>
            <td class="edit"><a href='edit.php?id=<?php print $data['id_user'];?>'>Edit</a></td>
            <td class="delete"><a href='delete.php?id=<?php echo $data['id_user'];?>'>Delete</a></td>
        </tr>
        <?php } ?>
    </table>
    
    <p>Want to add new data?<a href="../register.php">Add new data here!</a></p>

</body>
</html>