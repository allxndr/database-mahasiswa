<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from unsia_it403 where nim= '$_GET[kode]'");
$data=mysqli_fetch_array($sql)

?>

<h3> Input Data Mahasiswa Unsia IT403 </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> Nama </td>
        <td> <input type="text" name="nama" value= "<?php echo $data['nama']; ?>"> </td>
    </tr>
    <tr>
        <td> Nim </td>
        <td> <input type="text" name="nim" value= "<?php echo $data['nim']; ?>"> </td>
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
        <td> <input type="text" name="kelas" value= "<?php echo $data['kelas']; ?>"> </td>
    </tr>
    <tr>
        <td> Program Studi </td>
        <td> <input type="text" name="program_studi" value= "<?php echo $data['program_studi']; ?>"> </td>
    </tr>
    <tr>
        <td> Angkatan </td>
        <td> <input type="text" name="angkatan" value= "<?php echo $data['angkatan']; ?>"> </td>
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
mysqli_query($koneksi, "update unsia_it403 set  
nama = '$_POST[nama]',
jenis_kelamin = '$_POST[jenis_kelamin]',
kelas = '$_POST[kelas]',
program_studi = '$_POST[program_studi]',
angkatan = '$_POST[angkatan]'
where nim = '$_GET[kode]'");


echo "Data Mahasiswa Telah Diperbarui";
echo "<meta http-equiv=refresh content=4;URL='data-mahasiswa.php'>";

}

?>