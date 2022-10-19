<h3> Data Mahasiswa Unsia IT403 </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
        <th>Program Studi</th>
        <th>Angkatan</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi, "select * from unsia_it403");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[nama]</td>
            <td>$tampil[nim]</td>
            <td>$tampil[jenis_kelamin]</td>
            <td>$tampil[kelas]</td>
            <td>$tampil[program_studi]</td>
            <td>$tampil[angkatan]</td>
            <td><a href='?kode=$tampil[nim]'> Delete</a></td>
            <td><a href='form_edit.php?kode=$tampil[nim]'> Edit </a></td>
        </tr>";

        $no++;

    }
    ?>
</table>

<?php
    include "koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete  from unsia_it403 where nim='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=3;URL='data-mahasiswa.php'>";

    }
    ?>
