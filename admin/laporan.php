<h5>SPP payment report</h5></h5>
<a href="cetak-laporan.php" class="btn btn-primary">Print report</a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold text-center">
        <th>No</th>
        <th>NISN</th>
        <th>Name</th>
        <th>Class</th>
        <th>Year SPP</th>
        <th>Nominal Paid</th>
        <th>Already Paid</th>
        <th>Date Payment</th>
        <th>Officer</th>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM pembayaran,siswa,kelas,spp,petugas WHERE pembayaran.nisns=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas ORDER BY tgl_bayar DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data) {
    ?>
        <tr class="text-center">
            <td><?= $no++; ?></td>
            <td><?= $data['nisns'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['tahun'] ?></td>
            <td>Rp. <?= number_format($data['nominal'], 2, ',', '.'); ?></td>
            <td>Rp. <?= number_format($data['jumlah_bayar'], 2, ',', '.'); ?></td>
            <td><?= $data['tgl_bayar'] ?></td>
            <td><?= $data['nama_petugas'] ?></td>
        </tr>
    <?php } ?>

</table>