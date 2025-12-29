<form action="simpan.php" method="post">
    <input type="text" name="nama" placeholder="Nama Penerima" required><br>
    <input type="text" name="nik" placeholder="NIK" required><br>
    <input type="text" name="jenis" placeholder="Jenis Bantuan" required><br>
    <select name="status">
        <option>Menunggu</option>
        <option>Disetujui</option>
        <option>Ditolak</option>
    </select><br>
    <button type="submit">Simpan</button>
</form>
   