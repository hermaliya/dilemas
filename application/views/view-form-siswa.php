<html>

<head>
    <title>Form Input Siswa</title>
</head>

<body>
        <form action="<?= base_url('Datasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <select name="kelas" id="kelas">
                            <option value="-">Pilih kelas</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgllahir" id="tgllahir">
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tmptlahir" id="tmptlahir">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                    <textarea rows="10" cols="45" name="alamat" id="alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td>
                    <input type="radio" name="jnskel" value="Laki-Laki"> Laki - Laki
                    <input type="radio" name="jnskel" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="-">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
</body>

</html>