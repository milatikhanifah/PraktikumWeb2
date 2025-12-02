<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<body>

<h2>Tambah Data User 💗</h2>
<form method="POST">
    Firstname: <input type="text" name="firstname"><br><br>
    Lastname: <input type="text" name="lastname"><br><br>
    Username: <input type="text" name="username"><br><br>
    <button type="submit" name="save">Simpan</button>
</form>

</body>
</html>

<?php
if(isset($_POST['save'])){
    mysqli_query($koneksi, "INSERT INTO users VALUES('', '$_POST[firstname]', '$_POST[lastname]', '$_POST[username]')");
    header("Location: index.php");
}
?>