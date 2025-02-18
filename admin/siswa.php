<h5>Student Data Page</h5>
<a href="?url=tambah-Siswa" class="btn btn-primary"> Add Student </a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Name</th>
        <th>Class</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>SPP</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER By nama DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['nis'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['no_telp'] ?></td>
            <td><?= $data['tahun'] ?> | Rp. <?= number_format($data['nominal'],2,',','.'); ?></td>
            <td>
                <a href="?url=edit-siswa&id_siswa=<?= $data['id_siswa'] ?>" class="btn btn-warning">EDIT</a>
            </td>
            <td>
                <a onclick="return confirm('Are you sure want to delete the data')" href="?url=hapus-siswa&nisn=<?= $data['nisn'] ?>" class="btn btn-danger">DELETE</a>
            </td>
        </tr>
    <?php } ?>

</table>