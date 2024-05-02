<?php
include '../koneksi.php';

if(!isset($_GET['id'])) {
    header('location: index.php');
}
$id = $_GET['id'];
$result= mysqli_query($mysqli, "SELECT * FROM user WHERE id_user=$id");
while($user_data=mysqli_fetch_array($result)) {
    $username = $user_data['username'];
    $password=$user_data['password'];
    $nama = $user_data['nama'];
    $level= $user_data['level'];
    $email = $user_data['email'];
    $no_rek = $user_data['no_rek'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editstyle.css">
    <title>Edit data.</title>
</head>
<body>
    <form action="edit-proses.php" method="post">
        <div>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username;?>">
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password" value="<?php echo $password; ?>">
        </div>
        <div>
            <label>Nama</label>
            <input type="text" name="nama" value="<?php echo $nama; ?>">
        </div>
        <div>
            <label>Level</label>
            <input type="text" name="level" value="<?php echo $level; ?>">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
        </div>
        <div>
            <label>no_rek</label>
            <input type="text" name="no_rek" value="<?php echo $no_rek;?>">
        </div>
        <div>
            <input type="hidden" name="id_user" value="<?php echo $_GET['id'];?>">
            <input type="submit" name="Simpan" value="Simpan">
        </div>
    </form>
</body>
</html>