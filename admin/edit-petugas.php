<?php
$id_petugas = $_GET['id_petugas'];
include '../koneksi.php';
$sql = "SELECT*FROM petugas WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);

?>
<h5>Officer Data Edit Page</h5>
<a href="?url=petugas" class="btn btn-primary"> BACK </a>
<hr>
<form method="post" action="?url=proses-edit-petugas&id_petugas=<?= $id_petugas; ?>">
    <div class="form-group mb-2">
        <label>Username</label>
        <input value="<?= $data['username'] ?>" type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Password</label>
        <input value="<?= $data['password'] ?>" type="text" name="password" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Officer Name</label>
        <input value="<?= $data['nama_petugas'] ?>" type="text" name="nama_petugas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Officer Level</label>
        <select name="level" class="form-control" required>
            <option value="<?= $data['level'] ?>">--Select Officer Level--</option>
            <option value="admin">Admin</option>
            <option value="petugas">Officer</option>
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SAVE </button>
        <button type="reset" class="btn btn-warning"> RESET </button>
    </div>
</form>