<?php
include('koneksi.php');
$tampilCuti = mysql_query("select * from t_asep");
?>
<table border="1">
    <tr>
        <td>ID</td>
        <td>NIK</td>
        <td>Nama</td>
        <td>Jabatan</td>
        <td>Hak Cuti</td>
    </tr>
    <?php
    while ($cuti = mysql_fetch_array($tampilCuti)) { ?>
        <tr>
            <td><?php echo $cuti['id']; ?></td>
            <td><?php echo $cuti['nik']; ?></td>
            <td><?php echo $cuti['nama']; ?></td>
            <td><?php echo $cuti['jabatan']; ?></td>
            <td><?php echo $cuti['hakcuti']; ?></td>
        </tr>
    <?php } ?>

</table>