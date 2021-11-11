<?php
 include "connect.php";
 $num=$_GET['num'];
 $query=mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE num='$num'") or die(mysqli_error($koneksi));
 $result=mysqli_fetch_array($query);
?>
    <form method="POST" id="formEdit">
        <table>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="hidden" name="num" id="num" required="" value="<?php echo $result['num']; ?>" />
                    <input type="number" name="nim" id="nim" required="" value="<?php echo $result['nim']; ?>" />
                </td>
            </tr>    
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" id="nama" required="" value="<?php echo $result['nama']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                    <select name="prodi" id="prodi" required="">
                        <option disabled="" selected="">-Pilih-</option>
                        <option value="Teknik Informatika" <?php if($result['prodi']=="Teknik Informatika") echo "selected"; ?>>Teknik Informatika</option>
                        <option value="Teknik Elektro" <?php if($result['prodi']=="Teknik Elektro") echo "selected"; ?>>Teknik Elektro</option>
                        <option value="Teknik Telekomunikasi" <?php if($result['prodi']=="Teknik Telekomunikasi") echo "selected"; ?>>Teknik Telekomunikasi</option>
                        <option value="Teknik Fisika" <?php if($result['prodi']=="Teknik Fisika") echo "selected"; ?>>Teknik Fisika</option>
                        <option value="Teknik Biomedis" <?php if($result['prodi']=="Teknik Biomedis") echo "selected"; ?>>Teknik Biomedis</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Angkatan</td>
                <td>
                    <input type="number" name="angkatan" id="angkatan" required="" value="<?php echo $result['angkatan']; ?>" />     
                </td>
        </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="simpan" value="Simpan" />
                    <button type="button" id="cancelButton">Batal</button>
                </td>
            </tr>
        </table>
    </form>