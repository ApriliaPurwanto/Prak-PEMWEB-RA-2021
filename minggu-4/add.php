<form method="POST" id="formAdd">
    <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="number" name="nim" id="nim" required="" />
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" id="nama" required="" />
            </td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>
            <select name="prodi">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                <option value="Teknik Fisika">Teknik Fisika</option>
                <option value="Teknik Biomedis">Teknik Biomedis</option>
                <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
            </select>
            </td>
        </tr>
        </tr>
        <tr>
            <td>Angkatan</td>
            <td>
                <input type="number" name="angkatan" id="angkatan" required="">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" id="simpan" value="Save" />
                <button id="cancelButton" type="button">Cancel</button>
            </td>
        </tr>
    </table>
</form>