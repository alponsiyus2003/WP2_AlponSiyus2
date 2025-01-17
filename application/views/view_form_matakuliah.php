<html>

<head>
    <title>Form Input Matakuliah</title>
    <link rel="stylesheet" type="text/css" 
        href="http://localhost/pustaka-booking/assets/style_v_matakuliah.css">
</head>

<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode" class="<?= form_error('kode') ? 'invalid' : '' ?>"
                            placeholder="isikan data" value="<?= set_value('kode') ?>" />
                        <div class="invalid-feedback"><?= form_error('kode') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" class="<?= form_error('nama') ? 'invalid' : '' ?>"
                            placeholder="isikan data" value="<?= set_value('nama') ?>" />
                        <div class="invalid-feedback"><?= form_error('nama') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <div class="invalid-feedback"><?= form_error('sks') ?></div>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
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
    </center>
</body>

</html>