<h3> Input Data Mahasiswa Unsia IT403 </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Nama </td>
        <td> <input type="text" name="nama"> </td>
    </tr>
    <tr>
        <td> Nim </td>
        <td> <input type="text" name="nim"> </td>
    </tr>
    <tr>
        <td> Jenis Kelamin </td>
        <td>
             <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
             <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
        </td>
    </tr>
    <tr>
        <td> Kelas </td>
        <td> <input type="text" name="kelas"> </td>
    </tr>
    <tr>
        <td> Program Studi </td>
        <td> <input type="text" name="program_studi"> </td>
    </tr>
    <tr>
        <td> Angkatan </td>
        <td> <input type="text" name="angkatan"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into unsia_it403 set  
nama = '$_POST[nama]',
nim = '$_POST[nim]',
jenis_kelamin = '$_POST[jenis_kelamin]',
kelas = '$_POST[kelas]',
program_studi = '$_POST[program_studi]',
angkatan = '$_POST[angkatan]'");

echo "Data Mahasiswa Telah Tersimpan";
echo "<meta http-equiv=refresh content=3;URL='form_input.php'>";
}

?>