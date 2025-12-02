<?php include "koneksi.php"; 
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM users WHERE id='$_GET[id]'"));
?>

<!DOCTYPE html>
<html>
<body>

<h2>Edit Data User ✨</h2>
<form method="POST">
    Firstname: <input type="text" name="firstname" value="<?= $data['firstname']; ?>"><br><br>
    Lastname: <input type="text" name="lastname" value="<?= $data['lastname']; ?>"><br><br>
    Username: <input type="text" name="username" value="<?= $data['username']; ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>

</body>
</html>

<?php
if(isset($_POST['update'])){
    mysqli_query($koneksi, "UPDATE users SET firstname='$_POST[firstname]', lastname='$_POST[lastname]', username='$_POST[username]' WHERE id='$_GET[id]'");
    header("Location: index.php");
}
?>